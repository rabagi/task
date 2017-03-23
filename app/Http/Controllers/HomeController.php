<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        return \View::make('tasks', [
            'tasks' =>Task::orderBy('created_at', 'asc')->get()
        ]);
        
    }
    
    public function store(){
        
        $this->validate(request(), [
            'name' => ['required', 'max:200']
        ]);
        
        $data = request()->all();
        
        Task::create($data);
        
        return Redirect()->to('home');
    }
    
    
    public function create(){
        
        return \view('tasks');
        
    }
    
    
    
    
    
}
