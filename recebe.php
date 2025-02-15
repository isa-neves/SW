<?php
if ($_POST['email']  == "" || $_POST['senha'] == ""){
   // var_dump($_POST);
    header("location: index.php?x=1");
} else {
    header("location: index.php?x=2");
}

?>