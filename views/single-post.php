<?php require 'header.php'; ?>

<div class="album py-5">
    <div class="container text-center">

        <div class="starter-template">
            <h1><?= $post->getTitle() ?></h1>
            <p class="lead"><?= $post->getDesc() ?></p>
        </div>
        <a href="/" class="btn btn-primary">Home</a>
    </div>
</div>

<?php require 'footer.php'; ?>
