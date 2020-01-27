<!DOCTYPE html>
<html>

<head>
    <title>Car Hire</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Car Hire</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <table id="flight_ticket_inquiries" class="table table-striped table-condensed table-bordered">

                            <thead>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Pickup Location</th>
                                <th>Drop-off Location</th>
                                <th>Return to same location</th>
                                <th>Pickup Date</th>
                                <th>Pickup Time</th>
                                <th>Drop-off Date</th>
                                <th>Drop-off Time</th>
                                <th>Vehicle Type</th>
                                <th>Country of Residence</th>
                                <th>Driver Aged 25 to 75</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </thead>

                            <tbody>

                                <?php if(isset($car_hire)){ ?>

                                    <?php $i=1; foreach($car_hire as $rs){ ?>
                                        <tr>    
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->pickup_country; ?></td>
                                            <td><?php echo $rs->pickup_location; ?></td>
                                            <td><?php if($rs->is_return_to_same_location == '1'){ echo "Yes"; }else{ echo "No"; } ?></td>
                                            <td><?php echo $rs->pickup_date; ?></td>
                                            <td><?php echo $rs->pickup_time; ?></td>
                                            <td><?php echo $rs->dropoff_date; ?></td>
                                            <td><?php echo $rs->dropoff_time; ?></td>
                                            <td><?php echo $rs->vehicle_type." Seat(s)"; ?></td>
                                            <td><?php echo $rs->country_of_residence; ?></td>
                                            <td><?php if($rs->is_driver_aged_between_25_to_75 == '1'){ echo "Yes"; }else{ echo "No"; } ?></td>                                            
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
    
        $('#flight_ticket_inquiries').DataTable();

    </script>

</html>
