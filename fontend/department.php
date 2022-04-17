<div class="department row">
    <div class="col-md-12 col-sm-12 col-12">
        <h2>আমাদের বিভাগসমুহ</h2>
    </div>
    <?php 

        require_once 'backend/database/database.php';

        $get_department_data = "SELECT * FROM departments order by id DESC limit 6";

        $department_query_result = mysqli_query($db,$get_department_data); 
        ?>

        <?php 
            foreach($department_query_result as $department_value) {
        ?>

        <div class="col-md-4 col-sm-4 col-6  p-0 dep">
            <i class="<?= 'fa fa-'.$department_value['fontawesome']; ?>"></i>
            <h5><?= $department_value['department_name']; ?></h5>
            <ul>
                <li><?= $department_value['point_one']; ?></li>
                <li><?= $department_value['point_two']; ?></li>
                <li><?= $department_value['point_three']; ?></li>
            </ul>
        </div>

        <?php 
        }
         ?>
          
    
</div>