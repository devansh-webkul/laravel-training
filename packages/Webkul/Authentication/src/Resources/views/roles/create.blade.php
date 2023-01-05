@extends('authentication::layouts.master')

@section('body')
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf

        <div>
            <label for="">Name</label>

            <input type="text" name="name">
        </div>   

        <div>
            <label for="">Description</label>

            <input type="text" name="description">
        </div>

        <div>
            <input type="submit">
        </div>

    </form>
@endsection