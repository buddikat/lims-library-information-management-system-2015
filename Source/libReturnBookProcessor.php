<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    session_start();
    //session_destroy();
    $_SESSION['ses_LoggedUserId'] = 21;
    $_SESSION['ses_UserRole'] = 4;
    $_SESSION['ses_userName'] = 'Asirini Wijayasinghe';
    //unset($_SESSION['ses_userName']);
    $_SESSION['ses_propNoOfRowsDisplay'] = 10;
    //$_SESSION['ses_ErrorMessage'] = NULL;
    
    require './lib/util.php';
    
//    $_POST['btnReturnBook'] = true;
//    $returnMemberId = 1;
//    $returnBookActivityId = 2;
//    $returnBookReferenceId = 8767;
    
    if ($_SESSION['ses_UserRole'] == 1 or $_SESSION['ses_UserRole'] == 4 or $_SESSION['ses_UserRole']== 5)
    {
        if (isset($_POST['btnReturnBook']))
        {
            $returnMemberId = $_POST['inputMemberID'];
            $returnBookActivityId = $_POST['inputBookActivityId'];
            $returnBookReferenceId = $_POST['inputBookReferenceID'];
            $loginUser = $_SESSION['ses_LoggedUserId'];
            
            $sql_saveReturnActivity = "call prc_add_member_book_return($returnBookActivityId, $returnMemberId, $returnBookReferenceId, $loginUser)";
                       
            if (insertDataFromSP($sql_saveReturnActivity) == 1)
            {
                $_SESSION['ses_ErrorMessage'] = "1|Book $returnBookReferenceId returned to library from $returnMemberId is success.";
                header('Location: libHome.php');
                exit();
            }
        }
    }