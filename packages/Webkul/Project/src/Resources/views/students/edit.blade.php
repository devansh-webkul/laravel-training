<html>
    <body>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div>
            <label for="">Name</label>

            <input type="text" name="name" value="{{ $student->name }}">
        </div>   

        <div>
            <label for="">Description</label>

            <input type="text" name="discription" value="{{ $student->discription }}">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
    </body>
</html>