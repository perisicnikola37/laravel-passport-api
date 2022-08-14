<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit profile</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/603/603197.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      * {
        margin-bottom: 10px;
      }
      .wrapper {
        margin: 220px;
      }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wrapper">

        @if (Session::has('password-update'))
        <div class="alert alert-success" role="alert">
        {{session('password-update')}}
        </div>
        @endif

          <form action="{{route('update-user', $user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="New password.." name="password">
            </div>
            <button type="button" onclick="location.href='/home'" class="btn btn-success">Home</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>