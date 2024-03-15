@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="form-container">
        <form action="{{ route('vacancy.store') }}" method="POST">
            @csrf

            <select name="company_id" id="">
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>

            <textarea name="description" placeholder="Descripción"></textarea> 
            <select name="salary_id" id="">
                @foreach ( $salaries as $salary)
                    <option value="{{ $salary->id }}">{{ $salary->salarios }}</option>
                @endforeach
            </select>
            <input type="text" name="contract_id" placeholder="Contrato">
            <input type="text" name="task_id" placeholder="Funciones">
            <input type="text" name="job_position_id" placeholder="Cargo">
            <input type="text" name="ocupation_id" placeholder="Ocupación">
            <input type="date" name="end_date" value="2022-01-01" min="2022-01-01" max="2024-12-31">
            <input type="number" name="available_jobs" placeholder="Puestos disponibles">
            <input type="submit" name="send">
        </form>
    </div>
@endsection