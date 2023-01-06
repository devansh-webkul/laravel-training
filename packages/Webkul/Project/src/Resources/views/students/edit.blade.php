<html>
    <body>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div>
            <label for="">{{ __('project::app.name') }}</label>

            <input type="text" name="name" value="{{ $student->name }}">
        </div>   

        <div>
            <label for="">{{ __('project::app.description') }}</label>

            <input type="text" name="discription" value="{{ $student->discription }}">
        </div>

        <div>
            <input type="submit" value="{{ __('project::app.submit') }}">
        </div>
    </form>
    </body>
</html>