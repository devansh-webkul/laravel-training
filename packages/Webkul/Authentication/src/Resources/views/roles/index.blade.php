@extends('authentication::layouts.master')

@section('body')
    <table>
        <thead>
            <td>ID</td>
            <td>Name</td>
        </thead>

        <tbody>
            @foreach ($roles as $role)
            
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>
                        <a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('roles.create')}}"><button type="button" >ADD</button></a>

@endsection