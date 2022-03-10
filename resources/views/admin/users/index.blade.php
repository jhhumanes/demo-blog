@extends('adminlte::page')

@section('title', 'jose:humanes')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
