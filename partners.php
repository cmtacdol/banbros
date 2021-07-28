<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Partner";   
include 'view/common/header.php'; 
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>


        <div class="container my-5 py-5 revealOnScroll" data-animation="fadeInUp">
            <div class="card shadow-0 border border-0">
                <div class="card-body p-5">
                    <header class="text-center w-md-50 mx-auto mb-8">
                        <h2 class="h2 mb-0 font-weight-bold">BANBROS COMMERCIAL, INC.</h2>
                        <p class="my-0">Banbros Corporate Center, No. 32 Pilar cor. Araullo Streets</p>
                        <p class="mb-0">Addition Hills, San Juan, Metro Manila, Philippines</p>
                        <p>Trunkline 705-1797</p>
                    </header>
                    <h3 class="text-center mt-4">CREDIT INFORMATION SHEET</h3>
                    <h4 class="mt-4 font-weight-bold">I. GENERAL INFORMATION</h4>
                    <hr>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg col-sm">
                                <label>Business Name</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Tax Identification No.</label>
                                <input class="form-control" name="LastName" type="text" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Address</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Telephone No/s.</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Fax no.</label>
                                <input class="form-control" name="LastName" type="text" required>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Email Address</label>
                                <input class="form-control" name="LastName" type="text" required>
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
                                                type="radio" name="OwnedOrRented" id="OwnedCheck" value="Owned"
                                                required>
                                            <label for="OwnedCheck" class="custom-control-label">Owned</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                type="radio" name="OwnedOrRented" id="RentedCheck" value="Rented"
                                                required>
                                            <label for="RentedCheck" class="custom-control-label">Rented</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Years of Stay</label>
                                <input class="form-control" name="LastName" type="text" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Warehouse Address</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg col-sm">
                                <label>Telephone No/s.</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg col-sm">
                                <label>Fax No.</label>
                                <input class="form-control" name="LastName" type="text" required>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-lg-12 col-sm-12">
                                <label>Branches, if any</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3">
                                <label>Nature of Business</label>
                                <input class="form-control" name="LastName" type="text" required>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3">
                                <label>Years in Operation</label>
                                <input class="form-control" name="LastName" type="text" required>
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
                                                    type="checkbox" name="SEC" id="SecurityExchange"
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
                                                    type="checkbox" name="DTI" id="DepartmentOfTrade"
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
                                                    type="checkbox" name="BPLO" id="BusinessPermit"
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
                                    <input class="form-control" name="FirstName" type="text" required>
                                    <input class="form-control mt-3" name="FirstName" type="text" required>
                                    <input class="form-control mt-3" name="FirstName" type="text" required>
                                </div>
                                <div class="col-lg col-sm">
                                    <label>Approval Date</label>
                                    <input class="form-control" name="FirstName" type="text" required>
                                    <input class="form-control mt-3" name="FirstName" type="text" required>
                                    <input class="form-control mt-3" name="FirstName" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Affiliates</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Principal Officers</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Contact Number"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="FirstName" type="file"
                                    placeholder="Signature" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>President/CEO</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Contact Number"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="FirstName" type="file"
                                    placeholder="Signature" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Accounting Manager</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Contact Number"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="FirstName" type="file"
                                    placeholder="Signature" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Purchasing Officer</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="Contact Number"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <input class="form-control form-control-sm py-1" name="FirstName" type="file"
                                    placeholder="Signature" required>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Major Suppliers</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Address</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Telephone Number</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Contact Person</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Terms</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Customers</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Address</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label>Bank References - Name/Branch</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Current Account Number</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Telephone Number</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Contact Person</label>
                                <input class="form-control" name="FirstName" type="text" required>
                                <input class="form-control mt-3" name="FirstName" type="text" required>
                            </div>
                        </div>


                        <h4 class="mt-5 font-weight-bold">II. OWNER'S CREDIT INFORMATION (For sole proprietorship)</h4>
                        <hr>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Name of Registered Owner</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Date of Birth:</label>
                                <input class="form-control" name="FirstName" type="date" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg">
                                <label>Residence Address</label>
                                <input class="form-control" name="FirstName" type="text" required>
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
                                                type="radio" name="OwnedOrRented" id="OwnedCheck" value="Owned"
                                                required>
                                            <label for="OwnedCheck" class="custom-control-label">Owned</label>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                class="custom-control-input custom-control-input-success custom-control-input-outline"
                                                type="radio" name="OwnedOrRented" id="RentedCheck" value="Rented"
                                                required>
                                            <label for="RentedCheck" class="custom-control-label">Rented</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <label>Years of Stay</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                        </div>

                        <h4 class="mt-5 font-weight-bold">III. AUTHORIZED SIGNATORIES</h4>
                        <hr>

                        <div class="row my-3">
                            <div class="col-lg">
                                <label>Printed Name</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Signature</label>
                                <input class="form-control form-control-sm py-1" name="FirstName" type="file" required>
                            </div>
                        </div>

                        <p class="mt-5">I hereby certify that the foregoing information is true and correct.</p>

                        <div class="row my-5">
                            <div class="col-lg">
                                <label>Printed Name</label>
                                <input class="form-control" name="FirstName" type="text" required>
                            </div>
                            <div class="col-lg">
                                <label>Email Address</label>
                                <input class="form-control" name="FirstName" type="email" required>
                            </div>
                            <div class="col-lg">
                                <label>Date</label>
                                <input class="form-control" name="FirstName" type="date" required>
                            </div>
                        </div>

                        <p class="mt-5 font-weight-bold">Please submit the following documents together with this
                            application form.</p>

                        <div class="row my-5">
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Articles of Incorporation and By-laws</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">DTI Registration (Business Name) for sole proprietorship</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Business Permit/Mayor's Permit</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Authorization to Verify Bank History</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Financial Statements for the last 2 years</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Bank Statements for the last 3 motnhs</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                            <div class="col-lg-7 mt-3">
                                <label class="mb-0">Company Profile</label>
                                <input class="form-control" name="FirstName" type="file" required>
                            </div>
                        </div>


                        <div class="form-group mt-4 d-flex justify-content-end">
                            <button class="btn btn-info" name="sendEmails" type="submit">Submit</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>


    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->