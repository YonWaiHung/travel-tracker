<?php
include("database.php");

$db = $conn;
$tableName = "traveled";
$columns = ['traveled_id', 'traveled_photo', 'traveled_name', 'traveled_location', 'traveled_date', 'traveled_note'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
  if (empty($db)) {
    $msg = "Database connection error";
  } elseif (empty($columns) || !is_array($columns)) {
    $msg = "columns Name must be defined in an indexed array";
  } elseif (empty($tableName)) {
    $msg = "Table Name is empty";
  } else {

    $columnName = implode(", ", $columns);
    $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY traveled_id DESC";
    $result = $db->query($query);

    if ($result == true) {
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg = $row;
      } else {
        $msg = "No Data Found";
      }
    } else {
      $msg = mysqli_error($db);
    }
  }
  return $msg;
}
