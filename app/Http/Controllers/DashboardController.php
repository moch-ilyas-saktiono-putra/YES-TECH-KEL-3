<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if($role == null)
        {
            return redirect()->to('admin');
        } 
        else 
        {
            return redirect()->to('kontributor');
        }
    }
}
