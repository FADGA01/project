<?php
$host="localhost";
$user="root";
$pword="";
$dbname="fanford";
$connection=mysqli_connect($host,$user,$pword,$dbname);
if($connection){
    echo "connected";
}
else{
    echo "not connected";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#"method="POST">
    <div>
        <div><label>id</label><input type="number"name="id"placeholder="sid"></div>
        <div><label>name</label><input type="text"name="name"placeholder="sname"></div>
        <div><label>email</label><input type="text"name="email"placeholder="semail"></div>
        <div><input type="submit"name="submit"value="save"></div>
    </div>
</form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $insert=" INSERT INTO fan(id,name,semail) VALUES('$id','$name','$semail')";
    $runinsert=mysqli_query($connection,$insert);
    if($runinsert){
        echo "data inserted";
    }
    else{
        echo "data not inserted";
    }
}
?>