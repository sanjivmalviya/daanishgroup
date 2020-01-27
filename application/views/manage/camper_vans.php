<!DOCTYPE html>
<html>

<head>
    <title>Camper Vans</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Camper Vans</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <table id="camper_vans" class="table table-striped table-condensed table-bordered">

                            <thead>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Country</th>
                                <th>Pickup Location</th>
                                <th>Pickup Date</th>
                                <th>Drop-off Location</th>
                                <th>Drop-off Date</th>
                                <th>Country of Residence</th>
                                <th>Driver Age</th>
                                <th>Vehicle Type</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </thead>

                            <tbody>

                                <?php if(isset($camper_vans)){ ?>

                                    <?php $i=1; foreach($camper_vans as $rs){ ?>
                                        <tr>    
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $rs->name; ?></td>                    
                                            <td><?php echo $rs->mobile_number; ?></td>                    
                                            <td><?php echo $rs->country; ?></td>                    
                                            <td><?php echo $rs->pickup_location; ?></td>                    
                                            <td><?php echo $rs->pickup_date; ?></td>                    
                                            <td><?php echo $rs->dropoff_location; ?></td>                    
                                            <td><?php echo $rs->dropoff_date; ?></td>                    
                                            <td><?php echo $rs->country_of_residence; ?></td>                    
                                            <td><?php echo $rs->driver_age; ?></td>                    
                                            <td><?php echo $rs->vehicle_type; ?></td>                    
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
    
        $('#camper_vans').DataTable();

    </script>

</html>
