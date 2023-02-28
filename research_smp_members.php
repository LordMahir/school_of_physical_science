<?php
include("db.php");
// include("loadDump.php");
//include("dbremote.php");
?>
<?php
include 'header.php';
?>

<div class="bg-secondary rounded-0 text-white">
   <div class="container p-3">
      <div class="row justify-content-center">
         <div class="col-sm-12">
            <h3 class="fw-bold faculty-heading">SOFT MATTER PHYSICS</h3>
         </div>
      </div>
   </div>
</div>

<section class="bg-grey p-3">
   <div class="faculty-profiles container p-2" id="faculty-profiles">
      <div class="row justify-content-center">
      <h3 style="text-align:center;">FACULTY</h3>
         <?php
         $sqlFetchFaculty = "SELECT id,name,designation,email,phone,image,
            personalWebsite,researchText FROM faculty where (id=12 or id=9 )";
         $result = $conn->query($sqlFetchFaculty);
         while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-xl-4 col-sm-12 mb-5">
               <div class="card rounded-0 mb-3 my-2 thumbnail">
                  <div class="row no-gutters">

                     <div class="col-auto bg-top rounded-0 shadow-sm py-3 px-3 card-side">
                        <a href="faculty_personal.php?id='.$row['id'].'" target="_blank">
                           <img src="images/'.$row['image'].'" alt="faculty-image" width="100" class="img-fluid rounded-0 mb-3 img-thumbnail shadow-sm faculty-img">
                        </a>
                     </div>

                     <div class="col"><a href="faculty_personal.php?id='.$row['id'].'" button" target="_blank">
                           <div class="card-block px-2">

                              <h4 class="mb-2 my-2 card-title"><span class="text-smss">'.$row['name'].'</span></h4>
                              <p class="my-2 text-danger fw-bold" href="#"><span class="fa fa-user"></span> '.$row['designation'].'</p>
                              <p class="mb-2"><b>Email:</b> <a href="mailto:'.$row['email'].'">'.$row['email'].'</a></p>
                              <p class="mb-2"><b>Phone:</b><a href="tel:'.$row['phone'].'"> '.$row['phone'].'</a></p>
                              <p class="mb-2" style="overflow:hidden;max-height:100px;"><b>Research Areas :</b> '.$row['researchText'].'</p>
                              <a href="'.$row['personalWebsite'].'" class="btn btn-outline-primary mb-2 button" target="_blank">Personal Webpage</a>

                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            ';
         }
         ?></div>
</section>

<section class="bg-grey p-3">
   <div class="faculty-profiles container p-2" id="faculty-profiles">
      <div class="row justify-content-center">
      <h3 style="text-align:center;">STUDENTS</h3>
         <?php
         $sqlFetchStudents = "SELECT id,name,email,image FROM students where page='smp'";
         $result = $conn->query($sqlFetchStudents);
         while ($row = $result->fetch_assoc()) {
            echo '
               <div class="col-xl-4 col-sm-12 mb-5">
               <div class="card rounded-0 mb-3 my-2 student-thumbnail">
                  <div class="row no-gutters">
                     <div class="col-auto bg-top rounded-0 shadow-sm py-3 px-3 student-card-side">
                    <img src="images/' . $row['image'] . '" alt="student-image" width="100" class="img-fluid rounded-0 mb-3 img-thumbnail shadow-sm faculty-img">
                    </div>
                    
                     <div class="col">
                        <div class="card-block px-2">
                        
                           <h4 class="mb-2 my-2 card-title"><span class="text-smss">' . $row['name'] . '</span></h4>
                           <p class="mb-2"><b>Email:</b> <a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></p>
                           
                           
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
               ';
         }
         ?>

         <!-- End -->
      </div>

   </div>
</section>
<?php
include 'footer.php';
?>