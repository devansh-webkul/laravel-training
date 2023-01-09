<html>
   <head>
        <style>
           input[type=text]{
                background-color: antiquewhite;
                width: 40%;
                padding: 12px 20px;
                margin: 6px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;

             }

             input[type=submit] {
                width: 40%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                }

                input[type=submit]:hover {
                background-color: #8fe293;
                }

        </style>

    
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
            <input type="submit" value="{{ __('project::app.submit') }}">
        </div>
    </form>
    </body>
</html>