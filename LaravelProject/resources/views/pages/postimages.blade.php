<div>
    <form action="{{url('postimages')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <h1>Share Your Expirence With Us</h1>
        </div>

        <div style="padding: 15px;">

            <input type="file" name="file">


        </div>

        <div style="padding: 15px;">
            <input type="submit" class="btn btn-success " text="Upload">
        </div>


    </form>
</div>