<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
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
        <h1>Edit Task</h1>
        <?php
        
        include_once("db.php");
        // کوئری برای بازیابی تسک‌ها از دیتابیس
        $query = "SELECT * FROM tasks WHERE id = ".$_GET["id"];
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if (!$result) {
            die('خطا در بازیابی تسک‌ها: ' . mysqli_error($connection));
        }else if(mysqli_num_rows($result)>0){
        ?>   
        <form method="POST" action="update.php?id=<?php echo $row['id']; ?>" id="newTask">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter your Name Task..."  required >
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter your Description..." required><?php echo $row['description']; ?></textarea>
            <label for="date">Deadline Date:</label>
            <input type="date" id="date" name="date" placeholder="mm/dd/yy" value="<?php echo $row['date']; ?>" required> <br>
            <button type="submit">Edit</button>  <a href="task.php">cancel</button>
        </form>
        <?php }else{
            header("Location: task.php");
        } ?>      
    </div>
    
    <footer>
        <nav>
            <div class="logo"> <img src="images/img2.jpg" title="YourCare" alt=""/></div>           
        </nav>
        <p>Success is the sum of small efforts repeated day in and day out, so tackle your tasks with persistence and watch your achievements grow.
    </footer>
    
</body>
</html>