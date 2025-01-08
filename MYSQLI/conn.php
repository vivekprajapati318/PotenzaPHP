<?php
$dbserver = "localhost";
$dbname = "root";
$dbpass = "";
$db = "vivek";


$conn = new mysqli($dbserver, $dbname, $dbpass, $db);
if (!$conn) {
    echo "connection failed" . $conn->error;
} else {
    echo "connected";
}

if (isset($_POST['idEdit'])) {
    $name = $_POST['user_name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sno = $_POST['idEdit'];
    $sql = "UPDATE `crud` SET `UserName` = '$name', `age` = '$age', `phone` = '$phone', `password` = '$password' WHERE `crud`.`ID` = $sno;";
    $ppod = $conn->query($sql);
} else {


    if (isset($_POST['submit'])) {
        $name = $_POST['user_name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $sql = "INSERT INTO  CRUD ( ID  ,
    UserName ,
    age ,
    phone ,
    password ) VALUES('','$name','$age','$phone','$password');";
        $ppo = $conn->query($sql);
        if ($ppo === true) {
            echo "<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class='mb-0'>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>";
        } else {
            echo "error" . $conn->error;
        }
    }
}
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    echo $sno;
    $sql = "DELETE FROM `crud` WHERE `crud`.`ID` = $sno;";
    $dell = $conn->query($sql);
}

?>

<html>

<head>
    <link rel="stylesheet" href="conn.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>



<body>

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="conn.php" method="post">
                        <input type="hidden" name="idEdit" id="idEdit">
                        <div class="mb-3">
                            <label for="name_updated" class="form-label">Enter your name:</label>
                            <input type="text" class="form-control" name="user_name" id="name_updated">
                        </div>
                        <div class="mb-3">
                            <label for="age_updated" class="form-label">Enter age:</label>
                            <input type="number" class="form-control" name="age" id="age_updated">
                        </div>
                        <div class="mb-3">
                            <label for="phone_updated" class="form-label">Enter your phone number:</label>
                            <input type="number" class="form-control" name="phone" id="phone_updated">
                        </div>
                        <div class="mb-3">
                            <label for="pass_updated" class="form-label">Enter password:</label>
                            <input type="password" class="form-control" name="password" id="pass_updated">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="di">
        <form class=form action="conn.php" method="post" enctype="multipart/form-data">
            enter yor name: <input type="text" name="user_name" id="id">
            <br>
            enter age: <input type="number" name="age" id="age">
            <br>
            enter your phone number : <input type="number" name="phone" id="phone">
            <br>
            enter password : <input type="password" name="password" id="">
            <br>
            <button type="submit" name="submitI" value="submit" style="display:flex;align-items: center;"> submit</button>
        </form>
    </div>


</html>





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
        } ?>
    </table>
</div>

<!-- <script>
    let table = new DataTable('#myTable');
</script> -->
<script>
    edits = document.getElementsByClassName('update');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("update", e.target.parentNode.parentNode)
            tr = e.target.parentNode.parentNode;

            name = tr.getElementsByTagName("td")[1].innerText;
            age = tr.getElementsByTagName("td")[2].innerText;
            phone = tr.getElementsByTagName("td")[3].innerText;
            pass = tr.getElementsByTagName("td")[4].innerText;
            name_updated.value = name;
            age_updated.value = age;
            phone_updated.value = phone;
            pass_updated.value = pass;
            idEdit.value = e.target.id;
            console.log(e.target.id);
            var myModal = new bootstrap.Modal(document.getElementById('EditModal'));
            myModal.show();

        })
    })


    const deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", )
            sno = e.target.id.substr(1, );
            console.log(sno)
            if (confirm("Press a button!")) {
                console.log("yes")
                window.location = `/vivek/MYSQLI/conn.php?delete=${sno}`;
            } else {
                console.log("yes")
            }

        })
    })
</script>


</body>