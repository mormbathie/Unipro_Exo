<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">identifiant</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Identifiant">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">nom</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Mettez votre nom ici">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">age</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Mettez votre age ici">
        </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      <script src="asset('js/app')"></script>

</body>
</html>
