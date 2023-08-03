<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="index.php?action=edit&id=<?= $post['id']; ?>" method="post">
        <label>Title</label>
        <input type="text" name="title" value="<?= $post['title']; ?>" required>
        <label>Content</label>
        <textarea name="content" required><?= $post['content']; ?></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>
