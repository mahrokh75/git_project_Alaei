<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once('db.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $query = "INSERT INTO tasks (name, description, date) VALUES ('$name', '$description', '$date')";

    if (mysqli_query($connection, $query)) {
        echo "<script>alert('تسک اضافه شد.');</script>";
        echo "<script>window.location='task.php'</script>";
        

    } else {
        echo "خطا در اضافه کردن داده به دیتابیس: <br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>