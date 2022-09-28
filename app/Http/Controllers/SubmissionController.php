<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function files()
    {
        return view('files');
    }

    public function upload()
    {
        return view('upload');
    }
}
