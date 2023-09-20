<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
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
        <h1>Add Task</h1>
        <form method="POST" action="add.php" id="newTask">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name Task..."  required >
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter your Description..." required></textarea>
            <label for="date">Deadline Date:</label>
            <input type="date" id="date" name="date" placeholder="mm/dd/yy" required> <br>
            <button type="submit">Add</button>
        </form> 

        <?php
        include_once("db.php");

        $query = "SELECT * FROM tasks ORDER BY id desc";
        $result = mysqli_query($connection, $query);        
        if (!$result) {
            die('خطا در بازیابی تسک‌ها: ' . mysqli_error($connection));
        }else if(mysqli_num_rows($result)>0){
        ?>
        <h1>Tasks List</h1>
        <table class="table-tasks">
            <tr>
                <th>Name</th>
                <th>Deadline Date</th>
                <th>Oprations</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td> <a href='show.php?id=". $row['id']."'> Show </a> | <a href='edit.php?id=". $row['id']."'> Edit </a> | <a href='delete.php?id=". $row['id']."'> Delete </a></td>";
                echo "</tr>";
            }
            ?>
        </table>   
        <?php 
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