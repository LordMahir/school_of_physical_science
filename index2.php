
<section id="news" class="p-3">
    <div class="my-5  container">
        
        <div class="row">
            <div class="col-md-8">
                <div class="row d-flex align-items-center">
                    <div class="col-1 d-flex align-items-center ">
                        <a role="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <div class="carousel-nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-10">
                        <!--Start carousel-->
                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <?php 
                                $sqlFetchNews = "SELECT newsTitle, newsImage, newsLink FROM news";
                                $result = $conn->query($sqlFetchNews);
                                $ct = 0;
                                $b=3;
                                $set = false;
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        if ($ct % $b == 0) {
                                            if ($ct == 0) {
                                                echo '<div class="carousel-item active">
                                                <div class="row">';
                                            } else {
                                                echo '<div class="carousel-item">
                                                <div class="row">';
                                            }
                                        }
                                        $ct++;
                                        if ($row['newsLink'] == 'news.jpg') {
                                            echo '<div class="col-12 col-md d-flex align-items-center justify-content-center">
                                                        <div class="card">
                                                            <img src="images/news/' . $row['newsImage'] . '" class="img-thumbnail" alt="...">
                                                            <div class="card-body">
                                                                <p class="card-text">' . $row['newsTitle'] . '</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                        } else {
                                            echo '<div class="col-4 col-md d-flex align-items-center justify-content-center">
                                                        <div class="card">
                                                            <img src="images/news/' . $row['newsImage'] . '" class="img-thumbnail" alt="..." style="max-height : 200px;">
                                                            <div class="card-body">
                                                                <p class="card-text">' . $row['newsTitle'] . '</p>
                                                                <a href="' . $row['newsLink'] . '" class="btn btn-secondary" target="_blank">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                                        }
                                        if ($ct % $b == 0) {
                                            echo '</div></div>';
                                        }
                                    }
                                    if ($ct % $b != 0) echo '</div></div>';
                                } else {
                                    echo "No news to show";
                                }
                                ?>
                            </div>
                        </div>
                        <!--End carousel-->
                    </div>
                    <div class="col-1 d-flex align-items-center justify-content-center"><a role="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <div class="carousel-nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
                                </svg>
                            </div>
                        </a>
                    </div>



                </div>
            </div>
            <!-- ============================================== -->

          
        </div>
    </div>
</section>

