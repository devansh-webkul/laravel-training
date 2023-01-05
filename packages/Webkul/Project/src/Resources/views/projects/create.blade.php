@extends('project::projects.master')

@section('body')
<form action="{{ route('projects.store') }}" method="POST">
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
@section('body')
