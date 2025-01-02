<?PHP
require "Login.php";
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $lon = new login($name, $pass);
    try {
        echo $lon->log();
    } catch (\Throwable $e) {
        echo "error!" . $e->getMessage();
    }
}
