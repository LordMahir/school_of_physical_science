<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>School of Physical Sciences-IIT Mandi</title>
   <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="https://wing.iitmandi.ac.in/">
   <!-- PLEASE DO NOT REMOVE THIS LINKS-->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/home1.js"></script>
   <script src="js/counter.js"></script>
   <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/stylenew.css">
   <link rel="stylesheet" href="css/home1.css">
   <link rel="stylesheet" href="css/footer.css">
   

   <!-- <link rel="stylesheet" href="css/faculty_personal.css"> -->
   <!-- <link rel="stylesheet" href="css/people.css"> -->

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
   <section id="top">
      <div class="logo d-flex justify-content-center p-2">
         <a class="navbar-brand" href="#"><img src="images/iitlogo.png"></a>
         <div class="banner-caption align-items center ">

            <h3 class="fw-bold">School of Physical Sciences</h3>
            <h6>Indian Institute of Technology, Mandi(H.P.)</h6>
         </div>
      </div>
   </section>
   <header class="main-header">
      <nav class="navbar navbar-expand-lg main-nav px-0 bg-navbar ">
         <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
               <div class="hamburger-toggle">
                  <div class="hamburger">
                     <i class="fas fa-bars" style="color:#fff; font-size:21px;"></i>
                  </div>
               </div>
            </button>
            <div class="justify-content-center collapse navbar-collapse" id="navbar-content">
               <ul class="navbar-nav text-uppercase f1">
                  <li class="nav-item">
                     <a class="nav-link active active-first" aria-current="page" href="index.php" rel="noreferrer noopener">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">RESEARCH</a>
                     <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="research_amo.php" rel="noreferrer noopener">ATOMIC MOLECULAR AND OPTICAL PHYSICS </a></li>
                        <li><a class="dropdown-item" href="research_cmp.php" rel="noreferrer noopener">CONDENSED MATTER PHYSICS</a></li>
                        <li><a class="dropdown-item" href="research_smp.php" rel="noreferrer noopener">SOFT MATTER PHYSICS </a></li>
                        <li><a class="dropdown-item" href="research_hep.php" rel="noreferrer noopener">HIGH ENERGY PHYSICS</a></li>
                        <!-- <li><a class="dropdown-item" href="research_ac.php" rel="noreferrer noopener">ASTRONOMY AND COSMOLOGY</a></li> -->
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">PEOPLE</a>
                     <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="faculty.php" rel="noreferrer noopener">FACULTY</a></li>
                        <li><a class="dropdown-item" href="staff.php" rel="noreferrer noopener">STAFF</a></li>
                        <li><a class="dropdown-item" href="students.php" rel="noreferrer noopener">STUDENTS</a></li>
                        <li><a class="dropdown-item" href="alumni.php" rel="noreferrer noopener">ALUMNI</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown" style="text-transform: none;">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">PROGRAMS</a>
                     <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="programs_btech.php" rel="noreferrer noopener">B.Tech E.P.</a></li>
                        <li><a class="dropdown-item" href="programs_msc.php" rel="noreferrer noopener">M.Sc.</a></li>
                        <li><a class="dropdown-item" href="programs_phd.php" rel="noreferrer noopener">Ph.D.</a></li>
                        <li><a class="dropdown-item" href="programs_I-phd.php" rel="noreferrer noopener">I-Ph.D.</a></li>
                        <li><a class="dropdown-item" href="programs_dual.php" rel="noreferrer noopener">Dual Degree(P.G.+Ph.D)</a></li>

                     </ul>
                  </li>




                  <!-- <li class="nav-item">
                        <a class="nav-link" href="#">FACILITIES</a>
                        </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="events.php" rel="noreferrer noopener">EVENTS</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">RESOURCES</a>
                     <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="documents.php" rel="noreferrer noopener">DOCUMENTS</a></li>
                        <li><a class="dropdown-item" href="cafeteria.php" rel="noreferrer noopener">CAFETERIA</a></li>
                        <li><a class="dropdown-item" href="recreation.php" rel="noreferrer noopener">RECREATION</a></li>
                        <!-- <li><a class="dropdown-item" href="#" rel="noreferrer noopener">GALLERY</a></li> -->
                        <li><a class="dropdown-item" href="firstaid.php" rel="noreferrer noopener">FIRST AID CENTRE</a></li>
                        <li><a class="dropdown-item" href="centralfacilities.php" rel="noreferrer noopener">CENTRAL FACILITIES</a></li>
                        <li><a class="dropdown-item" href="transport.php" rel="noreferrer noopener">TRANSPORT</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">CAREER</a>
                     <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="https://iitmandi.ac.in/dofa/" rel="noreferrer noopener" target="_blank">Academic</a></li>
                        <li><a class="dropdown-item" href="https://iitmandi.ac.in/recruitment" rel="noreferrer noopener" target="_blank">Non-Academic</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link dropdown-item dropdown" href="contacts.php" target="_blank" rel="noreferrer noopener">CONTACTS</a>
                  </li>
               </ul>
               <!-- <form class="d-flex ms-auto">
                     <div class="input-group">
                         <input class="form-control border-0 mr-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-primary border-0" type="submit">Search</button>
                     </div>
                     </form> -->
            </div>
         </div>
      </nav>
      <!-- /.container -->
   </header>
