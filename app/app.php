<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job-Openings.php";

    $app = new Silex\Application();

    $app->get("/submit-opening", function() {
        return "<!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='/../css/bootstrap.css'>
            <link href='/../css/styles.css' rel='stylesheet' type='text/css'>
            <title>Submit a Job Opening</title>
        </head>
        <body>
            <div class='container'>
                <h1>Submit a job opening!</h1>
                <form action='/job-postings'>
                    <div class='form-group'>
                        <label for='title'>Enter Job Title:</label>
                        <input id='title' name='title' class='form-control' type='text' value='Dinosaur caretaker'>
                    </div>
                    <div class='form-group'>
                        <label for='description'>Enter Job Description</label>
                        <input id='description' name='description' class='form-control' type='text' value='Babysit and feed our baby dinosaur'>
                    </div>
                    <div class='form-group'>
                        <label for='name'>Enter poster's name</label>
                        <input id='name' name='name' class='form-control' type='text' value='Jane Doe'>
                    </div>
                    <div class='form-group'>
                        <label for='email'>Enter poster's email</label>
                        <input id='email' name='email' class='form-control' type='text' value='jane.doe@mymail.com'>
                    </div>
                    <div class='form-group'>
                        <label for='address'>Enter poster's address</label>
                        <input id='address' name='address' class='form-control' type='text' value='6789 One Lane Road, Portland OR 97229'>
                    </div>

                    <button type='submit' class='btn-success'>Submit</button>
                </form>
            </div>
        </body>
        </html>";
    });

    $app->get("/job-postings", function() {
        $giraffefeeder = new JobOpening('Giraffe Feeder', 'Feeding giraffes three times a day', 'Bob Zookeeper', 'bob@zookeeper.com', '122 Zoo Lane, Oregon Zoo St, Portland OR');
        $personalShopper = new JobOpening('Personal Shopper', 'Shopping for all Christmas and birthday gifts', 'Cruella De Vil', 'cruella@devil.com', '1 Best Road, Portland, OR');
        $shoeShiner = new JobOpening('Shoe Shiner', 'Shining the shoes of rich people', 'Bill Boss', 'billtheboss@me.com', '15 Left Shoe Rd, Portland OR');
        $jobopeningList = array($giraffefeeder, $personalShopper, $shoeShiner);
        foreach ($jobopeningList as $joblisted) {
            $jobTitle = $joblisted->getTitle();
            $jobDescription = $joblisted->getDescription();
            $postername = $joblisted->getName();
            $posteremail = $joblisted->getEmail();
            $posteraddress = $joblisted->getAddress();
            $output = $output . "<!DOCTYPE html>
            <html>
            <head>
            <title>Job Postings</title>
            </head>
            <body>
            <h1>Job Postings</h1>
            <br>
                <h3>" . $jobTitle . "</h3>
                <ol>
                    <li>" . $jobDescription . "</li>
                    <li>" . $postername . "</li>
                    <li>" . $posteremail . "</li>
                    <li>" . $posteraddress . "</li>
                </ol>
            </body>
            </html>
        ";
    };
    return $output;
    });

    return $app;
?>
