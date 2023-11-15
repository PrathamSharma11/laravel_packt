<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packt</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: wheat">


    <center style="margin-top:200px">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Products
    </button>
    </center>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">




                             <form method="post" action="{{url('/save')}}" enctype="multipart/form-data">
                                @csrf

                                 <div class="mb-3">
                                   <label>Title</label>
                                   <input type="text" name="title" class="form-control" required>
                                 </div>

                                 <div class="mb-3">
                                   <label>Author</label>
                                   <input type="text" name="author" class="form-control" required>
                                 </div>

                                 <div class="mb-3">
                                   <label>Genre</label>
                                   <input type="text" name="genre" class="form-control" required>
                                 </div>
                                 <div class="mb-3">
                                   <label>Description</label>
                                   <input type="text" name="description" class="form-control" required>
                                 </div>
                                 <div class="mb-3">
                                   <label>Isbn</label>
                                   <input type="number" name="isbn" class="form-control" required>
                                 </div>
                                 <div class="mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" required>
                                  </div>
                                  <div class="mb-3">
                                    <label>Published</label>
                                    <input type="date" name="published" class="form-control" required>
                                  </div>
                                  <div class="mb-3">
                                    <label>Publisher</label>
                                    <input type="text" name="publisher" class="form-control" required>
                                  </div>


                                 <button class="btn btn-danger">SUBMIT</button>
                             </form>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-KJ3o2DKS1ty72V5l6H1Pb6JEOrfLJrZgBEPhhB+TxhU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>





