@extends('layouts.app')
@section('estilos')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('content')
<h3>companies Table</h3>
    @livewire('company-show')
    @livewireScripts


@endsection