<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        $_SESSION['ses_UserRole'] = 4;
        $_SESSION['ses_userId'] = 1;
        $_SESSION['ses_userName'] = 'Asirini Wijayasinghe';
        //unset($_SESSION['ses_userName']);
        $_SESSION['ses_propNoOfRowsDisplay'] = 10;
    ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>My Dashboard - Library Information Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="style/prettyPhoto.css">   
  <!-- Star rating -->
  <link rel="stylesheet" href="style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="style/bootstrap-datetimepicker.min.css">
  <!-- jQuery Gritter -->
  <link rel="stylesheet" href="style/jquery.gritter.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="style/bootstrap-toggle-buttons.css">
  <!-- Main stylesheet -->
  <link href="style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="style/widgets.css" rel="stylesheet">   
  <!-- Responsive style (from Bootstrap) -->
  <link href="style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <!-- Menu button for smallar screens -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </a>
      <!-- Site name for smallar screens -->
      <a href="index.php" class="brand"><span class="bold">LIMS </span>- Kotahena Central College</a>

      <!-- Navigation starts -->
      <div class="nav-collapse collapse">        



        <!-- Links -->
        <?php
            if ((isset($_SESSION['ses_userName'])) && $_SESSION['ses_userName'] != '')
            {
        ?>
        <ul class="nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img src="img/user.jpg" alt="" class="nav-user-pic" /> <?php echo $_SESSION['ses_userName']; ?> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-user"></i> Profile</a></li>
              <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
              <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
        <?php
            }
            else
            {
            ?>
            <ul class="nav pull-right">
          <li class="dropdown pull-right">            
              <a href="login.php">Login</a>
            </ul>
          </li>
          
            </ul>
        <?php
            }
            ?>

        <!-- Notifications -->
        <ul class="nav pull-right">
          


            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="error.html">
                <i class="icon-cog"></i> Users 
              </a>

                <ul class="dropdown-menu">
                  <li>
                    <!-- Heading - h5 -->
                    <h5><i class="icon-user"></i> Users</h5>
                    <!-- Use hr tag to add border -->
                    <hr />
                  </li>
                  <li>
                    <!-- List item heading h6-->
                    <a href="#">Ravi Kumar</a> <span class="label label-warning pull-right">Free</span>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <a href="#">Balaji</a> <span class="label label-important pull-right">Premium</span>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <a href="#">Kumarasamy</a> <span class="label label-warning pull-right">Free</span>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 

        </ul>

      </div>

    </div>
  </div>
</div>


