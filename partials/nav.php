
<nav class="col-3 py-2 categories-nav">
	<b>Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>
        <?php
        $query = $db->query('SELECT * FROM category');

        while ($data =$query->fetch()){

            echo '<li>'.'<a href="article_list.php">'.$data['name'].'</a>'.'</li>';


        }
         $query->closeCursor();?>
	</ul>
</nav>
