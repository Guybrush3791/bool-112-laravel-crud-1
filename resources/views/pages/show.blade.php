@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        [
            {{ $employee -> id }}
        ]
        Employee:
        {{ $employee -> firstname }}
        {{ $employee -> lastname }}
    </h1>
    <h2>Codice fiscale: {{ $employee -> fiscal_code }}</h2>
    <h2>Salario: {{ $employee -> salary }}</h2>
@endsection
