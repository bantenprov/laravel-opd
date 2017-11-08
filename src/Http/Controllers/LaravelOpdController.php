<?php namespace Bantenprov\LaravelOpd\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bantenprov\LaravelOpd\Facades\LaravelOpd;
use Bantenprov\LaravelOpd\Models\LaravelOpdModel;
use Bantenprov\LaravelOpd\Models\Opd;

/**
 * The LaravelOpdController class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpdController extends Controller
{ 

    public function demo()
    {
        return LaravelOpd::welcome();
    }
    
}
