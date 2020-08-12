<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogAboutRequest;
use App\Http\Requests\BlogIndexRequest;
use App\Http\Requests\BlogSubscribeRequest;
use Illuminate\Support\Facades\Request;

class UserFormController extends Controller
{

	public function submitIndex(BlogIndexRequest $request)
	{
		return view('thank');
	}
	public function submitSubscribe(BlogSubscribeRequest $request)
	{
		return view('thank');
	}
	public function submitAbout(BlogAboutRequest $request)
	{
		return view('thank');
	}
}
