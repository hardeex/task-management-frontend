<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function projects()
    {
        return view('tasks.projects');
    }
    

    public function team()
    {
        return view('tasks.team');

    }


    public function reports()
    {
        return view('tasks.reports');
    }

    public function calendar()
    {
        return view('tasks.calendar');
    }
    
    public function tasks()
    {
        return view('tasks.tasks');
    }


    public function createProject()
    {
        return view('projects.create');
    }

// End of the class    
}

