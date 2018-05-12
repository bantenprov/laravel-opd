<?php 

namespace Bantenprov\LaravelOpd\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Emadadly\LaravelUuid\Uuids;

/**
 * The LaravelOpdModel class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LaravelOpdModel extends Model
{
    use NodeTrait;
    use Uuids;
    

    protected $table = "opd";
    protected $fillable = [
            'kunker',
            'name',
            'kunker_sinjab',
            'kunker_simral',
            'levelunker',
            'njab',
            'npej'
    ];
    protected $hidden = [];
    public $incrementing = false;
}

