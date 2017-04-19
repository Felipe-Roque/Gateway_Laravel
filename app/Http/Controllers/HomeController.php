<?php

namespace App\Http\Controllers;

use App\Repositories\CameraRepository;
use App\Repositories\CaptureRepository;
use App\Repositories\DeviceRepository;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @var  CameraRepository */
    private $cameraRepository;

    /** @var  CaptureRepository */
    private $captureRepository;

    /** @var  DeviceRepository */
    private $deviceRepository;

    /** @var  ImageRepository */
    private $imageRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CameraRepository $cameraRepo, ImageRepository $imageRepo, CaptureRepository $captureRepo, DeviceRepository $deviceRepo)
    {
        $this->middleware('auth');
        $this->cameraRepository = $cameraRepo;
        $this->captureRepository = $captureRepo;
        $this->deviceRepository = $deviceRepo;
        $this->imageRepository = $imageRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cameras = $this->cameraRepository->all();
        $devices = $this->deviceRepository->all();

        return view('home')->with(['cameras' => $cameras, 'devices' => $devices]);
    }
}
