<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<meta charset="UTF-8">
<title>Title</title>
</head>
<body>
<div class="container">
    <?php
    include "../domain/board.php";
    include "../service/output.php";
    $boardindex = $_GET["board_index"];
    ?>
    <p>글번호 : <?php echo $repository[$boardindex]->id;?></p>
    <p id="title">제목 : <?php echo $repository[$boardindex]->title;?></p>
    <p>작성자 : <?php echo $repository[$boardindex]->name;?></p>
    내용 :
    <div id="content">
        <textarea readonly="readonly" class="form-control"><?php echo $repository[$boardindex]->content?></textarea>
    </div>
    <button id="deleteBtn" class="btn btn-danger btn-sm float-right">삭제</button>
    <button id="updateBtn" class="btn btn-info btn-sm mr-3 float-right">수정</button>
    <form id="form" action="/" method="post">

    </form>
</div>

<script>
$(document).on('ready',(e) => {
    const form = $("#form");
    const boardId = <?=$repository[$boardindex]->id?>;

    $(document).on('click', '#deleteBtn',(e) => {
        $('#form').attr("action","../service/delete.php");
        form.append("<input type='hidden' name='boardId' value='"+boardId+"'>");
        form.submit();
    })

    $(document).on('click','#updateBtn',(e) => {
        let str="<input class='form-control' width='250'" +
        "placeholder='제목 입력' id='updateTitle'>";
        $("#title").html(str);
        str="<textarea class='form-control' placeholder='내용 입력'" + "id='updateContent'></textarea>";
        $("#content").html(str);
        $("#updateBtn").attr("id","updateConfirmBtn");
    })

    $(document).on('click','#updateConfirmBtn',(e) => {
        $('#form').attr("action","../service/update.php");
        const updateTitle= $('#updateTitle').val();
        const updateContent= $('#updateContent').val();
        form.append("<input type='hidden' name='boardId' value='"+boardId+"'>");
        form.append("<input type='hidden' name='title' value='"+updateTitle+"'>");
        form.append("<input type='hidden' name='content' value='"+updateContent+"'>");
        form.submit();
    })
})
</script>

</body>
</html>