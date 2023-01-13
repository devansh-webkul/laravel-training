<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            table{
                border: 2px solid;
                color:solid black; 
                margin: 10px 10px 10px 10px;
                width: 98%;
                box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                text-align: center;
            }

            h3{
                text-align: center;
                text-decoration-color: rgb(15, 15, 15);
                background: rgb(231, 222, 222);
            }

            thead {
                color: maroon;
                background-color: silver;
            }

        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <h3>CRUD OPERATION</h3>
        <div id="main">
            <table-row-component :students="{{json_encode($students)}}" ></table-row-component>
        </div>  
        
        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

        <script type="text/x-template" id="table-row-template">
            <div>
                <table border=5px>
                    <thead>
                        <td> {{ __('project::app.id') }}</td>
                        <td> {{ __('project::app.name') }}</td>
                        <td> {{ __('project::app.description') }}</td>
                        <td> {{ __('project::app.class') }}</td>
                        <td> {{ __('project::app.roll_number') }}</td>
                        <td> {{ __('project::app.edit') }}</td>
                        <td> {{ __('project::app.delete') }}</td>
                    </thead>
            
                    <tbody>
                        <tr v-for="student in students" :key="student.id">
                            <td>@{{student.id}}</td>
                            <td>@{{student.name}}</td>
                            <td>@{{student.discription}}</td>
                            <td>@{{student.class}}</td>
                            <td>@{{student.roll_number}}</td>
                            
                            <td>
                                <a :href='fetchRoute(student)'>
                                <i class="fa fa-edit"></i>
                                </a>
                            </td>
{{-- 
                            <td>
                                <div>
                                    <button :onclick='fetchDeleteRoute(student)'><i class="fa fa-trash"></i></button>
                                </div>
                            </td> --}}

                            <td>
                            <form method="POST" :action=" fetchDeleteRoute(student)">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a href="students/create">
                    <button class="btn">{{ __('project::app.add') }}</button>
                </a>

                {{-- <div v-text="username" @click="alertUsername"></div>

                <div v-text="className" @click="alertClassName"></div>
                
                <div v-text="rollNumber" @click="alertRollNumber"></div>

                <input type="hidden" name="reference_number" :value="referenceNumber">

                <button @click="generateReferenceNumber">Generate Number</button> --}}
                
            </div>
        </script>

        
        
        <script>
            Vue.component('table-row-component', {
                template: "#table-row-template",

                props: ['username', 'className', 'rollNumber', 'students'],

                data() {
                    return {
                        referenceNumber: 1,
                    };
                },

                methods: {
                    fetchRoute(data){
                        var url = '{{ route("students.edit", ":id") }}';
                        return url.replace(':id', data.id);
                    },

                    fetchDeleteRoute(data){
                    
                        var url = '{{ route("students.destroy", ":id") }}';
    
                        return url.replace(':id', data.id);
                    },

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

        

        <style scoped>
            .btn{
            border: 2px solid #afa04c;
            width: 20%;
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            text-align: center;
            margin-left: 10px !important ;
            }         
        </style>

        <script>
            new Vue({
            el: "#main",
        });
        </script>
 
    </body>
</html> 

