<?php require_once '../tools/_db.php';


//est ce que ça existe
if (isset($_POST['save'])) {


    $query = $db->prepare('INSERT INTO user (firstname,lastname,email,password,is_admin,bio) VALUES(?,?,?,?,?,?)');
    $result = $query->execute(


        [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['password'],
            $_POST['is_admin'],
            $_POST['bio'],
        ]

    );
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin category</title>
</head>
<style>


    form {
        text-align: center;
    }

    #firstname {
        outline: none;
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
    }

    #lastname {
        outline: none;
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
    }

    #password {
        outline: none;
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
    }

    #email {
        outline: none;
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
    }

</style>
<body>

<form action="user_form.php" method="POST">

    <label for="firstname">First name:</label>
    <br>
    <input id="firstname" type="text" name="firstname" placeholder="firstname"/>
    <br>
    <br>
    <label for="lastname">Last name:</label>
    <br>
    <input id="lastname" type="text" name="lastname" placeholder="lastname"/>
    <br>
    <br>
    <label for="email">Email:</label>
    <br>
    <input id="email" type="email" name="email" placeholder="email"/>
    <br>
    <br>
    <textarea name="bio" cols="40" rows="10" placeholder="Ta vie ton oeuvre ">
    </textarea>
    <br>
    <br>
    <label for="password"> Password:</label>
    <br>
    <input id="password" type="password" name="password" placeholder="password"/>
    <br>
    <br>
    <label for="admin"> Is admin :</label>
    <br>
    <select name="is_admin" id="admin">
        <option value="1">oui</option>
        <option value="0">non</option>
    </select>


    <br>
    <br>
    <input id="submit" type="submit" name="save" value="Sauvegarder"/>
</form>


</body>
</html>