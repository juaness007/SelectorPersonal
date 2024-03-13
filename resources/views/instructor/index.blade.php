@extends('layouts.app')

@section('estilos')
    <link href="{{ asset('css/nuevo.css') }}" rel="stylesheet">
@endsection
@section('content')
<h3>instructors Table</h3>
    <table border:3px solid purple>
        <tr>
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Doc type</th>
                <th>Doc num</th>
                <th>Last name</th>
                <th>Status</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Editar</th>
            </thead>
            </tr>
        @forelse($instructors as $instructor)
            <tr>
                <td>{{$instructor->user->id}} </td>  
                <td>{{$instructor->user->name}}</td>
                <td>{{$instructor->user->doc_type}}</td>
                <td>{{$instructor->user->doc_num}}</td>
                <td>{{$instructor->user->last_name}}</td>
                <td>{{$instructor->selection_status}}</td>
                <td>{{$instructor->user->email}}</td>
            <!-- <td>{{$instructor->user->role->role_name}}</td>-->
            <td>{{$instructor->points}}</td>
            <td>
                <form action="{{ route('instructor.destroy', $instructor) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
        </form>
        <form method="GET" action="{{route('instructor.edit', $instructor->id) }}">
                <input type="submit" value="Editar "/>
            </form>
        </td>
                
            </tr>

           
        @empty
            <h6>No data available</h6>
        @endforelse
    </table>


@endsection