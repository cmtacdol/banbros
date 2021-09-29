<?php
if (file_exists("../config.php")) {
    include "../config.php";
} else {
    include "config.php";
}

function savePartners($formDetails, $filesData)
{
    global $pdo;

    $date_added = date("Y-m-d H:i:s");
    
    $directoryPath = str_replace(' ', '-', ''); // Replaces all spaces with hyphens.
    $directoryPath =  preg_replace('/[^A-Za-z0-9\-]/', '', $directoryPath);

    if ($filesData['ASSignature']['name'] != "") {
        $signature = imageUpload($directoryPath, $filesData['ASSignature']);
    } else {
        $signature = "";
    }

    if ($filesData['ArticlesofIncorporation']['name'] != "") {
        $ArticlesofIncorporation = imageUpload($directoryPath, $filesData['ArticlesofIncorporation']);
    } else {
        $ArticlesofIncorporation = "";
    }

    if ($filesData['DTIRegistration']['name'] != "") {
        $dtiRegistration = imageUpload($directoryPath, $filesData['DTIRegistration']);
    } else {
        $dtiRegistration = "";
    }

    if ($filesData['BusinessPermitOrMayorsPermit']['name'] != "") {
        $BusinessPermitOrMayorsPermit = imageUpload($directoryPath, $filesData['BusinessPermitOrMayorsPermit']);
    } else {
        $BusinessPermitOrMayorsPermit = "";
    }

    if ($filesData['AuthorizationtoVerifyBankHistory']['name'] != "") {
        $AuthorizationtoVerifyBankHistory = imageUpload($directoryPath, $filesData['AuthorizationtoVerifyBankHistory']);
    } else {
        $AuthorizationtoVerifyBankHistory = "";
    }

    if ($filesData['FinancialStatementsforthelast2years']['name'] != "") {
        $FinancialStatements = imageUpload($directoryPath, $filesData['FinancialStatementsforthelast2years']);
    } else {
        $FinancialStatements = "";
    }

    if ($filesData['BankStatementsforthelast3months']['name'] != "") {
        $BankStatementsft2 = imageUpload($directoryPath, $filesData['BankStatementsforthelast3months']);
    } else {
        $BankStatementsft2 = "";
    }

    if ($filesData['CompanyProfileFile']['name'] != "") {
        $CompanyProfileFile = imageUpload($directoryPath, $filesData['CompanyProfileFile']);
    } else {
        $CompanyProfileFile = "";
    }

    
    $data = [
            'GBusinessName' => $formDetails['BusinessName'],
            'GTaxNo' => $formDetails['TaxIdentificationNo'],
            'GAddress' =>  $formDetails['Address'],
            'GTelephoneNo' => $formDetails['TelephoneNo'],
            'GFaxNo' => $formDetails['FaxNo'],
            'GEmailAddress' => $formDetails['Email'],
            'GOwnership' => $formDetails['OwnerShip'],
            'GYearsOfStay' => $formDetails['YearsofStay'],
            'GWarehouseAddress' =>  $formDetails['WarehouseAddress'],
            'GTelephoneNo2' =>  $formDetails['TelephoneNo2'],
            'GFaxNo2' => $formDetails['FaxNo2'],
            'GBranches' => $formDetails['Branches'],
            'GNatureOfBusiness' => $formDetails['NatureOfBusiness'],
            'GYearsInOperation' => $formDetails['YearsinOperation'],
            'RegistrationBody1' =>  $formDetails['SecurityExchange'],
            'RegistrationNo1' =>  $formDetails['RegistrationNo1'],
            'ApprovalDate1' => $formDetails['ApprovalDate1'],
            'RegistrationBody2' => $formDetails['DepartmentOfTrade'],
            'RegistrationNo2' => $formDetails['RegistrationNo2'],
            'ApprovalDate2' => $formDetails['ApprovalDate2'],
            'RegistrationBody3' =>  $formDetails['BusinessPermit'],
            'RegistrationNo3' =>  $formDetails['RegistrationNo3'],
            'ApprovalDate3' => $formDetails['ApprovalDate3'],
            'GAffiliates' => $formDetails['Affiliates'],
            'OCINameOfRegisteredOwner' => $formDetails['OWCINameofRegisteredOwner'],
            'OCIDateOfBirth' => $formDetails['OWCIDateOfBirth'],
            'OCIResidenceAddress' =>  $formDetails['OWCIResidenceAddress'],
            'OCIOwnership' =>  $formDetails['OWCIOwnedOrRented'],
            'OCIYearsOfStay' => $formDetails['OWCIYearsofStay'],
            'ASPrintedName1' => $formDetails['ASPrintedName'],
            'ASSignatureFile' => $signature,
            'ASPrintedName2' => $formDetails['verifyPrintedName'],
            'ASEmailAddress' =>  $formDetails['verifyEmailAddress'],
            'ASDate' => $formDetails['verifyDate'],
            'FileArticlesOfIncorporation' =>  $ArticlesofIncorporation,
            'FileDTIRegistration' => $dtiRegistration,
            'FileBusinessPermit' => $BusinessPermitOrMayorsPermit,
            'FileAuthorizationToVerify' => $AuthorizationtoVerifyBankHistory,
            'FileFinancialStatement' => $FinancialStatements,
            'FileBankStatement' =>  $BankStatementsft2,
            'FileCompanyProfile' =>  $CompanyProfileFile,
        ];


    $sql = "INSERT INTO `business_partners` 
    (`GBusinessName`, `GTaxNo`, `GAddress`, `GTelephoneNo`, `GFaxNo`, `GEmailAddress`, `GOwnership`, `GYearsOfStay`, `GWarehouseAddress`, `GTelephoneNo2`, `GFaxNo2`, `GBranches`, `GNatureOfBusiness`, `GYearsInOperation`, `RegistrationBody1`, `RegistrationNo1`, `ApprovalDate1`, `RegistrationBody2`, `RegistrationNo2`, `ApprovalDate2`, `RegistrationBody3`, `RegistrationNo3`, `ApprovalDate3`, `GAffiliates`, `OCINameOfRegisteredOwner`, `OCIDateOfBirth`, `OCIResidenceAddress`, `OCIOwnership`, `OCIYearsOfStay`, `ASPrintedName1`, `ASSignatureFile`, `ASPrintedName2`, `ASEmailAddress`, `ASDate`, `FileArticlesOfIncorporation`, `FileDTIRegistration`, `FileBusinessPermit`, `FileAuthorizationToVerify`, `FileFinancialStatement`, `FileBankStatement`, `FileCompanyProfile`) 
    VALUES 
    (:GBusinessName, :GTaxNo, :GAddress, :GTelephoneNo, :GFaxNo, :GEmailAddress, :GOwnership, :GYearsOfStay, :GWarehouseAddress, :GTelephoneNo2, :GFaxNo2, :GBranches, :GNatureOfBusiness, :GYearsInOperation, :RegistrationBody1, :RegistrationNo1, :ApprovalDate1, :RegistrationBody2, :RegistrationNo2, :ApprovalDate2, :RegistrationBody3, :RegistrationNo3, :ApprovalDate3, :GAffiliates, :OCINameOfRegisteredOwner, :OCIDateOfBirth, :OCIResidenceAddress, :OCIOwnership, :OCIYearsOfStay, :ASPrintedName1, :ASSignatureFile, :ASPrintedName2, :ASEmailAddress, :ASDate, :FileArticlesOfIncorporation, :FileDTIRegistration, :FileBusinessPermit, :FileAuthorizationToVerify, :FileFinancialStatement, :FileBankStatement, :FileCompanyProfile);";


    $stmt = $pdo->prepare($sql);
    if ($stmt->execute($data)) {

        $lastId = $pdo->lastInsertId();

        @$officersNameArray = array();
        foreach($formDetails['OfficersName'] as $key => $value){
            $officersNameArray[] = $value;
        }

        @$officersContactNo = array();
        foreach($formDetails['OfficersContactNo'] as $key => $value){
            $officersContactNo[] = $value;
        }
        
        @$officersFiles = array();
        if ($filesData['OfficersFiles']['name'] != "") {

            $imagesFiles = reArrayFiles($_FILES['OfficersFiles']);
            foreach($imagesFiles as $key => $imagesFilesValue){

                $officersFiles[] = date('YmdHis',time()).mt_rand().'.jpg';
                move_uploaded_file($imagesFilesValue['tmp_name'],'uploads/partners/'.$officersFiles[$key]);
            }
        }

        @$majorSuppliers = array();
        foreach($formDetails['MajorSuppliers'] as $key => $value){
            $majorSuppliers[] = $value;
        }

        @$registrationAddress = array();
        foreach($formDetails['RegistrationAddress'] as $key => $value){
            $registrationAddress[] = $value;
        }

        @$registrationTelephoneNumber = array();
        foreach($formDetails['RegistrationTelephoneNumber'] as $key => $value){
            $registrationTelephoneNumber[] = $value;
        }

        @$registrationContactPerson = array();
        foreach($formDetails['RegistrationContactPerson'] as $key => $value){
            $registrationContactPerson[] = $value;
        }

        @$registrationTerms = array();
        foreach($formDetails['RegistrationTerms'] as $key => $value){
            $registrationTerms[] = $value;
        }

        @$registrationCustomers = array();
        foreach($formDetails['RegistrationCustomers'] as $key => $value){
            $registrationCustomers[] = $value;
        }

        @$registrationCustomersAddress = array();
        foreach($formDetails['RegistrationCustomersAddress'] as $key => $value){
            $registrationCustomersAddress[] = $value;
        }

        @$bankReferences = array();
        foreach($formDetails['BankReferences'] as $key => $value){
            $bankReferences[] = $value;
        }

        @$currenAccounNumber = array();
        foreach($formDetails['CurrenAccounNumber'] as $key => $value){
            $currenAccounNumber[] = $value;
        }
        
        @$registrationTelephoneNumber = array();
        foreach($formDetails['RegistrationTelephoneNumber'] as $key => $value){
            $registrationTelephoneNumber[] = $value;
        }

        @$registrationContactPerson = array();
        foreach($formDetails['RegistrationContactPerson'] as $key => $value){
            $registrationContactPerson[] = $value;
        }

        foreach($officersNameArray as $key => $value){
            
            @$data_bind = [
                'BusinessPartnerId' => @$lastId,
                'OfficersName' => @$officersNameArray[$key],
                'ContactNumber' => @$officersContactNo[$key],
                'FileImage' => @$officersFiles[$key],
                'aMajorSuppliers' => @$majorSuppliers[$key],
                'aAddress' => @$registrationAddress[$key],
                'aTelephoneNumber' => @$registrationTelephoneNumber[$key],
                'aContactPerson' => @$registrationContactPerson[$key],
                'aTerms' => @$registrationTerms[$key],
                'bCustomers' => @$registrationCustomers[$key],
                'bAddress' => @$registrationCustomersAddress[$key],
                'cBankReferences' => @$bankReferences[$key],
                'cCurrentAccountNumber' => @$currenAccounNumber[$key],
                'cTelephoneNumber' => @$registrationTelephoneNumber[$key],
                'cContactPerson' => @$registrationContactPerson[$key]
            ];

            @$sql_x = "INSERT INTO `business_partners_extension` 
            (`BusinessPartnerId`, `OfficersName`, `ContactNumber`, `FileImage`, `aMajorSuppliers`, `aAddress`, `aTelephoneNumber`, `aContactPerson`, `aTerms`, `bCustomers`, `bAddress`, `cBankReferences`, `cCurrentAccountNumber`, `cTelephoneNumber`, `cContactPerson`) 
            VALUES 
            (:BusinessPartnerId, :OfficersName, :ContactNumber, :FileImage, :aMajorSuppliers, :aAddress, :aTelephoneNumber, :aContactPerson, :aTerms, :bCustomers, :bAddress, :cBankReferences, :cCurrentAccountNumber, :cTelephoneNumber, :cContactPerson);";

            @$count = $pdo->prepare($sql_x);
            @$count->execute($data_bind); 
        }

        $_SESSION['success_message'] = "Thank you for getting in touch with us partners! We will get back to you soon.";
    } else {
        $_SESSION['error_message'] = "Oops! Something went wrong. Please try again";
    }
}

function imageUpload($directory, $file)
{
    $structure = 'uploads/partners/'.$directory.'/';
    $databasepath = 'uploads/partners'.$directory.'/';
  
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $file['tmp_name']);
    if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/gif' || $mimetype == 'image/png' || $mimetype == 'video/mp4' || $mimetype == 'video/mp4'|| $mimetype == 'video/m4v') {
        if (!file_exists($structure)) {
            if (!mkdir($structure, 0777, true)) {
            } else {
                move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
                return $databasepath.$file["name"];
            }
        } else {
            move_uploaded_file($file["tmp_name"], $structure. $file["name"]);
            return $databasepath.$file["name"];
        }
    } else {
        echo 'The source file type ' . $mimetype . ' is not supported';
        die();
    }
}

function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
   
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}
