@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="form-container">
<form action="{{route('candidate.store')}}" method="POST">
    @csrf


 <select name="user_id" id="">
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->user_name}}</option>
    @endforeach

</select>
<select name="selection_status">
    <option value="being studied">BEING STUDIED</option>
    <option value="selected">SELECTED</option>
</select>
<input type="text" name="points", placeholder="Puntaje">


<input type="submit" name="send">
</form>

<form action="{{route('candidate.index')}}">
    <input type="submit" value="Visualizar Candidatos"/>
    </form>
</div>

@endsection