<?php

$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];

$con = mysqli_connect("localhost", "root", "root", "php_board");
$query = "insert into php_board (name, title, content) 
          values('".$name."','".$title."','".$content."')";
mysqli_query($con,$query);

?>
<script>location.href="../view/index.php";</script>