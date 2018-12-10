<?php
include 'connect.php';
function get_workAll($pdo) {
    $query = "SELECT * FROM tbl_portw";
    $get_portw = $pdo->query($query);
    $results = array();
    while($row = $get_portw->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }
    return $results;
}
function get_datAbout($pdo) {
    $query = "SELECT * FROM tbl_about";
    $get_datAbout = $pdo->query($query);
    $results = array();
    while($row = $get_datAbout->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }
    return $results;
}
function get_con($pdo) {
    $query = "SELECT * FROM tbl_contact";
    $get_con = $pdo->query($query);
    $results = array();
    while($row = $get_con->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }
    return $results;
};
?>