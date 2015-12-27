<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once './dbConn.php';

//User roles
$GLOBALS['ADMINISTRATOR'] = 1;
$GLOBALS['PRINCIPAL'] = 2;
$GLOBALS['VISEPRINCIPAL'] = 3;
$GLOBALS['LIBRARIAN'] = 4;
$GLOBALS['ASSISTANTLIBRARIAN'] = 5;
$GLOBALS['TEACHER'] = 6;
$GLOBALS['NONACADEMIC'] = 7;


function getDefaultTimeStamp()
{
    return date('Y-m-d H:i:s');
}

function getTodayDate()
{
    return date('Y-m-d');
}

function insertDataFromSP($spCallQuery)
{
    require 'dbConn.php';
    
    if (mysqli_query($dbConn, $spCallQuery))
    {
        echo "New record created successfully";
        return 1;
    }
    else
    {
        echo "Error: " . $spCallQuery . "<br>" . mysqli_error($dbConn);
        return 0;
    }
}


function executeSqlQuery($sqlQuery)
{
    require 'dbConn.php';
    
    $recordSet = mysqli_query($dbConn, $sqlQuery);
    
    return $recordSet;
}

function getNextMaximumReferenceId()
{
    require 'dbConn.php';
    
    $maxReferenceIdRs = mysqli_query($dbConn, "select max(reference_id) from inv_books;");
    $noOfRowsReturns = mysqli_num_rows($maxReferenceIdRs);
    
    if ($noOfRowsReturns > 0)
    {
        $maxReferenceId = mysqli_fetch_array($maxReferenceIdRs)['max(reference_id)'];
        $maxReferenceId++;
    }
    else
    {
        $maxReferenceId = 1;
    }
    //$maxReferenceId = executeSqlQuery($maxReferenceIdRs);
    
    return $maxReferenceId;
}

function getNoOfRecordsReturns($sqlQuery)
{
    require 'dbConn.php';
    
    $recordSet = mysqli_query($dbConn, $sqlQuery);
    $numOfReturnedRows = mysqli_num_rows($recordSet);
    
    return $numOfReturnedRows;
}

function getTotalPaginationPages($totalNoOfDbRecords, $maxNumberForPage)
{
    return ceil($totalNoOfDbRecords/$maxNumberForPage);
}


function getLendingBookStatus($bookReferenceId)
{
    require 'dbConn.php';
    
    $isBookAvailableCheckQuery = "select * from inv_books where reference_id = $bookReferenceId and record_status = 'ACTIVE';";
    $recordSet1 = mysqli_query($dbConn, $isBookAvailableCheckQuery);
    $numOfReturnedRows = mysqli_num_rows($recordSet1);
    
    if ($numOfReturnedRows == 1)
    {
        $bookAvailabilityCheckQuery = "select * from lib_book_activity where book_reference_id = $bookReferenceId and (returned_date is NULL or returned_date = '') and record_status = 'ACTIVE';";
        $recordSet2 = mysqli_query($dbConn, $bookAvailabilityCheckQuery);
        $numOfReturnedRowsInActivity = mysqli_num_rows($recordSet2);
        
        if ($numOfReturnedRowsInActivity == 1)
        {
            return 1;
        }
        else
        {
            return 2;
        }
    }
    else
    {
        return 0;
    }
    //$bookAvailabilityCheckQuery = "select * from lib_book_activity where book_reference_id = $bookReferenceId and (returned_date = NULL or returned_date = '') and record_status = 'ACTIVE';";
    
}

function closeDbConnection()
{
    if($dbConn)
    {
        mysqli_close($dbConn);
    }
    else
    {
        echo 'Database connection is not closed properly.';
    }
}