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
    <div id="app">

        <div class="jobs">
            <ul>
                <li v-for="job in jobs">
                    <div 
                    @click="job.active = !job.active" 
                     v-if="!job.active" >
                        {{job.titel}} <br>
                        {{job.unternehmen}}<br>
                        {{job.ort}}
                    </div>
                    

                    <div v-if="job.active" class="jobTemplate">

                        <h1> {{job.titel}}</h1>
                        <h4>Bei {{job.unternehmen}} in {{job.ort}}</h4>


                        <div>
                            <h4>Beschreibung:</h4>
                            <p>{{job.description}}</p>
                        </div>

                        <button>Bewerben</button>
                        <button @click="job.active = !job.active" >Close Job-Details</button>
                    </div>


                </li>
            </ul>
        </div>


    </div>

    <script type="module">
        import {
            createApp,
            ref
        } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

        createApp({
            setup() {
                let jobdaten = <?php echo $jsonJobdaten; ?>;
                jobdaten.forEach(job => {
                    job.active = false;
                    job.description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, pariatur!'
                });
                const jobs = ref(jobdaten);
                

                return {
                    jobs,
                    jobdaten
                }
            }

        }).mount('#app')
    </script>

</body>

</html>