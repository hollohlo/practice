<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table class="table table-hover">
    <thead>
    <th>글번호</th>
    <th>작성자</th>
    <th>제목</th>
    <th>조회수</th>
    </thead>
    <?php
    include "../domain/board.php";
    include "../service/output.php";
    for($i = 0; $i < count($repository); $i++){
    ?>
    <tr>
        <td><?php echo $repository[$i]->id; ?></td>
        <td><?php echo $repository[$i]->name; ?></td>
        <td>
            <a href="view.php?board_index=<?=$i?>">
            <?php echo $repository[$i]->title; ?>
            </a>
        </td>
        <td>0</td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary mr-3" href="index.php" role="button">목록</a>
    <a class="btn btn-primary mr-3" href="upload.php" role="button">글쓰기</a>
</div>
</body>
</html>