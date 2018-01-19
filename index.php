﻿<?php require_once '_db.php'; ?>

<!DOCTYPE html>
<html>
<head>

    <title>Homepage - Mon premier blog !</title>

    <?php require 'partials/head_assets.php'; ?>

</head>
<body class="index-body">
<div class="container-fluid">

    <?php require 'partials/header.php'; ?>

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <main class="col-9">
            <section class="latest_articles">
                <header class="mb-4"><h1>Les 3 derniers articles :</h1></header>

                <?php

                $response = $bdd->query('SELECT * FROM article WHERE id= 6');
                while ($donnees = $response->fetch()) {
                    echo '<h2 class="article-title">' . $donnees['title'] . '</h2>';

                }

                ?>

            </section>
            <div class="text-right">
                <a href="article_list.php">> Tous les articles</a>
            </div>
        </main>
    </div>

    <?php require 'partials/footer.php'; ?>

</div>
</body>
</html>
