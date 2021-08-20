

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <div>
        <h1>
            Waitlist Customers
        </h1>
    
        <div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Refer</th>
                            <th>TapCash</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        include 'includes/dbh.inc.php';

                        $selectquery = "SELECT * FROM waitlist";

                        $query = mysqli_query($conn, $selectquery);

                        $num = mysqli_num_rows($query);

                        while($result = mysqli_fetch_array($query)){
                            
                    ?>    
                        <tr>
                            <td><?php echo $result['usersID']; ?></td>
                            <td><?php echo $result['usersName']; ?></td>
                            <td><?php echo $result['usersEmail']; ?></td>
                            <td><?php echo $result['usersRefer']; ?></td>
                            <td><?php echo $result['usersPoint']; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>