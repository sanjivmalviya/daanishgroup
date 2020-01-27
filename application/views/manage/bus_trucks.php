<!DOCTYPE html>
<html>

<head>
    <title>Bus Trucks</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Bus Trucks</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <table id="bus_trucks" class="table table-striped table-condensed table-bordered">

                            <thead>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Pickup Country</th>
                                <th>Pickup Location</th>
                                <th>Drop-Off to Same Location</th>
                                <th>Pickup Date</th>
                                <th>Pickup Time</th>
                                <th>Drop-off Date</th>
                                <th>Drop-off Time</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </thead>

                            <tbody>

                                <?php if(isset($bus_trucks)){ ?>

                                    <?php $i=1; foreach($bus_trucks as $rs){ ?>
                                        <tr>    
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->pickup_country; ?></td>
                                            <td><?php echo $rs->pickup_location; ?></td>
                                            <td><?php if($rs->is_dropoff_at_same_location == '1'){ echo "Yes"; }else{ echo "No"; } ?></td>
                                            <td><?php echo $rs->pickup_date; ?></td>
                                            <td><?php echo $rs->pickup_time; ?></td>
                                            <td><?php echo $rs->dropoff_date; ?></td>
                                            <td><?php echo $rs->dropoff_time; ?></td>                         
                                            <td><?php if($rs->status == '1'){ echo "Done"; }else{ echo "Pending"; } ?></td>
                                            <td><?php echo $rs->created_at; ?></td>
                                        </tr>

                                    <?php } ?>
                                
                                <?php } ?>
                                
                            </tbody>

                        </table>

                    </div>

                </div>


            </div>
        </div>

        <?php require_once('include/footer.php'); ?>

    </body>
    
    <?php require_once('include/footerscripts.php'); ?>

    <script>
    
        $('#bus_trucks').DataTable();

    </script>

</html>
