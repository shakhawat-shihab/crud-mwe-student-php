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

    <form  action="save_data.php" method="post" class="form-design">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="sid" placeholder="Enter ID" />
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="sname" placeholder="Enter NAME"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" placeholder="Enter Address" />
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="sphone" placeholder="Enter Phone number" />
            </div>
            <div class="form-group">
                <input type="submit" value="SAVE">
            </div>
    </form>
</main>
<?php
echo 
'</body>
</html>'
?>
