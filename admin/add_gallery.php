<?php
include 'check_session.php';

if (isset($_POST['submit'])) {
    include '../db_con.php';

    $target_dir = "gallery_uploads/";

    // Check if files are uploaded
    if (!isset($_FILES["image"])) {
        echo "Error: No files uploaded.";
        exit;
    }

    foreach ($_FILES["image"]["tmp_name"] as $key => $tmp_name) {
        if ($_FILES["image"]["error"][$key] !== 0) {
            echo "Error uploading file.";
            continue;
        }

        // Get file extension
        $file_ext = pathinfo($_FILES["image"]["name"][$key], PATHINFO_EXTENSION);

        // Generate unique file name
        $unique_name = uniqid('img_') . '.' . $file_ext;
        $target_file = $target_dir . $unique_name;

        // Move uploaded file
        if (move_uploaded_file($tmp_name, $target_file)) {
            // Insert into database
            $sql = "INSERT INTO gallery (image_path) VALUES ('$target_file')";
            $con->query($sql);
        }
    }

    header('Location: gallery_list.php');
    exit;
}
?>



<?php

    include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Gallery</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Profile Image </label>
                                    <input type="file" name="image[]" class="form-control file" multiple required>
                                </div>   
                                <div class="form-group col-md-6 mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary mt-2 ml-5">Submit</button>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .note-editable {
        height: 400px;
    }
    </style>
    <?php
    include('footer.php');
?>