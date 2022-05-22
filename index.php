<?php
require_once __DIR__ . '/App/DB.php';
require_once __DIR__ . '/App/Model.php';
require_once __DIR__ . '/App/Person.php';
require_once __DIR__ . '/App/Department.php';


$data = Person::findAll();



?>

<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>age</th>
    </tr>
    <?php foreach ($data as $item): ?>
    <tr>
        <td><?php echo $item->id; ?></td>
        <td><?php echo $item->name; ?></td>
        <td><?php echo $item->age; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
