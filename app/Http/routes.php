<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

Route::group(['middleware' => ['web', 'auth']], function () {
    /**
     * Show Task Dashboard
     */
    /*Route::get('/', function () {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });
*/
    /**
     * Add New Task
   
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    });

    /**
     * Delete Task
     
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    });
*/

    Route::resource('film', 'FilmController', ['except' => ['index', 'show']]);
    Route::post('/comment/create', 'FilmController@createComment')->name('comment.create');
    
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'FilmController@index');
    Route::get('/film/{id}', 'FilmController@show')->name('film.show');
});
