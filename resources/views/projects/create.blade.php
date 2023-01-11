@extends ('layouts.master')

@section('body')
<form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <!-- <div>
            <label for="">Id</label>

            <input type="text" name="name">
        </div>  -->
        
        <div>
            <label for="">Name</label>

            <input type="text" name="name">
        </div>


        <div>
            <label for="">Description</label>

            <input type="text" name="description">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
@endsection
