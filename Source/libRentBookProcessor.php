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
    
    if ($_SESSION['ses_UserRole'] == 1 or $_SESSION['ses_UserRole'] == 4 or $_SESSION['ses_UserRole']== 5)
    {
        if (isset($_POST['btnAddLedingItem']))
        {
            $lendingMemberId = $_POST['inputMemberID'];
            $lendingBookReferenceId = $_POST['inputBookReferenceID'];
            $loginUser = $_SESSION['ses_LoggedUserId'];
            
            $sql_saveLendingActivity = "call prc_add_member_book_lending($lendingMemberId, $lendingBookReferenceId, $loginUser)";
                       
            if (insertDataFromSP($sql_saveLendingActivity) == 1)
            {
                $_SESSION['ses_ErrorMessage'] = "1|Book $lendingBookReferenceId lending to member $lendingMemberId is success.";
                header('Location: libHome.php');
                exit();
            }
        }
    }