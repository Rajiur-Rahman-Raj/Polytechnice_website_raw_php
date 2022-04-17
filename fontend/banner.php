<section id="banner">
    <div class="slide">
        <div id="mydiv">
            <div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">

                    <?php 
                        require_once 'backend/database/database.php';
                        $select_query ="SELECT * FROM slider_table WHERE slider_status = 1";

                        $get_slider_all = mysqli_query($db, $select_query);

                        foreach ($get_slider_all as $value) {
                            ?>

                        <div class="bim-1">
                            <img src="backend/uploads/slider_img/<?php echo $value['slider_img']; ?>" alt="" class="img-fluid">
                        </div>
                    <?php
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>