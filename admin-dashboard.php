<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/admin-dashboard.css">

</head>

<body>
    <div class="adminDashboard_content">
        <div class="sidebar">
            <a href="index.php"><img class="logo" src="icons/Logolatest.svg"></a>
            <div class="sidebar_List">
                <li>Homepage</li>
                <li>Customers</li>
                <li>Waitlist Statistics</li>
                <li>Waitlist</li>
                <li>Job Applications</li>
                <li>Settings</li>
            </div>

        </div>
        <div class="waitListTable">
            <h1>
                Waitlist Customers
            </h1>
            <table id="dtBasicExample" class="waitlistTable_content table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">ID
                        </th>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Email
                        </th>
                        <th class="th-sm">Refer
                        </th>
                        <th class="th-sm">TapCash
                        </th>
                        <th class="th-sm">Operation
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    include 'includes/dbh.inc.php';

                    $selectquery = "SELECT * FROM waitlist";

                    $query = mysqli_query($conn, $selectquery);

                    $num = mysqli_num_rows($query);

                    while ($result = mysqli_fetch_array($query)) {

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
                <tfoot>
                    <tr>
                        <th>ID
                        </th>
                        <th>Name
                        </th>
                        <th>Email
                        </th>
                        <th>Refer
                        </th>
                        <th>TapCash
                        </th>
                        <th>Operation
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
     <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <!-- MDBootstrap Datatables  -->
  <script type="text/javascript" src="js/addons/datatables.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script>
    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script>

</body>

</html>