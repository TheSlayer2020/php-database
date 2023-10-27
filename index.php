<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>User Registration</title>

</head>

<body>

    <form method="post" action="process.php">
        <h1>User Registration</h1>
        <p>Car Name: <input type="text" name="Car_Name" placeholder="Enter car name"></p>
        <p>Car Brand: <input type="text" name="Car_Brand" placeholder="Enter car brand"></p>
        <p>Car Model: <input type="text" name="Car_Model" placeholder="Enter car model"></p>
        <p>Car Color: <input type="text" name="Car_Color" placeholder="Enter car color"></p>

        <input type="submit" value="Save"
        style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; cursor: pointer;">

    </form>
</body>

</html>