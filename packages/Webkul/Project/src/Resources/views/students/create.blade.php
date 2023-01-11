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
    </head>
    <body>
    
        <form action="{{ route('students.store') }}" method="POST">
    
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