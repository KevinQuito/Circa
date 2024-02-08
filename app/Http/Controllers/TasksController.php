<?php

namespace App\Http\Controllers;

use App\Models\Lte;
use App\Models\User;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    // Show all tasks
    public function index(){
        // $info = Tasks::latest()->filter(request(['id']))->get();
        // dd($info);
        return view("tasks.index", [
            'information' => Tasks::latest()->filter(request(['id', 'task', 'department', 'priority', 'status', 'search']))->paginate(10),
            'totalinprogress' => Tasks::all()->where('status', '=', 'In Progress'),
            'totalonhold' => Tasks::all()->where('status', '=', 'On Hold'),
            'totalcomplete' => Tasks::all()->where('status', '=', 'Complete'),
        ]);
    }
    public function dashboard(){
        // $info = Tasks::latest()->filter(request(['id']))->get();
        // dd($info);
        return view("dashboard", [
            'totaltasks' => Tasks::all(),
            'totalorders' => Lte::all(),
            'totalusers' => User::latest()->filter(request(['id', 'name', 'email', 'search']))->paginate(10)
        ]);
    }

    // Show single task
    public function show(Tasks $tasks){
        return view('tasks.show', [
            'information' => $tasks
        ]);
    }

    // Show Create Form
    public function create(){
        return view('tasks.create');
    }

    // Store Task Data
    public function store(Request $request){
        $formFields = $request->validate([
            'description' => 'required',
            'task' => 'required',
            'priority' => 'nullable',
            'department' => 'nullable',
            'responsible' => 'nullable',
            'status' => 'required',
        ]);

        if($request->hasFile('attachments')){
            $formFields['attachments'] = $request->file('attachments')->store('attachments', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Tasks::create($formFields);
        
        // Flash Message below
        // session()->flash('message', 'Task was successful!');
        return redirect('/orderissues')->with('message', 'Ticket Added Successfully!');
    }

    // Show Edit Form
    public function edit(Tasks $tasks){
        return view('tasks.edit', ['information' => $tasks]);
    }

    // Update Task Data
    public function update(Request $request, Tasks $tasks){
        $formFields = $request->validate([
            'description' => 'required',
            'task' => 'required',
            'priority' => 'nullable',
            'department' => 'nullable',
            'responsible' => 'nullable',
            'status' => 'required',
        ]);

        if($request->hasFile('attachments')){
            $formFields['attachments'] = $request->file('attachments')->store('attachments', 'public');
        }
        
        $tasks->update($formFields);
        
        // Flash Message below
        // session()->flash('message', 'Task was successful!');
        return redirect('/orderissues')->with('message', 'Ticket Updated Successfully!');
    }

    // Delete Task
    public function destroy(Tasks $tasks){
        $tasks->delete();

        return redirect('/orderissues')->with('message', 'Ticket Deleted Successfully!');
    }

}