<?php
namespace Bantenprov\LaravelOpd\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\LaravelOpd\Facades\LaravelOpd;
use Bantenprov\LaravelOpd\Models\LaravelOpdModel;

/**
 * The LaravelOpdController class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LaravelOpdController extends Controller
{
    public function demo()
    {
        return LaravelOpd::welcome();
    }

    public function index()
    {
        $opds = LaravelOpdModel::all();

        $nodes = LaravelOpdModel::get()->toTree();

        $traverse = function ($categories, $prefix = '-') use (&$traverse) {
            foreach ($categories as $category) {
                echo $prefix.' '.$category->kunker.' - '.$category->name.'<br>';

                $traverse($category->children, $prefix.'-');
            }
        };

        $traverse($nodes);

        return view('unit_kerja.index',compact('opds'));

    }

    public function createRoot()
    {

        return view('unit_kerja.create-root');
    }

    public function createChild()
    {
        $unit_kerjas = LaravelOpdModel::all();

        return view('unit_kerja.create-child',compact('unit_kerjas'));
    }

    public function addChild($id)
    {
        $unit_kerja = LaravelOpdModel::where('id',$id)->first();

        return view('unit_kerja.add-child',compact('unit_kerja'));
    }

    public function storeRoot(Request $request)
    {
        $check_root = LaravelOpdModel::where('id',$request->root);

        if($check_root->get()->isEmpty())
        {

            $unit_kerja = LaravelOpdModel::create([
                'kunker' => $request->kunker,
                'kunker_sinjab' => '',
                'kunker_simral' => '',
                'kunker_sinjab' => '',
                'name' => $request->name,
                'levelunker' => $request->levelunker,
                'njab' => $request->njab,
                'npej' => $request->npej
            ]);
        }
        else
        {
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function storeChild(Request $request)
    {
        $check_root = LaravelOpdModel::where('id',$request->root);

            $check_root->first()->children()->create([
                'kunker' => $request->c_kunker,
                'kunker_simral' => '',
                'kunker_sinjab' => '',
                'name' => $request->c_name,
                'levelunker' => $request->c_levelunker,
<<<<<<< HEAD
                'njab' => $request->c_njab,
                'npej' => $request->c_npej
            ]);        
=======
            ]);
>>>>>>> add sinjab

        return redirect()->back();
    }
}