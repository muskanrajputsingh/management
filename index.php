<?php
$controller='home';
$function='home';
 if(isset($_GET['controller']) && $_GET['controller']!=''){
    $controller=$_GET['controller'];
 }
if(isset($_GET['function']) && $_GET['function']!=''){
    $function=$_GET['function'];
} 
include('controller/'.$controller.'.php');
$class=$controller.'controller';
$obj=new $class();
$obj->$function();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Loan Management</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>
<body>
<script src="view.js"></script>
</body>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
</html>



