<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */

     public function index()
     {
      echo '<h1>Welcome to  admin Dashboard</h1>';
     }
}
