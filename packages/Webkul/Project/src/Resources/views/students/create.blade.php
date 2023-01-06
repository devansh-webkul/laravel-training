<HTML>
    <body>
    
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
    
            <div>
                <label for="">{{ __('project::app.name') }}</label>
    
                <input type="text" name="name">
            </div>   
           
            <div>
                <label for="">{{ __('project::app.description') }}</label>
    
                <input type="text" name="discription">
            </div>
    
            <div>
                <input type="submit" value="{{ __('project::app.submit') }}">
            </div>
        </form>
    </body>
    </html>