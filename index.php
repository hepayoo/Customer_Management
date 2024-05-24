<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div class="container my-5">
    <h1>list of clients</h1>
    <a class="btn btn-outline-primary" href="./create.php" role="button">New Client</a> <br>
    <table class="table">
   <thead>
    <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Adress</th>
       <th>Created At</th>
       <th>Action</th>
    </tr>
   </thead>
   <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";
    $connection = new mysqli($servername, $username, $password, $database);

    if($connection->connect_error){
        die("Connection failed:" . $connection->connect_error);

    }

    $sql = "SELECT* FROM clients";
    $result = $connection->query($sql);
    
    if (!$result) {
        die("Invalid query: " . $connection->error);
        
    }

    while($row = $result->fetch_assoc()){
        echo "
        <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[address]</td>
        <td>$row[created_at] </td>
        <td>
        <a class='btn btn-outline-success btn-sm' href='/myshop/edit.php?id=$row[id]' >Edit</a>
        <a class='btn btn-outline-danger btn-sm' href='/myshop/delete.php?$row[id]' >Delete</a>
        </td>
    </tr>
        
        ";
    }

    
    
    
    
    ?>
    <tr>
        <td>10</td>
        <td>Bill Gates</td>
        <td>bill.gates@microsoft.com</td>
        <td>+123456789</td>
        <td>New York, USA</td>
        <td>2024-05-24 </td>
        <td>
        <a class="btn btn-outline-success btn-sm" href="/myshop/edit.php" role="button">Edit</a>
        <a class="btn btn-outline-danger btn-sm" href="/myshop/delete.php" role="button">Delete</a>
        </td>
    </tr>
   </tbody>
    </table>
   </div>  
</body>
</html>