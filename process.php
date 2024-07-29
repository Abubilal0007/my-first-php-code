<?php

$mysqli = new mysqli('localhost', 'root', 'mypass123', 'crud') or die (mysqli_error($mysqli));

if(isset($_POST['save-btn'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    

}




?>