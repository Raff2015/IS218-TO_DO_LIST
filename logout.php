<?php 
require ('../model/database.php');
require ('../model/functions.php');
require ('../model/todo_db.php');

session_start();

session_unset();

session_destroy();

header("location:https://web.njit.edu/~erc7/IS218P2/index.html");

exit();

?>