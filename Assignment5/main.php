<?php
include 'db_connect.php';


if (isset($_POST['add'])) {
    $id =$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users ( name, email, age, ID) VALUES ('$name', '$email', '$age','$id')";
    $conn->query($sql);
}


if (isset($_POST['update'])) {

    header("Location:update.php");
}


if (isset($_POST['delete'])) {
    header("Location:delete.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hospital</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: #fff;
        }
        form {
            width: 500px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
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
        .delete-btn {
            background-color: #f44336;
        }
    </style>
</head>
<body>




<form method="POST">
    <h2>Hospital Management System</h2>
    <input type="number" name="id" placeholder="Enter ID" >
    <input type="text" name="name" placeholder="Enter Name" >
    <input type="email" name="email" placeholder="Enter Email" >
    <input type="number" name="age" placeholder="Enter Age">
    <button type="submit" name="add">Add Record</button>
    <button type="submit" name="update">Update Record</button>
    <button type="submit" name="delete" class="delete-btn">Delete Record</button>
    <button type="submit" name="display">Display Record</button>

</form>
<?php

if (isset($_POST['display'])) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Records</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Student ID</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>           
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['ID']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
}

 ?>
</table>

</body>
</html>
