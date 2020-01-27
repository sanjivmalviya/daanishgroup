<?php 

    require_once 'config/db.php';
    require_once 'config/session.php';    
    $settings = getRaw('SELECT * FROM tbl_admin ORDER BY admin_id DESC LIMIT 1');
    $settings = $settings[0];

    if(isset($_POST['submit'])){

        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];

        $update = "UPDATE tbl_admin SET admin_username = '$admin_username' ";
        if(isset($admin_password)){            
            $update .= ",admin_password = '$admin_password' ";
        }

        $upload_dir = 'uploads/';
        $extensions = array('jpg','jpeg','png');     
        
        $company_header = array();
        foreach ($_FILES['company_header']["error"] as $key => $error) {

            if ($error == UPLOAD_ERR_OK) {  

                $tmp_name = $_FILES['company_header']["tmp_name"][$key];
                $file_name = $_FILES['company_header']["name"][$key];
                $extension = explode('.',$file_name);
                $file_extension = end($extension);

                if(in_array($file_extension, $extension)){
                    
                    $new_file_name = md5(uniqid()).".".$file_extension;             
                    $destination = $upload_dir.$new_file_name;
                    if(move_uploaded_file($tmp_name, $destination)){
                        $company_header[] = $new_file_name;
                    }
                }   

            }
        }

        if(count($company_header) > 0){
            $company_header = $company_header[0];
            if($settings['company_header'] != ""){
                unlink("uploads/".$settings['company_header']);
            }
            $update .= ",company_header = '$company_header' ";
        }

        $company_footer = array();
        foreach ($_FILES['company_footer']["error"] as $key => $error) {

            if ($error == UPLOAD_ERR_OK) {  

                $tmp_name = $_FILES['company_footer']["tmp_name"][$key];
                $file_name = $_FILES['company_footer']["name"][$key];
                $extension = explode('.',$file_name);
                $file_extension = end($extension);

                if(in_array($file_extension, $extension)){
                    
                    $new_file_name = md5(uniqid()).".".$file_extension;             
                    $destination = $upload_dir.$new_file_name;
                    if(move_uploaded_file($tmp_name, $destination)){
                        $company_footer[] = $new_file_name;
                    }
                }   

            }
        }

        if(count($company_footer) > 0){
            $company_footer = $company_footer[0];
            if($settings['company_footer'] != ""){
                unlink("uploads/".$settings['company_footer']);
            }
            $update .= ",company_footer = '$company_footer' ";
        }

        if(query($update)){
            $success = "Settings Updated";
            header('location:settings.php');
        }else{
            $error = "Failed to update settings";
        }

    }


?>

<!DOCTYPE html>
<html>

<head>
    <title>Customers</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Settings</h4>
                        </div>
                    </div>
                </div>

                <div class="row">

                	<form method="POST" enctype="multipart/form-data">

                        <div class="col-md-12">
                            <?php if(isset($success)){ ?>
                            <div class="alert alert-success"><?php echo $success; ?></div>
                            <?php }else if(isset($warning)){ ?>
                            <div class="alert alert-warning"><?php echo $warning; ?></div>
                            <?php }else if(isset($error)){ ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php } ?>
                        </div>

                		<div class="col-md-4">
                			<div class="form-group">
                				<label for="">Username</label>
                				<input type="text" class="form-control" value="<?php echo $settings['admin_username']; ?>" name="admin_username" required="">
                			</div>
                		</div>

                		<div class="col-md-4">
                			<div class="form-group">
                				<label for="">Password</label>
                				<input type="password" name="admin_password" class="form-control" value="">
                			</div>
                		</div>
						
						<div class="clearfix"></div>

                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="">Company Header</label>
                                <input type="file" name="company_header[]" class="form-control">
                            </div>
                            <img src="<?php echo "uploads/".$settings['company_header']; ?>" alt="" widht="90" height="90">
                		</div>

                		<div class="col-md-4">
                			<div class="form-group">
                				<label for="">Company Footer</label>
                				<input type="file" name="company_footer[]" class="form-control">
                			</div>
                            <img src="<?php echo "uploads/".$settings['company_footer']; ?>" alt="" widht="90" height="90">
                		</div>

                		<div class="col-md-12 m-t-10">
                			<div class="form-group">
                				<button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-cog"></i> Update Settings </button>	
                			</div>
                		</div>

                	</form>

                </div>

            </div>
        </div>

        <?php require_once('include/footer.php'); ?>

    </body>
    
    <?php require_once('include/footerscripts.php'); ?>

</html>
