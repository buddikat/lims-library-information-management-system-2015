<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
