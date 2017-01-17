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

    $app->get("/goodbye", function() {
      return
      "<!DOCTYPE html>
      <html>
      <head>
          <title>Hello Friend!</title>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
      </head>
      <body>
          <div class='container'>
              <h1>Goodbye Friend</h1>
              <a href='/'>Try again</a>
          </div>
      </body>
      </html>";
    });

    return $app;
?>
