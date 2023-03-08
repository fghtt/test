<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Код</th>
        <th scope="col">Наименование</th>
        <th scope="col">Уровень1</th>
        <th scope="col">Уровень2</th>
        <th scope="col">Уровень3</th>
        <th scope="col">Цена</th>
        <th scope="col">ЦенаСП</th>
        <th scope="col">Количество</th>
        <th scope="col">Поля свойств</th>
        <th scope="col">Совместные покупки</th>
        <th scope="col">Единица измерения</th>
        <th scope="col">Картинка</th>
        <th scope="col">Выводить на главной</th>
        <th scope="col">Описание</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($file as $fileData): ?>
    <tr>
        <td><?=$fileData['code']?></td>
        <td><?=$fileData['name']?></td>
        <td><?=$fileData['level1']?></td>
        <td><?=$fileData['level2']?></td>
        <td><?=$fileData['level3']?></td>
        <td><?=$fileData['price']?></td>
        <td><?=$fileData['price_sp']?></td>
        <td><?=$fileData['count']?></td>
        <td><?=$fileData['fields_of_properties']?></td>
        <td><?=$fileData['also_buy']?></td>
        <td><?=$fileData['units']?></td>
        <td><?=$fileData['image']?></td>
        <td><?=$fileData['display_on_main']?></td>
        <td><?=$fileData['description']?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>