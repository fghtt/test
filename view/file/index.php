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
        <td><?=$fileData['code'] ? $fileData['code'] : 'NULL'?></td>
        <td><?=$fileData['name'] ? $fileData['name'] : 'NULL'?></td>
        <td><?=$fileData['level1'] ? $fileData['level1'] : 'NULL'?></td>
        <td><?=$fileData['level2'] ? $fileData['level2'] : 'NULL'?></td>
        <td><?=$fileData['level3'] ? $fileData['level3'] : 'NULL'?></td>
        <td><?=$fileData['price'] ? $fileData['price'] : 'NULL'?></td>
        <td><?=$fileData['price_sp'] ? $fileData['price_sp'] : 'NULL'?></td>
        <td><?=$fileData['count'] ? $fileData['count'] : 'NULL'?></td>
        <td><?=$fileData['fields_of_properties'] ? $fileData['fields_of_properties'] : 'NULL'?></td>
        <td><?=$fileData['also_buy'] ? $fileData['also_buy'] : 'NULL'?></td>
        <td><?=$fileData['units'] ? $fileData['units'] : 'NULL'?></td>
        <td><?=$fileData['image'] ? $fileData['image'] : 'NULL'?></td>
        <td><?=$fileData['display_on_main'] ? $fileData['display_on_main'] : 'NULL'?></td>
        <td><?=$fileData['description'] ? $fileData['description'] : 'NULL'?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>