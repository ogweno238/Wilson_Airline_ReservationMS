<?php include('header.php');
?>
<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse" style="background-color:#09C">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                        
                            <ul style="background-color:#036">
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
<li><a href="admin_view_booked_tickets.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                <?php echo "<li align='right'><a href=''>Hi ".$_SESSION['login_user']."</a></li>";?>
			</ul>
                                </div></div>
                        

                        <!-- end collapse -->
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">
                            </div>
                            <div class="span6">
                                
                                    <!-- end login -->
                                    <?php include('customer_modal.php'); ?>
                                    <?php include('signup_modal.php'); ?>
                                    <?php include('print_modal.php'); ?>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </div>


        </div>
        