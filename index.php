<?php
    include_once 'sql-connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL basics</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM learners;";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['name'] . "<br>";
        }
    }
    
    $sql = "SELECT groups.*, coaches.*, learners.* 
    FROM coaches 
    LEFT JOIN (groups JOIN learners ON learners.active = 1 AND learners.group_id = 1) ON groups.id = 1 AND coaches.group_id = 1 
    WHERE coaches.id = 1;";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<br>" . $row['name'];
        }
    }
    
?>
</body>
</html>