@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('salary.store')}}" method="POST">
    @csrf


<input type="text" name="name", placeholder="Nombre">

<input type="submit" name="send">
</form>
</div>

@endsection