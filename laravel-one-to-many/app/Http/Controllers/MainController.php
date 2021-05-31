<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
    public function home()
    {
        // $employees = Employee::all();
        $employees = Employee::with('tasks')->get();

        return view('pages.home', compact('employees'));
    }
}
