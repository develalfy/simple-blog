<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Blog</h1>
            <p class="lead text-muted">Here we list just titles then you can view each post by clicking view button.</p>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <p class="card-text"><?= ucfirst($this->e($post['title'])) ?>.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/posts/<?= $this->e($post['id']) ?>"
                                           class="btn btn-block btn-outline-secondary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>
</body>
</html>