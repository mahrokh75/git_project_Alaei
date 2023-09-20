<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Task</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">   
</head>
<body>
<header>
        <nav>
            <div class="logo"> <a href="index.html"> <img  src="images/img1.jpg" title="Hi! Wellcome!" alt="Tasks List" /></a></div>
            <ul class="menu">
                <li><a href="http://localhost/mahrokh/task.php">Home</a></li>
                <li><a href="#">Tasks List</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-container">
        
        <?php
        include_once("db.php");
        // کوئری برای بازیابی تسک‌ها از دیتابیس
        $query = "DELETE FROM tasks WHERE id = ".$_GET["id"];
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die('خطا در بازیابی تسک‌ها: ' . mysqli_error($connection));
        }else{
            echo "<script>alert('با موفقیت حذف شد');</script>";
            echo "<script>window.location='task.php';</script>";
        }  
        ?>  
    </div>
    
    <footer>
        <nav>
            <div class="logo"> <img src="images/img2.jpg" title="YourCare" alt=""/></div>           
        </nav>
        <p>Success is the sum of small efforts repeated day in and day out, so tackle your tasks with persistence and watch your achievements grow.
    </footer>
        
</body>
</html>