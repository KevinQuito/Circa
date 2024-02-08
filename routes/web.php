<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LTEController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all tasks
// show - Show single task
// create - Show form to create new task
// store - Store new task
// edit - Show form to edit task
// update - Update task
// destroy - Delete task
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [TasksController::class, 'dashboard'])->middleware('auth');

// For all tasks
Route::get('/orderissues', [TasksController::class, 'index'])->middleware('auth');

// Route::get('/orderissues/{id}', function ($id) {
//     $tasks = Tasks::find($id);
//     if($tasks){
//         return view('tasks', [
//             'information' => Tasks::find($id)
//         ]);
//     }else{
//         abort('404');
//     }
// });

// Show Create Form
Route::get('/orderissues/create', [TasksController::class, 'create'])->middleware('auth');

// Store Task Data
Route::post('/orderissues', [TasksController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/orderissues/{tasks}/edit', [TasksController::class,'edit'])->middleware('auth');

// Update Tasks
Route::put('/orderissues/{tasks}', [TasksController::class,'update'])->middleware('auth');

// Delete Tasks
Route::delete('/orderissues/{tasks}', [TasksController::class,'destroy'])->middleware('auth');

// Route Model Binding example below for single Tasks
Route::get('/orderissues/{tasks}', [TasksController::class, 'show'])->middleware('auth');

// Show Register//Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log Out User
Route::post('logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/orderform', function () {
    return view("orderform");
})->middleware('auth');

// LTE Orders
Route::get('/lte', [LteController::class, 'index'])->middleware('auth');

// Create Lte 
Route::get('/lte/create', [LteController::class, 'create'])->middleware('auth');

// Store Task Data
Route::post('/lte', [LteController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/lte/{lte}/edit', [LteController::class,'edit'])->middleware('auth');

// Update Lte
Route::put('/lte/{lte}', [LteController::class,'update'])->middleware('auth');

// Delete Lte
Route::delete('/lte/{lte}', [LteController::class,'destroy'])->middleware('auth');

// Route Model Binding example below for single Lte
Route::get('/lte/{lte}', [LteController::class, 'show'])->middleware('auth');

Route::get('/broadband', function () {
    return view("broadband");
})->middleware('auth');

Route::get('/voip', function () {
    return view("voip");
})->middleware('auth');

Route::get('/analog', function () {
    return view("analog");
})->middleware('auth');

// Route::get('/posts/{id}', function ($id) {
//     ddd($id);
//     // return $id;
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');  // Condition where id only accepts numbers

// Route::get('/search', function (Request $request) {
//     // dd($request);
//     //http://projecttracker.test/search?name=Kevin&city=CherryHill
//     dd($request->name . ' ' . $request->city);
// });