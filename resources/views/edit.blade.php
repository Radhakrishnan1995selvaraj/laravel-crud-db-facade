<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Crud dbfacades</title>
  </head>
  <body>
   <div class="container">

    <div class="row m-auto">
        <div class="col-md-12 text-center">
            <h1> laravel Crud DB Facade</h1>
        </div>

        <div class="col-md-6 offset-md-3">

            <form class="row g-3 needs-validation" novalidate action="/update/{{$stud[0]->id}}" method="POST">
                @csrf
                <div class="col-md-12">
                  <label  class="form-label"> Name</label>
                  <input type="text" class="form-control" name="name" value="{{$stud[0]->name}}" required>

                </div>
                <div class="col-md-12">
                    <label  class="form-label"> Email</label>
                    <input type="email" class="form-control"   name="email"value="{{$stud[0]->email}}" required>

                  </div>

                  <div class="col-md-12">
                    <label  class="form-label"> Phone</label>
                    <input type="phone" class="form-control" name="phone" value="{{$stud[0]->phone}}" required>

                  </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Update data</button>
                </div>
              </form>


        </div>


    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
