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

                        

                        <table id="hotel_inquiry_detail" class="table table-striped table-condensed table-bordered">


                            <thead>

                                <th>Sr.</th>

                                <th>Adults</th>

                                <th>Childrens</th>

                                <th>First Child Age</th>

                                <th>Second Child Age</th>

                            </thead>



                            <tbody>



                                <?php if(isset($hotel_inquiry_detail)){ ?>



                                    <?php $i=1; foreach($hotel_inquiry_detail as $rs){ ?>

                                        <tr>    

                                            <td><?php echo $i++; ?></td>

                                            <td><?php echo $rs->adults; ?></td>
                                            <td><?php echo $rs->childrens; ?></td>
                                            <td><?php echo $rs->first_children_age; ?></td>
                                            <td><?php echo $rs->second_children_age; ?></td>
                                            
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

    

        $('#hotel_inquiry_detail').DataTable();



    </script>



</html>

