<div class="col-md-12 col-6 col-sm-4">
    <div class="link">
        <?php 

            require_once 'backend/database/database.php';
            $get_useful_links_data = "SELECT * FROM useful_links ORDER BY id DESC";
            $useful_links_query_result = mysqli_query($db,$get_useful_links_data);
            $after_assoc = mysqli_fetch_assoc($useful_links_query_result);
        ?>

        <h3>গুরুত্বপূর্ণ লিংক</h3>

        <ul>
            <?php 
                foreach ($useful_links_query_result as $useful_links_value) { 
             ?>
                <li><a href="<?= $useful_links_value['description']; ?>" target="_blank"><i class="fa fa-arrow-right"></i><?= $useful_links_value['feature']; ?></a></li>
            <?php
            } 
             ?>
        </ul>
    </div>
</div>