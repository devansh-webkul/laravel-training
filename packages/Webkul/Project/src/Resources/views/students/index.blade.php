<html>
    <head><U>CRUD OPERATION</head></U>
    <body>
    <table border="3px">
        <thead>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Edit</td>
            <td>Delete</td>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->discription }}</td>
                    <td><a href="{{route('students.edit',  $student->id)}}">click</a></td>
                    <td>
                        <form id="DeleteForm" action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            
                            @method('DELETE')
                        </form>
                    
                    <div>
                        <a href="#" onclick="document.getElementById('DeleteForm').submit();">Bin</a>
                    </div>

                </tr>
            @endforeach
        </tbody>
    </table>
        <a href="students/create">
            <button>Add</button>
        </a>
    </body>
</html>