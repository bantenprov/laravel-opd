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

        $opds = LaravelOpdModel::orderBy('kunker','asc')->paginate(10);        

        /* $nodes = LaravelOpdModel::get()->toTree();

        $traverse = function ($categories, $prefix = '-') use (&$traverse) {
            foreach ($categories as $category) {
                echo $prefix.' '.$category->kunker.' - '.$category->name.'<br>';

                $traverse($category->children, $prefix.'-');
            }
        };

        $traverse($nodes); */


        return view('laravel-opd::index',compact('opds'));
        
    }

    public function createRoot()
    {

        return view('laravel-opd::create-root');
    }

    public function createChild()
    {
        $unit_kerjas = LaravelOpdModel::all();

        return view('laravel-opd::create-child',compact('unit_kerjas'));
    }

    public function addChild($id)
    {
        $unit_kerja = LaravelOpdModel::where('id',$id)->first();

        return view('laravel-opd::add-child',compact('unit_kerja'));
    }

    public function storeRoot(Request $request)
    {
        $request->validate([
            'kunker'            => 'required',
            'leveunker'         => 'required',
            'name'              => 'required',
            'njab'              => 'required',
            'npej'              => 'required',
        ]);

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
        $request->validate([
            'kunker'            => 'required',
            'name'              => 'required',
            'njab'              => 'required',
            'npej'              => 'required',
        ]);

        $check_root = LaravelOpdModel::where('id',$request->root);

            $check_root->first()->children()->create([
                'kunker'            => $request->c_kunker,
                'kunker_simral'     => '',
                'kunker_sinjab'     => '',
                'name'              => $request->c_name,
                'levelunker'        => $check_root->first()->levelunker + 1,
                'njab'              => $request->c_njab,
                'npej'              => $request->c_npej
            ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $opd = LaravelOpdModel::find($id);        

        return view('laravel-opd::edit', compact('opd'));
    }

    public function update($id, Request $request)
    {        
        $request->validate([
            'kunker'            => 'required',
            'name'              => 'required',
            /* 'kunker_sinjab'     => 'required',
            // 'kunker_simral'     => 'required', */
            // 'levelunker'        => 'required',
            'njab'              => 'required',
            'npej'              => 'required',
        ]);
        
        LaravelOpdModel::find($id)->update([
            'kunker'            => $request->kunker ? $request->kunker : '',
            'name'              => $request->name  ? $request->name : '',
            /* 'kunker_sinjab'     => $request->kunker_sinjab,
            'kunker_simral'     => $request->kunker_simral', */
            // 'levelunker'        => $request->levelunker  ? $request->levelunker : '',
            'njab'              => $request->njab  ? $request->njab : '',
            'npej'              => $request->npej  ? $request->npej : '',
        ]);

        $request->session()->flash('message', 'Successfully modified the opd!');

        return redirect()->route('opd.index');
    }
}