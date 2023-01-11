<HTML>
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
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
    
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
    
            <div>
                <label for="">{{ __('project::app.name') }}:</label>
    
                <input type="text" name="name" placeholder="xyz">
            </div> 
            
              
            <div>
                <label for="">{{ __('project::app.description') }}:</label>
    
                <input type="text" name="discription" placeholder=" write here">
            </div>

            <div>
                <label for="">{{ __('project::app.class') }}:</label>
    
                <input type="text" name="class" placeholder=" write here">
            </div>
            
            <div>
                <label for="">{{ __('project::app.roll_number') }}:</label>
    
                <input type="text" name="roll_number" placeholder="xyz">
            </div>  

            <div>
                <input type="submit" value="{{ __('project::app.submit') }}">
            </div>
        </form>
    </body>
    </html>