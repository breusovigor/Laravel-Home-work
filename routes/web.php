<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('home')->group(function () {
    Route::get('/', function () {
        $pageData = [
            'posts' => [
                [
                    'title' => 'Featured post 1',
                    'description' => 'This is a wider card',
                ],
                [
                    'title' => 'Featured post 2',
                    'description' => 'This is America',
                ]
            ]
        ];
        return view('page', $pageData);
    });

    Route::get('/world', function () {
        $pageData = [
            'posts' => [
                [
                    'title' => 'Featured post 1',
                    'description' => 'This is a wider card',
                ],
                [
                    'title' => 'Featured post 2',
                    'description' => 'This is America',
                ]
            ]
        ];
        return view('world', $pageData);
    });
});

Route::resource('projects', 'ProjectsController')->names([
    'update' => 'project.update',
    'destroy' => 'ptoject.destroy',
]);