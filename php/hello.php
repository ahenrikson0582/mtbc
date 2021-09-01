<?php

//Great the user with a hello message
echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo 'Hello World'; ?></h1>
    </body>
</html>

<?php
  $msg = 'Hello World';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $msg; ?></h1>
    </body>
</html>

<?php
  //Literal string, no processing
  $name = 'Bob Smith';
  //Varaible string, allows processing
  $msg = "Hello {$name}";
  //The following would work as above
  //$msg = "Hello $name";
  //The following is an example of contactination
  //$msg = 'Hello ' . $name;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $msg; ?></h1>
    </body>
</html>

<?php
  $name = 'Bob Smith';
  $greeting = "Hello {$name}";
  $count=5;
  $price=3.00;
  //Note the escape character before the dollar sign
  $msg = "I see you have {$count} oranges, that will be \${$price}";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $greeting; ?></h1>
       <p><?php echo $msg;?></p>
    </body>
</html>

<?php
  $name = 'Bob Smith';
  $greeting = "Hello {$name}";
  $count=5;
  $price=.6;
  $total=($count*$price);
  $msg = "I see you have {$count} oranges, that will be \${$total}";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $greeting; ?></h1>
       <p><?php echo $msg;?></p>
    </body>
</html>

