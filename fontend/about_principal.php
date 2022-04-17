<div class="princi row">
    <?php 

        require_once 'backend/database/database.php';

        $select_query = "SELECT * FROM principal_message ORDER BY id ASC LIMIT 1";

        $P_result = mysqli_query($db, $select_query);

        $p_final_result = mysqli_fetch_assoc($P_result);

     ?>
        <div class="col-md-12 col-sm-12 p-sm-0 col-12">
            <h2><?= $p_final_result['title']; ?></h2>
        </div>
        <div class="col-md-2 col-sm-3 p-sm-0 col-12">
            <img class="img-fluid" src="backend/uploads/principal_img/<?= $p_final_result['principal_img']; ?>" alt="">
        </div>
        <div class="message col-md-10 col-sm-9 col-12">
            <p style="height:200px; overflow:hidden;"><?= $p_final_result['description']; ?></p>
            <a href="about_principal_read_more.php" style="float:right;color:white" class="bistarito">বিস্তারিত</a>
            <h4><?= $p_final_result['principal_name']; ?></h4>
            <span><?= $p_final_result['principal_designation'] ?><br><?= $p_final_result['institute_name']; ?></span>

        </div>
    </div>