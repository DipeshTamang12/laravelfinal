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
                <td style="padding: 20px;">Name</td>
                <td style="padding: 20px;">Email</td>
                <td style="padding: 20px;">Message</td>
                <td style="padding: 20px;">Reply</td>
                <td style="padding: 20px;">Delete</td>


            </tr>

            @foreach($client as $contact)


            <tr style="background-color: lightblue; align-items:center;">
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>



                <td>
                    <a class="btn btn-primary" href="{{url('replyview',$contact->id)}}">Reply</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{url('deletecontact',$contact->id)}}">Delete</a>
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