<?php

require_once('db_connect.php'); //database connection
?>
<html>
<head>
<title>Welcome</title>
<h5 align="center"> Credit Management Website</h5><br><br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
</head>
<body  style="background-color:powderblue;">
<form action="/credit_management/index.php" align="center">
    <button type="submit" class="btn btn-primary" align="center">View all users</button>
</form> 
</body>
</html>