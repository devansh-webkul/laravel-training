<HTML>
    <head>
        <link rel="stylesheet" href="{{ asset('vendor/webkul/project/assets/css/create.css') }}">
    </head>
    <body>
    
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
                <label for="">{{ __('project::app.roll_number') }}:</label>
    
                <input type="text" name="roll_number" placeholder="xyz">
            </div>  


            <div>
                <label for="">{{ __('project::app.class') }}:</label>
    
                <input type="text" name="class" placeholder="xyz">
            </div>  
         
    
            <div>
                <input type="submit" value="{{ __('project::app.submit') }}">
            </div>
        </form>
    </body>
    </html>