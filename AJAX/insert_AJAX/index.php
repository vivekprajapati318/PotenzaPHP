<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="di" id="lk">
        <form class=form>
            enter yor name: <input type="text" name="user_name" id="name">
            <br>
            enter age: <input type="number" name="age" id="age">
            <br>
            enter your phone number : <input type="number" name="phone" id="phone">
            <br>
            enter password : <input type="password" name="password" id="pass">
            <br>
            <button type="submit" id="submitI" value="submit" style="display:flex;align-items: center;"> submit</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <H1>Edit data</H1>
                <div class="modal-body">
                    <input type="text" name="" id="id" class="id" hidden>
                    <label for="">name update:</label>
                    <input type="text" name="nameEdit" id="nameEdit" class="nameEdit d-flex" value="">
                    <label for="">age update:</label>
                    <input type="text" name="ageEdit" id="ageEdit" class="ageEdit d-flex">
                    <label for="">phone NO. update:</label>
                    <input type="text" name="phoneEdit" id="phoneEdit" class="phoneEdit d-flex">
                    <label for="">paasword update:</label>
                    <input type="text" name="passEdit " class="d-flex " id="passEdit">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="save" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <label for="show" id="lable1">CLICK ON BUTTON TO SEE DATA</label>
    <div class="show4" id="show4">
        <input type="submit" value="submit" id="show">
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            function loadtable(e) {

                $("#lable1").hide();
                $.ajax({
                    url: "load.php",
                    type: "POST",
                    success: function(data) {
                        $("#lk").html(data);
                    }
                });
            }


            $("#submitI").on("click", function(e) {
                e.preventDefault();
                var id = id + 1;
                var name = $("#name").val();
                var age = $("#age").val();
                var phone = $("#phone").val();
                var pass = $("#pass").val();
                if (name == "" || age == "" || phone == "" || pass == "") {
                    alert("invalid credencials, can't be empty")
                } else {
                    $.ajax({
                        url: "getdata.php",
                        type: "POST",
                        data: {
                            id: id,
                            name: name,
                            age: age,
                            phone: phone,
                            pass: pass
                        },
                        success: function(data) {
                            if (data == 1) {

                                loadtable();
                                $(".form").trigger("reset");
                            } else {
                                console.log("error");
                            }

                        }

                    })
                }
            })

            function loadtable() {
                $("#lable1").hide();

                $.ajax({
                    url: "load.php",
                    type: "POST",
                    success: function(data) {
                        $("#show4").html(data);
                    }
                });
            }

            $("#show").on("click", function(e) {
                $("#lable1").hide();
                $.ajax({
                    url: "load.php",
                    type: "POST",
                    success: function(data) {
                        $("#show4").html(data);


                    }
                });
            });
            $(document).on("click", ".delete", function(e) {
                if (confirm("do you really want to delete")) {
                    var delet = $(this).data("id");

                    $.ajax({
                        url: "./deletedata.php",
                        data: {
                            delet: delet
                        },
                        success: function(data) {
                            if (data == 1) {

                                loadtable();
                            } else {
                                console.log("error in delete".Error);
                            }

                        }
                    })
                } else {
                    alert("not delete");
                }
            })
            $(document).on("click", ".update", function(e) {
                var id = $(this).data("id");
                console.log(id);
                tr = e.target.parentNode.parentNode;
                console.log(tr);
                Ename = tr.getElementsByTagName("td")[1].innerText;
                Eage = tr.getElementsByTagName("td")[2].innerText;
                Ephone = tr.getElementsByTagName("td")[3].innerText;
                Epass = tr.getElementsByTagName("td")[4].innerText;
                nameEdit.value = Ename;
                ageEdit.value = Eage;
                phoneEdit.value = Ephone;
                passEdit.value = Epass;
                var myModal = new bootstrap.Modal(document.getElementById('EditModal'));
                myModal.show();

                $("#save").on("click", function() {
                    myModal.hide();
                    $.ajax({
                        url: "./updatedata.php",
                        type: "POST",
                        data: {
                            id: id,
                            name: nameEdit.value,
                            age: ageEdit.value,
                            phone: phoneEdit.value,
                            pass: passEdit.value
                        },
                        success: function(data) {
                            if (data == 1) {

                                loadtable();
                                alert("updated")
                            } else {
                                console.log(data);
                                console.log("hkg");
                                console.log("error in delete".Error);
                            }

                        }
                    })
                })
            })




        })
    </script>

</body>

</html>