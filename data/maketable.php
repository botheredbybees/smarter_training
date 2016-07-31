<?php
// a quick and dirty way of creating tables and importing csv files into a relational database
// this makes every field a varchar 255 - so you will probably need to revisit and change the data types of some fields

// put your database details in here
$hostname_av = "localhost";
$database_av = "smarterTraining"; // datbase name
$username_av = "xxx"; // database user (eg. root)
$password_av = "xxx"; // password

$con = mysqli_connect($hostname_av,$username_av,$password_av,$database_av);
$file = 'csv_xls/vet_attritionrates.csv'; // csv file to import. First line should be column (field) names
$table = 'vet_attritionrates'; // name of the new table to create

// get structure from csv and insert db
ini_set('auto_detect_line_endings',TRUE);
$handle = fopen($file,'r');
// first row, structure
if ( ($data = fgetcsv($handle) ) === FALSE ) {
    echo "Cannot read from csv $file";die();
}
$fields = array();
$field_count = 0;
for($i=0;$i<count($data); $i++) {
    $f = strtolower(trim($data[$i]));
    if ($f) {
        // normalize the field name, strip to 20 chars if too long
        //$f = substr(preg_replace ('/[^0-9a-z]/', '_', $f), 0, 20);
        $field_count++;
        $fields[] = $f.' VARCHAR(255)';
    }
}

$sql = "CREATE TABLE $table (" . implode(', ', $fields) . ')';
echo $sql . "<br /><br />";
if (!mysqli_query($con,$sql)) {
	printf("Error: %s\n", $mysqli->error);
}
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
    $fields = array();
    for($i=0;$i<$field_count; $i++) {
        $fields[] = '\''.addslashes($data[$i]).'\'';
    }
    $sql = "Insert into $table values(" . implode(', ', $fields) . ')';
    echo $sql; 
    if (!mysqli_query($con,$sql)) {
		printf("Error: %s\n", $mysqli->error);
	}
}
fclose($handle);
ini_set('auto_detect_line_endings',FALSE);
?>