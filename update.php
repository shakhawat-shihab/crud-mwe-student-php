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
                <input type="submit" value="Find" id='find-button'>
            </div>
    </form>
    <?php
    if (isset($_GET['sid']))
    {
    ?>
    <form  action="update_data.php" method="post" class="form-design">
        <?php
            $s_id = $_GET['sid'];
            $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
            $sql = "SELECT * FROM student_mwe where stu_id='{$s_id}'";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
            if(mysqli_num_rows($result) > 0)  {
                while($row = mysqli_fetch_assoc($result)){   
                    
        ?>
            <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="sid" placeholder="Enter Id"  value=<?php echo '"'.$row['stu_id']. '"'; ?> />
                <input type="text" name="sname" placeholder="Enter name" value=<?php echo '"'.$row['stu_name']. '"'; ?> />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" placeholder="Enter Address" value=<?php echo '"'.$row['stu_address']. '"'; ?> />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="sphone" placeholder="Enter Phone number" value=<?php echo '"'.$row['stu_phone']. '"'; ?> />
            </div>
            <div class="form-group">
                <input type="submit" value="SAVE">
            </div>
        <?php
                }
            }
            else
            {
                echo "<h2>No Record Found</h2>";
            }
    }
        ?>
    </form>
</main>

<?php
echo 
'</body>
</html>';
?>