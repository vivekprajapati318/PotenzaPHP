<?php
require "Database.php";
?><html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <br>

    <div style=' display:flex; align-items:center;'>
        <table class='table' id="myTable">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>age</th>
                <th>phone</th>
                <th>pass</th>
                <th> actions</th>

            </tr>
            <?php
            $sql = "SELECT * from `CRUD`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {


                $sno = $sno + 1;
                echo "  <tr>
                <td>" . $sno . "</td>
                <td>" . $row['UserName'] . "</td>
                <td>" . $row['age'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['password'] . "</td>
                <td> <button class='update' id=" . $row['ID'] . " name='update'>update</button> </td>
                <td> <button class='delete' id=d" . $row['ID'] . " name='delete'>delete</button> </td>
            </tr> 
            ";
            }



            ?>
        </table>
    </div>

</body>

</html>