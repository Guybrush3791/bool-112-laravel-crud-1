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
            <a
                class="mx-3"
                href="{{ route('users.edit', $employee -> id) }}"
                >
                EDIT
            </a>
            <form
                class="d-inline-block"
                action="{{ route('users.destroy', $employee -> id) }}"
                method="POST">

                @csrf
                @method('DELETE')

                <input type="submit" value="X">
            </form>
        </li>
        @endforeach
    </ul>
@endsection
