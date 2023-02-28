<?php
// include("loadDump.php");
include("db.php");
// include("dbremote.php");
?>
<?php
include 'header.php';
?>

<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="css/carousel.css">



<section class=" p-3">
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-label="Slide 1" aria-current="true"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3" class=""></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/home/3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/home/5.jpg" class="d-block w-100" alt="...">
                        </div>



                        <!-- <div class="carousel-item">
                     <img src="images/4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/5.jpg" class="d-block w-100" alt="...">
                  </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div id="sanjay2" class="card rounded-0" style="height:236px">
                    <div class="card-header fw-bold lead"><i class="fas fa-calendar-alt mx-2"></i> Upcoming <span
                            class="text-sps">Events</span></div>
                    <div class="card-body bg-header text-white" style="overflow-y:scroll">
                        <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $sqlFetchEvents = "SELECT eventTitle, eventLink FROM events where eventType = 'upcoming'";
                            $result = $conn->query($sqlFetchEvents);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<li class="list-group-item"><a href="' . $row['eventLink'] . '"target="_blank" class="text-white">
                                            <i class="fas fa-calendar mx-2"></i>'
                                        . $row["eventTitle"] . '</a></li>';
                                }
                            } else {
                                echo "No Upcoming Events";
                            }
                            ?>
                        </ul>
                        </p>
                    </div>
                </div>
                <div id="sanjay2" class="card rounded-0 " style="height:234px">
                    <div class="card-header fw-bold lead"><i class="fas fa-scroll mx-2"></i> Announcements</div>
                    <div class="card-body bg-header text-white" style=" overflow-y:scroll">

                        <p class="card-text">

                        <ul class="list-group">
                            <?php
                            $sqlFetchAnnouncements = "SELECT announcementTitle, announcementLink FROM announcements";
                            $result = $conn->query($sqlFetchAnnouncements);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<li class="list-group-item"><a href="' . $row['announcementLink'] . '"target="_blank" class="text-white">
                                            <i class="fas fa-bullhorn mx-2"></i>'
                                        . $row["announcementTitle"] . '</a></li>';
                                }
                            } else {
                                echo "Currently there are no announcements.";
                            }
                            ?>
                        </ul>

                        </p>
                    </div>
                </div>

            </div>

        </div>
</section>

<br>

<section class="bg-grey p-3">
    <div class="rounded-0">
        <div class="container ">
            <div class="row align-items-center">
                <h1 class="fw-bold" style="text-align:center;">Welcome to <span class="text-sps">School of Physical
                        Sciences</span></h1>
                <hr>
                <h1 class="fw-bold" style="text-align:center;"><span class="text-smss">Chair's Message <i
                            class="fas fa-pen-nib mx-2"></i></span></h1>
                <div class="col-sm-4">
                    <div class="card rounded-0 mx-auto">
                        <div class="bg-top rounded-0 shadow-sm py-3 px-3 text-center">
                            <img src="images/faculty/Suman.jpeg" alt="chair-image"
                                class="img-fluid  rounded-sqaure mb-3 img-thumbnail shadow-sm " width="200">
                            <p class="mb-2 text-white">
                                <strong>Dr. Suman Kalyan Pal</strong> <br>
                                <span class="text-warning">
                                    Professor of Physics<br>
                                    School of Physical Sciences<br>
                                    Indian Institute of Technology, Mandi </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <br>
                    <p align="justify">Welcome to the School of Physics Sciences (SPS), IIT Mandi. Formed in 2022 after
                        the dissolution of the School of Basic Sciences (SBS), the mission of SPS is to establish itself
                        as an internationally recognised fraternity of academics contributing to knowledge creation in
                        cutting-edge themes of the physical sciences; training future scientists and engineers via
                        rigorous academic programs. </p>
                    <p align="justify">Currently, fourteen bright faculty along with over fifty research scholars,
                        conduct research in cutting-edge themes of physics ranging from the physics of atoms, molecules,
                        and quarks to the dynamics of black holes and the early universe, from exploring exotic states
                        of matter to the physics of polymers and glasses. We offer a vibrant research ambience with
                        state-of-the-art experimental and high-performance computing facilities. </p>
                    <p align="justify">We also conduct teaching programs at the undergraduate, postgraduate, and
                        research levels. Students engage in research at both undergraduate and postgraduate levels,
                        often serving as authors in research publications and frequently presenting their research at
                        national and international conferences. Many of our alums have made us proud with their
                        outstanding academic and research achievements. We aim to foster a friendly and diverse
                        environment in our school, striving for excellence, equity, and inclusiveness.
                    </p>
                    <p align="justify">We wish you an enjoyable experience. Feel free to drop us a message in case you
                        have any queries. </p>
                    <div class="text-end">
                        <p class="mb-2">
                            <strong>Dr. Suman Kalyan Pal, <br>
                                (Chairperson, SPS IIT Mandi)
                            </strong>
                        </p>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

