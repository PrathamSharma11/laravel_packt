<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="background-color: wheat">
    <div class="container">
        <div class="row">
            <h1 class="text-center bg-info">EDIT FORM</h1>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <form action="{{url('product/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$data->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control" value="{{$data->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Genre</label>
                        <input type="text" name="genre" class="form-control" value="{{$data->genre}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$data->description}}">
                    </div>
                    <div class="mb-3">
                        <label for="">ISBN</label>
                        <input type="number" name="isbn" class="form-control" value="{{$data->isbn}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" >
                        <td><img src="{{ url('upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                    </div>
                    <div class="mb-3">
                        <label for="">Published</label>
                        <input type="date" name="published" class="form-control" value="{{$data->published}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Publisher</label>
                        <input type="text" name="publisher" class="form-control" value="{{$data->publisher}}">
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
