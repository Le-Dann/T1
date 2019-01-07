<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class= "container-fluid">
    <h1>Ticket Shop</h1>

    <form action="einkauf.php" method="POST">
        <div class="form-group row">
          <label for="vornname" class="col-sm-2 col-form-label">Vorname</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Max" required>
          </div>
        </div>
        <div class="form-group row">
            <label for="nachnname" class="col-sm-2 col-form-label">Nachname</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nachnname" name="nachname" placeholder="Mustermann" required>
            </div>
          </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="max.mustermann@muster.com" required>
          </div>
        </div>
        <div class="form-group row">
            <label for="normpreis" class="col-sm-8 col-form-label">Normalpreis</label>
            <label for="normpreis" class="col-sm-1 col-form-label">CHF 30.00</label>
            <div class="col-sm-1">
                <input class="form-control form-control-sm" type="number" name="normpreis" placeholder="1">
            </div>
          </div>
        <div class="form-group row">
            <label for="legipreis" class="col-sm-8 col-form-label">Legi(Bitte beim Eingang vorweissen)</label>
            <label for="legipreis" class="col-sm-1 col-form-label">CHF 20.00</label>
            <div class="col-sm-1">
                <input class="form-control form-control-sm" type="number" name="legipreis" placeholder="1">
            </div>
        </div>
        <div class="form-group row">
             <label class="col-sm-9 col-form-label"></label>
             <button type="submit" name="kasse" class="btn btn-primary">zur Kasse</button>
        </div>
        
            
        

      </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>