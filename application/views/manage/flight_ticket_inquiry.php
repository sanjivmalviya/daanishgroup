<!DOCTYPE html>

<html>



<head>

    <title>Flight Ticket Inquiry</title>

    <?php require_once('include/headerscripts.php'); ?>

</head>

    

    <body>

    

        <?php require_once('include/header.php'); ?>

                

        <div class="wrapper">

            <div class="container">



                <div class="row">

                    <div class="col-sm-12">

                        <div class="page-title-box">

                            <h4 class="page-title">Flight Ticket Inquiries</h4>

                        </div>

                    </div>

                </div>



                <div class="row">

                    

                    <div class="col-md-12">

                        

                        <table id="flight_ticket_inquiries" class="table table-striped table-condensed table-bordered">



                            <thead>

                                <th>Sr.</th>

                                <th>Ticket Type</th>

                                <th>Name</th>

                                <th>Mobile Number</th>

                                <th>From</th>

                                <th>To</th>

                                <th>Trip</th>

                                <th>Date From</th>

                                <th>Date To</th>

                                <th>Cavity</th>

                                <th>Adults</th>

                                <th>Childrens</th>

                                <th>Infants</th>

                                <th>Is Cheapest</th>

                                <th>Status</th>

                                <th>Created at</th>

                            </thead>



                            <tbody>



                                <?php if(isset($flight_ticket_inquiries)){ ?>



                                    <?php $i=1; foreach($flight_ticket_inquiries as $rs){ ?>

                                        <tr>    

                                            <td><?php echo $i++; ?></td>

                                            <td><?php if($rs->ticket_type == '1'){ echo "<span class='text-primary'><b>Domestic</b></span>"; }else{ echo "<span class='text-danger'><b>International</b></span>"; } ?></td>

                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->location_from; ?></td>

                                            <td><?php echo $rs->location_to; ?></td>

                                            <td><?php if($rs->trip_type == '1'){ echo "One Way"; }else{ echo "Round Trip"; } ?></td>

                                            <td><?php echo $rs->date_from; ?></td>

                                            <td><?php echo $rs->date_to; ?></td>

                                            <td><?php if($rs->cavity == '1'){ echo "Economy Class"; }else if($rs->cavity == '2'){ echo "Business Class"; }else{ echo "First Class"; } ?></td>

                                            <td><?php echo $rs->adults; ?></td>

                                            <td><?php echo $rs->childrens; ?></td>

                                            <td><?php echo $rs->infants; ?></td>

                                            <td><?php if($rs->is_cheapest == '1'){ echo "Yes"; }else{ echo "No"; } ?></td>

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

