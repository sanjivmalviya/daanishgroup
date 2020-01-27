<?php 
    
    require_once 'config/db.php';
    require_once 'config/session.php';
    
    $customers = getAllByOrder('tbl_customers','customer_id','DESC');
    
    if(isset($_POST['save_customer'])){
        
        if(!isExists('tbl_customers','customer_mobile',$_POST['customer_mobile'])){
            
            $form_data = array(
                'customer_name' => sanitize($_POST['customer_name']),
                'customer_company' => sanitize($_POST['customer_company']),
                'customer_mobile' => sanitize($_POST['customer_mobile']),
                'customer_email' => sanitize($_POST['customer_email']),
                'customer_address' => sanitize($_POST['customer_address'])
            );

            if(insert('tbl_customers',$form_data)){
                
                $success = "Customer added sucessfully";
                header('location:add_customer.php');
                
            }else{
                
                $error = "Error : Something went wrong !";

            }

        }else{
            
            $error = "Mobile number already exists";

        }

    }

    if(isset($_GET['edit'])){

        $edit_customer = getOne('tbl_customers','customer_id',$_GET['edit']);

        $customer_name = $edit_customer['customer_name'];
        $customer_company = $edit_customer['customer_company'];
        $customer_mobile = $edit_customer['customer_mobile'];
        $customer_email = $edit_customer['customer_email'];
        $customer_address = $edit_customer['customer_address'];

    }

    if(isset($_POST['update_customer'])){
        
        $customer_name = $_POST['customer_name'];
        $customer_company = $_POST['customer_company'];
        $customer_mobile = $_POST['customer_mobile'];
        $customer_email = $_POST['customer_email'];
        $customer_address = $_POST['customer_address'];

        $update = "UPDATE tbl_customers SET customer_name = '".$customer_name."',customer_company = '".$customer_company."',customer_mobile = '".$customer_mobile."',customer_email = '".$customer_email."',customer_address = '".$customer_address."' WHERE customer_id = '".$_GET['edit']."' ";
        
        if(query($update)){
            
            $success = "Customer updated sucessfully";
            
        }else{
            
            $error = "Error : Something went wrong !";

        }     

    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Customer</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Customer</h4>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <form method="POST">

                            <div class="row">

                            <div class="col-md-12">
                                <?php if(isset($success)){ ?>
                                <div class="alert alert-success"><?php echo $success; ?></div>
                                <?php }else if(isset($warning)){ ?>
                                <div class="alert alert-warning"><?php echo $warning; ?></div>
                                <?php }else if(isset($error)){ ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php } ?>
                            </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_name">Name</label>
                                        <input type="text" class="form-control" name="customer_name" id="customer_name" required="" tabindex="1" value="<?php if(isset($customer_name)){ echo $customer_name; } ?>" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_company">Company</label>
                                        <input type="text" class="form-control" name="customer_company" id="customer_company" required="" tabindex="1" value="<?php if(isset($customer_company)){ echo $customer_company; } ?>" >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_mobile">Mobile Number</label>
                                        <input type="number" class="form-control" name="customer_mobile" id="customer_mobile" tabindex="2" required value="<?php if(isset($customer_mobile)){ echo $customer_mobile; } ?>">
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_email">Email</label>
                                        <input type="email" class="form-control" name="customer_email" id="customer_email" tabindex="3" value="<?php if(isset($customer_email)){ echo $customer_email; } ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="customer_address">Address</label>
                                        <textarea class="form-control" name="customer_address" id="customer_address" tabindex="4"><?php if(isset($customer_address)){ echo $customer_address; } ?></textarea>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">

                                <div class="col-lg-12"> 
                                    <?php if(isset($_GET['edit'])){ ?> 
                                        
                                        <button type="submit" class="btn btn-danger" name="update_customer" tabindex="5" >Update</button>

                                    <?php }else{ ?>

                                        <button type="submit" class="btn btn-primary" name="save_customer" tabindex="5" >Save</button>

                                    <?php } ?>

                                </div>                            

                            </div>
                        
                        </form>
                    
                    </div>

                </div>

                <div class="row table-responsive m-t-10">

                        <?php if(count($customers) > 0){ ?>

                        <table class="table table-striped table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i=1; foreach($customers as $customer){ ?>
                                
                                    <tr id="tr_<?php echo $i; ?>">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $customer['customer_name']; ?></td>
                                        <td><?php echo $customer['customer_company']; ?></td>
                                        <td><?php echo $customer['customer_mobile']; ?></td>
                                        <td><?php echo $customer['customer_email']; ?></td>
                                        <td><?php echo $customer['customer_email']; ?></td>
                                        <td><?php echo $customer['created_at']; ?></td>
                                        <td class="text-center">

                                            <a href="add_customer.php?edit=<?php echo $customer['customer_id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

                                            <?php
                                                $delete_id = $customer['customer_id'];  
                                                $delete_array = array(
                                                'column' => array('customer_id'),
                                                'table' => array('tbl_customers')
                                                );
                                                $delete_info = json_encode($delete_array);
                                            ?>  
                                            <a href="javascript:;" data-delete-id="<?php echo $delete_id; ?>"
                                            data-delete-info='<?php echo $delete_info; ?>' data-tr-id="<?php echo $i; ?>"
                                            class="btn btn-danger btn-xs delete-record"><i class="fa fa-trash"></i></a>
                                         </td>
                                    </tr>
                                
                                <?php $i++; } ?>

                            </tbody>
                        </table>

                        <?php }else{ ?>

                            <div class="alert alert-success">No Customers Found</div>

                        <?php } ?>
                    
                    </div>

            </div>
        </div>

        <?php require_once('include/footer.php'); ?>
        
        <?php require_once('include/footerscripts.php'); ?>

        <script>
            $(document).on('ready', function(){
                
                $('#customer_name').focus();

            });

        </script>
        

    </body>
    
    

</html>
