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
Route :: delete('/users/{id}', [EmployeeController :: class, 'destroy'])
    -> name('users.destroy');

Route :: get('/users/{id}/edit', [EmployeeController :: class, 'edit'])
    -> name('users.edit');
Route :: put('/users/{id}', [EmployeeController :: class, 'update'])
    -> name('users.update');
