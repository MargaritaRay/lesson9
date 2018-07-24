<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>сотрудники</title>
</head>
<body>
<h1>Шаблон</h1>

<table>
    <tr>
        <th>id</th>
        <th>фамилия</th>
        <th>Возраст</th>
    </tr>
    <?php foreach ($data as $persons) {?>
        <tr>
            <td><?php echo $persons->id;?></td>
            <td><?php echo $persons->lastname;?></td>
            <td><?php echo $persons->age;?></td>
        </tr>
    <?php };?>

</table>

</body>
</html>