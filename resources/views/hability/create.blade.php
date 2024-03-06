@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('hability.store')}}" method="POST">
    @csrf


    <select name="ocupation_id" id="">
    @foreach ($ocupations as $ocupation)
    <option value="{{$ocupation->id}}">{{$ocupation->ocupation_id}}</option>
    @endforeach

</select>
<input type="text" name="name", placeholder="Descripción">

<input type="submit" name="send">
</form>
</div>

@endsection