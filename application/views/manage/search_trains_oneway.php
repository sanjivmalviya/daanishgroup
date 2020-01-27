<!DOCTYPE html>

<html>



<head>

    <title>Train Inquiry - Oneway</title>

    <?php require_once('include/headerscripts.php'); ?>

</head>

    

    <body>

    

        <?php require_once('include/header.php'); ?>

                

        <div class="wrapper">

            <div class="container">



                <div class="row">

                    <div class="col-sm-12">

                        <div class="page-title-box">

                            <h4 class="page-title">Train Inquiries</h4>

                        </div>

                    </div>

                </div>



                <div class="row">

                    

                    <div class="col-md-12">

                        

                        <table id="train_oneway_inquiries" class="table table-striped table-condensed table-bordered">



                            <thead>

                                <th>Sr.</th>

                                <th>Name</th>

                                <th>Mobile Number</th>

                                <th>From</th>

                                <th>To</th>

                                <th>Departure Date</th>

                                <th>Departure Time</th>

                                <th>Booking Class</th>

                                <th>Adults</th>

                                <th>Childrens</th>

                                <th>Infants</th>

                                <th>Concessions</th>

                                <th>Status</th>

                                <th>Created at</th>

                            </thead>



                            <tbody>



                                <?php if(isset($train_oneway_inquiries)){ ?>



                                    <?php $i=1; foreach($train_oneway_inquiries as $rs){ ?>

                                        <tr>    

                                            <td><?php echo $i++; ?></td>

                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->location_from; ?></td>

                                            <td><?php echo $rs->location_to; ?></td>
                                            <td><?php echo $rs->departure_date; ?></td>
                                            <td><?php echo $rs->departure_time; ?></td>
                                            <td><?php echo $rs->booking_class; ?></td>

                                            <td><?php echo $rs->adults; ?></td>

                                            <td><?php echo $rs->childrens; ?></td>

                                            <td><?php echo $rs->infants; ?></td>
                                            <td><?php echo $rs->concessions; ?></td>

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

    

        $('#train_oneway_inquiries').DataTable();



    </script>



</html>

