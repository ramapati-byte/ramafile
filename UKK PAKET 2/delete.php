<?php 
$konek = mysqli_connect("localhost", "root", "", "to_do_list");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $kueri = "DELETE FROM task WHERE ID = $id";
    mysqli_query($konek, $kueri);
    header('location: index.php');
}

?>