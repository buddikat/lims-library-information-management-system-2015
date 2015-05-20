<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <!--<meta charset="utf-8">-->
          <!-- Title and other stuffs -->
          <title>Dashboard - Metro King</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="keywords" content="">
          <meta name="author" content="">
        
        
          <!-- Stylesheets -->
          <link rel="stylesheet" href="style/bootstrap.css">
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
          <link rel="stylesheet" href="style/style.css">
          <!-- Widgets stylesheet -->
          <link rel="stylesheet" href="style/widgets.css">   
          <!-- Responsive style (from Bootstrap) -->
          <link rel="stylesheet" href="style/bootstrap-responsive.css">
          
        <title></title>
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
          <a href="index.php" class="brand">LIMS <span class="bold">Library Information And Management System</span></a>
    
          <!-- Navigation starts -->
          <div class="nav-collapse collapse">        
    
    
    
            <!-- Links -->
            <ul class="nav pull-right">
              <li class="dropdown pull-right">            
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <img src="img/user.jpg" alt="" class="nav-user-pic" /> Admin <b class="caret"></b>              
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
              
              <!-- Comment button with number of latest comments count -->
                <li class="dropdown dropdown-big">
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="icon-comments"></i> Chats <span   class="badge badge-info">6</span> 
                  </a>
    
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Heading - h5 -->
                        <h5><i class="icon-comments"></i> Chats</h5>
                        <!-- Use hr tag to add border -->
                        <hr />
                      </li>
                      <li>
                        <!-- List item heading h6 -->
                        <a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span>
                        <div class="clearfix"></div>
                        <hr />
                      </li>
                      <li>
                        <a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span>
                        <div class="clearfix"></div>
                        <hr />
                      </li>
                      <li>
                        <a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span>
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
    
                <!-- Message button with number of latest messages count-->
                <li class="dropdown dropdown-big">
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="icon-envelope-alt"></i> Inbox <span class="badge badge-important">6</span> 
                  </a>
    
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Heading - h5 -->
                        <h5><i class="icon-envelope-alt"></i> Messages</h5>
                        <!-- Use hr tag to add border -->
                        <hr />
                      </li>
                      <li>
                        <!-- List item heading h6 -->
                        <a href="#">Hello how are you?</a>
                        <!-- List item para -->
                        <p>Quisque eu consectetur erat eget  semper...</p>
                        <hr />
                      </li>
                      <li>
                        <a href="#">Today is wonderful?</a>
                        <p>Quisque eu consectetur erat eget  semper...</p>
                        <hr />
                      </li>
                      <li>
                        <div class="drop-foot">
                          <a href="#">View All</a>
                        </div>
                      </li>                                    
                    </ul>
                </li>
    
                <!-- Members button with number of latest members count -->
                <li class="dropdown dropdown-big">
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="icon-user"></i> Users <span   class="badge badge-success">6</span> 
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
    
    <div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="sidebar-inner">



          <!-- Search form -->
          <div class="sidebar-widget">
            <form class="form-inline">
              <div class="input-append row-fluid">
                <input type="text" class="span8" placeholder="Search">
                <button type="submit" class="btn btn-info">Search</button>
              </div>
            </form>
          </div>

          <!--- Sidebar navigation -->
          <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
          <ul class="navi">

            <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

            <li class="nred current"><a href="#"><i class="icon-desktop"></i> Dashboard</a></li>

            <!-- Menu with sub menu -->
            <li class="has_submenu nlightblue">
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

            <li class="norange"><a href="ui.html"><i class="icon-sitemap"></i> UI Elements</a></li>

            <li class="has_submenu nviolet">
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

            <li class="has_submenu nblue">
              <a href="#">
                <i class="icon-file-alt"></i> Pages #2
                <span class="pull-right"><i class="icon-angle-right"></i></span>
              </a>
              
              <ul>
                <li><a href="error.html">Error</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul>
            </li> 

            <li class="nred"><a href="forms.html"><i class="icon-list"></i> Forms</a></li>

            <li class="nlightblue"><a href="tables.html"><i class="icon-table"></i> Tables</a></li>

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
	      <h2 class="pull-left">Dashboard 
          <!-- page meta -->
          <span class="page-meta">Something Goes Here</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
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
              <ul class="today-datas">

                <!-- List #1 -->
                <li class="bred">
                  <!-- Graph -->
                  <div class="pull-left"><span id="todayspark1" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold">12,000</span> Visitors/Day</div>

                  <div class="clearfix"></div>
                </li>

                <li class="bgreen">
                  <!-- Graph -->
                  <div class="pull-left"><a href=""><i class="icon-group"></i></a></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold">30,000</span> Members</div>
                    

                  <div class="clearfix"></div>
                </li>
                   <li class="bgreen">
                  <!-- Graph -->
                  <div class="pull-left"><a href=""><i class="icon-group"></i></a></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold">30,000</span> Members</div>
                    

                  <div class="clearfix"></div>
                </li>


                <li class="blightblue">
                  <!-- Graph -->
                  <div class="pull-left"><span id="todayspark2" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold">15.66%</span> Bounce Rate</div>

                  <div class="clearfix"></div>
                </li>

                <li class="bviolet">
                  <!-- Graph -->
                  <div class="pull-left"><span id="todayspark3" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text pull-right"><span class="bold">$22,000</span> Total Profit</div>

                  <div class="clearfix"></div>
                </li> 
 
              </ul> 
            </div>
          </div>

          <!-- Today status ends -->

          <!-- Dashboard Graph starts -->

          <div class="row-fluid">
            <div class="span8">

              <!-- Widget -->
              <div class="widget wlightblue">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">Dashboard</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>             

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">

                    <!-- Bar chart (Blue color). jQuery Flot plugin used. -->
                    <div id="bar-chart"></div>


                  </div>
                </div>
                <!-- Widget ends -->

              </div>
            </div>

            <div class="span4">

              <div class="widget wblue">

                <div class="widget-head">
                  <div class="pull-left">Today Status</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>             

                <div class="widget-content">
                  <div class="padd">

                    <!-- Visitors, pageview, bounce rate, etc., Sparklines plugin used -->
                    <ul class="current-status">
                      <li>
                        <span id="status1"></span> <span class="bold">Visits : 2000</span> <i class="icon-arrow-up green"></i>
                      </li>
                      <li>
                        <span id="status2"></span> <span class="bold">Unique Visitors : 1,345</span> <i class="icon-arrow-down red"></i>
                      </li>
                      <li>
                        <span id="status3"></span> <span class="bold">Pageviews : 2000</span> <i class="icon-arrow-up green"></i>
                      </li>
                      <li>
                        <span id="status4"></span> <span class="bold">Pages / Visit : 2000</span> <i class="icon-arrow-down red"></i>
                      </li>
                      <li>
                        <span id="status5"></span> <span class="bold">Avg. Visit Duration : 2000</span> <i class="icon-arrow-down red"></i>
                      </li>
                      <li>
                        <span id="status6"></span> <span class="bold">Bounce Rate : 2000</span> <i class="icon-arrow-up green"></i>
                      </li>   
                      <li>
                        <span id="status7"></span> <span class="bold">% New Visits : 2000</span> <i class="icon-arrow-up green"></i>
                      </li>                                                                                                            
                    </ul>

                  </div>
                </div>

              </div>

            </div>
          </div>
          <!-- Dashboard graph ends -->

          <!-- Chats, File upload and Recent Comments -->
          <div class="row-fluid">

            <div class="span4">
              
              <!-- Chat Widget -->
              <div class="widget wgreen">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Chats</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
                      <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta">Ashok <span class="pull-right">3 hours ago</span></div>
                          Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li> 

                      <!-- Chat by other. Use the class "by-other". -->
                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                          Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>   

                      <li class="by-me">
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <div class="chat-meta">Ashok <span class="pull-right">4 hours ago</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>  

                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>                                                                                  

                    </ul>

                  </div>
                </div>


                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
                    <!-- Chat input box -->
                      <form class="form-inline">
                        <div class="input-append row-fluid">
                          <input type="text" class="span9" placeholder="Type your message">
                          <button type="submit" class="btn btn-info">Send</button>
                        </div>
                      </form>

                  </div>

              </div>

            </div>


            <!-- File Upload widget -->
            <div class="span4">

              <div class="widget wviolet">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">File Upload</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  <!-- File upload list starts -->
                  <ul class="file-upload">

                    <li>
                      <!-- Icon with file name -->
                      <strong><i class="icon-upload-alt green"></i> File_Name_Here.Mp3</strong>
                      <!-- Progress bar -->
                      <div class="progress progress-animated progress-striped">
                        <div class="bar bar-success" data-percentage="100"></div>
                      </div>
                      <!-- Upload details -->
                      <div class="file-meta">3.3 of 5MB - 5 mins - 1MB/Sec</div>
                      <!-- Buttons -->
                      <div class="btn-grou1p">
                        <button class="btn btn-mini btn-success"><i class="icon-play"></i> </button>
                        <button class="btn btn-mini btn-primary"><i class="icon-pause"></i> </button>
                        <button class="btn btn-mini btn-danger pull-right"><i class="icon-remove"></i> </button>
                      </div>
                    </li>

                    <li>
                      <strong><i class="icon-ok red"></i> Second_File.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Completed</div>
                    </li>

                    <li>
                      <strong><i class="icon-ok red"></i> Third_File_Here.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Stopped</div>
                    </li>
                                                           
                  </ul>

                </div>

                <div class="widget-foot">
                  <button class="btn pull-right">Clear All</button>
                  <div class="clearfix"></div>
                </div>

              </div>

              <div class="widget worange">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Browsers</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content referrer">
                  <!-- Widget content -->
                  
                  <table class="table  table-bordered ">
                    <tr>
                      <th><center>#</center></th>
                      <th>Browsers</th>
                      <th>Visits</th>
                    </tr>
                    <tr>
                      <td><img src="img/icons/chrome.png" alt="" />
                      <td>Google Chrome</td>
                      <td>3,005</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/firefox.png" alt="" />
                      <td>Mozilla Firefox</td>
                      <td>2,505</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/ie.png" alt="" />
                      <td>Internet Explorer</td>
                      <td>1,405</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/opera.png" alt="" />
                      <td>Opera</td>
                      <td>4,005</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/safari.png" alt="" />
                      <td>Safari</td>
                      <td>505</td>
                    </tr>                                                                    
                  </table>

                </div>
                  <div class="widget-foot">
                  </div>
              </div>

            </div>


            <!-- Project widget -->
            <div class="span4">
              <div class="widget wred">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Project</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  <!-- Task list starts -->
                  <ul class="project">

                    <li>
                      <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox"> 
                        <!-- Name -->
                        Hospital Management System
                      </p>

                      <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                      </p>

                      <div class="progress progress-striped">
                        <!-- Progress bar -->
                        <div class="bar bar-danger" style="width: 80%;"></div>
                      </div>
                    </li>


                    <li>
                      <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox">
                        <!-- Name -->
                        School Download System
                      </p>

                      <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                      </p>

                      <div class="progress progress-striped">
                        <!-- Progress bar -->
                        <div class="bar bar-success" style="width: 50%;"></div>
                      </div>
                    </li>

                    <li>
                      <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox"> 
                        <!-- Name -->
                        Question and Answers Script
                      </p>

                      <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                      </p>

                      <div class="progress progress-striped">
                        <!-- Progress bar -->
                        <div class="bar bar-success" style="width: 40%;"></div>
                      </div>
                    </li>                                                              

                  </ul>
                  <div class="clearfix"></div>  


                </div>
                <div class="widget-foot">

                </div>
              </div>
            </div>


            <!-- Server Status -->
            <div class="span4">
              <div class="widget wlightblue">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Server Status</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  
                  <table class="table  table-bordered ">
                    <tr>
                      <td>Domain</td>
                      <td>sitedomain.com</td>
                    </tr> 
                    <tr>
                      <td>IP Address</td>
                      <td>192.425.2.4</td>
                    </tr> 
                    <tr>
                      <td>Disk Space</td>
                      <td>600GB / 60000GB</td>
                    </tr> 
                    <tr>
                      <td>Bandwidth</td>
                      <td>1000GB / 2000GB</td>
                    </tr> 
                    <tr>
                      <td>PHP Version</td>
                      <td>5.1.1</td>
                    </tr> 
                    <tr>
                      <td>MySQL Databases</td>
                      <td>10</td>
                    </tr>                                                                                                     
                  </table>

                </div>
              </div>
            </div>


          </div>


          <div class="row-fluid">
            <div class="span6">
              <div class="widget wblue">
                <div class="widget-head">
                  <div class="pull-left">Curve Chart</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                    
                    <!-- Curve chart -->

                    <div id="curve-chart"></div>

                    <hr />
                    <!-- Hover location -->
                    <div id="hoverdata">Mouse hovers at
                    (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></div>          

                    <!-- Skil this line. <div class="uni"><input id="enableTooltip" type="checkbox">Enable tooltip</div> -->

                  </div>
                </div>
                <div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
              </div> 
            </div>
            <div class="span6">
              <div class="widget wgreen">
                <div class="widget-head">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                
                <div class="widget-content">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="control-group">
                                            <label class="control-label" for="title">Title</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="control-group">
                                            <label class="control-label" for="content">Content</label>
                                            <div class="controls">
                                              <textarea class="input-large" id="content"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="control-group">
                                            <label class="control-label">Category</label>
                                            <div class="controls">                               
                                                <select>
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="control-group">
                                            <label class="control-label" for="tags">Tags</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="tags">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                            <button type="submit" class="btn btn-info">Publish</button>
                                            <button type="submit" class="btn">Save Draft</button>
                                            <button type="reset" class="btn">Reset</button>
                                          </div>
                                      </form>
                                    </div>
                  

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

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
    
        <?php
        echo "hi";
        ?>
    </body>
</html>
