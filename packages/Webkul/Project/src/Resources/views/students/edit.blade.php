<html>
   <head>

    <link rel="stylesheet" href="{{ asset('vendor/webkul/project/assets/css/edit.css') }}">

    </head> 

    <body>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div>
            <label for="">{{ __('project::app.name') }}:</label>

            <input type="text" name="name" value="{{ $student->name }}">
        </div>   

        <div>
            <label for="">{{ __('project::app.description') }}:</label>

            <input type="text" name="discription" value="{{ $student->discription }}">
        </div>

        <div>
            <label for="">{{ __('project::app.roll_number') }}:</label>

            <input type="text" name="roll_number" value="{{ $student->roll_number }}">
        </div>  

        <div>
            <label for="">{{ __('project::app.class') }}:</label>

            <input type="text" name="class" value="{{ $student->class }}">
        </div>  
        <div>
            <input type="submit" value="{{ __('project::app.submit') }}">
        </div>
    </form>
    </body>
</html>