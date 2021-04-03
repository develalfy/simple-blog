<?php require 'header.php'; ?>
<main role="main">
    <div class="album py-5">
        <div class="container text-center">

            <div class="starter-template">
                <h1><?= /** @var \Blog\Models\Post $post */
                    $post->getTitle() ?></h1>
                <p class="lead"><?= $post->getDesc() ?></p>
            </div>
            <a href="/" class="btn btn-primary">Home</a>
        </div>
    </div>
</main>

<?php require 'footer.php'; ?>
