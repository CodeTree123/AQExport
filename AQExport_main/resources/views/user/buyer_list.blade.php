
@include('include.header')

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css
">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h4 class="">Buyer Info List</h4>
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_buyer">Add Buyer</button>
        </div>
        <table class="table table-striped table-bordered text-center product_user_view"  id="buyer_list" >
            <thead>
            <tr class="bg-dark text-white">

                    <th >#</th>
                    <th >Buyer NAME</th>
                    <th >CONTACT Parson</th>
                    <th >COUNTRY</th>
                    <th >Email</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buyers as $key=>$buyer)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$buyer->name}}</td>
                    <td>{{$buyer->buyer_contact_name}}</td>
                    <td>{{$buyer->buyer_country}}</td>
                    <td>{{$buyer->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-success buyer_edit" role="button" value="{{$buyer->id}}">Edit</button>
                        <button class="btn btn-sm btn-success delete-buyer" role="button" value="{{$buyer->id}}">Delete</button>
                        <!-- <a class="btn btn-sm btn-success" href="#" role="button">Delete
                            <i class="fa-solid fa-trash"></i>
                        </a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- add buyer modal -->
    <div class="modal fade" id="add_buyer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Buyer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('add_buyer')}}" method="post">
             @csrf
                <input type="hidden" name="buyer_role" value="5">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="buyer_name" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control" id="buyer_name" name="buyer_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="contact_name" class="form-label">Contact Name</label>
                        <input type="text" class="form-control" id="contact_name" name="contact_name" aria-describedby="emailHelp">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="contact_id" class="form-label">Select Contact Parson</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="contact_id" id="contact_id">
                            <option selected>Open this select menu</option>
                            @foreach($contacts as $contact)
                            <option value="{{$contact->id}}">{{$contact->name}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="buyer_country" class="form-label">Buyer Country</label>
                        <input type="text" class="form-control" id="buyer_country" name="buyer_country" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="buyer_email" name="buyer_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="buyer_password" name="buyer_password" aria-describedby="emailHelp">
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
    <!-- Update buyer modal -->
    <div class="modal fade" id="update_buyer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">update Buyer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('update_buyer')}}" method="post">
             @csrf
             @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="buyer_id" name="buyer_id">
                    <input type="hidden" name="buyer_role" value="5">
                    <div class="mb-3">
                        <label for="buyer_name_edit" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control" id="buyer_name_edit" name="buyer_name_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="contact_name_edit" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control" id="contact_name_edit" name="contact_name_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="contact_person_edit" class="form-label">Select Contact Parson</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="contact_person_edit" id="contact_person_edit_id" value="">
                            <option selected>Open this select menu</option>
                            @foreach($contacts as $contact)
                            <option value="{{$contact->id}}">{{$contact->name}}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="buyer_country_edit" class="form-label">Buyer Country</label>
                        <input type="text" class="form-control" id="buyer_country_edit" name="buyer_country_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_email_edit" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="buyer_email_edit" name="buyer_email_edit" aria-describedby="emailHelp" value="">
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

    <!-- Modal For Delete Buyer -->
    <div class="modal fade " id="del-Buyer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm ">
            <div class="modal-content">
                <!-- Modal Header & Close btn -->
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Buyer Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Header & Close btn end -->
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{route('delete_buyer_list')}}" method="POST" >
                        @csrf
                        @method('delete')
                        <div class="mb-3 text-center">
                            <h5 class="text-danger">Are You Sure to Delete This information?</h5>
                        </div>
                        <input type="hidden" id="del-buyer-id" name="deletingId">
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

            $(document).on('click', '.buyer_edit',function(){
                var buyer_id = $(this).val();
                // console.log(buyer_id);
                $("#update_buyer").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/buyer_edit/"+buyer_id,
                    success: function(response){
                        // console.log(response.bi);
                        $('#buyer_id').val(buyer_id);
                        $('#buyer_name_edit').val(response.bi.name);
                        // $('#contact_person_edit_id').val(response.bi.buyer_contact_name);
                        $('#contact_name_edit').val(response.bi.buyer_contact_name);
                        $('#buyer_country_edit').val(response.bi.buyer_country);
                        $('#buyer_email_edit').val(response.bi.email);
                    }
                });
            });

            $(document).on('click', '.delete-buyer',function(){
                var deleteBuyerId = $(this).val();
                // alert(deletePatientId);
                $("#del-Buyer").modal('show');
                $('#del-buyer-id').val(deleteBuyerId);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#buyer_list').DataTable();
        });
    </script>
 

</body>
</html>