<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        a{
            color: white;
        }
        .navbar-light{
            color: white !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4e0303ff;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav p-100">
            <li class="nav-item">
              <a class="nav-link" href="#">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Apprenants</a>
            </li>
          </ul>
        </div>
      </nav>


    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
