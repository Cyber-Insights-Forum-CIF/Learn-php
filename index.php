<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 300px;
        }
        td,th{
            border: 1px solid black;
        }
        .text-end{
            text-align: right;
        }
        .bg-danger{
            background-color: pink;
        }
    </style>
</head>
<body>
<?php
$product = [
    [
        "id" => 1,
        "name" => "aa",
        "price" => 1200,
        "stock" => 100,
        "unit" => "kg"
    ],
    [
        "id" => 2,
        "name" => "aa",
        "price" => 1200,
        "stock" => 100,
        "unit" => "kg"
    ],
    [
        "id" => 3,
        "name" => "aa",
        "price" => 1200,
        "stock" => 0,
        "unit" => "kg"
    ],
    [
        "id" => 4,
        "name" => "aa",
        "price" => 1200,
        "stock" => 10,
        "unit" => "kg"
    ],
    [
        "id" => 5,
        "name" => "aa",
        "price" => 1200,
        "stock" => 100,
        "unit" => "kg"
    ],

];

?>
<h4>Product List</h4>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $product) :?>
    <tr class=" <?= $product['stock'] === 0 ? 'bg-danger':'' ?>">
        <td><?= $product["id"] ?></td>
        <td><?= $product["name"] ?></td>
        <td class="text-end"><?= $product["price"] ?></td>
        <td><?= $product["stock"]."/".$product["unit"] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>