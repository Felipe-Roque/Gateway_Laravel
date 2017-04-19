<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Capture
 * @package App\Models
 * @version April 19, 2017, 7:49 pm UTC
 */
class Capture extends Model
{
    use SoftDeletes;

    public $table = 'captures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'value',
        'status',
        'captured_at',
        'device_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'value' => 'string',
        'status' => 'string',
        'device_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function device()
    {
        return $this->belongsTo(\App\Models\Device::class);
    }
}
