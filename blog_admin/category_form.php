<?php require_once '../tools/_db.php';


//est ce que ça existe
if (isset($_POST['save'])) {


    $query = $db->prepare('INSERT INTO category (name,description) VALUES(?,?)');
    $result = $query->execute(


        [
            $_POST['name'],
            $_POST['description'],
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

<form action="category_form.php" method="POST">

    <label for="category-name">Category name:</label>
    <br>
    <input id="category-name" type="text" name="name" placeholder="Category name"/>
    <br>

    <label for="description">Category description:</label>
    <br>
    <textarea id="description" name="description" cols="40" rows="10" placeholder="Category description">
    </textarea>
    <br>
    <br>
    <input id="submit" type="submit" name="save" value="Sauvegarder"/>
</form>


</body>
</html>