<?php 

namespace Bantenprov\LaravelOpd;


use Illuminate\Support\Facades\Config;
use Bantenprov\LaravelOpd\Models\Opd;
/**
 * The LaravelOpd class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpd
{
    protected $opd_model;

    public function __construct()
    {        
        $this->opd_model = new Opd();
    }

    public function welcome()
    {
        return 'Welcome to Bantenprov\LaravelOpd package';
    }

    public function getAll()
    {        
        return $this->opd_model->all();
    }

    public function getByName($name)
    {                
        $opd = $this->opd_model->where('name',$name)->first();
        return (is_null($opd)) ? $this->returnErrorIfNoResult() : $opd;
    }   

    public function getName()
    {
        
        $opd_names = [];
        foreach($this->opd_model->all() as $key => $opd_name)
        {
            array_push($opd_names,(object)['name'=>$opd_name->name]);
        }
        
        return $opd_names;
    }

    public function store($data = [])
    {
        $this->opd_model->create($data);
    }
    

    private function returnErrorIfNoResult()
    {
        return "No result";
    }
}
