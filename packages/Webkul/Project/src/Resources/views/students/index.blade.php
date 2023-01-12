
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('vendor/webkul/project/assets/css/index.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <h3>CRUD OPERATION</h3>
        
        
    </head>
    <body>
        <div id="main">
            
            <table-row-component username="Devansh" class-name="9" roll-number="12"></table-row-component>
        </div>  
        
        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

        <script type="text/x-template" id="table-row-template">

      <div>

        <table border=5px>
            <thead>
                <td> {{ __('project::app.id') }}</td>
                <td> {{ __('project::app.name') }}</td>
                <td> {{ __('project::app.description') }}</td>
                <td> {{ __('project::app.roll_number') }}</td>
                <td> {{ __('project::app.class') }}</td>
                <td> {{ __('project::app.edit') }}</td>
                <td> {{ __('project::app.delete') }}</td>
            </thead>
    
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->discription }}</td>
                        <td>{{ $student->roll_number }}</td>
                        <td>div{{ $student->class }}</td>
                        <td><a href="{{route('students.edit',  $student->id)}}"><i class="fa fa-edit"></i></a> </td>
                        <td>
                            <form id="studentDeleteForm{{$student->id}}" action="{{ route('students.destroy', $student->id) }}" method="POST">
    
                                @csrf
                                
                                @method('DELETE')
                            </form>
                        
                        <div>
                            <a href="#" onclick="document.getElementById('studentDeleteForm{{$student->id}}').submit();"><i class="fa fa-trash"></i></a>
                        </div>
    
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="students/create">
            <button>{{ __('project::app.add') }}</button>
        </a>

      </div>

            {{-- <div>
                <div v-text="username" @click="alertUsername"></div>

                <div v-text="className" @click="alertClassName"></div>
                
                <div v-text="rollNumber" @click="alertRollNumber"></div>

                <input type="hidden" name="reference_number" :value="referenceNumber">

                <button @click="generateReferenceNumber">Generate Number</button>
            </div> --}}
        </script>
        <script>
            Vue.component('table-row-component', {
                template: "#table-row-template",

                props: ['name', 'description', 'rollNumber', 'class' ],

                data() {
                    return {
                        referenceNumber: 1,
                    };
                },

                methods: {
                    alertUsername() {
                        alert(this.username);
                    },

                    alertClassName() {
                        alert(this.className);
                    },

                    alertRollNumber() {
                        alert(this.rollNumber);
                    },

                    generateReferenceNumber() {
                        this.referenceNumber = this.username + this.className + this.rollNumber;
                    },
                },
            });
        </script>

        <script>
            new Vue({
                el: "#main",
            });
        </script>
    </body>
</html> 
 