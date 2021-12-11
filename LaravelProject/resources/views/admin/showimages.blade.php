<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.css')
</head>
@include('admin.navbar')

@include('admin.sidebar')

<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">

        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('messsage')}}

        </div>

        @endif

        <table>
            <tr align="center" style="background-color: grey;">
                <td style="padding: 20px;">Images</td>
                <td style="padding: 20px;">Delete</td>

            </tr>

            @foreach($pic as $gallery)


            <tr style="background-color: lightblue; align-items:center;">



                <td>
                    <img height="200" width="200" src="/galleryimage/{{$gallery->image}}" alt="">
                </td>

                <td>
                    <a class="btn btn-danger" href="{{url('deleteimages',$gallery->id)}}">Delete</a>
                </td>

            </tr>

            @endforeach
        </table>

    </div>
</div>


<!-- jQuery -->
@include('admin.scripts')
</body>

</html>