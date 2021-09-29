<?php
session_start();
$_SESSION['PAGE_TITLE']="Partner";
include 'view/common/header.php';
include 'controllers/partnersController.php';

if (isset($_POST['submitForms'])) {
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '<pre>';
    // die();
    savePartners($_POST, $_FILES);
}
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}

.card {
    position: relative;
    z-index: 999;
}

.watermark {
    content: "";
    opacity: 0.04;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    /* z-index: -1;   */
    width: 100%;
}

.parallax {
    /* The image used */
    position: absolute;
    top: 30px;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0.05;
    z-index: -1;
    background-image: url("assets/img/circlelogo.png");
    min-height: 500px;
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5 py-5 revealOnScroll" data-animation="fadeInUp">
            <div class="card shadow-0 border border-0">
                <!-- <img class="watermark" src="assets/img/circlelogo.png" alt=""> -->
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
                                <input class="form-control" name="BusinessName" type="text">
                            </div>
                            <div class="col-lg col-sm">
                                <label>Tax Identification No.</label>
                                <input class="form-control" name="TaxIdentificationNo" type="text">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Address</label>
                                <input class="form-control" name="Address" type="text">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Telephone No/s.</label>
                                <input class="form-control" name="TelephoneNo" type="text">
                            </div>
                            <div class="col-lg col-sm">
                                <label>Fax no.</label>
                                <input class="form-control" name="FaxNo" type="text">
                            </div>
                            <div class="col-lg col-sm">
                                <label>Email Address</label>
                                <input class="form-control" name="Email" type="text">
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
                                                type="radio" name="OwnerShip" id="OwnedCheck" value="Owned">
                                            <label for="OwnedCheck" class="custom-control-label">Owned</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                type="radio" name="OwnerShip" id="RentedCheck" value="Rented">
                                            <label for="RentedCheck" class="custom-control-label">Rented</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Years of Stay</label>
                                <input class="form-control" name="YearsofStay" type="text">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Warehouse Address</label>
                                <input class="form-control" name="WarehouseAddress" type="text">
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Telephone No/s.</label>
                                <input class="form-control" name="TelephoneNo2" type="text">
                            </div>
                            <div class="col-lg col-sm">
                                <label>Fax No.</label>
                                <input class="form-control" name="FaxNo2" type="text">
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg-12 col-sm-12">
                                <label>Branches, if any</label>
                                <input class="form-control" name="Branches" type="text">
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3">
                                <label>Nature of Business</label>
                                <input class="form-control" name="NatureOfBusiness" type="text">
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3">
                                <label>Years in Operation</label>
                                <input class="form-control" name="YearsinOperation" type="text">
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
                                                    type="checkbox" name="SecurityExchange" id="SecurityExchange"
                                                    value="Securities and Exchange Commission">
                                                <label for="SecurityExchange" class="custom-control-label">Securities
                                                    and
                                                    Exchange Commission</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <div class="custom-control custom-checkbox">
                                                <input
                                                    class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                    type="checkbox" name="DepartmentOfTrade" id="DepartmentOfTrade"
                                                    value="Department of Trade and Industry">
                                                <label for="DepartmentOfTrade" class="custom-control-label">Department
                                                    of
                                                    Trade and Industry</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <div class="custom-control custom-checkbox">
                                                <input
                                                    class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                    type="checkbox" name="BusinessPermit" id="BusinessPermit"
                                                    value="Business Permits & Licensing Office">
                                                <label for="BusinessPermit" class="custom-control-label">Business
                                                    Permits &
                                                    Licensing Office</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-auto col-sm">
                                    <label>Registration no.</label>
                                    <input class="form-control" name="RegistrationNo1" type="text">
                                    <input class="form-control mt-3" name="RegistrationNo2" type="text">
                                    <input class="form-control mt-3" name="RegistrationNo3" type="text">
                                </div>
                                <div class="col-lg col-sm">
                                    <label>Approval Date</label>
                                    <input class="form-control" name="ApprovalDate1" type="date">
                                    <input class="form-control mt-3" name="ApprovalDate2" type="date">
                                    <input class="form-control mt-3" name="ApprovalDate3" type="date">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Affiliates</label>
                                <input class="form-control" name="Affiliates" type="text">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Principal Officers</label>
                                <input class="form-control" name="OfficersName[]" type="text" placeholder="Name">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="OfficersContactNo[]" type="text"
                                    placeholder="Contact Number">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="OfficersFiles[]"
                                    type="file">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>President/CEO</label>
                                <input class="form-control" name="OfficersName[]" type="text" placeholder="Name">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="OfficersContactNo[]" type="text"
                                    placeholder="Contact Number">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="OfficersFiles[]" type="file">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Accounting Manager</label>
                                <input class="form-control" name="OfficersName[]" type="text" placeholder="Name">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="OfficersContactNo[]" type="text"
                                    placeholder="Contact Number">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="OfficersFiles[]"
                                    type="file">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Purchasing Officer</label>
                                <input class="form-control" name="OfficersName[]" type="text" placeholder="Name">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="OfficersContactNo[]" type="text"
                                    placeholder="Contact Number">
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="OfficersFiles[]"
                                    type="file">
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Major Suppliers</label>
                                <input class="form-control" name="MajorSuppliers[]" type="text">
                                <input class="form-control mt-3" name="MajorSuppliers[]" type="text">
                                <input class="form-control mt-3" name="MajorSuppliers[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Address</label>
                                <input class="form-control" name="RegistrationAddress[]" type="text">
                                <input class="form-control mt-3" name="RegistrationAddress[]" type="text">
                                <input class="form-control mt-3" name="RegistrationAddress[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Telephone Number</label>
                                <input class="form-control" name="RegistrationTelephoneNumber[]" type="text">
                                <input class="form-control mt-3" name="RegistrationTelephoneNumber[]" type="text">
                                <input class="form-control mt-3" name="RegistrationTelephoneNumber[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Contact Person</label>
                                <input class="form-control" name="RegistrationContactPerson[]" type="text">
                                <input class="form-control mt-3" name="RegistrationContactPerson[]" type="text">
                                <input class="form-control mt-3" name="RegistrationContactPerson[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Terms</label>
                                <input class="form-control" name="RegistrationTerms[]" type="text">
                                <input class="form-control mt-3" name="RegistrationTerms[]" type="text">
                                <input class="form-control mt-3" name="RegistrationTerms[]" type="text">
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Customers</label>
                                <input class="form-control" name="RegistrationCustomers[]" type="text">
                                <input class="form-control mt-3" name="RegistrationCustomers[]" type="text">
                                <input class="form-control mt-3" name="RegistrationCustomers[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Address</label>
                                <input class="form-control" name="RegistrationCustomersAddress[]" type="text">
                                <input class="form-control mt-3" name="RegistrationCustomersAddress[]" type="text">
                                <input class="form-control mt-3" name="RegistrationCustomersAddress[]" type="text">
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label>Bank References - Name/Branch</label>
                                <input class="form-control" name="BankReferences[]" type="text">
                                <input class="form-control mt-3" name="BankReferences[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Current Account Number</label>
                                <input class="form-control" name="CurrenAccounNumber[]" type="text">
                                <input class="form-control mt-3" name="CurrenAccounNumber[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Telephone Number</label>
                                <input class="form-control" name="RegistrationTelephoneNumber[]" type="text">
                                <input class="form-control mt-3" name="RegistrationTelephoneNumber[]" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Contact Person</label>
                                <input class="form-control" name="RegistrationContactPerson[]" type="text">
                                <input class="form-control mt-3" name="RegistrationContactPerson[]" type="text">
                            </div>
                        </div>


                        <h4 class="mt-5 font-weight-bold">II. OWNER'S CREDIT INFORMATION (For sole proprietorship)</h4>
                        <hr>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Name of Registered Owner</label>
                                <input class="form-control" name="OWCINameofRegisteredOwner" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Date of Birth:</label>
                                <input class="form-control" name="OWCIDateOfBirth" type="date">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Residence Address</label>
                                <input class="form-control" name="OWCIResidenceAddress" type="text">
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
                                                type="radio" name="OWCIOwnedOrRented" id="OWCIOwnedCheck" value="Owned">
                                            <label for="OWCIOwnedCheck" class="custom-control-label">Owned</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                type="radio" name="OWCIOwnedOrRented" id="OWCIRentedCheck"
                                                value="Rented">
                                            <label for="OWCIRentedCheck" class="custom-control-label">Rented</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <label>Years of Stay</label>
                                <input class="form-control" name="OWCIYearsofStay" type="text">
                            </div>
                        </div>

                        <h4 class="mt-5 font-weight-bold">III. AUTHORIZED SIGNATORIES</h4>
                        <hr>

                        <div class="row my-3">
                            <div class="col-lg">
                                <label>Printed Name</label>
                                <input class="form-control" name="ASPrintedName" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Signature</label>
                                <input class="form-control form-control-sm py-1" name="ASSignature" type="file">
                            </div>
                        </div>

                        <p class="mt-5">I hereby certify that the foregoing information is true and correct.</p>

                        <div class="row my-5">
                            <div class="col-lg">
                                <label>Printed Name</label>
                                <input class="form-control" name="verifyPrintedName" type="text">
                            </div>
                            <div class="col-lg">
                                <label>Email Address</label>
                                <input class="form-control" name="verifyEmailAddress" type="email">
                            </div>
                            <div class="col-lg">
                                <label>Date</label>
                                <input class="form-control" name="verifyDate" type="date">
                            </div>
                        </div>

                        <p class="mt-5 font-weight-bold">Please submit the following documents together with this
                            application form.</p>

                        <div class="row my-5">
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Articles of Incorporation and By-laws</label>
                                <input class="form-control" name="ArticlesofIncorporation" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">DTI Registration (Business Name) for sole proprietorship</label>
                                <input class="form-control" name="DTIRegistration" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Business Permit/Mayor's Permit</label>
                                <input class="form-control" name="BusinessPermitOrMayorsPermit" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Authorization to Verify Bank History</label>
                                <input class="form-control" name="AuthorizationtoVerifyBankHistory" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Financial Statements for the last 2 years</label>
                                <input class="form-control" name="FinancialStatementsforthelast2years" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Bank Statements for the last 3 months</label>
                                <input class="form-control" name="BankStatementsforthelast3months" type="file">
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Company Profile</label>
                                <input class="form-control" name="CompanyProfileFile" type="file">
                            </div>
                        </div>


                        <div class="form-group mt-4 d-flex justify-content-end">
                            <button class="btn btn-info" name="submitForms" type="submit">Submit</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>


    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>

</body>
<!-- End Body --> 