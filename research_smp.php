<?php
include("db.php");
// include("dbremote.php");
// include("loadDump.php")
?>
<?php
include 'header.php';
?>
<div class="bg-secondary rounded-0 text-white research-heading">
   <div class="container p-3">
      <div class="row justify-content-center">
         <div class="col-sm-8">
            <h3 class="fw-bold">SOFT MATTER PHYSICS</h3>
         </div>
      </div>
   </div>
</div>
<section class=" p-3">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-sm-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
               <!-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
               </div> -->
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="images/research/SMP.jpg" class="d-block w-100" alt="...">
                  </div>
                  <!-- <div class="carousel-item">
                     <img src="images/5.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/2.jpg" class="d-block w-100" alt="...">
                  </div> -->
                  <!-- <div class="carousel-item">
                     <img src="images/4.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                     <img src="images/5.jpg" class="d-block w-100" alt="...">
                     </div> -->
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>

      </div>
   </div>
   
</section>
<section class="bg-grey p-3">
   <div class="rounded-0">
      <div class="container ">
         <div class="row ">
            <div class="col-sm-8">

               <!-- <p class="lead" align="justify">Research in this group is focused on a variety of problems in the areas of statistical physics and
                  condensed matter physics. Some specific examples are given below.
               </p> -->
            <ol class="lead">
            <?php
            $sqlFetchresearch = "SELECT * from research where page='smp'";
            $result = $conn->query($sqlFetchresearch);
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()){
                  echo'
               
                  <li class="fw-bold">'.$row['title'].'</li><br>
                  <p align="justify">'.$row['content'].'</p>
               '
            ;}}?>
            </ol>
            </div>
            <div class="col-sm-4">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Members
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <a href='research_smp_members.php'>Link to Members Page</a>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Announcements
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="card-body bg-header text-dark">
                              <p class="card-text">
                                 <marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3">
                                    <ul class="list-group">
                                    <?php
                                    $sqlFetchAnnouncements = "SELECT announcementTitle, announcementLink FROM research_announcements where page='smp'";
                                    $result = $conn->query($sqlFetchAnnouncements);
                                    if ($result->num_rows > 0) {
                                       while ($row = $result->fetch_assoc()) {
                                          echo '<li class="list-group-item"><i class="fas fa-calendar mx-2"></i><a href="' . $row['announcementLink'] . '"target="_blank" class="text-white">
                                            <i class="fas fa-bullhorn mx-2"></i>'
                                        . $row["announcementTitle"] . '</a></li>';
                                             }
                                          } else {
                                             echo "No announcements to show";
                                          }
                                          ?>
                                    </ul>
                                 </marquee>
                              </p>
                           </div>

                        </div>
                     </div>
                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
</section>

<?php
include 'footer.php';
?>