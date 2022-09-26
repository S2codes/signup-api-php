<?php
include "conn.php";
$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <title>Registration with Email</title>
</head>

<body>
    <h1 class="text-center my-5">REGISTERED USERS</h1>

    <div class="container p-3">
        <table id="datatable">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
            </thead>
            <tbody>
                <?php
                echo $num_rows;
                if ($num_rows > 0) {
                    $sn = 1;
                    foreach ($data as  $d) {
                        echo '
                    <tr>
                    <td>' . $sn . '</td>
                    <td>' . $d['name'] . '</td>
                    <td>' . $d['email'] . '</td>
                    <td>' . $d['mobile'] . '</td>
                    <td>' . $d['password'] . '</td>
                </tr>
                    ';
    
                        $sn = $sn + 1;
                    }
                }
               
                ?>

            </tbody>

        </table>
    </div>


    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $('#datatable').DataTable({
                    "aLengthMenu": [
                        [3, 6, 9, -1],
                        [10, 25, 50, "All"]
                    ],
                    "pageLength": 3
                });
            });
        })
    </script>
</body>

</html>