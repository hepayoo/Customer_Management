<?php
$name = "";



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myshop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    



<div class="container my-5">

<h2>Add new client</h2>


<form method="post">
<div class="row mb-3">

 <label class="col-sm-3 col-form-label">Name</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="name" value=""> 
 </div>
</div>
<div class="row mb-3">

 <label class="col-sm-3 col-form-label">Email</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="email" value=""> 
 </div>
</div>
<div class="row mb-3">

 <label class="col-sm-3 col-form-label">Phone-Number</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="phone" value=""> 
 </div>
</div>
<div class="row mb-3">

 <label class="col-sm-3 col-form-label">Address</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="address" value=""> 
 </div>
</div>

<div class="row mb-3">

 <div class="offset-sm-3 col-sm-3 d-grid">
    <button type="submit" class="btn btn-success">Submit</button>

 </div>
 <div class="col-sm-3 d-grid">
<a class="btn btn-secondary" href="./index.php" role="button">Cancel</a>
 </div>
</div>




 </form>
</div>

</body>
</html>