<!-- <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <img src="images2/img-1.jpg" alt="img" draggable="false">
        <img src="images2/img-2.jpg" alt="img" draggable="false">
        <img src="images2/img-3.jpg" alt="img" draggable="false">
        <img src="images2/img-4.jpg" alt="img" draggable="false">
        <img src="images2/img-5.jpg" alt="img" draggable="false">
        <img src="images2/img-6.jpg" alt="img" draggable="false">
        <img src="images2/img-7.jpg" alt="img" draggable="false">
        <img src="images2/img-8.jpg" alt="img" draggable="false">
        <img src="images2/img-9.jpg" alt="img" draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
      
</div> -->



<section id="news" class="p-3">
    <div class="my-5  container">
        <div class="row mb-2">
            <div class="col">
                <h1 class="fw-bold"> <span class="text-sps">News &1  Announcements</span></h1>
                <hr>

            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-8">
                <div class="row d-flex align-items-center"> -->
            <div class="col-1 d-flex align-items-center ">
                <a role="button" class="carousel-slider__control prev" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="prev">
                    <div class="carousel-nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="col-10">
                <!--Start carousel-->
                <section class="carousel-slider">
                    <div class="carousel-slider__container" data-multislide="true" data-step="4">
                    <?php
                    $sqlFetchNews = "SELECT newsTitle, newsImage, newsLink FROM news";
                    $result = $conn->query($sqlFetchNews);
                    $ct = 0;
                    $set = false;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // if ($ct % 3 == 0) {
                            //     if ($ct == 0) {
                            //         echo '<div class="carousel-item active">
                            //                     <div class="row">';
                            //     } else {
                            //         echo '<div class="carousel-item">
                            //                     <div class="row">';
                            //     }
                            // }
                            // $ct++;
                            if ($row['newsLink'] == 'news.jpg') {
                                echo '<div class="carousel-slider__item">
                                                        <div class="card">
                                                            <img src="images/news/' . $row['newsImage'] . '" class="img-thumbnail" alt="..." style="height : 200px;">
                                                            <div class="card-body">
                                                                <p class="card-text" style="display:-webkit-box; overflow:hidden; -webkit-line-clamp:3; -webkit-box-orient:vertical;">' . $row['newsTitle'] . '</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                            } else {
                                echo '<div class="carousel-slider__item">
                                                        <div class="card">
                                                            <img src="images/news/' . $row['newsImage'] . '" class="img-thumbnail" alt="..." style="height : 200px;">
                                                            <div class="card-body">
                                                                <p class="card-text" style="display:-webkit-box; overflow:hidden; -webkit-line-clamp:3; -webkit-box-orient:vertical;">' . $row['newsTitle'] . '</p>
                                                                <a href="' . $row['newsLink'] . '" class="btn btn-secondary" target="_blank">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                            }
                            // if ($ct % 3 == 0) {
                            //     echo '</div></div>';
                            // }
                        }
                        // if ($ct % 3 != 0)
                        //     echo '</div></div>';
                    } else {
                        echo "No news to show";
                    }
                    ?>
                    <!-- <button class="carousel-slider__control prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="carousel-slider__control next"><i class="fa-solid fa-chevron-right"></i></button> -->
<!--                     
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/521/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/522/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/523/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/524/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/525/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/526/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/527/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/528/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/529/700/700" alt="" width="100%">
                        </div>
                        <div class="carousel-slider__item">
                            <img src="https://picsum.photos/id/530/700/700" alt="" width="100%">
                        </div> -->
                    </div>
                </section>
                <!-- <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                
                            </div>
                        </div> -->
                <!--End carousel-->
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center"><a role="button"
                    class="carousel-slider__control next" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="next">
                    <div class="carousel-nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
                        </svg>
                    </div>
                </a>
            </div>



            <!-- </div>
            </div> -->
            <!-- ============================================== -->




        </div>
    </div>
</section>


<!-- <div class="container text-center my-3" id="sanjay">
    <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel1 slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item1 active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 1</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 2</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 3</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 4</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 5</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item1">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 6</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <h5 class="mt-2 fw-light">advances one slide at a time</h5>
</div>

<script>
    let items = document.querySelectorAll('.carousel1 .carousel-item1')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
</script>

 -->

<script src="js/carousel.js"></script>
<?php
include 'footer.php';
?>