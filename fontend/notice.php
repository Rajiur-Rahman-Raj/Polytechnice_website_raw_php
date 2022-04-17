<div class="col-md-12 col-12 col-sm-4">
    <div class="notice">
        <h3>নোটিশ বোর্ড</h3>
        <div class="note-slick">


        <?php 

            require_once 'backend/database/database.php';

            $get_notices_data = "SELECT * FROM `notices` order by id DESC";

            $notice_query_result = mysqli_query($db,$get_notices_data);

            foreach ($notice_query_result as $notice_value) { 
            ?>

            <div class="note col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-1 col-12 col-sm-1 p-0">
                        <i class="fa fa-edit"></i>
                    </div>
                    <div class="col-md-11 col-sm-11 p-0 n">
                        <a href="notices.php?notice_id=<?= $notice_value['id']; ?>">
                           <h6 style="display: inline-block"><?php echo $notice_value['title'] ?></h6>
                            <p><i class="fa fa-calendar"></i><?php echo $notice_value['date']; ?></p> 
                        </a>
                        
                        
                    </div>
                </div>
            </div>

            <?php
               
            }


         ?>

            
            

        </div>
    </div>
</div>