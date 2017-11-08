<?php 
namespace Bantenprov\LaravelOpd\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
/**
 * The LaravelOpdModel class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class Opd extends Model
{
    use SoftDeletes;
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'opd';
    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
