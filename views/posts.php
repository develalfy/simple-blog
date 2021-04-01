<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
<?php foreach ($posts as $post): ?>
    <div class="post">
        <a href="/posts/<?= $this->e($post['id']) ?>">
            <h1><?= $this->e($post['title']) ?></h1>
        </a>
        <p>
            <?= $this->e($post['desc']) ?>
        </p>
    </div>
    <hr>
<?php endforeach; ?>
</body>
</html>