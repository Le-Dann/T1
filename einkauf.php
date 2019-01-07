<?php
$errors = [];
    if (isset($_POST['kasse'])) 
    {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $normpreis = $_POST['normpreis'];
    $legipreis = $_POST['legipreis'];
    $normgesamt = 0.00;
    $legigesamt = 0.00;
    if (!empty($normpreis))
    {
        $normgesamt = $normpreis * 30.00;
    }
    if (!empty($legipreis))
    {
        $legigesamt = $legipreis * 20.00;
    }
    $totalgesamt = $legigesamt + $normgesamt;
    }

    if  ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    $vorname = trim($vorname);
    $nachname = trim($nachname);
    $email = trim($email);
    if($vorname === '')
    {
        $errors[]= 'Bitte geben Sie einen Vorname ein.';
    }

    if($nachname === '')
    {
        $errors[]= 'Bitte geben Sie einen Nachname ein.';
    }

    if(empty($email))
    {
        $errors[]= 'Bitte geben Sie einen E-mail ein';
    }

    if(empty($normpreis) && empty($legipreis))
    {
        $errors[] = 'Bitte bestellen Sie mindestens ein Billet';
    }
    }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        body {
          margin: 2em;
        }
   
        fieldset {
          padding: 0;
        }

        .errors {
            border: 1px solid #E20404;
            background: #FFF3F3;
            color: #E20404;
            padding: 1em;
            border-radius: 4px;
        }
        
        .errors li {
            padding-left: 4px;
            margin-left: 14px;
        }      

        textarea
        {
            width: 100%;
             padding: 12px;
             border: 1px solid #ccc;
             border-radius: 4px;
             resize: vertical;
             height: 200px;
        }  
         </style>    
  </head>
  <body>
  <div class = "container">
   <!-- SCHRITT 2 -->
   <?php if(count($errors) > 0): ?>
            <ul class="errors">
                <?php foreach($errors as $error): ?>
                    <li><?php echo $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
   
    <?php if (count($errors) == 0) 
    {
        echo "<h1>Ihr Einkauf</h1>";
        echo "$vorname $nachname<br>";
        echo "$email<br><br>";
        echo "$normpreis Normalpreis: $normgesamt CHF<br>";
        echo "$legipreis Legiticket: $legigesamt CHF<br>";
        echo "<b> Total: $totalgesamt CHF</b><br><br>";
    }

    ?>
    <a href="ticket.php"> zurück</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>