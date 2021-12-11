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

        <div class="container-ml">
            <h1 style="color: black ;">Contact Us</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('messsage')}}
                @endif
            </div>
            <div style="display:flex;justify-content: center;">
                <form action="{{url('sendcontact')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Name</label>
                        <input type="text" id="name" name="name" size="20" maxlength="40"
                            placeholder="minimum 5 characters" required="">
                    </div>
                    <div style="padding:15px">
                        <label>E-mail</label>
                        <input type="text" id="email" name="email" size="30" maxlength="40" placeholder="required"
                            required="">
                    </div>
                    <div style="padding: 15px">
                        <label>Message</label>
                        <textarea style="vertical-align: top;" id="textarea" name="message" cols="40" rows="10"
                            placeholder="required" required=""></textarea>
                    </div>
                    <div style="padding:15px">
                        <input class="btn btn-success" type="submit" value="Send">
                    </div>
                </form>

            </div>



            @include('user.footer')
            @include('user.script')


</body>

</html>