<?php
include("db.php");
// include("loadDump.php");
//include("dbremote.php");
?>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/transport.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<div class="bg-secondary rounded-0 text-white">
  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <h3 class="fw-bold faculty-heading">B.Tech E.P.</h3>
      </div>
    </div>
  </div>
</div>

<section class="bg-grey p-3" style="background-color:#fff !important;">
  <div class="row">
    <div class="col-sm-6">
      <br>
      <br>
      <p class="h5" style="color:blue;">Program Overview</p>
      <hr>
      <p>
			Engineering Physics (EP) at IIT Mandi is a unique program, which is designed to prepare graduates with a rigorous 
			foundation in Physics along with Engineering in order to tackle today’s technology challenges. EP will enhance the 
			cross-functionality and bridge the gap between pure science and traditional engineering disciplines which conventionally 
			are pursued independently. This is necessary because in today’s world major scientific and technological breakthroughs 
			happen in a multi-disciplinary environment where scientists from pure science work along with engineers. It is, therefore,
			highly important to inculcate both scientific and technological aspects, and the EP program will serve this purpose.
			</p>
      <p class="h5" style="color:blue;">Selection process</p>
      <hr>
      <p>IIT JEE</p>
      <p class="h5" style="color:blue;">Program structure</p>
      <hr>
      <p>
			The program consists of 8 semesters. The curriculum for EP at IIT Mandi introduces students to a wide variety of fields 
			in pure as well as applied Physics. The core courses cover basic areas in Physics, such as Quantum Mechanics, Condensed 
			Matter Physics; as well as basic courses in Mathematics and Engineering. In addition to the compulsory courses, students 
			will complete a certain number of elective courses in Physics intended to provide good exposure in various directions in 
			both theoretical and applied Physics.
			</p>
    </div>


    <!-- -------------------------------------- -->
    <div class="col-sm-6">
      <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Sem 1</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Sem 2</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Sem 3</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-4-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">Sem 4</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-5-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">Sem 5</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-6-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">Sem 6</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-7-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">Sem 7</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-8-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">Sem 8</button>
        </li>
      </ul>
      <div class="tab-content accordion" id="myTabContent">
        <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

          <h2 class="accordion-header d-lg-none" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Sem 1</button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">IC-110</th>
                    <td>Engineering Mathematics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-152</th>
                    <td>Data Science-1</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-152P</th>
                    <td>Data Science-1 Lab</td>
                    <td>2</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-160</th>
                    <td>Electrical Systems Around Us</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-160P</th>
                    <td>Electrical Systems Around Us</td>
                    <td>2</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-140</th>
                    <td>Graphics and Design</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-101P</th>
                    <td>Reverse Engineering</td>
                    <td>2</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-</th>
                    <td>HSS course</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-</th>
                    <td>HSS - Creative understanding</td>
                    <td>1</td>
                    <!-- <td>@twitter</td> -->
                  </tr>

                </tbody>

              </table>
              <a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>
            </div>
          </div>

        </div>
        <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Sem 2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">IC-111</th>
                    <td>Linear Algebra</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-252</th>
                    <td>Data Science-2</td>
                    <td>4</td>
                    <!-- <td>3</td> -->
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-161</th>
                    <td>Applied Electronics</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-161P</th>
                    <td>Applied Electronics Lab</td>
                    <td>2</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-142</th>
                    <td>Engineering Thermodynamics</td>
                    <td>4</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-141</th>
                    <td>Product Realization Technology</td>
                    <td>2</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-141P</th>
                    <td>Product Realization Technology Lab</td>
                    <td>2</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-</th>
                    <td>HSS course</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary " target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        <div class="tab-pane fade accordion-item" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">IC-121</th>
                    <td>Mechanics of particles and waves</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-130</th>
                    <td>Applied Chemistry for Engineers</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-130P</th>
                    <td>Chemistry Practicum</td>
                    <td>2</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-1, EP301</th>
                    <td>Engineering Mathematics-2</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-352</th>
                    <td>Data Science-3</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-240</th>
                    <td>Mechanics of Rigid Bodies</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-</th>
                    <td>HSS course</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        <div class="tab-pane fade accordion-item" id="tab-4-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 4
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">IC-221</th>
                    <td>Foundation of Electrodynamics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-222P</th>
                    <td>Physics Praticum</td>
                    <td>2</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-221</th>
                    <td>Signals and Systems</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-241</th>
                    <td>Material Science for Engineers</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-242</th>
                    <td>Continuum Mechanics</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-201P</th>
                    <td>Design Practicum</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC-136</th>
                    <td>Understanding Biotechnology & Its Applications</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        <div class="tab-pane fade accordion-item" id="tab-5-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 5
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">C-2, PH301</th>
                    <td>Quantum Mechanics and Applications</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-3, EE311</th>
                    <td>Device Electronics For Integrated Circuits</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-4, EP302</th>
                    <td>Computational Methods for Engineering</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DE-1</th>
                    <td>Discipline Elective -1</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DE-2</th>
                    <td>Discipline Elective -2</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">IC</th>
                    <td>HSS Course</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        
        <div class="tab-pane fade accordion-item" id="tab-6-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 6
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">C-5, PH302</th>
                    <td>Introduction To Statistical Mechanics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-6, PH501</th>
                    <td>Solid State Physics</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-7, EP401P</th>
                    <td>Engineering of Instrumentation</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">C-8, PH502</th>
                    <td>Photonics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">E</th>
                    <td>Open/Free Electives</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DP301P(E)</th>
                    <td>Interdisciplinary Socio-Technical Practicum(ISTP)</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        <div class="tab-pane fade accordion-item" id="tab-7-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 7
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">C-9, EP402P</th>
                    <td>Engineering Physics Practicum</td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DE-3</th>
                    <td>Discipline Elective</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DP401P(E)</th>
                    <td>MTP-I</td>
                    <td>4</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">E</th>
                    <td>Open/Free Electives</td>
                    <td>6</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
        <div class="tab-pane fade accordion-item" id="tab-8-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
          <h2 class="accordion-header d-lg-none" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Sem 8
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
            <div class="accordion-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Credits</th>
                    <!-- <th scope="col">Handle</th> -->
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">DE-4</th>
                    <td>Discipline Elective</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">DP402P(E)</th>
                    <td>MTP-II</td>
                    <td>5</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">E</th>
                    <td>Open/Free Electives</td>
                    <td>9</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/academics/files/B.TechEngg.Physics.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
      </div>
    </div>


</section>

<?php
include 'footer.php';
?>
