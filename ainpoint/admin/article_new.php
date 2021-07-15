<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Article";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Article";
include 'view/common/header.php';

?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->

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
                <form id="newArticleForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                    enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="saveArticle"
                                    class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="article_list.php"
                                    class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>
                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="Title" name="Title"
                                                placeholder="Start something epic" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content</label>
                                            <input id="Content" name="Content" type="hidden">
                                            <div id="editor-container" class="w-100 min-height-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Order Number</label>
                                            <input type="number" class="form-control" name="OrderNumber"
                                                id="OrderNumber">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select class="form-control form-control-sm" id="CagetoryId"
                                                name="CagetoryId">
                                                <?php foreach($categories as $category){ ?>
                                                <option value="<?php echo $category['IdCategory']; ?>">
                                                    <?php echo $category['Title']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="w-100">Intro Image</label> 
                                            <img src="view\images\imageupload.jpg" id="preview"
                                                class="img-thumbnail w-100">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="IntroImage" name="IntroImage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Meta Keywords</label>
                                            <textarea class="form-control" id="MetaKeys" name="MetaKeys"
                                                rows="2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Meta Description</label>
                                            <textarea class="form-control " id="MetaDescription" name="MetaDescription"
                                                rows="2"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="">Created By</label>
                                            <input type="text" class="form-control form-control-sm" id="CreatedBy"
                                                name="CreatedBy" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Modified By</label>
                                            <input type="text" class="form-control form-control-sm" id="ModifiedBy"
                                                name="ModifiedBy" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                        <label for="">Start Publishing</label>
                                        <input id="dropper-animation" class="form-control form-control-sm" type="text"
                                            name="DatePublish" placeholder="Select date" required />
                                    </div>
                                    <div class="col-lg">
                                        <label for="">Finish Publishing</label>
                                        <input id="year-range" class="form-control form-control-sm" type="text"
                                            name="DateFinishPublish" placeholder="Select date" />
                                    </div>
                                    <div class="col-lg">
                                        <label for="">Created Date</label>
                                        <input id="dropper-max-year" class="form-control form-control-sm" type="text"
                                            name="DateCreated" readonly />
                                    </div>
                                    <div class="col-lg">
                                        <label for="">Modified Date</label>
                                        <input class="form-control form-control-sm" type="text" name="DateModified"
                                            readonly />
                                    </div>
                                    <div class="col-lg">
                                        <label for="">Status</label>
                                        <select class="form-control form-control-sm" id="Status" name="Status">
                                            <?php foreach($article_status as $status){ ?>
                                            <option value="<?php echo $status['IdArticleStatus']; ?>">
                                                <?php echo $status['Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>



    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>
    <script>
    var quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }]
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Populate hidden form on submit
        var content = document.querySelector('input[name=Content]');
        content.value = quill.root.innerHTML.trim();

        $("#Content").val(content.value);

    };

    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#ImportImage").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>