    <?php require "components/head.php"?>
    <?php require "components/navbar.php"?>
<div class="content">
<h1>POSTS</h1>
 <form>
 <input name='id' />
 <button>Filter by id</button>
 </form>

 <br>

 <form>
 <input name='name' value='<?= ($_GET["name"] ?? '') ?>'/>
 <button>Filter by category</button>
 </form>


<ol>

<?php foreach($posts as $post){
    echo "<li>" . htmlspecialchars($post["title"]) . "</li>";
}?>
</ol>
</div>
</body>
</html>


