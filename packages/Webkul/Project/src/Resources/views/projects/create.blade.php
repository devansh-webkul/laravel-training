@extends('project::projects.master')

@section('body')
<form action="{{ route('projects.store') }}" method="POST">
    @csrf
<div>
    <label for="">{{  __('project::app.name') }}</label> <br>

    <input type="text" name="name"> 
</div>

<br>

<div>
    
    <label for="">{{  __('project::app.description') }}</label>  <br>

    <input type="text" name="description"> 
</div>

<br>
    
    <div>
        <input type="Submit" value="{{  __('project::app.submit') }}">
    </div>

</form>
@section('body')
