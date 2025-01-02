<?php class Update
{
    function Update($conn)
    {

        if (isset($_POST['idEdit'])) {
            $name = $_POST['user_name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $sno = $_POST['idEdit'];
            $sql = "UPDATE `crud` SET `UserName` = '$name', `age` = '$age', `phone` = '$phone', `password` = '$password' WHERE `crud`.`ID` = $sno;";
            $ppod = $conn->query($sql);
        }
?><html>
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="index.php" method="post">
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
                            <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        </html>
<?php
    }
}
