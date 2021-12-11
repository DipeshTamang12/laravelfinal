<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('user.css')
    <title>Dipesh Jewelry</title>



</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        @include('user.navbar')





        @foreach($pic as $gallery)
        <div class="col-md-4">
            <div class="product-item">
                <a href="#"><img height="300" width="150" src="/galleryimage/{{$gallery->image}}" alt=""></a>

            </div>
        </div>
        @endforeach($pic as $gallery)

        <div class="d-flex justify-content-center">
            {!! $pic->links() !!}

        </div>

        <div class="container-ml">
            @if(Route::has('login'))
            @auth
            @include('pages.postimages')
            @endauth
            @endif


        </div>


    </header>


    <!-- Page Content -->



    @include('user.script')

</body>

</html>