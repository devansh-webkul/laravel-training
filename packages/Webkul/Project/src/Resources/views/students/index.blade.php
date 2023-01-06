
<!DOCTYPE html>
<html lang="en">
    <head><U>CRUD OPERATION</head></U>
    <body>
        
    <table border ="3px">
        <thead>
            <td> {{ __('project::app.id') }}</td>
            <td> {{ __('project::app.name') }}</td>
            <td> {{ __('project::app.description') }}</td>
            <td> {{ __('project::app.edit') }}</td>
            <td> {{ __('project::app.delete') }}</td>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->discription }}</td>
                    <td><a href="{{route('students.edit',  $student->id)}}">{{ __('project::app.click') }}</a></td>
                    <td>
                        <form id="studentDeleteForm{{$student->id}}" action="{{ route('students.destroy', $student->id) }}" method="POST">

                            @csrf
                            
                            @method('DELETE')
                        </form>
                    
                    <div>
                        <a href="#" onclick="document.getElementById('studentDeleteForm{{$student->id}}').submit();">{{ __('project::app.bin') }}</a>
                    </div>

                </tr>
            @endforeach
        </tbody>
    </table>
        <a href="students/create">
            <button>{{ __('project::app.add') }}</button>
        </a>
      
    </body>
</html> 
 