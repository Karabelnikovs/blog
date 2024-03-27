<?php require "components/head.php"?>
<?php require "components/navbar.php"?>

<div class="content">
       <h1>Create post!!!!!</h1>
<form method="POST">
            <label for="title">Nosaukums:</label><br>
            <input id='title' name='title' value="<?=$_POST['title'] ?? "" ?> "/>
        <br>
        
        <?php if(isset($errors['title'])){ ?> 
            <p> <?=$errors['title'] ?> </p> <?php } ?>
        <br>
     
     
            <label for="category">Kategorija:</label><br>
            <select name='category'>
                <option value=1>sport</option>
                <option value=2>music</option>
                <option value=3>food</option>
            </select>
        <br><br>
        <button>Save</button>
</form>
    
    
</div>
</body>
</html>