<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function show(){
        $tasks = Task::all();
        dd($tasks);
    }
}
