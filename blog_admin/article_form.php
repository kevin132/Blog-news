<?php require_once '../tools/_db.php';


//est ce que ça existe
if (isset($_POST['article_save'])) {


    $query = $db->prepare('INSERT INTO article (category_id, title, created_at, content,summary, is_published) VALUES(?,?,NOW(),?,?,?)');
    $article = $query->execute(

        [
            $_POST['category_id'],
            $_POST['title'],
            $_POST['content'],
            $_POST['summary'],
            $_POST['is_published'],
        ]

    );
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="article_form.php" method="POST">

    <label for="name">Category name:</label>
    <br>
    <input id="name" type="text" name="category_id" placeholder="Category name"/>
    <br>

    <label for="description">Category description:</label>
    <br>
    <input id="title" type="text" name="title" placeholder="title"/>
    <br>
    <br>
    <label for="description">Category description:</label>
    <br>
    <input id="created_at" type="date" name="created_at" placeholder="Created_at"/>
    <br>
    <br>
    <label for="description">Category description:</label>
    <br>
    <input id="content" type="text" name="content" placeholder="content"/>
    <br>
    <br>
    <textarea name="summary" id="" cols="30" rows="10" placeholder="some content"></textarea>
    <br>
    <label for="is_published"> is published </label>
    <select name="is_published" id="published">
        <option value="1">oui</option>
        <option value="0">non</option>
    </select>

    <br>
    <input id="submit" type="submit" name="article_save" value="Sauvegarder"/>
</form>


</body>
</html>