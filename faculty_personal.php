<?php
include("db.php");
// include("loadDump.php");
include 'header.php';
?>

<?php
$url = $_SERVER['REQUEST_URI'];
parse_str(parse_url($url)['query'], $params);
$faculty_id = $params['id'];
$sqlFetchFaculty = "SELECT * FROM faculty where id=$faculty_id";
$result = $conn->query($sqlFetchFaculty);
if ($result->num_rows > 0)
  $row = $result->fetch_assoc();
?>
<link rel="stylesheet" href="css/faculty_personal.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<div class="bg-secondary rounded-0 text-white">
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <h3 class="fw-bold faculty-heading">FACULTY</h3>
      </div>
    </div>
  </div>
</div>

<section class="bg-grey p-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="user-profile__avatar shadow-effect shadow-sm p-3 mb-5 bg-white rounded">
          <img class="img-responsive center-block rounded " src="./images/<?php echo $row['image']; ?>" alt="...">
          Faculty Name:
          <?php echo $row['name']; ?>
          <p>Designation:
            <?php echo $row['designation']; ?>
          </p>
          <div class="words">
            <ul class="list-unstyled mb-1-9">
              <li class="mb-2 mb-xl-3 display-28"><span
                  class="display-26 text-secondary me-2 font-weight-600">Ph.D:</span> <?php echo $row['phd']; ?></li>
              <li class="mb-2 mb-xl-3 display-28"><span
                  class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                <?php echo $row['email']; ?>
              </li>
              <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Contact
                  No.:</span>
                <?php echo $row['phone']; ?>
              </li>
              <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Personal
                  Website:</span> <a href=<?php echo $row['personalWebsite']; ?>>
                  <?php echo $row['personalWebsite']; ?>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <h3>Current Research</h3>
        <p style="font-size: 15px;">
        <?php 
          $researchAreas = $row['researchAreas'];
          $tempArray = explode ("|", $researchAreas);
          $index = 1;
          foreach ($tempArray as $value) {
            $index++;
          }
          if($index <= 2)
          {
            foreach ($tempArray as $value) {
              echo $value;
            }
          }
          else
          {
            $index = 1;
            foreach ($tempArray as $value) {
              echo $index.". $value <br>";
              $index++;
            }
          }
        ?>
        </p>
        <hr>
        <h3>Recent Publications</h3>
        <p style="font-size: 15px;">
        <?php
          $recent_publications = $row['recentPublications'];
          $tempArray = explode ("|", $recent_publications); 
          $index = 1;
          foreach ($tempArray as $value) {
            echo '<div class="portfolio__item">'.$index.". $value </div>";
            $index++;
          }
        ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>