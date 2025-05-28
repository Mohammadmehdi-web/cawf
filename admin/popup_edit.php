
<?php
include('footer.php');
?>
<?php
include 'check_session.php';
?>
<?php
    $user_id = $_GET['user_id'];
    include '../db_con.php';

 
    $user_id = mysqli_real_escape_string($con, $user_id);

 
    $que = "SELECT * FROM add_popup WHERE id = '$user_id'";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
       
        $sql = "UPDATE add_popup SET ";
        
        if (!empty($_FILES["image"]["tmp_name"])) {
            $target_file = "popup_uploads/" . basename($_FILES["image"]["name"]);
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
               
                $sql .= "image_path='$target_file' ";
            } else {
              
                echo "Error uploading the image.";
                exit();
            }
        }

     
        $sql .= "WHERE id='$user_id'";

        // Execute the SQL query
        if ($con->query($sql) === TRUE) {
            header('Location: popup_list.php'); 
            exit();
        } else {
            echo "Error: " . $con->error; 
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
                        <div class="ibox-title">Update Pop-Up Image</div>
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
