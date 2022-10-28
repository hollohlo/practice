<?php

$id = $_POST["boardId"];
$new_title = $_POST["title"];
$new_content = $_POST["content"];

$con = mysqli_connect("localhost", "root", "root", "php_board");
$query = "update php_board set title='$new_title', content='$new_content' where board_id=$id";
mysqli_query($con,$query);

?>
<script>location.href="../view/index.php";</script>