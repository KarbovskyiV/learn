<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::with('user')->get();

        return view('tasks.index', compact('tasks'));
    }
}
