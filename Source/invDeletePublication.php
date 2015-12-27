<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    session_start();
    $_SESSION['ses_UserRole'] = 1;
    $_SESSION['ses_UserId'] = 2;
    $_SESSION['ses_userName']='Asirini Wijayasinghe';
    $_SESSION['ses_infoMsg'] = null;
    
    if(isset($_GET['pubId']))
    {
        $delPublicationId = trim($_GET['pubId']);
        $deleted_user = trim($_SESSION['ses_UserId']);
        
        require './lib/util.php';
        
        $deletePublicationQuery = "call prc_remove_publication($delPublicationId, $deleted_user)";
        
        insertDataFromSP($deletePublicationQuery);
        header('Location: invPublications.php');
        exit();
    }
