@extends('project::layouts.master')

@section('body')
<div>
    <div>
        ID: {{ $project->id }}
    </div>
    
    <div>
        Name: {{ $project->name }}
    </div>
    
    <div>
        Desciption: {{ $project->description }}
    </div>
    <div>
        Created at : {{$project->created_at}}
    </div>
    <div>
        Updated at:{{$project->updated_at}}
    </div>
</div>

<form id="projectDelete" action="{{ route('projects.destroy', $project->id) }}" method="POST">
    @csrf
    
    @method('DELETE')
</form>

<div>
    <a href="{{ route('projects.edit', $project->id) }}">Edit</a>

    <a href="#" onclick="document.getElementById('projectDelete').submit();">Delete</a>
</div>

@endsection