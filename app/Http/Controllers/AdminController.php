<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
use App\models\Tabs;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function show(string $route, Admin $admin)
    {
        return view('admin.'.$route, [
            'tabs' => Tabs::all(),
        ]);
    }
}
