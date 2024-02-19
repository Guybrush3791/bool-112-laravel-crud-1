@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        [
            {{ $employee -> id }}
        ] EDIT EMPLOYEE
    </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form
        action="{{ route('users.update', $employee -> id) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label for="firstname">Nome</label>
        <input type="text" name="firstname" id="firstname" value="{{ $employee -> firstname }}">
        <br>
        @error('firstname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" id="lastname" value="{{ $employee -> lastname }}">
        <br>
        <label for="fiscal_code">Codice Fiscale</label>
        <input type="text" name="fiscal_code" id="fiscal_code" value="{{ $employee -> fiscal_code }}">
        <br>
        <label for="salary">Salario</label>
        <input type="text" name="salary" id="salary" value="{{ $employee -> salary }}">
        <br>
        <input type="submit" value="UPDATE">
    </form>
@endsection
