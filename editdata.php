<?php
require_once 'db.php';
$id =$_GET['id'];
$username=$_POST['username'];
$roll=$_POST['roll'];
$file=$_FILES['file']['name'];
$tmp=$_FILES ["file"] ["tmp_name"];
move_uploaded_file($tmp,"upload/".$file);
$sql="UPDATE `students` SET `username`='$username',`roll`='$roll',`photo`='$file' WHERE id=".$_GET['id'];
$query=mysqli_query(getconnection(),$sql);
if($query){
    echo "Update succesfully";
}else{
    echo "Unsuccesfully Update";

}


