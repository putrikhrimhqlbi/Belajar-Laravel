<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create()
    {
        return view('admin.lecturer.create');
    }
    public` function store(Request $request)
    {
        dd($request);
    }
}
