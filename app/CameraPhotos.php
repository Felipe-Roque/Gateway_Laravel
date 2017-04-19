<?php

namespace Meusite;

use Illuminate\Database\Eloquent\Model;

class CameraPhotos extends Model
{
    public $table = 'cameraphotos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [

    	'name',
        'name',
    	'path',
    	'extension',
    	'full_file_path',
    	'captured_at'
    ];
}
