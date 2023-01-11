@extends('project::layouts.master')

@section('body')
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div>
            <label for="">ID</label>

            <input type="text" name="id" value="{{ $project->id }}">
        </div>   
        <div>
            <label for="">Name</label>

            <input type="text" name="name" value="{{ $project->name }}">
        </div>   

        <div>
            <label for="">Description</label>

            <input type="text" name="description" value="{{ $project->description }}">
        </div>

        <div>
            <label for="">Created at</label>

            <input type="text" name="created_at" value="{{ $project->created_at }}">
        </div>   

        <div>
            <label for="">Updated at</label>

            <input type="text" name="updated_at" value="{{ $project->updated_at }}">
        </div>   

        <div>
            <input type="submit">
        </div>
    </form>
@endsection