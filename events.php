<?php
// include("loadDump.php");
include("db.php");
//include("dbremote.php");
?>
<?php
include 'header.php';
?>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/people.css">
<div class="bg-secondary rounded-0 text-white">
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h3 class="fw-bold faculty-heading">Events</h3>
            </div>
        </div>
    </div>
</div>
<section class="bg-grey p-3">
    <div class="event-schedule-area-two bg-color pad100">
        <div class="container">
            <!-- row end-->
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav custom-tab" id="myTab" role="tablist">
                        <li class="nav-item pull-left">
                            <a class="nav-link active show" id="ep-tab" data-toggle="tab" href="#ep" role="tab"
                                aria-controls="ep" aria-selected="true">Upcoming events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="msc-tab" data-toggle="tab" href="#msc" role="tab"
                                aria-controls="msc" aria-selected="false">Past events</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="ep" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Speaker</th>
                                            <th scope="col">Venue</th>
                                            <th scope="col">Date And Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sqlFetchStudents = "SELECT * FROM events where eventType = 'upcoming'";
                                        $result = $conn->query($sqlFetchStudents);
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='inner-box'>
                                                    <td>
                                                        <div class='event-wrap'>
                                                            <span><a href='event.php?id=" . $row['eventId'] . "'>" . $row['eventTitle'] . "</a></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='r-no'>
                                                            <span>" . $row['eventSpeaker'] . "</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='event-wrap'>
                                                            <span>" . $row['eventVenue'] . "</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='r-no'>
                                                            <span>" . $row['eventDateTime'] . "</span>
                                                        </div>
                                                    </td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="msc" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Speaker</th>
                                            <th scope="col">Venue</th>
                                            <th scope="col">Date And Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // $currDateTime = date("yyyy-mm-dd ")
                                        $sqlFetchStudents = "SELECT * FROM events where eventType = 'past'";
                                        $result = $conn->query($sqlFetchStudents);
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr class='inner-box'>
                                                    <td>
                                                        <div class='event-wrap'>
                                                            <span><a href='event.php?id=" . $row['eventId'] . "'>" . $row['eventTitle'] . "</a></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='r-no'>
                                                            <span>" . $row['eventSpeaker'] . "</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='event-wrap'>
                                                            <span>" . $row['eventVenue'] . "</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class='r-no'>
                                                            <span>" . $row['eventDateTime'] . "</span>
                                                        </div>
                                                    </td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /row end-->
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>