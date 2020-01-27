<!DOCTYPE html>

<html>



<head>

    <title>River Cruise Inquiry</title>

    <?php require_once('include/headerscripts.php'); ?>

</head>

    

    <body>

    

        <?php require_once('include/header.php'); ?>

                

        <div class="wrapper">

            <div class="container">



                <div class="row">

                    <div class="col-sm-12">

                        <div class="page-title-box">

                            <h4 class="page-title">River Cruise Inquiries</h4>

                        </div>

                    </div>

                </div>



                <div class="row">

                    

                    <div class="col-md-12">

                        

                        <table id="river_cruise_inquiries" class="table table-striped table-condensed table-bordered">


                            <thead>

                                <th>Sr.</th>

                                <th>Name</th>

                                <th>Mobile Number</th>

                                <th>Cruise Line</th>

                                <th>Cruise Ship</th>

                                <th>Cruise Departure Port</th>

                                <th>Cruise Region</th>

                                <th>Cruise Date</th>

                                <th>Adults</th>
                                
                                <th>Childrens</th>

                                <th>Infants</th>

                                <th>Status</th>

                                <th>Created at</th>

                            </thead>



                            <tbody>



                                <?php if(isset($cruise_river_inquiries)){ ?>



                                    <?php $i=1; foreach($cruise_river_inquiries as $rs){ ?>

                                        <tr>    

                                            <td><?php echo $i++; ?></td>

                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->cruise_line; ?></td>

                                            <td><?php echo $rs->cruise_ship; ?></td>
                                            <td><?php echo $rs->cruise_departure_port; ?></td>
                                            <td><?php echo $rs->cruise_region; ?></td>
                                            <td><?php echo $rs->cruise_date; ?></td>

                                            <td><?php echo $rs->cruise_line_adults; ?></td>

                                            <td><?php echo $rs->cruise_line_childrens; ?></td>

                                            <td><?php echo $rs->cruise_line_infants; ?></td>

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

    

        $('#river_cruise_inquiries').DataTable();



    </script>



</html>