<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="sidebar-inner">



          <!-- Search form -->
          <!--
          <div class="sidebar-widget">
            <form class="form-inline">
              <div class="input-append row-fluid">
                <input type="text" class="span8" placeholder="Search">
                <button type="submit" class="btn btn-info">Search</button>
              </div>
            </form>
          </div>
          -->

          <!--- Sidebar navigation -->
          <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
          <ul class="navi">

            <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

            <li class="nyellow current"><a href="myDashboard.php"><i class="icon-desktop"></i> Dashboard</a></li>
            
            <li class="ngreen"><a href="myClass.php"><i class="icon-dashboard"></i> Class</a></li>

            <!-- Menu with sub menu -->
            <li class="has_submenu ngreen">
              <a href="#">
                <!-- Menu name with icon -->
                <i class="icon-th"></i> Widgets 
                <!-- Icon for dropdown -->
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>

              <ul>
                <li><a href="widgets1.html">Widgets #1</a></li>
                <li><a href="widgets2.html">Widgets #2</a></li>
              </ul>
            </li>

            <li class="ngreen"><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>

            <li class="ngreen"><a href="ui.html"><i class="icon-sitemap"></i> UI Elements</a></li>

            <li class="has_submenu ngreen">
              <a href="#">
                <i class="icon-file-alt"></i> Pages #1
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>

              <ul>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="post.html">Make Post</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="statement.html">Statement</a></li>
                <li><a href="error-log.html">Error Log</a></li>
                <li><a href="support.html">Support</a></li>
              </ul>
            </li> 

            <li class="has_submenu ngreen">
              <a href="#">
                <i class="icon-file-alt"></i> Inventory
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>
              
              <ul>
                  <li><a href="invBooks.php">Books</a></li>
                <li><a href="error.html">Error</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul>
            </li> 

            <li class="ngreen"><a href="forms.html"><i class="icon-list"></i> Forms</a></li>

            <li class="ngreen"><a href="tables.html"><i class="icon-table"></i> Tables</a></li>

          </ul>




          <!-- Date -->

          <div class="sidebar-widget">
            <div id="todaydate"></div>
          </div>



        </div>

    </div>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
            <?php
            if ($_SESSION['ses_UserRole'] == 1 or $_SESSION['ses_UserRole'] == 2 or $_SESSION['ses_UserRole'] == 3 or $_SESSION['ses_UserRole'] == 4 or $_SESSION['ses_UserRole']== 5 or $_SESSION['ses_UserRole'] == 6 or $_SESSION['ses_UserRole'] == 7)
            {
        ?>
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">My Dashboard 
          <!-- page meta -->
          <span class="page-meta">List of your information</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
            <a href="index.php"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="myDashboard.php" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

          <!-- Today status. jQuery Sparkline plugin used. -->

          <div class="row-fluid">
            <div class="span12"> 
              <!-- List starts -->
              <?php
                require './lib/util.php';
              
                $loggedInMemberId = $_SESSION['ses_userId'];
                $sql_getUserBookLoanDetails = "select count(lib_book_activity.book_reference_id) as rentals, count(if(((datediff(curdate(), lib_book_activity.lending_date)>10) and (datediff(curdate(), lib_book_activity.lending_date)<15)),1,NULL)) as attentions, count(if(datediff(curdate(), lib_book_activity.lending_date)>14,1,NULL)) as overdue_books
                                            from lib_book_activity
                                            inner join inv_books
                                            on inv_books.reference_id = lib_book_activity.book_reference_id
                                            where (lib_book_activity.returned_date is null or lib_book_activity.returned_date = '')
                                            and lib_book_activity.record_status = 'ACTIVE'
                                            and lib_book_activity.member_id = $loggedInMemberId;";
            
                $memberLendingCurrentStatus = executeSqlQuery($sql_getUserBookLoanDetails);
                while ($lendingCurrentStatusDr = mysqli_fetch_array($memberLendingCurrentStatus))
                {
                    $numberOfRentals = $lendingCurrentStatusDr['rentals'];
                    $numberOfAttentions = $lendingCurrentStatusDr['attentions'];
                    $numberOfOverDues = $lendingCurrentStatusDr['overdue_books'];
                }
                
                $sql_getLatestBorrowingsForUser = "select lib_book_activity.member_id,inv_books.reference_id, inv_books.book_title_en, inv_books.author_name, lib_book_activity.lending_date, date_add(lending_date, interval 14 day) as due_date, datediff(curdate(), lib_book_activity.lending_date) as days_in_loan
                                                    from inv_books
                                                    inner join lib_book_activity
                                                    on inv_books.reference_id = lib_book_activity.book_reference_id
                                                    where (lib_book_activity.returned_date is null or lib_book_activity.returned_date = '')
                                                    and lib_book_activity.record_status = 'ACTIVE'
                                                    and lib_book_activity.member_id = $loggedInMemberId
                                                    order by days_in_loan desc, lib_book_activity.lending_date desc, lib_book_activity.book_activity_id desc;";
                $latestBorrowingOfUserRs = executeSqlQuery($sql_getLatestBorrowingsForUser);
                $numberOfBooksInBorrowByUser = mysqli_num_rows($latestBorrowingOfUserRs);
                
              ?>
              <ul class="today-datas">

                <!-- List #1 -->
                
                

                <li class="bgreen">
                  <!-- Graph -->
                  <div class="pull-left"><a href=""><i class="icon-book"></i></a></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold"><?php echo $numberOfRentals; ?></span> Rentals</div>
                    

                  <div class="clearfix"></div>
                </li>
                   <li class="borange">
                  <!-- Graph -->
                  <div class="pull-left"><a href=""><i class="icon-book"></i></a></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold"><?php echo $numberOfAttentions; ?></span> Attention</div>
                    

                  <div class="clearfix"></div>
                </li>
                
                <li class="bred">
                  <!-- Graph -->
                  <div class="pull-left"><a href=""><i class="icon-book"></i></a></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold"><?php echo $numberOfOverDues; ?></span> Overdue</div>
                    

                  <div class="clearfix"></div>
                </li>

              </ul> 
            </div>
          </div>

          <!-- Today status ends -->

          <!-- Dashboard Graph starts -->

          
          <!-- Dashboard graph ends -->

          <!-- Chats, File upload and Recent Comments -->
          


          <div class="row-fluid">
            <div class="widget wgreen">

                <div class="widget-head">
                    <div class="pull-left">Latest Borrowings <?php echo ($numberOfBooksInBorrowByUser != 0) ? '('.$numberOfBooksInBorrowByUser.')' : ''; ?></div>
                  <div class="widget-icons pull-right">
                      <!--<a href="#" class="btn btn-lims">Reserve Book</a>-->
                      <!--<a href="#" class="btn btn-warning">Reserve Book</a>-->
                      <!--<a href="#" class=""><i class="icon-plus-sign-alt icon-4x"></i></a>-->
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
                      <?php
                        if ($numberOfBooksInBorrowByUser > 0)
                        {
                            ?>

                    <table class="table  table-bordered ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Reference #</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Lending Date</th>
                          <th>Due Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $tableRowCount = 1;
                            
                            while($latestBorrowingOfUserDr = mysqli_fetch_array($latestBorrowingOfUserRs))
                            {
                                ?>
                            <tr>
                                <td><?php echo $tableRowCount++; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['reference_id']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['book_title_en']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['author_name']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['lending_date']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['due_date']; ?></td>
                                <td>
                                    <?php
                                        if ($latestBorrowingOfUserDr['days_in_loan'] <= 14)
                                        {
                                            echo '<span class="label label-success">Lending</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="label label-important">Overdue</span>';
                                        }
                                    ?>
                                </td>
                            </tr>

                          <?php
                            }
                          ?>
                      </tbody>
                    </table>
                      <?php
                        }
                        else
                        {
                            echo '<div class="padd">';
                            echo 'No books are borrowed by you';
                            echo '</div>';
                        }
                      ?>


                  </div>

                    <div class="widget-foot">

                      <div class="pagination pull-right">
                        <ul>
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      </div>
                      <div class="clearfix"></div> 

                    </div>

                </div>
      
          </div>

          <!-- User's book reserving informations -->
          
          <div class="row-fluid">
            <div class="widget wgreen">

                <div class="widget-head">
                    <div class="pull-left">Latest Reservations <?php echo ($numberOfBooksInBorrowByUser != 0) ? '('.$numberOfBooksInBorrowByUser.')' : ''; ?></div>
                  <div class="widget-icons pull-right">
                      <!--<a href="#" class="btn btn-lims">Reserve Book</a>-->
                      <!--<a href="#" class="btn btn-warning">Reserve Book</a>-->
                      <!--<a href="#" class=""><i class="icon-plus-sign-alt icon-4x"></i></a>-->
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
                      <?php
                        if ($numberOfBooksInBorrowByUser > 0)
                        {
                            ?>

                    <table class="table  table-bordered ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Reference #</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Lending Date</th>
                          <th>Due Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $tableRowCount = 1;
                            
                            while($latestBorrowingOfUserDr = mysqli_fetch_array($latestBorrowingOfUserRs))
                            {
                                ?>
                            <tr>
                                <td><?php echo $tableRowCount++; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['reference_id']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['book_title_en']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['author_name']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['lending_date']; ?></td>
                                <td><?php echo $latestBorrowingOfUserDr['due_date']; ?></td>
                                <td>
                                    <?php
                                        if ($latestBorrowingOfUserDr['days_in_loan'] <= 14)
                                        {
                                            echo '<span class="label label-success">Lending</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="label label-important">Overdue</span>';
                                        }
                                    ?>
                                </td>
                            </tr>

                          <?php
                            }
                          ?>
                      </tbody>
                    </table>
                      <?php
                        }
                        else
                        {
                            echo '<div class="padd">';
                            echo 'No books are borrowed by you';
                            echo '</div>';
                        }
                      ?>


                  </div>

                    <div class="widget-foot">

                      <div class="pagination pull-right">
                        <ul>
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      </div>
                      <div class="clearfix"></div> 

                    </div>

                </div>
      
          </div>
          
          <!-- end of user's book reserving information -->

        </div>
		  </div>

		<!-- Matter ends -->

    <?php
            }
            else
            {
                ?>
                
                <div class="page-head">
        <!-- Page heading -->
        <h2 class="pull-left"><div class="icon-lock"></div> Unauthorized 
          <!-- page meta -->
          <span class="page-meta">You don't have permission to view this page.</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.php"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">My Dashboard</a>
        </div>

        <div class="clearfix"></div>

	    </div>
                
                <?php
            }
        ?>
                </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->


<!-- Notification box starts -->
   

<!-- Notification box ends -->   

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="js/jquery-ui-1.10.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>

<script src="js/jquery.gritter.min.js"></script> <!-- jQuery Gritter -->
<script src="js/sparklines.js"></script> <!-- Sparklines -->
<script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="js/jquery.toggle.buttons.js"></script> <!-- Bootstrap Toggle -->
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/custom.js"></script> <!-- Custom codes -->
<script src="js/charts.js"></script> <!-- Custom chart codes -->

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 30; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 30; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#52b9e9", "#0aa4eb"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, 
                            fill: true,
                            fillColor: {
                              colors: [{
                                opacity: 0.05
                              }, {
                                opacity: 0.01
                              }]
                          }
                  },
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#fa3031", "#43c83c"]
             });


    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            width: 100,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});

/* Curve chart ends */
</script>

</body>
</html>