<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function contact()
	{
		return view('contact');
	}

	public function services()
	{
		return view('services');
	}

	public function about_us()
	{
		return view('about_us');
	}

	// Services route control
	public function automation()
	{
		return view('services.automation');
	}
    
}
