<section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2>নতুন খোবর এবং আপডেট</h2>
                </div>

                <?php 

                    require_once 'backend/database/database.php';

                    $get_newses_data = "SELECT * FROM `latest_news` order by id DESC LIMIT 6";

                    $newses_query_result = mysqli_query($db,$get_newses_data);

                    foreach ($newses_query_result as $newses_value):
                       
                ?>
                    <div class="col-md-4 col-sm-4 col-6 blog-item">
                        <div>
                            <img src="backend/uploads/latest_new_img/<?= $newses_value['img'];  ?>" alt="" class="img-fluid">
                        </div>
                        <div class="blog-d">
                            <h3><?= $newses_value['title'];?></h3>
                            <i class="fa fa-user"></i><?= $newses_value['author_name'];  ?>
                            <ul>
                                <li><i class="fa fa-calendar"></i><?= $newses_value['date'];  ?></li>
                            </ul>
                            <p style="height:70px; overflow:hidden"></i><?= $newses_value['description'];  ?></p>
                            <a href="continue_reading.php?latest_news_id=<?= $newses_value['id']; ?>">continue reading <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                <?php
                    endforeach; 
                 ?>
            </div>
        </div>
    </section>