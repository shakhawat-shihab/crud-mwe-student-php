<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD MWE</title>
</head>
<body>';
include 'header.php';
?>
<main>
        <h2 style="text-align:center;">Student Database</h2>
        <table>
            <caption></caption>
                <?php
                    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
                    $sql = "SELECT * FROM student_mwe order by stu_id";
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                    if(mysqli_num_rows($result) > 0)  {
                        echo
                        '<thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                            <tbody>';
                        while($row = mysqli_fetch_assoc($result)){    
                ?>
                <tr>
                    <td><?php echo $row['stu_id']; ?></td>
                    <td><?php echo $row['stu_name']; ?></td>
                    <td><?php echo $row['stu_address']; ?></td>
                    <td><?php echo $row['stu_phone']; ?></td>
                </tr>
                <?php
                        }
                    }
                    else
                    {
                        echo "<h2>No Record Found</h2>";
                    }
                ?>
            </tbody>
        </table>
</main>

<?php
echo 
'</body>
</html>'
?>
