<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rectangle.php";

    $app = new Silex\Application();

    $app->get("/new_rectangle", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Make a rectangle!</title>
        </head>
        <body>
            <div class='container'>
                <h1>Geometry Checker</h1>
                <p>Enter the dimensions of your rectangle to see if it's a square.</p>
                <form action='/view_rectangle'>
                    <div class='form-group'>
                      <label for='length'>Enter the length:</label>
                      <input id='length' name='length' type='number'>
                    </div>
                    <div class='form-group'>
                      <label for='width'>Enter the width:</label>
                      <input id='width' name='width' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Create</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });
            // HERE'S WHERE ALL THE MAGIC OCCURS!!
            // instantiate a new Rectangle using the constructor
            // passing in length & width values from the form
    $app->get("/view_rectangle", function() {
        $new_rectangle = new Rectangle($_GET["length"], $_GET["width"]); // 1) We Instantiation, grab user input
        $area = $new_rectangle->getArea(); // 2) Then we apply the method to the new Rectangle object, put the value in $area variable
        if ($new_rectangle->isSquare()) {  // implicitly asking if it's "true"
          return "<h2>It's a Skwuare! Bitches!</h2>";
        } else {
          return "<h2>It's a Rektangle Hosers!</h2>";
        }

    });

    return $app;
?>
