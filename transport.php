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
            <h3 class="fw-bold faculty-heading">TRANSPORT</h3>
         </div>
      </div>
   </div>
</div>

<section class="bg-grey p-3">
  <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#delToMan-tab-pane" type="button" role="tab" aria-controls="delToMan-tab-pane" aria-selected="true">Delhi to Mandi</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#chanToMan-tab-pane" type="button" role="tab" aria-controls="chanToMan-tab-pane" aria-selected="false">Chandigarh to Mandi</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#manToCamp-tab-pane" type="button" role="tab" aria-controls="manToCamp-tab-pane" aria-selected="false">Mandi to Campus</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#souToNor-tab-pane" type="button" role="tab" aria-controls="souToNor-tab-pane" aria-selected="false">Between North and south campus</button>
  </li>
</ul>
<div class="tab-content accordion" id="myTabContent">
  <div class="tab-pane fade show active accordion-item" id="delToMan-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

    <h2 class="accordion-header d-lg-none" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Delhi To Mandi</button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
      <div class="accordion-body">
        <ol>
          <li>
            <strong>By private bus/ HRTC bus/ taxi:</strong> <br> From ISBT (Interstate bus terminus) platforms 6-8, Kashmere gate, Delhi, one can catch buses towards Manali or Mandi. 
            You can opt for different types of buses ranging from ordinary to deluxe to AC. For more details, please visit hrtc.gov.in (Himachal Road Transport Corporation website). Other state buses and private buses are also available. The road distance between Delhi and Mandi is ~475 km. and it usually takes approximately 12 hrs (depending on traffic and other conditions) by bus. Traveling by taxi or personal vehicle reduces the journey time by nearly an hour.
          </li>
          <br>
          <li>
            <strong>By train:</strong> <br> The alternative to reaching Mandi from Delhi is to travel by train up to Kiratpur Sahib by Delhi-Una Himachal express (Train number 14553). It takes approximately 3.5 hrs to reach Mandi from Kiratpur by road. The Kiratpur Sahib railway station is very small and a bit far from the bus stand. All the buses coming from Delhi and Chandigarh towards Mandi, pass through Kiratpur Sahib. There are well-connected trains to Chandigarh from all parts of India.
          </li>
        </ol>
      </div>
    </div>

  </div>
  <div class="tab-pane fade accordion-item" id="chanToMan-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
    <h2 class="accordion-header d-lg-none" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Chandigarh to Mandi
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
      <div class="accordion-body">
        <ol>
          <li>
            <strong>By bus/taxi:</strong> 
            <br>
            From Chandigarh the buses to Mandi are available at Sector 43 bus stand. The other choice from Chandigarh to Mandi is to travel by taxi. The distance between Chandigarh and Mandi is ~200 kms. This distance can be covered in approximately 6 hrs by bus. By taxi, it usually takes around 5 hrs.
          </li>
          <br>
          <li>
            <strong>By Air:</strong> 
            <br>
            The most convenient way to travel by air is via Chandigarh airport. It is at the distance of 214 Kms and takes around 6 hours to reach IIT campus. Chandigarh is well-connected with non-stop flights from Delhi, Mumbai, Hyderabad and Bangalore and direct flights from Kolkata and Chennai.
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="tab-pane fade accordion-item" id="manToCamp-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
    <h2 class="accordion-header d-lg-none" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Mandi to campus
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
      <div class="accordion-body">
        <ol>
          <li>
            <strong>By IIT bus:</strong> 
            <br> 
            IIT Mandi's shuttle buses ply regularly between Mandi and Kamand. The bus route starts at IIT Mandi North/South campuses and ends at Mandav Block, bus stand, Mandi - the transit campus of IIT Mandi.
          </li>
          <br>
          <li>
            <strong>By taxi:</strong>
            <br>
            Taxis are stationed outside Mandi main bus stand 24 x 7. The cost of a one-way trip to the IIT campus is about Rs. 800/-
          </li>
          <br>
          <li>
            <strong>By HRTC Bus:</strong>
            <br>
            Himachal Road Transport Corporation/Local buses also ply between Mandi and Kamand. Please note that these buses sometimes can be crowded.
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="tab-pane fade accordion-item" id="souToNor-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
    <h2 class="accordion-header d-lg-none" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Between North Campus and South Campus
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFour" data-bs-parent="#myTabContent">
      <div class="accordion-body">
      Buses ply between both the campuses in every 15 and 30 minutes on weekdays and weekends. 
      <br>
      <a href="https://iitmandi.ac.in/files/bus_schedule.pdf" target="_blank">Bus Schedule</a>
      </div>
    </div>
  </div>
</div>
</section>

<?php
include 'footer.php';
?>
