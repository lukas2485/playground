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

    <div class="jobs">

        <ul>
            
        </ul>

    </div>

</head>
<body>

<script>
// PHP-Array in eine JavaScript-Variable einfügen
let jobdaten = <?php echo $jsonJobdaten; ?>;
const jobList = document.querySelector('.jobs ul');

jobdaten.forEach(job => {
    // console.log(job.titel)
    let newJob = document.createElement('li');
    newJob.textContent = `${job.titel} | ${job.unternehmen} | ${job.ort}` ;
    jobList.appendChild(newJob);
});

</script>

</body>
</html>