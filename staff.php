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
            <h3 class="fw-bold faculty-heading">STAFF</h3>
         </div>
      </div>
   </div>
</div>

<section class="bg-grey p-3">
   <div class="faculty-profiles container p-2" id="faculty-profiles">
      <div class="row justify-content-center">
            <div class="col-xl-4 col-sm-12 mb-5">
               <div class="card rounded-0 mb-3 my-2 thumbnail">
                     <div class="row no-gutters" style="flex-wrap:nowrap">
                              <div class="col-auto bg-top rounded-0 shadow-sm py-3 px-3 card-side">
                                 <img src="images/staff/akshay.jpg" alt="faculty-image" width="100" class="img-fluid rounded-0 mb-3 img-thumbnail shadow-sm faculty-img">
                              </div>
                              <div class="col">
                                 <div class="card-block px-2" style="word-wrap: break-word, display: inline-block">
                                       <h4 class="mb-2 my-2 card-title"><span class="text-smss">Akshay Kapoor</span></h4>
                                       <p class="my-2 text-success fw-bold" href="#"><span class="fa fa-user"></span> Office Assistant</p>
                                       <p class="mb-2"><b>Phone:</b> <a href="tel: 01905-267812">01905-267812</a></p>
                                       <p class="mb-2"><b>Email:</b><a href="spsoffice@iitmandi.ac.in">spsoffice@iitmandi.ac.in</a></p>
                                       <p class="mb-2"><b>Office:</b>School of Physical Science</p>
                                       <p class="mb-2"><b>Office Address:</b>Room No 300, 2nd Floor, A7 Building, South Campus</p>
                                 </div>
                              </div>
                     </div>
               </div>
            </div>  
         <!-- Team item -->
      </div>
   </div>
</section>

<?php
include 'footer.php';
?>