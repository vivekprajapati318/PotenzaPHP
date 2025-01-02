<?php
$conn = new PDO("mysql:host=localhost;dbname=vivek", "root", "");
$sql = $conn->prepare("SELECT * FROM CRUD ");
$sql->execute();
if ($sql) {
    $result = $sql->fetch(PDO::FETCH_ASSOC);


    $out = "<table width=100% cellpadding=10px  border=`2px solid black`  style=' font-size:larger;color:#2311aa;  background-image: linear-gradient(150deg,rgb(203, 221, 70),rgb(221, 148, 93), transparent);'> <thead>
          <tr> 
              <th> ID </th>
              <th> name</th>
              <th> age</th>
              <th> Phone</th>
              <th> password </th>
               <th> Update/Delete</th>
              </tr>
              </thead>
              <tbody>
        ";
    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {

        $out .= "<tr> 
              <td> " . $result['ID'] . "</td>
              <td> " . $result['UserName'] . "</td>
              <td> " . $result['age'] . "</td>
              <td> " . $result['phone'] . "</td>
              <td> " . $result['password'] . "</td>
       <td> <button class='update' style='border-radius: 12px;    background-image: linear-gradient(70deg, yellow, transparent 100px);' data-id=" . $result['ID'] . " name='update'>update</button>
                 <button class='delete'  style='border-radius: 12px;        background-image: linear-gradient(10deg, red, transparent);' data-id=" . $result['ID'] . " name='delete'>delete</button> </td>
                 
              </tr>";
    }
    $out .= "</tbody> </table>";
    echo $out;
} else {
    echo "lkojiu";
}
