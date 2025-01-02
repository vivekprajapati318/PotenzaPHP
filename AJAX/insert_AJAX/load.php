<?php
$conn = new mysqli("localhost", "root", "", "vivek");
$sql = "SELECT * FROM CRUD";
$result = $conn->query($sql);
$out = "";
if (mysqli_num_rows($result) > 0) {
    $out .= '<table class="table1" border="1" width="100% cellpadding="15px" margin-left:10px style="    background-image: linear-gradient(120deg,rgb(221, 148, 93),rgb(70, 148, 221), transparent);">
   <tr>
            <th>ID</th>
            <th>name</th>
            <th>age</th>
            <th>phone</th>
            <th>pass</th>
            <th style="padding: 10px; margin: left 40px;">action</th>
        </tr>';
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $sno = $sno + 1;
        $out .= "  <tr>
                <td>" . $sno . "</td>
                <td>" . $row['UserName'] . "</td>
                <td>" . $row['age'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['password'] . "</td>
                  <td> <button class='update' style='border-radius: 12px;    background-image: linear-gradient(70deg, yellow, transparent 100px);' data-id=" . $row['ID'] . " name='update'>update</button>
                 <button class='delete'  style='border-radius: 12px;        background-image: linear-gradient(10deg, red, transparent);' data-id=" . $row['ID'] . " name='delete'>delete</button> </td>
                 </tr> 
            ";
    }
    $out .= "</table>";

    echo $out;
    mysqli_close($conn);
} else {
    # code...
}
