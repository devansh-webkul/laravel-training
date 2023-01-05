@extends('authentication::layouts.master')

@section('body')
<div>
    <div>
        ID: {{ $role->id }}
    </div>
    
    <div>
        Name: {{ $role->name }}
    </div>
    
    <div>
        Desciption: {{ $role->description }}
    </div>
</div>

<form id="roleDeleteForm" action="{{ route('roles.destroy', $role->id) }}" method="POST">
    @csrf
    
    @method('DELETE')
</form>

<div>
    <a href="{{ route('roles.edit', $role->id) }}">Edit</a>

    <a href="#" onclick="document.getElementById('roleDeleteForm').submit();">Delete</a>
</div>

@endsection