<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabAdminController extends Controller
{
    public function index() {
        return view('lab_template.index');
    }
}