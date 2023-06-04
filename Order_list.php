<?php
include 'php/db_connect.php';
?>
<!doctype html>
<html lang="en">



<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Kids Stamp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.html">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- ICONS -->
    <!-- <link href="../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600,700" rel="stylesheet" />
    <!-- Font-Awesome css-->
    <link rel="stylesheet" href="fonts/fonts/font-awesome.min.css" />
    <!-- Font css-->
    <link rel="stylesheet" href="fonts/fonts/font.css" />
    <link rel="stylesheet" href="css/ilmosys-icon.css">
    <link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">
    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="js/vendors/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">

</head>


<body data-spy="scroll" data-target="#main-navbar">

    <!-- Preloader -->
    <!-- <div class="loader bg-blue">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->


    <div class="main-container" id="page">

        <!-- =========================
            HEADER 
        ============================== -->
        <header>
            <nav class="navbar-inverse navbar-lg navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand brand"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right navbar-login">
                            <li>
                                <a href="#contact"> <i class="fa fa-lock"></i> Buy Now</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#home">Home</a> </li>
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#features">Features</a> </li>
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#reviews">Reviews</a> </li>
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#pricing">Pricing</a> </li>
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#faq">FAQ</a> </li>
                            <li class="dropdown mm-menu"> <a class="page-scroll" href="#contact">Contact</a> </li>
                        </ul>
                    </div> -->
                </div>
            </nav>
        </header>

        <!-- =========================
           TIMETABLE
        ============================== -->
        <section id="timetable1-1" class="p-y-lg bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Customers Order List</h2>
                            <p class="lead">Please update the deliver Status here.</p>
                        </div>
                    </div>
                </div>
                <!-- Timetable Tab -->
                <div class="row">
                    <div class="col-md-12 timetable">


                        <!-- Tab Content -->
                        <div class="tab-content">
                            <!-- Tab Panel 1 -->
                            <div role="tabpanel" class="tab-pane fade in active" id="monday">
                                <div class="table-responsive text-center">

                                    <table class="table text-uppercase table-striped">
                                        <thead class="bg-purple text-white">
                                            <tr>
                                                <th>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </th>
                                                <th class="text-edit">S/N</th>
                                                <th class="text-edit">CUSTOMER NAME</th>
                                                <th class="text-edit">ORDER PACK</th>
                                                <th class="text-edit">PHONE NUMBER</th>
                                                <th class="text-edit">ADDRESS</th>
                                                <th class="text-edit">STATE</th>
                                                <th class="text-edit">ORDER DATE & TIME</th>
                                                <th class="text-edit">DELIVERY STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = mysqli_query($conn, "SELECT * FROM kid_stamp ORDER BY id DESC");
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr id="<?php echo $row["id"]; ?>">
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                                                            <label for="checkbox2"></label>
                                                        </span>
                                                    </td>

                                                    <th scope="row"><?php echo $row['id']; ?></th>
                                                    <td><?php echo $row["name"]; ?></td>
                                                    <td><?php echo $row["package"]; ?></td>
                                                    <td><?php echo $row["phone"]; ?></td>
                                                    <td><?php echo $row["address"]; ?></td>
                                                    <td><?php echo $row["state"]; ?></td>
                                                    <td><?php echo $row["created_at"]; ?></td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                        <td data-id="<?php echo $row["id"]; ?>" data-pack="<?php echo $row["delivery_status"]; ?>"><?php echo $row["delivery_status"]; ?></td>
                                                    </a>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                                            <i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-pack="<?php echo $row["delivery_status"]; ?>" title="Edit">Edit Delivery Status</i>
                                                        </a>

                                                    </td>

                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div><!-- /End Tab-Panel 1 -->


                        </div><!-- /End Tab Content -->
                    </div><!-- /End Col-12 Timetable -->
                </div><!-- /End Row -->
                <!-- Section Footer -->
                <!-- <div class="col-md-8 col-md-offset-2 text-center m-t-lg wow fadeIn">
                    <h4 class="m-t f-w-900">Choose Your Classes and Start Your Training</h4>
                    <p class="p-opacity m-b-md">Quis dolorem architecto nemo, enim pariatur, aliquid laudantium voluptatum animi. Whoever you are and whatever you’re looking for, you’ll find your place at Getleads Yoga.</p>
                    <a href="#subscription6-1" class="btn btn-shadow btn-purple text-uppercase">Get your free week</a>
                </div> -->
            </div><!-- /End Main Container -->

        </section>
        <!-- /End Timetable Section -->
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="update_form">
                        <div class="modal-header">
                            <h4 class="modal-title">Update deliver report</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" id="id_u" name="id" class="form-control" required>
                                <label>Delivery Status/Report</label>
                                <input type="text" class="form-control" id="delivery_status" name="delivery_status">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label>Delivery Status/Report</label>
                            <input type="text" id="delivery_status" name="delivery_status" class="form-control" required>
                        </div> -->
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-red btn-shadow text-uppercase" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-shadow btn-purple text-uppercase" id="update">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copy">
        <div class="container">
            All rights reserved - Copyright &copy; <?php echo date("Y"); ?> Kid's Roller Stamp by <a href="#" style="color:aliceblue">Emerald Golden Global Ltd.</a>
        </div>
    </div>


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <!-- JAVASCRIPT =============================-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendors/slick/slick.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/vendors/jquery.easing.min.js"></script>
    <script src="js/vendors/stellar.js"></script>
    <script src="js/vendors/isotope/isotope.pkgd.js"></script>
    <script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendors/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendors/mc/main.js"></script>

    <script src="js/ajax.js"></script>


</body>

<!-- Mirrored from themes.netivo.it/getleads/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 15:45:06 GMT -->

</html>