<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Support\Facades\Artisan;
use App\Models\Banner;
use App\Models\Testimonial;




class MainController extends Controller
{
    public function index()
    {

        return view('frontend.layouts.index');
    }
}
