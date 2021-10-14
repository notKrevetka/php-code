<?php
include 'functions.php';

if(checkQuestion($_POST['id'], $_POST['answer'])){
    echo "Good answer";
}else{
    echo "Bad answer";
}