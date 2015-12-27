<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        //session_distroy();
        $_SESSION['ses_userRole'] = 2;
        $_SESSION['ses_userName'] = 'Asirini Wijayasinghe';
        $_SESSION['ses_propNoOfRowsDisplay'] = 10;
    ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Dashboard - Library Information Management System</title>
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

            <li class="ngreen"><a href="myDashboard.php"><i class="icon-desktop"></i> Dashboard</a></li>
            
            <li class="ngreen"><a href="myClass.php"><i class="icon-dashboard"></i> Class</a></li>

            <!-- Menu with sub menu -->
            <li class="has_submenu ngreen">
              <a href="#">
                <!-- Menu name with icon -->
                <i class="icon-th"></i> Library 
                <!-- Icon for dropdown -->
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>

              <ul>
                  <li><a href="libHome.php">Rent/ Returns</a></li>
                <!--<li><a href="widgets1.html">Widgets #1</a></li>
                <li><a href="widgets2.html">Widgets #2</a></li>
                -->
              </ul>
            </li>
<!--
            <li class="ngreen"><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>

            <li class="ngreen"><a href="ui.html"><i class="icon-sitemap"></i> UI Elements</a></li>
-->
            <li class="has_submenu ngreen">
              <a href="#">
                <i class="icon-file-alt"></i> Financial
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>

              <ul>
                  <li><a href="finFinActivityList.php">Activities</a></li>
                  <li><a href="finManageMembers.php">Memberships</a></li>
                  <!--
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="post.html">Make Post</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="statement.html">Statement</a></li>
                <li><a href="error-log.html">Error Log</a></li>
                <li><a href="support.html">Support</a></li>
                  -->
              </ul>
            </li> 

            <li class="has_submenu ngreen">
              <a href="#">
                <i class="icon-file-alt"></i> Inventory
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>
              
              <ul>
                  <li><a href="invBooks.php">Books</a></li>
                  <li><a href="invPublications.php">Publications</a></li>
                  <li><a href="invDamagedBooks.php">Damages</a></li>
                  <!--
                <li><a href="error.html">Error</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="profile.html">Profile</a></li>
                  -->
              </ul>
            </li> 

            <li class="ngreen"><a href="forms.html"><i class="icon-list"></i> Administration</a></li>
<!--
            <li class="ngreen"><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
-->
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
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">Book Search 
          <!-- page meta -->
          <span class="page-meta">List of your information</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
            <a href="index.php"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
                <div class="container-fluid">
                    <div class="row-fluid">
                <div class="span12">
                    <div class="widget wgreen">
                    
                        <div class="widget-head">
                  <div class="pull-left">Book Search</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                        
                        <div class="widget-content">
                      <div class="padd">
                          
                          <form class="form-horizontal" method="post">
                              
                              <div class="control-group">
                        
                                  <div style="text-align: center;">
                            <input type="text" class="input-xxlarge" name="txtSearchPhrase" id="txtSearchPhrase" placeholder="Search Phrase">
                            <button type="submit" name="btnSubmit" class="btn btn-success">Search</button>
                        </div>
                      </div>
                         
                         </form>
                          
                  </div>
                </div>
                        
                    </div>
                </div>
                
                
                
            </div>
                </div>
            </div>

                <div class="container-fluid">
                <?php
                    require './lib/util.php';
                    
                    if (isset($_REQUEST['btnSubmit'])&& isset($_REQUEST['txtSearchPhrase']))
                            {
                                $searchText = trim($_REQUEST['txtSearchPhrase']);
                                //$sql_getSearchBooks = "select inv_books.*,ref_book_type.book_type_name,ref_book_status.book_status_name from inv_books inner join ref_book_status on inv_books.book_status = ref_book_status.book_status_id inner join ref_book_type on inv_books.book_type = ref_book_type.book_type_id where inv_books.book_title_en like '%$searchText%' and inv_books.record_status='ACTIVE'";
                                $sql_getSearchBooks = "select * from inv_books where book_title_en like '%$searchText%' and record_status='ACTIVE'";
                                $noOfSearchBooks = getNoOfRecordsReturns($sql_getSearchBooks);
                                
                ?>


          <div class="row-fluid">
            <div class="span12">
              <div class="widget wgreen">
                <div class="widget-head">
                  <div class="pull-left">Search Results</div>
                  <div class="widget-icons pull-right">
                      <a href="#"><i class="icon-plus"></i></a>
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                  
                  <div class="widget-content">
                    <table class="table  table-bordered ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Status</th>
                          <!--<th></th>
                          <th></th>-->
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          
                          <?php
                          
                            $books_rs = executeSqlQuery($sql_getSearchBooks);
                            
                            if ($noOfSearchBooks > 0)
                                {
                                    $tableRowCount = 1;
                            
                            
                            while($dataRow = mysqli_fetch_array($books_rs))
                            {
                                ?>
                        <tr>
                          <td><?php echo $tableRowCount++; ?></td>
                          <td><?php echo $dataRow['book_title_en']; ?></td>
                          <td><?php echo $dataRow['author_name']; ?></td>
                          <td><?php echo $dataRow['book_status']; ?></td>
                          <!--<td>Paid</td>
                          <td><span class="label label-success">Active</span></td>-->
                          <td>

                              <!--<button class="btn btn-mini btn-success"><i class="icon-ok"></i> </button>
                              <button class="btn btn-mini btn-warning"><i class="icon-pencil"></i> </button>
                              <button class="btn btn-mini btn-danger"><i class="icon-remove"></i> </button>-->
                              <?php
                              if ($dataRow['book_status'] == 'RESERVED')
                              {
                                  ?>
                              
                              <button class="btn btn-mini btn-success" title="Reserve"><i class="icon-check"></i> </button>
                          <?php
                              }
                              ?>
                          </td>
                        </tr>
                        <?php
                            }
                            //mysqli_close($dbConn);
                            ?>                                                          

                      </tbody>
                    </table>

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

          </div>
            
            <?php
            }
            else
            {
                echo 'No Records Found.';
            }
                            }
            unset($_REQUEST['btnSubmit']);
            unset($_REQUEST['txtSearchPhrase']);
            ?>
                </div>
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