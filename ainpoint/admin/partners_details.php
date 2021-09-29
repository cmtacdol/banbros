<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Partner";
$_SESSION['PAGE_NAV_TITLE'] = "Partner";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/partnerController.php';

$singPartner = getSpecificPartners($_GET['business_partner_id']);
$partnerExtension = getPartnerExtension($_GET['business_partner_id']);
?>

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include 'view/common/nav.php'; ?>

            <?php include 'view/common/sidebar.php'; ?>

            <div class="pcoded-content">

                <div class="page-header card">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="parallax"></div>
                            <header class="text-center w-md-50 mx-auto mb-8">
                                <h2 class="h2 mb-0 font-weight-bold">BANBROS COMMERCIAL, INC.</h2>
                                <p class="my-0">Banbros Corporate Center, No. 32 Pilar cor. Araullo Streets</p>
                                <p class="mb-0">Addition Hills, San Juan, Metro Manila, Philippines</p>
                                <p>Trunkline 705-1797</p>
                            </header>
                            <h3 class="text-center mt-4">CREDIT INFORMATION SHEET</h3>
                            <h4 class="mt-4 font-weight-bold">I. GENERAL INFORMATION</h4>
                            <hr>
                            <form method="post" enctype='multipart/form-data'>
                                <div class="row">
                                    <div class="col-lg col-sm">
                                        <label>Business Name</label>
                                        <input class="form-control" name="BusinessName" type="text"
                                            value="<?php echo $singPartner['GBusinessName']; ?>">
                                    </div>
                                    <div class="col-lg col-sm">
                                        <label>Tax Identification No.</label>
                                        <input class="form-control" name="TaxIdentificationNo" type="text"
                                            value="<?php echo $singPartner['GTaxNo']; ?>">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg col-sm">
                                        <label>Address</label>
                                        <input class="form-control" name="Address" type="text"
                                            value="<?php echo $singPartner['GAddress']; ?>">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg col-sm">
                                        <label>Telephone No/s.</label>
                                        <input class="form-control" name="TelephoneNo" type="text"
                                            value="<?php echo $singPartner['GTelephoneNo']; ?>">
                                    </div>
                                    <div class="col-lg col-sm">
                                        <label>Fax no.</label>
                                        <input class="form-control" name="FaxNo" type="text"
                                            value="<?php echo $singPartner['GFaxNo']; ?>">
                                    </div>
                                    <div class="col-lg col-sm">
                                        <label>Email Address</label>
                                        <input class="form-control" name="Email" type="text"
                                            value="<?php echo $singPartner['GEmailAddress']; ?>">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-3 col-sm">
                                        <label>Ownership</label>
                                        <div class="row">
                                            <div class="col-lg-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                        type="radio" name="OwnerShip" id="OwnedCheck" value="Owned"
                                                        <?php echo ($singPartner['GOwnership'] == "Owned") ? 'checked' : ''; ?>>
                                                    <label for="OwnedCheck" class="custom-control-label">Owned</label>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                        type="radio" name="OwnerShip" id="RentedCheck" value="Rented"
                                                        <?php echo ($singPartner['GOwnership'] == "Rented") ? 'checked' : ''; ?>>
                                                    <label for="RentedCheck" class="custom-control-label">Rented</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm">
                                        <label>Years of Stay</label>
                                        <input class="form-control" name="YearsofStay" type="text"
                                            value="<?php echo $singPartner['GYearsOfStay']; ?>">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg col-sm">
                                        <label>Warehouse Address</label>
                                        <input class="form-control" name="WarehouseAddress" type="text"
                                            value="<?php echo $singPartner['GWarehouseAddress']; ?>">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-lg col-sm">
                                        <label>Telephone No/s.</label>
                                        <input class="form-control" name="TelephoneNo2" type="text"
                                            value="<?php echo $singPartner['GTelephoneNo2']; ?>">
                                    </div>
                                    <div class="col-lg col-sm">
                                        <label>Fax No.</label>
                                        <input class="form-control" name="FaxNo2" type="text"
                                            value="<?php echo $singPartner['GFaxNo2']; ?>">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-lg-12 col-sm-12">
                                        <label>Branches, if any</label>
                                        <input class="form-control" name="Branches" type="text"
                                            value="<?php echo $singPartner['GBranches']; ?>">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mt-3">
                                        <label>Nature of Business</label>
                                        <input class="form-control" name="NatureOfBusiness" type="text"
                                            value="<?php echo $singPartner['GNatureOfBusiness']; ?>">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mt-3">
                                        <label>Years in Operation</label>
                                        <input class="form-control" name="YearsinOperation" type="text"
                                            value="<?php echo $singPartner['GYearsInOperation']; ?>">
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <label class="font-weight-bold mb-0">Registration</label>
                                    <hr class="my-0">
                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-sm">
                                            <label>Registration Body</label>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 mt-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input
                                                            class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                            type="checkbox" name="SecurityExchange"
                                                            id="SecurityExchange"
                                                            value="Securities and Exchange Commission"
                                                            <?php echo ($singPartner['RegistrationBody1'] == "Securities and Exchange Commission") ? 'checked' : ''; ?>>
                                                        <label for="SecurityExchange"
                                                            class="custom-control-label">Securities
                                                            and
                                                            Exchange Commission</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input
                                                            class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                            type="checkbox" name="DepartmentOfTrade"
                                                            id="DepartmentOfTrade"
                                                            value="Department of Trade and Industry"
                                                            <?php echo ($singPartner['RegistrationBody2'] == "Department of Trade and Industry") ? 'checked' : ''; ?>>
                                                        <label for="DepartmentOfTrade"
                                                            class="custom-control-label">Department
                                                            of
                                                            Trade and Industry</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input
                                                            class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                            type="checkbox" name="BusinessPermit" id="BusinessPermit"
                                                            value="Business Permits & Licensing Office"
                                                            <?php echo ($singPartner['RegistrationBody3'] == "Business Permits & Licensing Office") ? 'checked' : ''; ?>>
                                                        <label for="BusinessPermit"
                                                            class="custom-control-label">Business
                                                            Permits &
                                                            Licensing Office</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-auto col-sm">
                                            <label>Registration no.</label>
                                            <input class="form-control" name="RegistrationNo1" type="text"
                                                value="<?php echo $singPartner['RegistrationNo1']; ?>">
                                            <input class="form-control mt-3" name="RegistrationNo2" type="text"
                                                value="<?php echo $singPartner['RegistrationNo2']; ?>">
                                            <input class="form-control mt-3" name="RegistrationNo3" type="text"
                                                value="<?php echo $singPartner['RegistrationNo3']; ?>">
                                        </div>
                                        <div class="col-lg col-sm">
                                            <label>Approval Date</label>
                                            <input class="form-control" name="ApprovalDate1" type="date"
                                                value="<?php echo  date("Y-m-d", strtotime($singPartner['ApprovalDate1'])); ?>">
                                            <input class="form-control mt-3" name="ApprovalDate2" type="date"
                                                value="<?php echo date("Y-m-d", strtotime($singPartner['ApprovalDate2'])); ?>">
                                            <input class="form-control mt-3" name="ApprovalDate3" type="date"
                                                value="<?php echo date("Y-m-d", strtotime($singPartner['ApprovalDate3'])); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label>Affiliates</label>
                                        <input class="form-control" name="Affiliates" type="text"
                                            value="<?php echo $singPartner['GAffiliates']; ?>">
                                    </div>
                                </div>

                                <?php 
                                $labelName = "";
                                $count = 0;
                                foreach($partnerExtension as $key => $extension){ 
                                    $count++;
                                    if($count == 1){
                                        $labelName = "Principal Officers";
                                    }else if($count == 2){
                                        $labelName = "President/CEO";
                                    }else if($count == 3){
                                        $labelName = "Accounting Manager";
                                    }else if($count == 4){
                                        $labelName = "Purchasing Officer";
                                    }
                                ?>
                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label><?php echo $labelName; ?></label>
                                        <input class="form-control" name="OfficersName[]" type="text" placeholder="Name"
                                            value="<?php echo $extension['OfficersName']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>&nbsp;</label>
                                        <input class="form-control" name="OfficersContactNo[]" type="text"
                                            placeholder="Contact Number"
                                            value="<?php echo $extension['ContactNumber']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>&nbsp;</label>

                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../uploads/partners/<?php echo $extension['FileImage']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                    </div>
                                </div>
                                <?php } ?>





                                <hr class="my-5">

                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label>Major Suppliers</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="MajorSuppliers[]" type="text"
                                            value="<?php echo $extension['aMajorSuppliers']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Address</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationAddress[]" type="text"
                                            value="<?php echo $extension['aAddress']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Telephone Number</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationTelephoneNumber[]"
                                            type="text" value="<?php echo $extension['aTelephoneNumber']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Contact Person</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationContactPerson[]" type="text"
                                            value="<?php echo $extension['aContactPerson']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Terms</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationTerms[]" type="text"
                                            value="<?php echo $extension['aTerms']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label>Customers</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationCustomers[]" type="text"
                                            value="<?php echo $extension['bCustomers']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Address</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationCustomersAddress[]"
                                            type="text" value="<?php echo $extension['bAddress']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <div class="row mt-3">
                                    <div class="col-lg-4">
                                        <label>Bank References - Name/Branch</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="BankReferences[]" type="text"
                                            value="<?php echo $extension['cBankReferences']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Current Account Number</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="CurrenAccounNumber[]" type="text"
                                            value="<?php echo $extension['cCurrentAccountNumber']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Telephone Number</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationTelephoneNumber[]"
                                            type="text" value="<?php echo $extension['cTelephoneNumber']; ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg">
                                        <label>Contact Person</label>
                                        <?php foreach($partnerExtension as $key => $extension){ ?>
                                        <input class="form-control mt-3" name="RegistrationContactPerson[]" type="text"
                                            value="<?php echo $extension['cContactPerson']; ?>">
                                        <?php } ?>
                                    </div>
                                </div>


                                <h4 class="mt-5 font-weight-bold">II. OWNER'S CREDIT INFORMATION (For sole
                                    proprietorship)</h4>
                                <hr>

                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label>Name of Registered Owner</label>
                                        <input class="form-control" name="OWCINameofRegisteredOwner" type="text"
                                            value="<?php echo $singPartner['OCINameOfRegisteredOwner']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>Date of Birth:</label>
                                        <input class="form-control" name="OWCIDateOfBirth" type="date"
                                            value="<?php echo date("Y-m-d", strtotime($singPartner['OCIDateOfBirth'])); ?>">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <label>Residence Address</label>
                                        <input class="form-control" name="OWCIResidenceAddress" type="text"
                                            value="<?php echo $singPartner['OCIResidenceAddress']; ?>">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-3">
                                        <label>Ownership</label>
                                        <div class="row">
                                            <div class="col-lg-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                        type="radio" name="OWCIOwnedOrRented" id="OWCIOwnedCheck"
                                                        value="Owned"
                                                        <?php echo ($singPartner['OCIOwnership'] == "Owned") ? 'checked' : ''; ?>>
                                                    <label for="OWCIOwnedCheck"
                                                        class="custom-control-label">Owned</label>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="custom-control custom-checkbox">
                                                    <input
                                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                        type="radio" name="OWCIOwnedOrRented" id="OWCIRentedCheck"
                                                        value="Rented"
                                                        <?php echo ($singPartner['OCIOwnership'] == "Rented") ? 'checked' : ''; ?>>
                                                    <label for="OWCIRentedCheck"
                                                        class="custom-control-label">Rented</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <label>Years of Stay</label>
                                        <input class="form-control" name="OWCIYearsofStay" type="text"
                                            value="<?php echo $singPartner['OCIYearsOfStay']; ?>">
                                    </div>
                                </div>

                                <h4 class="mt-5 font-weight-bold">III. AUTHORIZED SIGNATORIES</h4>
                                <hr>

                                <div class="row my-3">
                                    <div class="col-lg">
                                        <label>Printed Name</label>
                                        <input class="form-control" name="ASPrintedName" type="text"
                                            value="<?php echo $singPartner['ASPrintedName1']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>Signature</label>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['ASSignatureFile']; ?>" target="_blank"
                                            type="submit">View Image</a>

                                    </div>
                                </div>

                                <p class="mt-5">I hereby certify that the foregoing information is true and correct.</p>

                                <div class="row my-5">
                                    <div class="col-lg">
                                        <label>Printed Name</label>
                                        <input class="form-control" name="verifyPrintedName" type="text"
                                            value="<?php echo $singPartner['ASPrintedName2']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>Email Address</label>
                                        <input class="form-control" name="verifyEmailAddress" type="email"
                                            value="<?php echo $singPartner['ASEmailAddress']; ?>">
                                    </div>
                                    <div class="col-lg">
                                        <label>Date</label>
                                        <input class="form-control" name="verifyDate" type="date"
                                            value="<?php echo date("Y-m-d", strtotime($singPartner['ASDate'])); ?>">
                                    </div>
                                </div>

                                <p class="mt-5 font-weight-bold">Please submit the following documents together with
                                    this
                                    application form.</p>

                                <div class="row my-5">
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Articles of Incorporation and By-laws</label>
                                        <?php if(isset($singPartner['FileArticlesOfIncorporation']) && !empty($singPartner['FileArticlesOfIncorporation'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileArticlesOfIncorporation']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>

                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">DTI Registration (Business Name) for sole
                                            proprietorship</label>
                                        <?php if(isset($singPartner['FileDTIRegistration']) && !empty($singPartner['FileDTIRegistration'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileDTIRegistration']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Business Permit/Mayor's Permit</label>
                                        <?php if(isset($singPartner['FileBusinessPermit']) && !empty($singPartner['FileBusinessPermit'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileBusinessPermit']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Authorization to Verify Bank History</label>
                                        <?php if(isset($singPartner['FileAuthorizationToVerify']) && !empty($singPartner['FileAuthorizationToVerify'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileAuthorizationToVerify']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Financial Statements for the last 2 years</label>
                                        <?php if(isset($singPartner['FileFinancialStatement']) && !empty($singPartner['FileFinancialStatement'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileFinancialStatement']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Bank Statements for the last 3 months</label>
                                        <?php if(isset($singPartner['FileBankStatement']) && !empty($singPartner['FileBankStatement'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileBankStatement']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-lg-7 mt-3">
                                        <label class="mb-0">Company Profile</label>
                                        <?php if(isset($singPartner['FileCompanyProfile']) && !empty($singPartner['FileCompanyProfile'])){ ?>
                                        <a class="btn btn-info py-1 w-100 mt-1"
                                            href="../../<?php echo $singPartner['FileCompanyProfile']; ?>"
                                            target="_blank" type="submit">View Image</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-primary w-100 disabled">No Image</a>
                                        <?php } ?>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>



    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>

</body>

</html>