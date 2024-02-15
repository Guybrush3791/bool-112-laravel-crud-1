@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Employees: {{ count($employees) }}</h1>
    <a href="{{ route('users.create') }}">CREATE</a>
    <br><br>
    <ul>
        @foreach ($employees as $employee)
        <li>
            <a href="
                {{ route('users.show', $employee -> id) }}
            ">
                {{ $employee -> firstname }}
                {{ $employee -> lastname }}
            </a>
        </li>
        @endforeach
    </ul>
@endsection
