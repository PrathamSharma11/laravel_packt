
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Search Products</h2>
        <form action="{{ route('products.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        @if(count($products) > 0)
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">Author: {{ $product->author }}</p>
                        <p class="card-text">ISBN: {{ $product->isbn }}</p>
                        <p class="card-text">Genre: {{ $product->genre }}</p>
                        <!-- Display other fields as needed -->
                        {{-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a> --}}
                        <a href="{{url('/product/details/'.$product->id)}}" class="btn btn-primary">view details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p>No products found.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

