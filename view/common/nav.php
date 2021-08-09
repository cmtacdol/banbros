 <style>
.navbar-nav li:hover>ul.dropdown-menu {
    display: block;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: 2px;
}

 </style>
 <!-- Header -->
 <header>
     <!-- Navbar -->
     <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-dark">
         <div class="container-fluid">
             <a class="navbar-brand mt-4" href="index.php">
                 <img src="assets/img/logo.png" alt="Banbros" style="width: 200px;">
             </a>

             <button class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo"
                 aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse pt-5 pb-1" id="navbarTogglerDemo">


                 <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link active" href="about.php">About</a>
                     </li>
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link" href="business.php">Business</a>
                     </li>
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link" href="consumer.php">Consumer</a>
                     </li>

                     <!-- <li class="nav-item dropdown mr-4 mb-2 mb-lg-0 d-none d-lg-block">
                         <a class="nav-link" href="news.php" id="navbarDropdownMenuLink" aria-haspopup="true"
                             aria-expanded="false"> News </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                             <li><a class="dropdown-item" href="webinar.php">Webinar</a></li>
                             <li><a class="dropdown-item" href="promos.php">Promos</a></li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown mr-4 mb-2 mb-lg-0 d-lg-none d-block">
                         <a class="nav-link dropdown-toggle" href="news.php" id="navbarDropdownMenuLink"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> News </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li><a class="dropdown-item" href="news.php">News Page</a></li>
                             <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                             <li><a class="dropdown-item" href="webinar.php">Webinar</a></li>
                             <li><a class="dropdown-item" href="promos.php">Promos</a></li>
                         </ul>
                     </li> -->
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link" href="news.php">News</a>
                     </li>
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link" href="career.php">Career</a>
                     </li>
                     <li class="nav-item mr-4 mb-2 mb-lg-0">
                         <a class="nav-link" href="contact.php">Contacts</a>
                     </li>
                 </ul>
                 <div class="nav-item mr-1 mb-2 mb-lg-0 row pr-0">
                     <div class="inner-form">
                         <div class="input-field">
                             <button class="btn-search" type="button">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                     <path
                                         d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                     </path>
                                 </svg>
                             </button>
                             <input id="search" type="text" placeholder="What are you looking for? " />
                         </div>
                     </div>
                     <!-- <div class="input-group m-2">
                    <input type="text" class="form-control border border-none" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">Go</button>
                    </div>
                </div> -->

                 </div>
             </div>
         </div>
         <nav style="background: #000000ad" class="navbar fixed-top navbar-dark py-1">
             <div class="col px-0">
                 <div class="float-right">
                     <a style="font-size: 12px;" class="nav-link py-0 text-white" href="reseller.php">Reseller</a>
                 </div>
                 <div class="float-right">
                     <a style="font-size: 12px;" class="nav-link py-0 text-white" href="partners.php">Partner</a>
                 </div>
             </div>
         </nav>
     </nav>
     <!-- End Navbar -->