<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Brand";
$_SESSION['PAGE_NAV_TITLE'] = "Brand"; 

include 'view/common/header.php'; 
include 'controllers/brandController.php'; 

$categoryByBrand = getCategoryByBrand($_GET['brand_id']);
$brand = getSingleBrand($_GET['brand_id']);

?>
<link rel="stylesheet" type="text/css" href="assets/css/view_brand.css">

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>

    <main role="main">
        <!-- header color -->
        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5 ">
            <div class="row justify-content-around">
                <div class="col-lg-3 py-0 px-0">
                    <div class="card shadow-sm mb-4 border border-0 h-100">
                        <div class="card-body">

                            <?php if(count($categoryByBrand) < 1){ ?>
                            <span>No category added</span>
                            <?php }else{ ?>
                            <?php foreach($categoryByBrand as $category){ ?>
                            <div class="funkyradio">
                                <div class="funkyradio-info">
                                    <input type="checkbox" name="categoryCheckbox" class="cardCheckBox"
                                        id="categoryCheckbox<?php echo $category['IdCategory']; ?>"
                                        value="<?php echo $category['IdCategory']; ?>" checked />
                                    <label
                                        for="categoryCheckbox<?php echo $category['IdCategory']; ?>"><?php echo $category['CategoryName']; ?></label>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="banners" class="banners">
                        <img src="<?php echo $brand['Banner']; ?>" class="d-block w-100"
                            style="width: 100%; height: 151px; object-fit: contain">
                    </div>

                    <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">
                        <?php echo $brand['Description']; ?>
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <?php foreach($categoryByBrand as $category){ ?>
                        <?php foreach(getProductByCategory($category['IdCategory']) as $product){ ?>

                        <div class="col-lg-3 col-md-4 col-6 previewImg cards-list"
                            data-category="<?php echo $category['IdCategory']; ?>">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="<?php echo $product['Image']; ?>" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small
                                            class="font-weight-bold"><?php echo $product['ProductName']; ?>
                                        </small></h6>
                                    <a href="product_view.php?produc_id=<?php echo $product['IdProduct']; ?>" class="btn btn-info">Check more</a>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        <?php } ?>



                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <script>
    $(document).on("click", "#btnModals", function() {
        $(".modal-body #Imagehead").attr('src', $(this).data('image'));
        $(".modal-body #description").text($(this).data('desc'));
    });

    const $cards = $("[data-category]");
    const $cardsCkb = $(".categoryCheck");

    $(".cardCheckBox").change(function() {
        var value = $(this).val();
        console.log(value);
        //console.log(value);
        if (this.checked == false) {
            //console.log(true);
            $(".cards-list[data-category=" + value + "]").hide();
        } else {
            $(".cards-list[data-category=" + value + "]").show();
        }
    });
    </script>
</body>
<!-- End Body -->

</html>