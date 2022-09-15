
    @include('include.header') 
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css
">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h4 class="mb-3">Products List</h4>
            <!-- @if($user->role_id == 1)
            <a class="btn btn-sm btn-success" href="{{route('product_add_form')}}" role="button">Add Product</a>
            @endif --> 
        </div>

        <div class="table-responsive">
            <table id="example" class="table table-striped text-center" style="width:100%">
                <thead>        
                    <tr class="bg-dark text-white">

                        <th style="min-width: 10px;" >#</th>
                        <th style="min-width: 110px;">Buyer Name</th>
                        <th style="min-width: 110px;">Contact Parson</th>
                        <th >Country</th>
                        <th >Order Number</th>
                        <th >Product Photo</th>
                        <th >Product Name</th>
                        <th >Descriptions</th>
                        <th >Quantity</th>
                        <th >Size</th>
                        <th >Factory Name</th>
                        <!-- <th >Current Progress</th>
                        <th >Estimate Delivery</th>
                        <th >Actual Delivery</th> -->
                        <th >Remark</th>
                        <th >Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key=>$product)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->buyer_contact_name}}</td>
                        <td>{{$product->buyer_country}}</td>
                        <td>{{$product->order_no}}</td>
                        <td style="min-width: 150px;">
                            <button type="button" class="btn preview_product_img" value="{{$product->id}}">
                                <img src="{{asset('uploads/product/'.$product->image)}}" alt="" class="w-100">
                            </button>
                        </td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->factory_name}}</td>
                        <!-- <td>
                            @if($product->shipment_start != null)
                                Shipment
                            @elseif($product->sewing_start != null)
                                Sewing
                            @elseif($product->cutting_start != null)
                                Cutting
                            @elseif($product->dyeing_start != null)
                                Dyeing
                            @elseif($product->knitting_start != null)
                                Knitting
                            @elseif($product->yarn_start != null)
                                Yarn
                            @elseif($product->sample_received != null)
                                Sample work
                            @elseif($product->lab_received !=null)
                                lab Work
                            @else
                                Start Soon
                        @endif
                        </td>
                        <td>{{$product->shipment_date}}</td>
                        <td>1</td>  -->
                        <td>{{$product->remark}}</td>
                        <td>
                            <!-- @if($user->role_id == 1)
                            <a class="btn btn-sm btn-success" href="{{route('product_edit_form',[$product->id])}}" role="button">Edit</a>
                            <a class="btn btn-sm btn-success" href="{{route('product_all_details',[$user->id,$product->id])}}" role="button">Details</a>
                            @else
                            <a class="btn btn-sm btn-success" href="{{route('product_all_details',[$user->id,$product->id])}}" role="button">Details</a>
                            @endif -->
                            
                            <p class="py-2 px-3 bg-success rounded text-white">Done</p>

                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Product Image view -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content img_preview_content">
                <div class="modal-header img_preview_header justify-content-end py-0">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body pt-0" id="test">
                    <!-- <p>hello</p> -->
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const data_table_btn = document.getElementById("example_previous");   
        // console.log(data_table_btn);
    </script>
    <script>
        $(document).ready(function(){

            $(document).on('click', '.preview_product_img',function(){
                var id = $(this).val();
                // alert(id);
                $('#exampleModal').modal('show');
                $.ajax({
                    type:"GET",
                    url: "/product_img/"+id,
                    success: function(response){
                        console.log(response.image);
                        $("#test").html("");
                        $("#test").append('\
                            <img src="/uploads/product/'+response.image+'" alt="" class="product_img">\
                        ');
                    }
                });
            });
        });
    </script>
   


   @include('include.footer')
   
