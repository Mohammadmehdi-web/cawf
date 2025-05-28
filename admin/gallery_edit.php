<?php
include 'check_session.php';
?>
<?php
    $user_id = $_GET['user_id']; // Get the user ID from the URL
    include '../db_con.php';

    // Sanitize user input
    $user_id = mysqli_real_escape_string($con, $user_id);

    // Fetch existing gallery data for this user
    $que = "SELECT * FROM gallery WHERE id = '$user_id'";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
        // Initialize SQL query with the fields to update
        $sql = "UPDATE gallery SET ";
        
        if (!empty($_FILES["image"]["tmp_name"])) {
            $target_file = "gallery_uploads/" . basename($_FILES["image"]["name"]);
            // Move uploaded file to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // If file is successfully uploaded, add image_path to the SQL query
                $sql .= "image_path='$target_file' ";
            } else {
                // Handle file upload failure
                echo "Error uploading the image.";
                exit();
            }
        }

        // Ensure we are updating the correct gallery ID
        $sql .= "WHERE id='$user_id'";

        // Execute the SQL query
        if ($con->query($sql) === TRUE) {
            header('Location: gallery_list.php'); // Redirect on success
            exit();
        } else {
            echo "Error: " . $con->error; // Handle SQL error
        }

        $con->close();
    }
    include('header.php');
?>

<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Gallery</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- Hidden field to store gallery ID -->
                                    <input type="hidden" name="gallery_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Image </label>
                                    <input type="file" name="image" class="form-control file">
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
<?php
include 'check_session.php';
?>
<?php
    $user_id = $_GET['user_id']; // Get the user ID from the URL
    include '../db_con.php';

    // Sanitize user input
    $user_id = mysqli_real_escape_string($con, $user_id);

    // Fetch existing gallery data for this user
    $que = "SELECT * FROM gallery WHERE id = '$user_id'";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
        // Initialize SQL query with the fields to update
        $sql = "UPDATE gallery SET ";
        
        if (!empty($_FILES["image"]["tmp_name"])) {
            $target_file = "gallery_uploads/" . basename($_FILES["image"]["name"]);
            // Move uploaded file to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // If file is successfully uploaded, add image_path to the SQL query
                $sql .= "image_path='$target_file' ";
            } else {
                // Handle file upload failure
                echo "Error uploading the image.";
                exit();
            }
        }

        // Ensure we are updating the correct gallery ID
        $sql .= "WHERE id='$user_id'";

        // Execute the SQL query
        if ($con->query($sql) === TRUE) {
            header('Location: gallery_list.php'); // Redirect on success
            exit();
        } else {
            echo "Error: " . $con->error; // Handle SQL error
        }

        $con->close();
    }
    include('header.php');
?>

<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Gallery</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- Hidden field to store gallery ID -->
                                    <input type="hidden" name="gallery_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Image </label>
                                    <input type="file" name="image" class="form-control file">
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
<?php
include 'check_session.php';
?>
<?php
    $user_id = $_GET['user_id']; // Get the user ID from the URL
    include '../db_con.php';

    // Sanitize user input
    $user_id = mysqli_real_escape_string($con, $user_id);

    // Fetch existing gallery data for this user
    $que = "SELECT * FROM gallery WHERE id = '$user_id'";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
        // Initialize SQL query with the fields to update
        $sql = "UPDATE gallery SET ";
        
        if (!empty($_FILES["image"]["tmp_name"])) {
            $target_file = "gallery_uploads/" . basename($_FILES["image"]["name"]);
            // Move uploaded file to the target directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // If file is successfully uploaded, add image_path to the SQL query
                $sql .= "image_path='$target_file' ";
            } else {
                // Handle file upload failure
                echo "Error uploading the image.";
                exit();
            }
        }

        // Ensure we are updating the correct gallery ID
        $sql .= "WHERE id='$user_id'";

        // Execute the SQL query
        if ($con->query($sql) === TRUE) {
            header('Location: gallery_list.php'); // Redirect on success
            exit();
        } else {
            echo "Error: " . $con->error; // Handle SQL error
        }

        $con->close();
    }
    include('header.php');
?>

<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Update Gallery</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <!-- Hidden field to store gallery ID -->
                                    <input type="hidden" name="gallery_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Image </label>
                                    <input type="file" name="image" class="form-control file">
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
