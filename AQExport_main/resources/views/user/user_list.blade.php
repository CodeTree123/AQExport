@include('include.header')

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css
">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="">Employee Info List</h4>
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_employee">Add Employee</button>
        </div>
        
        <div class="table-responsive">
        <table class="table table-striped table-bordered text-center product_user_view"  id="employee_list" >
            <thead>
                <tr class="bg-dark text-white">
                    <th >#</th>
                    <th >Employee ID</th>
                    <th >NAME</th>
                    <th >Position</th>
                    <th >Email</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key=>$user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$user->emp_id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-success edit_employee" role="button" value="{{$user->id}}">Edit</button>
                        <button class="btn btn-sm btn-success delete-user" role="button" value="{{$user->id}}">Delete</button>
                        <!-- <a class="btn btn-sm btn-success" href="#" role="button">Delete</a> -->
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <!-- add employee modal -->
    <div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('add_employee')}}" method="post">
             @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="employee_id" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employee_id" name="employee_id" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emp_name" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="emp_name" name="emp_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Select Position</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="role" id="role">
                            <option selected>Open this select menu</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="emp_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emp_email" name="emp_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emp_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="emp_password" name="emp_password" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- update employee modal -->
    <div class="modal fade" id="update_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('update_employee')}}" method="post">
             @csrf
             @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="c_employee_id" name="c_employee_id" value="">
                    <div class="mb-3">
                        <label for="employee_id_edit" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employee_id_edit" name="employee_id_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="employee_name_edit" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="employee_name_edit" name="employee_name_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="role_edit" class="form-label">Select Position</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="role_edit" id="role_edit" value="">
                            <option selected>Open this select menu</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="employee_email_edit" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="employee_email_edit" name="employee_email_edit" aria-describedby="emailHelp" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>

        <!-- Modal For Delete User -->
        <div class="modal fade " id="del-User" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm ">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete User Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_user_list')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-user-id" name="deletingId">
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Yes,Delete</button>
                        <!-- Modal Footer end -->
                        </div>
                    </form>
                </div>
                <!-- Modal Body end -->
            </div>
        </div>
    </div>
 <!-- Modal end -->

    
   @include('include.footer')
    
    <script>
        
        $(document).ready(function(){
            
            $(document).on('click', '.edit_employee',function(){
                var employee_id = $(this).val();
                // console.log(employee_id);
                $("#update_employee").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/employee_edit/"+employee_id,
                    success: function(response){
                        // console.log(response.ei);
                        $('#c_employee_id').val(employee_id);
                        $('#employee_id_edit').val(response.ei.emp_id);
                        $('#employee_name_edit').val(response.ei.name);
                        $('#role_edit').val(response.ei.role_id);
                        $('#employee_email_edit').val(response.ei.email);
                    }
                });
            });

            $(document).on('click', '.delete-user',function(){
                var deleteUserId = $(this).val();
                // alert(deletePatientId);
                $("#del-User").modal('show');
                $('#del-user-id').val(deleteUserId);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#employee_list').DataTable();
        });
    </script> 

</body>
</html>