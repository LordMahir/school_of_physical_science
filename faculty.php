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
            <h3 class="fw-bold faculty-heading">FACULTY PROFILES</h3>
         </div>
      </div>
   </div>
</div>

<section class="bg-grey p-3">
   <div class="faculty-profiles container p-2" id="faculty-profiles">
      <div class="row justify-content-center">
         <?php
         $sqlFetchFaculty = "SELECT id, name,designation,email,phone,image,
            personalWebsite,researchText FROM faculty where designation='Chairperson & Professor'";
         $result = $conn->query($sqlFetchFaculty);
         if ($result->num_rows > 0) {
            // echo $result;
            while ($row = $result->fetch_assoc()) {
               echo ' 
                     <div class="col-xl-4 col-sm-12 mb-5">
                        <div class="card rounded-0 mb-3 my-2 thumbnail">
                           <div class="row no-gutters">
                              <div class="col-auto bg-top rounded-0 shadow-sm py-3 px-3 card-side">
                              <a href="faculty_personal.php?id=' . $row['id'] . '" target="_blank">
                                 <img src="images/' . $row['image'] . '" alt="faculty-image" width="100" class="img-fluid rounded-0 mb-3 img-thumbnail shadow-sm faculty-img">
                             </a> </div>
                              <div class="col">
                                 <div class="card-block px-2">
                                 <a href="faculty_personal.php?id=' . $row['id'] . '" target="_blank">
                                    <h4 class="mb-2 my-2 card-title"><span class="text-smss">' . $row['name'] . '</span></h4>
                                    <p class="my-2 text-success fw-bold" href="#"><span class="fa fa-user"></span> Chairperson & Professor</p>
            
            
                                    <p class="mb-2"><b>Email:</b><a href= "mailto: ' . $row['email'] . '"> ' . $row['email'] . '</a></p>
                                    <p class="mb-2"><b>Phone:</b> <a href="tel: ' . $row['phone'] . '">' . $row['phone'] . '</a></p>
                                    <p class="mb-2"  style="overflow:hidden;max-height:100px;"><b>Research Areas :</b> ' . $row['researchText'] . '</p>
                                    <a href=' . $row['personalWebsite'] . ' class="btn btn-outline-primary mb-2 button" target="_blank">Personal Webpage</a>
                                 </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  ';
            }
         }
         ?>
         <!-- Team item -->

      </div> 
      <div class="row justify-content-center">
         <?php
         $sqlFetchFaculty = "SELECT id,name,designation,email,phone,image,
            personalWebsite,researchText FROM faculty where designation != 'Chairperson & Professor'";
         $result = $conn->query($sqlFetchFaculty);
         while ($row = $result->fetch_assoc()) {
            echo '
               <div class="col-xl-4 col-sm-12 mb-5">
               <div class="card rounded-0 mb-3 my-2 thumbnail">
                  <div class="row no-gutters">
                  
                     <div class="col-auto bg-top rounded-0 shadow-sm py-3 px-3 card-side">
                     <a href="faculty_personal.php?id=' . $row['id'] . '" target="_blank">
                        <img src="images/' . $row['image'] . '" alt="faculty-image" width="100" class="img-fluid rounded-0 mb-3 img-thumbnail shadow-sm faculty-img">
                    </a> 
                    </div>
                    
                     <div class="col"><a href="faculty_personal.php?id=' . $row['id'] . '" button" target="_blank">
                        <div class="card-block px-2">
                        
                           <h4 class="mb-2 my-2 card-title"><span class="text-smss">' . $row['name'] . '</span></h4>
                           <p class="my-2 text-danger fw-bold" href="#"><span class="fa fa-user"></span> ' . $row['designation'] . '</p>
                           <p class="mb-2"><b>Email:</b> <a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></p>
                           <p class="mb-2"><b>Phone:</b><a href="tel:' . $row['phone'] . '"> ' . $row['phone'] . '</a></p>
                           <p class="mb-2" style="overflow:hidden;max-height:100px;"><b>Research Areas :</b> ' . $row['researchText'] . '</p>
                           <a href="' . $row['personalWebsite'] . '" class="btn btn-outline-primary mb-2 button" target="_blank">Personal Webpage</a>
                           
                        </div>
                        </a>
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