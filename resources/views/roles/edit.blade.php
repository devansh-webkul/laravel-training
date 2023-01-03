@extends('layouts.master')

@section('body')
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div>
            <label for="">Name</label>

            <input type="text" name="name" value="{{ $role->name }}">
        </div>   

        <div>
            <label for="">Description</label>

            <input type="text" name="description" value="{{ $role->description }}">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
@endsection