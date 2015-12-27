<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require './lib/util.php';

if (isset($_GET['class']))
    {
    require './lib/dbConn.php';
        //echo 'Done'.$_GET['class'];
        $selectedClass  = $_GET['class'];
    
        $getAllStudentsOfTheClassQry = "select * from students where class_allocation = '$selectedClass' and record_status = 'ACTIVE';";
        
        $getAllStudentsInfo = mysqli_query($dbConn, $getAllStudentsOfTheClassQry);
        
        if(mysqli_num_rows($getAllStudentsInfo) != 0)
        {
            echo '<div class="row-fluid">';
                echo '<div class="widget wgreen">';
                echo '<div class="widget-head">';
                echo '<div class="pull-left">Membership Fee</div>';
                echo '<div class="widget-icons pull-right">';
                echo '<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>';
                echo '<a href="#" class="wclose"><i class="icon-remove"></i></a>';
                echo '</div>
                  <div class="clearfix"></div>
                </div>';
                
                echo '<div class="widget-content">';
                echo '<table class="table  table-bordered ">';
                echo '<thead>
                        <tr>
                          <th>#</th>
                          <th>Registration #</th>
                          <th>Student Name</th>
                          <th>Membership Status</th>
                          <th></th>
                        </tr>
                      </thead>';
                echo '<tbody>';
                
                $tableRowCountForClassStudents = 0;
                
            while ($studentInfoDr = mysqli_fetch_array($getAllStudentsInfo))
            {
                echo '<tr>';
                echo '<td>' . ++$tableRowCountForClassStudents . '</td>';
                echo '<td>' . $studentInfoDr['student_registration_id'] . '</td>';
                echo '<td>' . $studentInfoDr['student_first_name'] . ' ' . $studentInfoDr['student_last_name'] . '</td>';
                echo '<td>' . $tableRowCountForClassStudents . '</td>';
                echo '<td><button class="btn btn-mini btn-success"><i class="icon-ok"></i> </button></td>';
                echo '</tr>';
                //echo $studentInfoDr['student_registration_id'] . $studentInfoDr['student_first_name'] . '</br>';
            }
            
            echo '</tbody>
                    </table>
                  </div>';
            
            echo '</div>';
            echo '</div>';
        }
        else
        {
            echo 'No Student Informations found...';
        }
    }