<?php

namespace App\Repositories;

use App\Models\Camera;
use InfyOm\Generator\Common\BaseRepository;

class CameraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'model'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Camera::class;
    }
}
