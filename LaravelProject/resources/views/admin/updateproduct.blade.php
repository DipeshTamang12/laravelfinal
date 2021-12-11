<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.css')
    <style type="text/css">
    .title {

        color: black;
        padding-top: 25px;
        font-size: 25px;

    }

    label {
        display: inline-block;
        width: 200px;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div align="center">

                <h1 class="title">Update Product</h1>

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">X</button>

                    {{session()->get('message')}}

                </div>

                @endif

                <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div style="padding:15px">
                        <label>Product title</label>
                        <input type="text" name="title" value="{{$data->title}}" requied="">
                    </div>


                    <div style="padding:15px">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$data->price}}" requied="">
                    </div>

                    <div style="padding:15px">
                        <label>Description</label>
                        <input type="text" name="description" value="{{$data->description}}" requied="">
                    </div>


                    <div style="padding:15px">
                        <label>Quantity</label>
                        <input type="text" name="quantity" value="{{$data->quantity}}" requied="">
                    </div>

                    <div style="padding:15px">
                        <label>Old Image</label>
                        <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
                    </div>


                    <div style="padding:15px">
                        <label>Change the image.</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding:15px">
                        <input type="Submit">
                    </div>
                </form>


            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('admin.scripts')
</body>

</html>