<section id="gallary">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <h2>ফটোগ্যালারী</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-12">
                    <ul>
                        <li data-filter="all">All</li>
                        <li data-filter=".campusphoto">Campus Photo</li>
                        <li data-filter=".Cocurriculamactivities">Co-curriculam activities</li>
                        <li data-filter=".sports">sports</li>
                        <li data-filter=".successphoto">success photo gallery</li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-12 cont">
                    <div class="row">
                        <?php 

                            require_once 'backend/database/database.php';

                            $get_galaries = "SELECT * FROM  galaries WHERE galary_status=1";

                            $galary_query_result = mysqli_query($db,$get_galaries); 

                            foreach ($galary_query_result as $galary_value) {
                              ?>

                              <div class="col-md-4 col-sm-4 col-6 mix  <?= $galary_value['tag']; ?> ">
                            <img src="backend/uploads/galary_img/<?= $galary_value['galary_img'];  ?>" alt="">
                            </div>

                            <?php 
                                }
                            ?>
                        
                    </div>
                </div>
               
            </div>
        </div>
    </section>