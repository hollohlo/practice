<?php

$con = mysqli_connect("localhost", "root", "root", "php_board");
$query = "select * from php_board";
$result = mysqli_query($con,$query);
$repository = array(); // 객체저장용 배열 

if ($result){
    while( $row = mysqli_fetch_array($result) ) {
        $board = new board();
        $board->id = $row["board_id"];
        $board->name  = $row["name"];
        $board->title = $row["title"];
        $board->content = $row["content"];
        array_push($repository, $board);
    }
}

?>