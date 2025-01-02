<?php
require "Database.php";
require "Insert.php";
require "Update.php";
require "Delete.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Oops</title>
</head>

<body>
    <div class="di">
        <form class=form action="index.php" method="post" enctype="multipart/form-data">
            enter yor name: <input type="text" name="user_name" id="id">
            <br>
            enter age: <input type="number" name="age" id="age">
            <br>
            enter your phone number : <input type="number" name="phone" id="phone">
            <br>
            enter password : <input type="password" name="password" id="">
            <br>
            <button type="submit" name="submit" value="submit" style="display:flex;align-items: center;"> submit</button>
        </form>
    </div>
</body>

</html>

<html>

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
    <?php if (isset($_POST['submit'])) {

        $data = new Insert();
        $data->getdata($conn);
    }
    $edit = new Update();
    $edit->Update($conn);

    if (isset($_GET['delete'])) {

        $daa = new Delete();
        $daa->load($conn);
    }
    ?>
    <script>
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", )
                sno = e.target.id.substr(1, );
                console.log(sno)
                if (confirm("Press a button!")) {
                    console.log("yes")
                    window.location = `/vivek/OOPS/CRUD_Oop/index.php?delete=${sno}`;
                } else {
                    console.log("yes")
                }

            })
        })
    </script>
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
    </script>
</body>

</html>