<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f9f9f9;
        }
        li strong {
            display: block;
            font-size: 1.2rem;
        }
        p {
            margin-top: 10px;
        }
        a {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }
        .create-link {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Posts</h1>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <strong><?= $post['title']; ?></strong>
                <p><?= $post['content']; ?></p>
                <a href="index.php?action=edit&id=<?= $post['id']; ?>">Edit</a>
                <a href="index.php?action=delete&id=<?= $post['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a class="create-link" href="index.php?action=create">Create New Post</a>
</body>
</html>
