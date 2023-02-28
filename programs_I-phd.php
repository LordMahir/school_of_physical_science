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
        <h3 class="fw-bold faculty-heading">I-Ph.D.</h3>
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
			This program is designed to attract bright and young minds to the front-line areas of research in physics. Students 
			enrolled in the Integrated Ph.D.(I-Ph.D) program, on successful completion, will be awarded two degrees: a Master of 
			Science (M.Sc.) in Physics and a Doctor of Philosophy (Ph.D.) degree. The entry qualification for this I-Ph.D. program 
			is a bachelor's Degree in physical/mathematical sciences. The I-Ph.D. program will have courses that cover both 
			fundamental and advanced areas of physics and has the aim of training the student to be capable of working in frontier 
			areas of science and technology.
			</p>
      <p class="h5" style="color:blue;">Selection process</p>
      <hr>
      <p>The shortlisted candidates based on their JAM ranking/score will have to undergo an online interview.</p>
      <p class="h5" style="color:blue;">Program structure</p>
      <hr>
      <p>
			All students admitted to this program will undergo coursework similar to that typically covered in a high-quality M.Sc. 
			program and coursework of a Ph.D. program. The continuation of the enrolled student in the I-Ph.D. program will be based 
			on the student’s consistent academic performance throughout the program. Students of the I-Ph.D. program will be able to 
			take a number of elective courses that are more focused on their research degree. Several elective courses will be made 
			available to the students to build a strong foundation in the area of his/her research interest.
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
                    <th scope="row">PH 511</th>
                    <td>Mathematical Physics</td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 512</th>
                    <td>Classical Mechanics</td>
                    <td>4</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 513</th>
                    <td>Quantum Mechanics</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 514</th>
                    <td>Electronics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 515P</th>
                    <td>Physics Laboratory</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
									<tr>
                    <th scope="row"></th>
                    <td>Technical Communications</td>
                    <td>1</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 516</th>
                    <td>Research Project I</td>
                    <td>2</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 517</th>
                    <td>Research Project II (Winter) </td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>

                </tbody>

              </table>
              <a href="https://www.iitmandi.ac.in/Schools/SBS/handbook_physics_aug2021.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>
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
                    <th scope="row">PH 521</th>
                    <td>Electromagnetic Theory</td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 522</th>
                    <td>Statistical Mechanics</td>
                    <td>4</td>
                    <!-- <td>3</td> -->
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 523</th>
                    <td>Cond. Matter Physics</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 524</th>
                    <td>Atom. Mol. Physics</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 525P</th>
                    <td>Electronics Lab. Pract.</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 526</th>
                    <td>Research Project III</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 527</th>
                    <td>Research Project IV (Summer)</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/Schools/SBS/handbook_physics_aug2021.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
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
                    <th scope="row">PH 611P</th>
                    <td>Exp. Res. Techniques</td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 614</th>
                    <td>Seminar and Report</td>
                    <td>2</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 613</th>
                    <td>Spe. Topics. in QM</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 615P</th>
                    <td>Mini Thesis-1</td>
                    <td>3</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elective</td>
                    <td>3</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elective</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/Schools/SBS/handbook_physics_aug2021.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
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
                    <th scope="row">PH 621</th>
                    <td>Comput. Meth. Physics</td>
                    <td>4</td>
                    <!-- <td>@mdo</td> -->
                  </tr>
                  <tr>
                    <th scope="row">PH 622</th>
                    <td>Mini Thesis –II</td>
                    <td>8</td>
                    <!-- <td>@fat</td> -->
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elective</td>
                    <td>3</td>
                    <!-- <td>@twitter</td> -->
                  </tr>
                  
                </tbody>
              </table>
							<a href="https://www.iitmandi.ac.in/Schools/SBS/handbook_physics_aug2021.pdf" class="btn btn-primary" target="_blank" tabindex="-1" role="button" aria-disabled="true">For more information</a>            </div>
          </div>
        </div>
      </div>
    </div>

</section>

<?php
include 'footer.php';
?>
