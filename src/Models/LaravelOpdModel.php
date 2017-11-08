<?php namespace Bantenprov\LaravelOpd\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The LaravelOpdModel class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpdModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'laravel_opd';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
