
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span style="color: #d81b1b;font-size: 12px;text-transform: uppercase;">বর্তমান খবর</span>
                    </div>
                    <div class="col-md-11 col-sm-10">
                         <?php 

                            require_once 'backend/database/database.php';

                            $get_notices_data = "SELECT * FROM `notices` order by id DESC";

                            $notice_query_result = mysqli_query($db,$get_notices_data);
                        ?>
                        <marquee style='color:#F39F40;'>  
                        <?php
                            foreach ($notice_query_result as $notice_value) { 
                                echo $notice_value['title']." / ";
                                
                            }
                        ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </section>