
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<style>
       body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            padding: 8px;
            width: 100%;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        form {
            width: 300px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
</style>
<body>
<form method="POST">
    <input type="number" name="id" placeholder="Enter Old ID"  > 
    <input type="number" name="newid" placeholder="Enter ID" >
    <input type="text" name="name" placeholder="Enter Name" >
    <input type="email" name="email" placeholder="Enter Email" >
    <input type="number" name="age" placeholder="Enter Age">
    <button type="submit" name="update">Update Record</button>
    <button type="submit" name="home">HOME -> </button>
</form>
</body>
</html>

<?php
include 'db_connect.php';

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $newid =$_POST['newid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name='$name' , email='$email', age='$age', ID='$newid' WHERE ID='$id' ";
    $conn->query($sql);
    echo "Updated Successfully";

}

if(isset($_POST['home'])){
    header("Location:main.php");
}

?>
