@extends('project::projects.master')

@section('body')
<form action="{{ route('projects.update', $project->id) }}" method="POST">
    @csrf

    @method('PUT')

<div>
    <label for="">Name</label> <br>

    <input type="text" name="name" value="{{ $project->name }}"> 
</div>

<br>

<div>
    
    <label for="">Description</label>  <br>

    <input type="text" name="description" value="{{ $project->description }}"> 
</div>

<br>
    
    <div>
        <button type="submit"> Edit </button>
    </div>

</form>
@section('body')
