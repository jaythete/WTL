<?php
include 'db_connect.php';


if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";
    $conn->query($sql);
}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id='$id'";
    $conn->query($sql);
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application</title>
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
            width: 300px;
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

<h2>Hospital Management System</h2>


<form method="POST">
    <input type="number" name="id" placeholder="Enter ID (For Update/Delete)">
    <input type="text" name="name" placeholder="Enter Name" required>
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="number" name="age" placeholder="Enter Age" required>
    <button type="submit" name="add">Add Record</button>
    <button type="submit" name="update">Update Record</button>
    <button type="submit" name="delete" class="delete-btn">Delete Record</button>
</form>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM users");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['age']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }
    ?>
</table>

</body>
</html>
