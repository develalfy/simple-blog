<?php require 'header.php'; ?>
<main role="main">
    <div class="album py-5">
        <div class="container text-center">

            <div class="starter-template">
                <h4><?= /** @var \Blog\Models\Article $article */
                    $this->e($article->getCreatedAt()) ?></h4>
                <h1><?= $this->e($article->getTitle()) ?></h1>
                <img src="<?= $this->e($article->getImage()) ?>" alt="">
                <p class="lead"><?= $this->e($article->getDesc()) ?></p>
                <p class="lead">Author: <a href="/authors/<?= $this->e($article->getAuthor()->getId()) ?>"><?= $this->e($article->getAuthor()->getUsername()) ?></a></p>
            </div>
        </div>
    </div>
</main>

<?php require 'footer.php'; ?>
