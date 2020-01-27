<!DOCTYPE html>

<html>



<head>

    <title>Hotels Inquiry</title>

    <?php require_once('include/headerscripts.php'); ?>

</head>

    

    <body>

    

        <?php require_once('include/header.php'); ?>

                

        <div class="wrapper">

            <div class="container">



                <div class="row">

                    <div class="col-sm-12">

                        <div class="page-title-box">

                            <h4 class="page-title">Hotel Inquiries</h4>

                        </div>

                    </div>

                </div>



                <div class="row">

                    

                    <div class="col-md-12">

                        

                        <table id="hotel_inquiries" class="table table-striped table-condensed table-bordered">


                            <thead>

                                <th>Sr.</th>

                                <th>Name</th>

                                <th>Mobile Number</th>

                                <th>City</th>

                                <th>Check in Date</th>

                                <th>Check out Date</th>

                                <th>Rooms</th>

                                <th>Status</th>

                                <th>View Details</th>

                                <th>Created at</th>

                            </thead>



                            <tbody>



                                <?php if(isset($hotel_inquiries)){ ?>



                                    <?php $i=1; foreach($hotel_inquiries as $rs){ ?>

                                        <tr>    

                                            <td><?php echo $i++; ?></td>

                                            <td><?php echo $rs->name; ?></td>
                                            <td><?php echo $rs->mobile_number; ?></td>
                                            <td><?php echo $rs->city; ?></td>

                                            <td><?php echo $rs->check_in_date; ?></td>
                                            <td><?php echo $rs->check_out_date; ?></td>
                                            <td><?php echo $rs->rooms; ?></td>

                                            <td><?php if($rs->status == '1'){ echo "Done"; }else{ echo "Pending"; } ?></td>

                                            <td>
                                                <a href="<?php echo base_url('/manage/hotels/detail/'.$rs->id); ?>" class="btn btn-primary btn-xs">View Detail</a>
                                            </td>
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

    

        $('#hotel_inquiries').DataTable();



    </script>



</html>

