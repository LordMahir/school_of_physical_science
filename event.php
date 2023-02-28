<?php
include("db.php");
// include("loadDump.php");
include 'header.php';
?>

<?php
$url = $_SERVER['REQUEST_URI'];
parse_str(parse_url($url)['query'], $params);
$event_id = $params['id'];
$sqlFetchEvent = "SELECT * FROM events where eventId=$event_id";
$result = $conn->query($sqlFetchEvent);
if ($result->num_rows > 0)
    $row = $result->fetch_assoc();
?>
<link rel="stylesheet" href="css/faculty_personal.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<section class="bg-grey p-3">
    <div class="container">
        <div class="row">
            <p style="font-size: 25px;">
                <u>TITLE</u> : <?php echo $row['eventTitle'] ?>
            </p>
            <br>
            <br>
            <br>
            <p style="font-size: 25px;"><u>ABSTRACT</u> : </p>
            <p style="font-size: 20px;">
                <?php echo $row['eventAbstract'] ?>
            </p>
            <br>
            <br>
            <br>
            <p style="font-size: 25px;"><u>MEETING DETAILS</u> : </p>
            <?php 
                if($row['eventLink'] != '')
                {
                    echo '<p style="font-size: 20px;"> <b>Joining Link: </b>'.
                    $row['eventLink'].'
                    </p>
                    ';
                }
                if($row['eventVenue'] != '')
                {
                    echo '<p style="font-size: 20px;"> <b>Venue: </b>'.
                    $row['eventVenue'].'
                    </p>
                    ';
                }
                if($row['eventDateTime'] != '')
                {
                    echo '<p style="font-size: 20px;"> <b>Date and Time: </b>'.
                    $row['eventDateTime'].'
                    </p>
                    ';
                }
            ?>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>