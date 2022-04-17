<div class="col-md-12 col-6 col-sm-4">
    <div class="s-area">
        <h3>সু্যোগ - সুবিধা</h3>
        <?php 

            require_once 'backend/database/database.php';
            $get_stu_info_data = "SELECT * FROM student_info ORDER BY id DESC";
            $stu_info_query_result = mysqli_query($db,$get_stu_info_data);
        ?>


        <ul>
            <?php 
                foreach ($stu_info_query_result as $stu_info_value) { 
             ?>
                <li><a href="student_areas.php?student_id=<?= $stu_info_value['id'];?>"><i class="fa fa-arrow-right"></i><?= $stu_info_value['feature']; ?></a></li>
               
            <?php
            } 
             ?>
        </ul>
    </div>
</div>