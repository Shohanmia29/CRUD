<?php
require_once  'db.php';
$id=$_GET['id'];
$sql="DELETE FROM `students` WHERE id=".$_GET['id'];
$result=mysqli_query(getconnection(),$sql);
if($result){
    echo "Delete your data ";
}else{
    echo "Faild delete data";
}
