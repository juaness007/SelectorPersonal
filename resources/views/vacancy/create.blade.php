@extends('layouts.app')

@section('estilos')
<link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="form-container">
        <form action="{{ route('vacancy.store') }}" method="POST">
            @csrf

        <select name="" id="">
            @forelse($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
            @empty
            <option>No hay empresas</option>
            @endforelse
        </select>

        <textarea name="description" placeholder="Descripcion"></textarea>

        <select name="" id="">
            @forelse($salaries as $salary)
            <option value="{{$salary->id}}">{{$salary->name}}</option>
            @empty
            <option>No hay salarios</option>
            @endforelse
        </select>

        <select name="" id="">
            @forelse($contracts as $contract)
            <option value="{{$contract->id}}">{{$contract->name}}</option>
            @empty
            <option>No hay contratos</option>
            @endforelse
        </select>
        <input type="text" name="task_id" placeholder="Funciones">
        <select name="" id="">
            @forelse($contracts as $contract)
            <option value="{{$contract->id}}">{{$contract->name}}</option>
            @empty
            <option>No hay contratos</option>
            @endforelse
        </select>
        <input type="text" name="ocupation_id" placeholder="Ocupacion">
        <input type="date" name="end_date" value="2022-01-01" min="2022-01-01" max="2024-12-31">
        <input type="number" name="avaliable_jobs" placeholder="Puestos disponibles">
        <input type="submit" name="send">
    </form>

    <form action="{{ route('vacancy.index') }}">

</div>

@endsection