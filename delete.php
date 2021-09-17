<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>';
include 'header.php';
?>

<main>

    <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="GET" class="form-design">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="sid" placeholder="Enter ID" />
            </div>
            <div class="form-group">
                <input type="submit" value="Find" id=''>
            </div>
    </form>
    <?php
    if (isset($_GET['sid']))
    {
    ?>
        <?php
            $s_id = $_GET['sid'];
            $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
            $sql = "SELECT * FROM student_mwe where stu_id='{$s_id}'";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($result) > 0)  {
                $row = mysqli_fetch_assoc($result);
        ?>
            <div class="show-data">
                <p>NAME: <span> <?php echo $row['stu_name'] ; ?></span> </p>
                <p>ADDRESS: <span> <?php echo $row['stu_address'] ; ?></span> </p>
                <p>PHONE: <span> <?php echo $row['stu_phone'] ; ?></span> </p>
            </div>
            <form action="delete_data.php" method="POST">
                <div class="form-group">
                    <input type="hidden" name="sid" value="<?php echo $row['stu_id'] ; ?>">
                    <input type="submit" value="Delete" id=''>
                </div>
            </form>
        <?php
               
            }
            else
            {
                echo "<h2>No Record Found</h2>";
            }
    }
        ?>
   
</main>

<?php
echo 
'</body>
</html>';
?>