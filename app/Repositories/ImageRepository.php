<?php

namespace App\Repositories;

use App\Models\Image;
use InfyOm\Generator\Common\BaseRepository;

class ImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'path',
        'extension',
        'full_file_path',
        'captured_at',
        'camera_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Image::class;
    }
}
