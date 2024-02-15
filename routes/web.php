<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route :: get('/', [EmployeeController :: class, 'index'])
    -> name('users.index');

Route :: get('/users/create', [EmployeeController :: class, 'create'])
    -> name('users.create');
Route :: post('/users', [EmployeeController :: class, 'store'])
    -> name('users.store');

Route :: get('/users/{id}', [EmployeeController :: class, 'show'])
    -> name('users.show');
