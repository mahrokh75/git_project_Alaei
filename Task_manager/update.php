<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET["id"])){

    include_once('db.php');
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    $sql = "UPDATE tasks SET name='$name', description='$description', date='$date' WHERE id=".$_GET["id"];
    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('ویرایش انجام شد.');</script>";
        echo "<script>window.location='task.php';</script>";
    } else {
        echo "خطا در اضافه کردن داده به دیتابیس: <br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>