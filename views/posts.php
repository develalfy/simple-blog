<?php use Blog\Models\Post;

require 'header.php'; ?>

    <main role="main">
        <div class="album py-5">
            <div class="container text-center">
                <div class="row">
                    <?php /** @var Post $posts */
                    foreach ($posts as $post): ?>
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3 class="mb-0">
                                        <a class="text-dark"
                                           href="/posts/<?= $this->e($post->getId()) ?>"><?= ucfirst($this->e($post->getTitle())) ?></a>
                                    </h3>
                                    <div class="mb-1 text-muted"><?= $this->e($post->getCreatedAt()) ?></div>
                                    <p class="card-text mb-auto"><?= (strlen($this->e($post->getDesc())) > 1000) ? substr($this->e($post->getDesc()), 0, 1000) . '...' : $this->e($post->getDesc()); ?></p>
                                    <a href="#">Author</a>
                                </div>
                                <img src="<?= $post->getImage() ?>" alt="<?= $this->e($post->getImage()) ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

<?php require 'footer.php' ?>