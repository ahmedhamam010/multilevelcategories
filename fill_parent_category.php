<?php

include('database_connection.php');
if( isset( $_GET['parent_category_id'] ) ){
$id = $_GET['parent_category_id'];
} else{
    $id = 0;
}
$query = "SELECT * FROM tbl_category Where parent_category_id = ".$id." ORDER BY category_name ASC ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

//get Name of Parent id
$query2 = "SELECT category_name FROM tbl_category Where category_id =" . $id;
$statement2 = $connect->prepare($query2);
$statement2->execute();
$catName = $statement2->fetchAll();
if( $id == 0 ){
    $catName = 'Main Categories';
}else{
    $catName = $catName[0]['category_name']; 
}
$output = '<option value="'.$id.'">Current Category ('.$catName.') </option>';

foreach($result as $row)
{
 $output .= '<option value="'.$row["category_id"].'">'.$row["category_name"].'</option>';
}

echo $output;

?>