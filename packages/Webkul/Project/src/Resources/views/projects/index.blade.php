@extends('project::projects.master')

@section('body')

<h2>{{  __('project::app.employee') }}</h2>
<table  cellspacing="1" cellpadding="2" border="5px solid black" width="50%">
    <thead>

        <th>{{  __('project::app.name') }}</th>
        <th>{{  __('project::app.description') }}</th>
        <th colspan="2">{{  __('project::app.action') }}</th>
    </thead>
    
    <tbody>
        

        @foreach ($projects as $project)
            <tr>

                <td style="text-align: center">{{ $project->name }}</td>
                <td style="text-align: center">{{ $project->description }}</td>
                <td style="text-align: center">
                    <a href="{{ route('projects.edit', $project->id) }}">
                    <i class="material-icons">edit</i> </a>  
                </td>

                <form id="projectDeleteForm{{ $project->id}}"  action="{{ route('projects.destroy', $project->id) }}" method="POST">
                    @csrf
                    
                    @method('DELETE')
                   
                </form>

                <td style="text-align: center">
                    <a href="#" onclick="document.getElementById('projectDeleteForm{{ $project->id}}').submit();">
                    <i class="material-icons">delete</i></a>
                    
                </td>
            
            </tr>
        @endforeach
    </tbody>
</table>
<br>

<a href="{{ route('projects.create')}}"><button type="button" >{{  __('project::app.add') }}</button></a>  
@endsection

