@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        NEW EMPLOYEE
    </h1>
    <form
        action="{{ route('users.store') }}"
        method="POST"
    >

        @csrf
        @method('POST')

        <label for="firstname">Nome</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" id="lastname">
        <br>
        <label for="fiscal_code">Codice Fiscale</label>
        <input type="text" name="fiscal_code" id="fiscal_code">
        <br>
        <label for="salary">Salario</label>
        <input type="text" name="salary" id="salary">
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
