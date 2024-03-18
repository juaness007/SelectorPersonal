@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')

<nav id="secondary-nav">
    <ul>
        <li><a href="{{ route('task.create') }}">Crear Función</a></li>
        <li><a  href="{{ route('job_position.create') }}">Crear Cargo</a></li>
        <li><a  href="{{ route('salary.create') }}">Crear Salario</a></li>
        <li><a  href="{{ route('contract.create') }}">Crear Contrato</a></li>
        <li><a  href="{{ route('economic_activity.create') }}">Crear Actividad Economica</a></li>
    </ul>
</nav>

<div class="form-container">
    <form action="{{route('company.store')}}" method="POST">
        @csrf
        <input type="text" name="NIT" placeholder="NIT" value="{{old('NIT')}}">
        @error('NIT')
        <span>{{$message}}</span>
        @enderror
        <input type="text" name="name" placeholder="Razon social" value="{{old('name')}}">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <input type="text" name="legalRepresentative" placeholder="Representante legal" value="{{old('legalRepresentative')}}">
        @error('legalRepresentative')
        <span>{{$message}}</span>
        @enderror
        <input type="text" name="email" placeholder="Correo empresarial" value="{{old('email')}}">
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <select name="municipality_code" id="">
            @forelse($municipalities as $municipality)
            <option value="{{$municipality->id}}">{{$municipality->name}}</option>
            @empty
            <option>No hay municipios</option>
            @endforelse
        </select>
        <select name="economic_activity_code" id="">
            @forelse($economic_activities as $economic_activity)
            <option value="{{$economic_activity->id}}">{{$economic_activity->name}}</option>
            @empty
            <option>No hay actividades economicas</option>
            @endforelse
        </select>
        <input type="submit" name="send">
    </form>
</div>



@endsection
