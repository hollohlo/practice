<?php

$id = $_POST["boardId"];

$con = mysqli_connect("localhost", "root", "root", "php_board");
$query = "delete from php_board where board_id=$id";
mysqli_query($con,$query);

?>
<script>location.href="../view/index.php";</script>