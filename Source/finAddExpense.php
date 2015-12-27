<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        $_SESSION['ses_UserRole'] = 4;
        $_SESSION['ses_userName'] = 'Asirini Wijayasinghe';
        //unset($_SESSION['ses_userName']);
        $_SESSION['ses_propNoOfRowsDisplay'] = 10;
    ?>
<head>
    <?php include './lib/globalConfig.php'; ?>
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
    
    <?php
        require './lib/util.php';
        
        if (isset($_POST['btnBookSave']))
        {
            $bookReferenceNumber = trim($_POST['inputReferenceNo']);
            $bookCategoryNumber = trim($_POST['bookCategoryNo']);
            $bookTitleEn = trim($_POST['inputBookNameEn']);
            $bookType = trim($_POST['inputBookType']);
            $bookAuthorName = trim($_POST['inputAuthorName']);
            $bookPublisherName = trim($_POST['inputPublisherName']);
            $bookPublishedYear = trim($_POST['inputPublishedYear']);
            $bookPrice = trim($_POST['inputBookPrice']);
            $bookPages = trim($_POST['inputBookPages']);
            $bookSupplyMode = trim($_POST['inputSupplyMode']);
            $created_user = trim($_SESSION['ses_UserRole']);
            
            $checkBookReferenceNumberExist = "select reference_id from inv_books where reference_id = '".$bookReferenceNumber."' and record_status = 'ACTIVE'";
            
            if (getNoOfRecordsReturns($checkBookReferenceNumberExist) >= 1)
            {
                $_SESSION['ses_infoMsg'] = "The given 'Publication Name' is already exist.";
            }
            else
            {
            
            $addBookQuery = "call prc_add_book(" . $bookReferenceNumber . ", '" . $bookCategoryNumber . "', '" . $bookTitleEn . "', '" . strtoupper($bookType) . "', '" . $bookAuthorName . "', '" . $bookPublisherName . "', '" . $bookPublishedYear . "', " . $bookPrice . ", " . $bookPages . ", '" . $bookSupplyMode . "', $created_user)";
            
            insertDataFromSP($addBookQuery);
            }
        }
    ?>

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
      <a href="index.php" class="brand"><span class="bold"><?php echo $GLOBALS['APP_NAME']; ?> </span>- <?php echo $GLOBALS['SCHOOL_NAME']; ?></a>

      <!-- Navigation starts -->
      <div class="nav-collapse collapse">        



        <!-- Links -->
        <ul class="nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="img/user.jpg" alt="" class="nav-user-pic" /> <?php echo isset($_SESSION['ses_userName']) ? $_SESSION['ses_userName'] : 'Login'; ?> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-user"></i> Profile</a></li>
              <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
              <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>

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

            <li class="ngreen"><a href="#"><i class="icon-desktop"></i> Dashboard</a></li>

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

            <li class="has_submenu nyellow current open">
              <a href="#">
                <i class="icon-file-alt"></i> Financial
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>

              <ul>
                <li><a href="finFinActivityList.php">Activities</a></li>
                <li><a href="finManageMembers.php">Memberships</a></li>
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
            if ($_SESSION['ses_UserRole'] == 1 or $_SESSION['ses_UserRole'] == 4 or $_SESSION['ses_UserRole']== 5)
            {
        ?>
  	
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">Add  
          <!-- page meta -->
          <span class="page-meta">List of your information</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Books</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

          <!-- Today status. jQuery Sparkline plugin used. -->

          

          <!-- Today status ends -->

          <!-- Dashboard Graph starts -->

          
          <!-- Dashboard graph ends -->

          <!-- Chats, File upload and Recent Comments -->
          


          <div class="row-fluid">
            
            <div class="span12">
              <div class="widget wgreen">
                <div class="widget-head">
                  <div class="pull-left">Book Information</div>
                  <div class="widget-icons pull-right">
                      <a href="#"><i class="icon-plus"></i></a>
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                
                <div class="widget-content">
                  <div class="padd">
                    
                      <form class="form-horizontal" action="invNewBook.php" method="post">
                          <div class="row-fluid">
                              <div class="span6">
                                  <div class="control-group">
                                    <label class="control-label" for="inputReferenceNo">Reference #</label>
                                    <div class="controls">
                                        <input type="text" id="inputReferenceNo" name="inputReferenceNo" placeholder="Reference No" value="<?php echo strval(getNextMaximumReferenceId()); ?>">
                                    </div>
                                  </div>
                        <div class="control-group">
                            <label class="control-label" for="inputBookNameEn">Book Title</label>
                            <div class="controls">
                                <input type="text" id="inputBookNameEn" name="inputBookNameEn" placeholder="Book Title">
                            </div>
                        </div>
                                  <hr>
                                  <div class="control-group">
                            <label class="control-label" for="inputAuthorName">Author Name</label>
                            <div class="controls">
                                <input type="text" id="inputAuthorName" name="inputAuthorName" placeholder="Author Name">
                            </div>
                        </div>
                                  <div class="control-group">
                            <label class="control-label" for="inputBookPrice">Book Price</label>
                            <div class="controls">
                                <input type="text" id="inputBookPrice" name="inputBookPrice" placeholder="Price">
                            </div>
                        </div>
                                  <div class="control-group">
                            <label class="control-label" for="inputBookPages">Pages</label>
                            <div class="controls">
                                <input type="text" id="inputBookPages" name="inputBookPages" placeholder="Pages">
                            </div>
                        </div>
                              </div>
                              
                              <div class="span6">
                                  <div class="control-group">
                                    <label class="control-label" for="CategoryNo">Category #</label>
                                    <div class="controls">
                                        <input type="text" id="bookCategoryNo" name="bookCategoryNo" placeholder="Category No">
                                    </div>
                                  </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Book Type</label>
                            <div class="controls">
                                <select name="inputBookType">
                                    <option value="Lending" selected="">Lending</option>
                                    <option value="Reference">Reference</option>
                                </select>
                            </div>
                        </div>
                                  <hr>
                                  <div class="control-group">
                            <label class="control-label" for="inputPublisherName">Publisher Name</label>
                            <div class="controls">
                                <input type="text" id="inputPublisherName" name="inputPublisherName" placeholder="Publisher Name">
                            </div>
                        </div>
                                  <div class="control-group">
                            <label class="control-label" for="inputPublishedYear">Published Year</label>
                            <div class="controls">
                                <select name="inputPublishedYear">
                                    <?php
                                        $currentYear = date("Y");
                                        for($i = 1; $i <=20; $i++)
                                        {
                                            echo '<option value="'.$currentYear.'">'.$currentYear.'</option>';
                                            $currentYear--;
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                                  <div class="control-group">
                            <label class="control-label" for="inputSupplyMode">Supply Mode</label>
                            <div class="controls">
                                <select name="inputSupplyMode">
                                    <option value="Purchases" selected="">Purchases</option>
                                    <option value="Ministry of Education">Ministry of Education</option>
                                    <option value="Donation">Donation</option>
                                    <option value="Replacement">Replacement</option>
                                </select>
                            </div>
                        </div>
                              </div>
                              
                          </div>
                          <hr>
                          
                          <button type="submit" id="btnBookSave" name="btnBookSave" class="btn btn-success">Save</button>
                          <button type="reset" class="btn">Clear</button>
                          
                      </form>

                  </div>
                </div>

                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>

              </div> 
            </div>            
          </div>
          
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
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Books</a>
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