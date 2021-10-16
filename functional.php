<pre>
<?php
require_once 'db.php';
$username=htmlspecialchars(ltrim($_POST['user_name']));
$roll=$_POST['roll'];
$file=$_FILES['file']['name'];
$tmp=$_FILES ["file"] ["tmp_name"];
move_uploaded_file($tmp,"upload/".$file);

$query = "INSERT INTO `students`(`username`, `roll`, `photo`) VALUES ('$username', '$roll', '$file')";
$result=mysqli_query(getconnection(),$query);
if($result){
    echo "succesfully";
}else{
    echo "Unsuccess a data";
}

//    $exploded = explode('.', $file);
//    $extension = end($exploded);
//    $hash_string = md5($file.time());
//    $generated_filename = $hash_string.'.'.$extension;
//    $path = 'upload/'.$generated_filename;



?>
