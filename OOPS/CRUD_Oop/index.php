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
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.8/js/jquery.dataTables.min.js"></script>

    <!-- Custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        .btn-update,
        .btn-delete {
            padding: 5px 15px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-update {
            background-color: #5bc0de;
            color: white;
        }

        .btn-update:hover {
            background-color: #31b0d5;
        }

        .btn-delete {
            background-color: #d9534f;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c9302c;
        }

        .modal-header {
            background-color: #007bff;
            color: white;
        }

        .modal-footer {
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <!-- Form for data insertion -->
    <div class="form-container">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id" class="form-label">Enter your name:</label>
                <input type="text" class="form-control" name="user_name" id="id">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Enter age:</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Enter your phone number:</label>
                <input type="number" class="form-control" name="phone" id="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Enter password:</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Display CRUD Table -->
    <div class="table-container">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from `CRUD`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno++;
                    echo "<tr>
                        <td>$sno</td>
                        <td>" . $row['UserName'] . "</td>
                        <td>" . $row['age'] . "</td>
                        <td>" . $row['phone'] . "</td>
                        <td>" . $row['password'] . "</td>
                        <td>
                            <button class='btn-update' id='" . $row['ID'] . "'>Update</button>
                            <button class='btn-delete' id='d" . $row['ID'] . "'>Delete</button>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    if (isset($_POST['submit'])) {
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
        // Delete Button Event Listener
        deletes = document.getElementsByClassName('btn-delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id.substr(1, );
                if (confirm("Are you sure you want to delete this record?")) {
                    window.location = `/vivek/OOPS/CRUD_Oop/index.php?delete=${sno}`;
                }
            })
        });

        // Update Button Event Listener
        edits = document.getElementsByClassName('btn-update');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                tr = e.target.parentNode.parentNode;
                name = tr.getElementsByTagName("td")[1].innerText;
                age = tr.getElementsByTagName("td")[2].innerText;
                phone = tr.getElementsByTagName("td")[3].innerText;
                pass = tr.getElementsByTagName("td")[4].innerText;

                // Assign values to the modal fields
                document.getElementById("name_updated").value = name;
                document.getElementById("age_updated").value = age;
                document.getElementById("phone_updated").value = phone;
                document.getElementById("pass_updated").value = pass;
                document.getElementById("idEdit").value = e.target.id;

                // Show the modal
                var myModal = new bootstrap.Modal(document.getElementById('EditModal'));
                myModal.show();
            })
        });
    </script>
</body>

</html>