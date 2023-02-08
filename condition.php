<?php
$dsn= "mysql:dbname=todo;host=localhost";
$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$db = new PDO($dsn,"root","",$options);

switch($_GET['addsup']){
    case"add":
        $title = $_POST['title'];
        $date = $_POST["Create at"];
        $req="INSERT INTO list (title,create_at) VALUE ('$title','$date')";
        $db->query($req);
        header('Location: ./todo.php');
        break;



        case "suppression":
        $id= $_GET['id'];
        $req = "DELETE FROM list WHERE id='$id'";
        $db->query($req);
        header('Location: ./todo.php');
        break;

}
?>

<?php

