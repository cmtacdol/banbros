<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Coming soon";   
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

        <div class="container my-5 text-center" style="height: 44vh">
            <h1 class="my-5">COMING SOON</h1>
        </div>



    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->