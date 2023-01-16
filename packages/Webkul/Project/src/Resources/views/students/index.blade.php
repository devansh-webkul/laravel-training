
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
            <table-row-component students='@json($students)'></table-row-component>
           
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
               
                            <tbody >
                                <tr v-for="student in students" >
                                    <td v-text="student.id"></td>
                                    <td v-text="student.name"></td>
                                    <td v-text="student.discription"></td>
                                    <td v-text="student.roll_number"></td>
                                    <td v-text="student.class"></td>
                                
                                    <td>
                                        <a :href='getRoute(student)'>
                                            <i class="fa fa-edit"></i>
                                        </a>
            
                                    </td>
                                    
                                    <td>
                                        <div>
                                            {{-- <a :href='getRouteDelete(student)'>
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                            <button @click="getRouteDelete(student)"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>        
                        </tbody>
                    </table>
                    <a href="students/create">
                        <button>{{ __('project::app.add') }}</button>
                    </a>
                </div>
            </script>
            
            <script>

                    Vue.component('table-row-component', {
                        template: "#table-row-template",
                        props: ['students'],
                        data() {
                            return {
                                students: [],   
                                             
                            };
                        },
                        mounted(){
                            this.students = JSON.parse(this.students);
                            
                        }, 
                        methods: {
                            getRoute(student){

                                var url = '{{ route("students.edit", ":id") }}';
                                return url.replace(':id', student.id);
                            },
                            getRouteDelete(student){
                                
                                var url = '{{ route("students.destroy", ":id") }}';
            
                                // return url.replace(':id', student.id);
                                window.location.href = url.replace(':id', student.id);
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
 