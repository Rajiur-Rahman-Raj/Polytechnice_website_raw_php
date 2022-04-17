<section id="counter">
        <div class="count-overlay">
            <div class="container text-center">
                <div class="row">

                     <?php 

                        require_once 'backend/database/database.php';

                        $get_status_data = "SELECT * FROM status_table order by id ASC limit 4";

                        $status_query_result = mysqli_query($db,$get_status_data); 
                    ?>

                    <?php 
                        foreach($status_query_result as $stat_value) {
                    ?>
                    <div class="col-md-3 col-6 col-sm-3 county text-center">
                        
                            <i class="<?php echo 'fa fa-'.$stat_value['fontawesome']; ?>"></i>
                            <div class="count num"><?= $stat_value['stat_amount']; ?></div>
                            <p><?= $stat_value['state_name']; ?></p>
                    </div>
                  <?php 
                    }
                ?>
                </div>
            </div>
        </div>
    </section>