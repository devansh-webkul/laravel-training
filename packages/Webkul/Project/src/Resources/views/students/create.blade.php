<HTML>
    <body>
    
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
    
            <div>
                <label for="">Name</label>
    
                <input type="text" name="name">
            </div>   
           
            <div>
                <label for="">Description</label>
    
                <input type="text" name="discription">
            </div>
    
            <div>
                <input type="submit">
            </div>
        </form>
    </body>
    </html>