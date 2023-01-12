@extends('layouts.master')

@section('body')
    <table>
        <thead>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Created At</td>
            <td>Updated At</td>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>
                        <a href="{{route('projects.show', $project->id)}}">{{ $project->name }}</a>
                    </td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->created_at}}</td>
                    <td>{{$project->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection