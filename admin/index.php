       
        <?php include 'check_session.php' ?>
        <?php
        include('../db_con.php');
        include('header.php');
        // Get total count of projects
        $total_banner = $con->query("SELECT COUNT(*) AS total FROM add_banner")->fetch_assoc()['total'];
        $total_query = $con->query("SELECT COUNT(*) AS total FROM contact")->fetch_assoc()['total'];
        $total_gallery = $con->query("SELECT COUNT(*) AS total FROM gallery")->fetch_assoc()['total'];
        ?>
      
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_banner; ?></h2>
                                <div class="m-b-5">Total Banners</div><i class=" widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/FFFFFF/external-honorary-mentions-of-great-soldiers-in-a-flag-badges-bold-tal-revivo.png" alt="google-blog-search"/></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_query; ?></h2>
                                <div class="m-b-5">Total Query</div><i class="widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png" alt="ask-question"/></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_gallery; ?></h2>
                                <div class="m-b-5">Total Gallery</div><i class="widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/sf-black/64/FFFFFF/gallery.png"/></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        include('footer.php');
        ?>