<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузить документ</title>
</head>
<body>
    <h1>Загрузите документ</h1>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" name="file">
        </div>
        <div class="form-group mt">
            <input class="btn btn-primary" type="submit" value="Отправить">
        </div>
    </form>

    <style>
        .mt {
            margin-top: 20px;
        }
    </style>
</body>
</html>
