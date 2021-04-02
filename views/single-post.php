<?php require 'header.php'; ?>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Blog</h1>
            <p class="lead text-muted">Here we list just titles then you can view each post by clicking view button.</p>
        </div>
    </section>

    <div class="album py-5">
        <div class="container text-center">

            <div class="starter-template">
                <h1><?= $post->getTitle() ?></h1>
                <p class="lead"><?= $post->getDesc() ?></p>
            </div>
            <a href="/" class="btn btn-primary">Home</a>
        </div>
    </div>
</main>

<?php require 'footer.php'; ?>
