<?php

namespace App\Repositories;

use App\Models\Capture;
use InfyOm\Generator\Common\BaseRepository;

class CaptureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'value',
        'status',
        'captured_at',
        'device_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Capture::class;
    }
}
