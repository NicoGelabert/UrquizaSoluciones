<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use App\Models\Service;
use App\Models\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $slider_images = SliderImage::all();
        $services = Service::all();
        $projects = Project::query()
            ->where('published', '=', 1)
            ->orderBy('id', 'desc')
            ->paginate(4);
            return view('welcome', [
            'projects' => $projects, 'services' => $services, 'slider_images' => $slider_images
        ]);
    }
}
