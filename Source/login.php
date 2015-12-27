<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
    ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <link href="style/style.css" rel="stylesheet">
  <link href="style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->
  
  <?php
    require_once './lib/dbConn.php';
  ?>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <!-- Widget starts -->
            <div class="widget wgreen">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Login 
              </div>

              <div class="widget-content">
                <div class="padd">
                    
                    <?php
                        if (isset($_REQUEST['btnLoginSubmit']))
                        {
                            //echo 'Hi';
                            $inputUserName = $_REQUEST['inputUserName'];
                            $inputPassword = $_REQUEST['inputPassword'];
                            $encPassword = $_REQUEST['hiddenEncPassword'];
                            
                            if (($inputUserName == "") || ($inputPassword == ""))
                            {
                                echo '<div class="alert alert-error">Your inputs are missing. Please enter User name & Password.</div>';
                            }
                            else
                            {
                                $checkUserQry = "select login_account.login_account_id, login_account.login_name, login_account.password_enc, login_account.staff_member_id, login_account.login_role, concat(staff_members.staff_first_name, ' ', staff_members.staff_last_name) as member_name, staff_members.staff_type, staff_members.class_allocation
                                                from login_account
                                                inner join staff_members
                                                on staff_members.staff_id = login_account.staff_member_id
                                                where login_account.login_name = '$inputUserName' and login_account.password_enc = '$encPassword' and login_account.record_status = 'ACTIVE';";
                                //$checkUserQry = "select * from login_account where login_name = '$inputUserName' and password_enc = '$encPassword' and record_status = 'ACTIVE'";
                                $checkUserExe = mysqli_query($dbConn, $checkUserQry);
                                $checkUserResult = mysqli_num_rows($checkUserExe);
                                
                                if ($checkUserResult == 1)
                                {
                                
                                    while ($userDetailsDr = mysqli_fetch_array($checkUserExe))
                                    {
                                        //echo '<div class="alert alert-success">Success</div>';
                                        //$_SESSION['ses_userName'] = $inputUserName;
                                        $_SESSION['ses_userName'] = $userDetailsDr['member_name'];
                                        $_SESSION['ses_LoggedUserId'] = $userDetailsDr['login_account_id'];
                                        $_SESSION['ses_UserRole'] = $userDetailsDr['login_role'];
                                        $_SESSION['ses_ClassAllocation'] = $userDetailsDr['class_allocation'];
                                    }
                                    
                                    if ((isset($_SESSION['ses_ClassAllocation'])) && ($_SESSION['ses_ClassAllocation'] != NULL or $_SESSION['ses_ClassAllocation'] == ''))
                                    {
                                        header("Location: myClass.php");
                                        exit();
                                    }
                                    else
                                    {
                                        header("Location: myDashboard.php");
                                        exit();
                                    }
                                }
                                else
                                {
                                    echo '<div class="alert alert-error">No user available</div>';
                                }
                            }
                        }
                    ?>
                  <!-- Login form -->
                  <form class="form-horizontal" action="login.php" method="post">
                    <!-- User Name -->
                    <div class="control-group">
                      <label class="control-label" for="inputUserName">User Name</label>
                      <div class="controls">
                        <input type="text" id="inputUserName" name= "inputUserName" placeholder="User Name">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="control-group">
                      <label class="control-label" for="inputPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputPassword" name="inputPassword" placeholder="Password">
                        <input type="hidden" id="hiddenEncPassword" name="hiddenEncPassword">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="control-group">
                      <div class="controls">
                          <!--
                        <label class="checkbox">
                          <input type="checkbox"> Remember me
                        </label>
                          -->
                        <br>
                        <button type="submit" class="btn btn-success" id="btnLoginSubmit" name="btnLoginSubmit" onclick="document.getElementById('hiddenEncPassword').value = hex_md5(document.getElementById('inputPassword').value)">Login</button>
                        <button type="reset" class="btn">Reset</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
              <!--
                <div class="widget-foot">
                  Not Registred? <a href="#">Register here</a>
                </div>
              -->
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/md5-min.js"></script>
</body>
</html>