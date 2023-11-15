<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Display</title>
</head>

<body style="background-color: wheat">
    <div class="container">
        <table class="table table-bordered text-center">
            <tr>
                <th colspan="9">Data Display</th>
            </tr>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Description</th>
                <th>ISBN</th>
                <th>Image</th>
                <th>Published</th>
                <th>Publisher</th>
            </tr>


            <tr>
                <td>{{ $data->title }}</td>
                <td>{{ $data->author }}</td>
                <td>{{ $data->genre }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->isbn }}</td>
                <td><img src="{{ url('upload/'.$data->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
                <td>{{ $data->published }}</td>
                <td>{{ $data->publisher }}</td>
            </tr>


        </table>
    </div>
</body>

</html>
