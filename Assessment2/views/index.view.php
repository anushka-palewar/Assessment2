<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Dev Course</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">List Contacts</a></li>
            <li><a href="/add.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Contact Management System</h1>
    <table>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>action</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?=$row->id; ?></td>
            <td><?=$row->name; ?></td>
            <td><?=$row->email; ?></td>
            <td><?=$row->phone; ?></td>
            <td>
                <a href="delete.php?id=<?= htmlspecialchars($row->id); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
</body>
</html>