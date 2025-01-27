<?php
$jobdaten = array(
    array("titel" => "Webentwickler", "unternehmen" => "Tech AG", "ort" => "Linz"),
    array("titel" => "Datenanalyst", "unternehmen" => "Data Inc.", "ort" => "Wien")
);

// Jobdaten in JSON umwandeln
$jsonJobdaten = json_encode($jobdaten);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jobdaten Übertragung</title>
</head>
<body>

<script>
// PHP-Array in eine JavaScript-Variable einfügen
var jobdaten = <?php echo $jsonJobdaten; ?>;

console.log(jobdaten);
</script>

</body>
</html>