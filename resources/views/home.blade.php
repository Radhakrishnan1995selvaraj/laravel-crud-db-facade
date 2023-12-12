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

        <div class="col-md-5 ">

            <form class="row g-3 needs-validation" novalidate action="/" method="POST">
                @csrf
                <div class="col-md-12">
                  <label  class="form-label"> Name</label>
                  <input type="text" class="form-control" name="name" value="" required>

                </div>
                <div class="col-md-12">
                    <label  class="form-label"> Email</label>
                    <input type="email" class="form-control"   name="email"value="" required>

                  </div>

                  <div class="col-md-12">
                    <label  class="form-label"> Phone</label>
                    <input type="phone" class="form-control" name="phone" value="" required>

                  </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Insert data</button>
                </div>
              </form>


        </div>

        <div class="col-md-7">

            <table class="table">
           <tr>
            <th>S.no</th>
            <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
        </tr>
@foreach ($students as $student )


        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td> <a href="edit/{{$student->id}}" class="btn btn-primary">Edit</a></td>
            <td> <a href="delete/{{$student->id}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach

            </table>


        </div>
        {{ $students->links()}}
    </div>

   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
