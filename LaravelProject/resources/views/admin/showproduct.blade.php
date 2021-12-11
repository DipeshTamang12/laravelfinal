<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.css')
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
        <div style="padding-bottom:30px" class="content-wrapper">
            <div align="center">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>

                    {{session()->get('message')}}

                </div>
                @endif

                <table>
                    <tr style="background-color:grey;">
                        <td style="padding:20px;">Title</td>
                        <td style="padding:20px;">Description</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Image</td>
                        <td style="padding:20px;">Update</td>
                        <td style="padding:20px;">Delete</td>

                    </tr>
                    @foreach($data as $product)
                    <tr align="center" style="background-color:lightblue;">
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        <td><img height="100" width="100" src="/productimage/{{$product->image}}"></td>
                        <td>
                            <a class="btn btn-primary" href="{{url('updateproduct',$product->id)}}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
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