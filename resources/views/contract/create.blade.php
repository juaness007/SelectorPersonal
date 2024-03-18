@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('contract.store')}}" method="POST">
    @csrf

<input type="text" name="name", placeholder="Nombre">
<input type="text" name="description", placeholder="Descripcion">

<input type="submit" name="send">
</form>
</div>

@endsection