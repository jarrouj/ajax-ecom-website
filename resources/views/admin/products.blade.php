<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="admin/assets/css/styles.min.css" />
    <link rel="shortcut icon" type="image/png" href="admin/assets/images/logos/favicon.png" />


    <style>
        h1{
            position: relative;
            left: 25rem
        }
    </style>
</head>
<body>



  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="admin/assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        @include('admin.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="admin/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{url('dashboard')}}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>

                    <a href="{{url('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container">
        <h1>Categories</h1>
        <br><br>
        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
        <br><br>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Discount Price</th>
                    <th>Image</th>


                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                        <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data" id="productForm" name="productForm" class="form-horizontal">
@csrf
                       <input type="hidden" name="product_id" id="product_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Details</label>
                            <div class="col-sm-12">
                                <input type="text" id="details" name="details" required="" placeholder="Enter Details" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-12">
                                <select class="text_color" id="catagory" name="catagory" required>
                                    <option value="" selected="">Add a Catagory here</option>

                                    @foreach($category as $r)
                                    <option value="{{$r->name}}">{{$r->name}}</option>
                                    @endforeach
                                   </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-12">
                                <input type="number" id="price" name="price" required="" placeholder="Enter Price" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Quantity</label>
                            <div class="col-sm-12">
                                <input type="numver" id="qty" name="qty" required="" placeholder="Enter Quantity" class="form-control">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Discount Price</label>
                            <div class="col-sm-12">
                                <input type="number" id="discount_price" name="discount_price" required="" placeholder="Enter Discount Price" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-12">
                                <input type="file" id="image" name="image" required="" placeholder="Enter image" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                         </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>

    <script type="text/javascript">
      $(function () {

        /*------------------------------------------
         --------------------------------------------
         Pass Header Token
         --------------------------------------------
         --------------------------------------------*/
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });

        /*------------------------------------------
        --------------------------------------------
        Render DataTable
        --------------------------------------------
        --------------------------------------------*/
     var table = $('.data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('products-ajax-crud.index') }}",
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'name', name: 'name'},
        {data: 'details', name: 'details'},
        {data: 'catagory', name: 'catagory'},
        {data: 'price', name: 'price'},
        {data: 'qty', name: 'qty'},
        {data: 'discount_price', name: 'discount_price'},
        {
            data: 'image',
            name: 'image',
            render: function(data, type, full, meta) {
                return '<img src="/images/'+ data + '" width="50"/>';
            }
        },
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});


        /*------------------------------------------
        --------------------------------------------
        Click to Button
        --------------------------------------------
        --------------------------------------------*/
        $('#createNewProduct').click(function () {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Create New Product");
            $('#ajaxModel').modal('show');
        });

        /*------------------------------------------
        --------------------------------------------
        Click to Edit Button
        --------------------------------------------
        --------------------------------------------*/
        $('body').on('click', '.editProduct', function () {
          var product_id = $(this).data('id');
          $.get("{{ route('products-ajax-crud.index') }}" +'/' + product_id +'/edit', function (data) {
              $('#modelHeading').html("Edit Product");
              $('#saveBtn').val("edit-user");
              $('#ajaxModel').modal('show');
              $('#product_id').val(data.id);
              $('#name').val(data.name);
              $('#detail').val(data.detail);
              $('#catagory').val(data.catagory);
              $('#price').val(data.price);
              $('#qty').val(data.qty);
              $('#discount_price').val(data.discount_price);
              $('#image').val(data.image);


          })
        });

        /*------------------------------------------
        --------------------------------------------
        Create Product Code
        --------------------------------------------
        --------------------------------------------*/
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
              data: $('#productForm').serialize(),
              url: "{{ route('products-ajax-crud.store') }}",
              type: "POST",
              dataType: 'json',
              success: function (data) {

                  $('#productForm').trigger("reset");
                  $('#ajaxModel').modal('hide');
                  table.draw();

              },
              error: function (data) {
                  console.log('Error:', data);
                  $('#saveBtn').html('Save Changes');
              }
          });
        });

        /*------------------------------------------
        --------------------------------------------
        Delete Product Code
        --------------------------------------------
        --------------------------------------------*/
        $('body').on('click', '.deleteProduct', function () {

            var product_id = $(this).data("id");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "{{ route('products-ajax-crud.store') }}"+'/'+product_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

      });
    </script>

  </div>
  <script src="admin/assets/js/sidebarmenu.js"></script>
  <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
