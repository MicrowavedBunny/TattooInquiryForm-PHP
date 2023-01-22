<?php
require_once 'includes/viewTemplate.php';
require_once 'includes/dbConfig.php';
$id = $_REQUEST['varname'];
$results = $db->query("SELECT * FROM formsubmission LEFT JOIN images ON formsubmission.id = images.id where formsubmission.id = '$id' ORDER BY formsubmission.id");
$row = $results->fetch_assoc();
echo viewTemplate($row['name'], $row['email'], $row['phone_number'], $row['placement'], $row['coverup']);
?>

<img class="img-thumbnail"
    src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["placementImage"]); ?>" />

<?php
echo viewTemplate2($row['tattoo_size'], $row['style'], $row['color'], $row['description'], $row['font']);
?>

<img class="img-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference1"]); ?>" />

<?php
echo viewTemplate3($row['tattoo_size'], $row['style'], $row['color'], $row['description'], $row['font']);
?>

<img class="img-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference2"]); ?>" />

<?php
echo viewTemplate4();
?>

<img class="img-thumbnail" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference3"]); ?>" />

<?php
echo viewTemplate5($row['preferred_days'], $row['preferred_time'], $row['specific_date'], $row['comments'], $row['previous_client']);
?>
