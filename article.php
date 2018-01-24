<?php require_once '_db.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <title><?php echo $article['title']; ?> - Mon premier blog !</title>

    <?php require 'partials/head_assets.php'; ?>

</head>
<body class="article-body">
<div class="container-fluid">

    <?php require 'partials/header.php'; ?>

    <div class="row my-3 article-content">

        <?php require 'partials/nav.php'; ?>


        <main class="col-9">
            <article>
                <?php

                $query = $db->prepare('SELECT * FROM article WHERE id = ?');

                $query->execute(array($_GET['article_id']));

                $data = $query->fetch(); ?>

                <h1><?php echo $data['title']; ?></h1>
                <p> Créée le <?php echo $data['created_at']; ?> <br> <?php echo $data['content']?></p>





                <?php  $query->closeCursor()  ?>

            </article>
        </main>

    </div>

    <?php require 'partials/footer.php'; ?>

</div>
</body>
</html>
