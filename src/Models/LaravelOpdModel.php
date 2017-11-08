<?php namespace Bantenprov\LaravelOpd\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * The LaravelOpdModel class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LaravelOpdModel extends Model
{
    use NodeTrait;
    
    protected $table = "ref_unkerjas";
    protected $fillable = ['kunker','name','kunker_simral','levelunker'];
    protected $hidden = [];
}

