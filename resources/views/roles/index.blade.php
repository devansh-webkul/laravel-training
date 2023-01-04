@extends('layouts.master')

@section('body')
    <table>
        <thead>
            <td>ID</td>
            <td>Name</td>
        </thead>

        <tbody>
            @foreach ($roles as $role)<form action="{{ route('projects.store') }}" method="POST">
                @csrf
            <div>
                <label for="">Name</label> <br>
            
                <input type="text" name="name"> 
            </div>
            
            <br>
            
            <div>
                
                <label for="">Description</label>  <br>
            
                <input type="text" name="description"> 
            </div>
            
            <br>
                
                <div>
                    <input type="submit">
                </div>
            
            </form>
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