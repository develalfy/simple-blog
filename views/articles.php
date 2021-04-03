<?php use Blog\Models\Article;

require 'header.php'; ?>

    <main role="main">
        <div class="album py-5">
            <div class="container text-center">
                <div class="row">
                    <?php /** @var Article $articles */
                    foreach ($articles as $article): ?>
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        <a class="text-dark"
                                           href="/articles/<?= $this->e($article->getId()) ?>"><?= ucfirst($this->e($article->getTitle())) ?></a>
                                    </h3>
                                    <div class="mb-1 text-muted"><?= $this->e($article->getCreatedAt()) ?></div>
                                    <p class="card-text mb-auto"><?= (strlen($this->e($article->getDesc())) > 1000) ? substr($this->e($article->getDesc()), 0, 1000) . '...' : $this->e($article->getDesc()); ?></p>
                                    <a href="/authors/<?= $this->e($article->getAuthor()->getId()) ?>">Author: <?= $this->e($article->getAuthor()->getUsername()) ?></a>
                                </div>
                                <img src="<?= $article->getImage() ?>" alt="<?= $this->e($article->getImage()) ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

<?php require 'footer.php' ?>