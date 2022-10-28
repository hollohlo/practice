<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <form action="../service/input.php" method="post">
        <div class="mb-3">
            <label class="form-label">작성자</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">글 제목</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">내용</label>
            <textarea class="form-control" rows="3" name="content"></textarea>
        </div>
        <button type="submit">등록</button>
    </form>
</div>
</body>
</html>