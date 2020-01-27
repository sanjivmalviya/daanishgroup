<!DOCTYPE html>
<html>

<head>
    <title>Airport Transfers</title>
    <?php require_once('include/headerscripts.php'); ?>
</head>
    
    <body>
    
        <?php require_once('include/header.php'); ?>
                
        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Airport Transfers</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <table id="airport_transfers" class="table table-striped table-condensed table-bordered">

                            <thead>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Pickup Location</th>
                                <th>Drop-off Location</th>
                                <th>Arrival Date</th>
                                <th>Arrival Time</th>
                                <th>Departure Time</th>
                                <th>Passengers</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </thead>

                            <tbody>

                                <?php if(isset($airport_transfers)){ ?>

                                    <?php $i=1; foreach($airport_transfers as $rs){ ?>
                                        <tr>    
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->pickup_point; ?></td>
                                            <td><?php echo $rs->dropoff_point; ?></td>
                                            <td><?php echo $rs->arrival_date; ?></td>
                                            <td><?php echo $rs->arrival_time; ?></td>
                                            <td><?php echo $rs->departure_time; ?></td>
                                            <td><?php echo $rs->passengers; ?></td>                                   
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
    
        $('#airport_transfers').DataTable();

    </script>

</html>
