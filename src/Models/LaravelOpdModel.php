<?php 

namespace Bantenprov\LaravelOpd\Models;

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
    

    protected $table = "opd";

    protected $fillable = [
            'uuid',
            'kunker',
            'name',
            'kunker_sinjab',
            'kunker_simral',
            'levelunker',
            'njab',
            'npej'
    ];
    protected $hidden = [];
    
}

