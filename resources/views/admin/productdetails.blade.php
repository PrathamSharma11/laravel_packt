<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Display</title>
</head>
<body>
<div class="container">
    <table class="table table-bordered text-center">
        <tr>
            <th colspan="9">Data Display</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Description</th>
            <th>ISBN</th>
            <th>Image</th>
            <th>Published</th>
            <th>Publisher</th>

        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->title}}</td>
                <td>{{$d->author}}</td>
                <td>{{$d->genre}}</td>
                <td>{{$d->description}}</td>
                <td>{{$d->isbn}}</td>
                {{-- <td>{{$d->image}}</td> --}}
                <td><img src="{{ url('upload/'.$d->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                <td>{{$d->published}}</td>
                <td>{{$d->publisher}}</td>

            </tr>
        @endforeach
    </table>
</div>
</body>
</html>






