@extends('layouts.app')

@section('estilos')
<link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="form-container">
        <form action="{{ route('vacancy.store') }}" method="POST">
            @csrf

        <select name="company_id" id="">
            @forelse($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
            @empty
            <option>No hay empresas</option>
            @endforelse
        </select>
        @error('company_id')
        <span>{{$message}}</span>
        @enderror


        <textarea name="description" placeholder="Descripcion"></textarea>
        @error('description')
        <span>{{$message}}</span>
        @enderror

        <select name="salary_id" id="">
            @forelse($salaries as $salary)
            <option value="{{$salary->id}}">{{$salary->name}}</option>
            @empty
            <option>No hay salarios</option>
            @endforelse
        </select>
        @error('salary_id')
        <span>{{$message}}</span>
        @enderror

        <select name="contract_id" id="">
            @forelse($contracts as $contract)
            <option value="{{$contract->id}}">{{$contract->name}}</option>
            @empty
            <option>No hay contratos</option>
            @endforelse
        </select>
        @error('contract_id')
        <span>{{$message}}</span>
        @enderror

        <input type="text" name="task_id" placeholder="Funciones">
        @error('task_id')
        <span>{{$message}}</span>
        @enderror

        <select name="job_position_id" id="">
            @forelse($job_positions as $job_position)
            <option value="{{$job_position->id}}">{{$job_position->name}}</option>
            @empty
            <option>No hay cargos</option>
            @endforelse
        </select>
        @error('job_position_id')
        <span>{{$message}}</span>
        @enderror

        <select name="ocupation_id" id="">
            @forelse($ocupations as $ocupation)
            <option value="{{$ocupation->id}}">{{$ocupation->name}}</option>
            @empty
            <option>No hay ocuapciones</option>
            @endforelse
        </select>
        @error('ocupation_id')
        <span>{{$message}}</span>
        @enderror



        <input type="date" name="end_date" value="2022-01-01" min="2022-01-01" max="2024-12-31">
        @error('end_date')
        <span>{{$message}}</span>
        @enderror
        <input type="number" name="avaliable_jobs" placeholder="Puestos disponibles">
        @error('avaliable_jobs')
        <span>{{$message}}</span>
        @enderror
        <input type="submit" name="send">
    </form>

    <form action="{{ route('vacancy.index') }}">

</div>

@endsection