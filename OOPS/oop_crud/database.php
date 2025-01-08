<?php

use LDAP\Result;

class Database
{
    private $dbServer = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "vivek";
    private $conn = false;
    private $connn = "";
    private $result = array();

    public function __construct()
    {
        if (!$this->conn) {
            $this->connn = new mysqli($this->dbServer, $this->dbuser, $this->dbpass, $this->dbname);
        }
    }

    function insert($table, $param = array())
    {
        $table_column = implode(', ', array_keys($param));
        $table_value = implode("', '", $param);

        $sql = "INSERT INTO  $table ( $table_column) VALUES('$table_value')";
        if ($this->connn->query($sql)) {
            array_push($this->result, $this->connn->connect_error);
            echo "inserted";
        } else {
            echo  "Error";
        }
    }

    function update($table, $param = array(), $where = null)
    {
        foreach ($param as $k => $l) {
            $args[] = "$k='$l'";
        }
        $sql = "UPDATE  $table  SET" . "  " . implode(',', $args);
        if ($where != null) {
            echo  $sql .= "WHERE $where";
        }
        if ($this->connn->query($sql)) {
            array_push($this->result, $this->connn->error);
            echo "updated";
        } else {
            echo  "Error";
        }
    }

    function delete($table,  $where = null)
    {
        $sql = "DELETE from $table ";
        if ($where != null) {
            echo  $sql .= "WHERE $where";
        }
        if ($this->connn->query($sql)) {
            array_push($this->result, $this->connn->error);
            echo "updated";
            return true;
        } else {
            echo  "Error";
            return false;
        }
    }

    function select($table, $rows = '*', $where = null, $order = null, $limit = null)
    {
        $sql = "SELECT $rows FROM $table";
        if ($where != null) {
            $sql .= "  WHERE $where";
        }
        if ($order != null) {
            $sql .= " ORDER  BY $order";
        }
        if ($limit != null) {

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $sql .= "  LIMIT $start,$limit";
        }
        echo $sql;
        $query = $this->connn->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->connn->error);
            return false;
        }
    }

    function show($sql)
    {
        $query = $this->connn->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->connn->error);
            return false;
        }
    }

    function pagination($table,  $where = null,  $limit = null)
    {
        if ($limit != null) {
            $sql = " SELECT COUNT(*) FROM $table";

            if ($where != null) {
                $sql .= "  WHERE $where";
            }

            $query = $this->connn->query($sql);
            $total = $query->fetch_array();
            $total = $total[0];
            $total_pages = ceil($total / $limit);

            $url = basename($_SERVER['PHP_SELF']);
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $out = "<ul class='pagination' style='display:flex;justify-content: space-evenly;
margin-left:20%;  list-style-type: none;'>";
            if ($page > 1) {
                $out .= "<li style=margin: 20px; >  <a  href='$url?page=" . ($page - 1) . "'>prev</a></li>";
            }
            if ($total > $limit) {
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $page) {
                        $cls = "class='active'";
                    } else {
                        $cls = "";
                    }
                    $out .= "<li style=margin: 20px;>  <a $cls href='$url?page=$i'>$i</a></li>";
                }
            }
            if ($total_pages > $page) {
                $out .= "<li >  <a  href='$url?page=" . ($page + 1) . "'>next</a></li>";
            }
            $out .= "</ul>";
            echo  $out . "  ";
        }
    }

    function getdata($table, $where, $limit)
    {
        $val = $this->result;
        $this->result = array();
?>

        <html>

        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f9;
                    padding: 20px;
                }

                table {
                    width: 100%;
                    margin-top: 20px;
                    border-collapse: collapse;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                th,
                td {
                    padding: 12px;
                    text-align: left;
                    border: 1px solid #ddd;
                }

                th {
                    background-color: #007bff;
                    color: white;
                }

                td {
                    background-color: #f9f9f9;
                }

                .pagination {
                    display: flex;
                    justify-content: center;
                    margin-top: 20px;
                    list-style: none;
                }

                .pagination li {
                    margin: 0 5px;
                }

                .pagination a {
                    padding: 10px;
                    background-color: #007bff;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                }

                .pagination a:hover {
                    background-color: #0056b3;
                }

                .active a {
                    background-color: #0056b3;
                }
            </style>
        </head>

        <body>

            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * from $table";

                        if ($where != null) {
                            $sql .= "  WHERE $where";
                        }

                        if ($limit != null) {

                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }
                            $start = ($page - 1) * $limit;
                            $sql .= "  LIMIT $start,$limit";
                        }
                        $result =  $this->connn->query($sql);
                        $sno = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $sno + 1;
                            echo "  <tr>
                                <td>" . $sno . "</td>
                                <td>" . $row['UserName'] . "</td>
                                <td>" . $row['age'] . "</td>
                                <td>" . $row['phone'] . "</td>
                                <td>" . $row['password'] . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </body>

        </html>
<?php
    }

    public function __destruct()
    {
        $this->conn = false;
    }
}
?>