<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="container">
    <div class="card_todo">
    <div class="list_todo">
        <div class="center_me">
        <h1>List To Do</h1>
        <form action="./condition.php?addsup=add" method="POST">
            <input type="text" placeholder="anything" name="title">
            <input type="submit" value="Add a task">
        </form>
        </div>
    </div>

<div class="add_part">
<?php

try{
    $dsn= "mysql:dbname=todo;host=localhost";
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    $db = new PDO($dsn,"root","",$options);
    $req= "SELECT * FROM list";
    $resultats = $db->query($req);
    $arrayResultats = $resultats->fetchAll(PDO::FETCH_ASSOC);
 
    
    
}
catch(PDOException $e){
    echo "y'a un probleme" . $e->getMessage();
}

?>


<?php foreach($arrayResultats as $untask):?>
<div class="go">
<div class="you">
<ul>
    <div>
    <li><input type="checkbox" name="" id="" onclick=bar()></li>
    <li id="bang"><?= $untask['title'] ?></li>
    </div>
    <div>
    <a href="./condition.php?addsup=suppression&id=<?= $untask['id'] ?> "><li class="right"><img src="img/icons8-remove-24.png" alt=""></li></a>
    </div>
</ul>
</div>
<hr>
</div>
<?php endforeach ?>

</div>
</div>
</div>