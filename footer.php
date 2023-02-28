<?php ?>
<footer class="bg-footer p-4 text-white">
   <div class="container-fluid footer">
      <div class="container">
         <div class="row">

            <div class="col-sm-3">
               <br>
               <h4>Useful Links</h4>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="campus.php" target="_blank" class="text-white">Campus</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/files/bus_schedule.pdf" target="_blank" class="text-white">Bus Schedule</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="imp_contacts.php" class="text-white">Important contacts</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/women_centre.php" target="_blank" class="text-white">Women's Cell</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/new/tenders" target="_blank" class="text-white">Tenders</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/new/right-information" target="_blank" class="text-white">Right to Information</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/new" target="_blank" class="text-white">IIT Mandi Main Website</a></li>

            </div>
            <div class="col-sm-3">
               <br>
               <h4>For Members</h4>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://insite.iitmandi.ac.in/insite_wp/" target="_blank" class="text-white">Insite</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="hpc.php" target="_blank" class="text-white">HPC</a></li>
               <li class="list-group-item" id="bootstrap-override"><i class="fas fa-caret-right mx-2"></i><a href="https://iitmandi.ac.in/new/calendar" target="_blank" class="text-white">Holiday List</a></li>

            </div>
            <div class="col-sm-3">
               <br>
               <h4>Social Media</h4>
               <div class="icons">
                  <!-- <a href="#" target="_blank">
                     <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="#" target="_blank">
                     <i class="fab fa-facebook"></i>
                  </a>
                  <a href="#" target="_blank">
                     <i class="fab fa-twitter"></i>
                  </a> -->
                  <a href="https://youtube.com/@physicsiitmandi" target="_blank">
                     <i class="fab fa-youtube"></i>
                  </a>
               </div>
            </div>
            <div class="col-sm-3">
               <a class="d-inline-block iit-logo" href="#">
                  <img src="images/newlogo.png" class="img-fluid" alt="logoimage"></a>
               <h4>School of Physical Sciences</h4>

               <span style="margin-top: 5px;">Email:</span> spsoffice@iitmandi.ac.in<br>
               <span>Phone:</span> 01905-267812<br><br>

            </div>

         </div>
      </div>
   </div>
</footer>
</body>
<script>
   document.addEventListener('click', function(e) {
      // Hamburger menu
      if (e.target.classList.contains('hamburger-toggle')) {
         e.target.children[0].classList.toggle('active');
      }
   })
</script>

</html>