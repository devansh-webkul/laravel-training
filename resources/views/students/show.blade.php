<html>
    <body>
<div>
    <div>
        ID: {{ $student->id }}
    </div>
    
    <div>
        Name: {{ $student->name }}
    </div>
    
    <div>
        Desciption: {{ $student->discription }}
    </div>
</div>

<form id="studentDeleteForm" action="{{ route('students.destroy', $student->id) }}" method="POST">
    @csrf
    
    @method('DELETE')
</form>

<div>
    <a href="{{ route('student.edit', $student->id) }}">Edit</a>

    <a href="#" onclick="document.getElementById('studentDeleteForm').submit();">Delete</a>
</div>

    </body>
</html>
