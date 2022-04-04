<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>NEMSA-search</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assetz/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assetz/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-white npc-landing ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <header class="header has-header-main-s1 bg-grad-a " id="home">
                <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
                    <div class="container header-container">
                        <div class="header-wrap">
                            <div class="header-logo">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./assets/images/logo2.png" srcset="./images/logo2.png 4x" alt="logo">
                                    <img class="logo-dark logo-img" src="./assets/images/logo2.png" srcset="./images/logo2.png 4x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="header-toggle">
                                <button class="menu-toggler" data-target="mainNav">
                                    <em class="menu-on icon ni ni-menu"></em>
                                    <em class="menu-off icon ni ni-cross"></em>
                                </button>
                            </div><!-- .header-nav-toggle -->
                            <nav class="header-menu" data-content="mainNav">
                                <ul class="menu-list ml-lg-auto">


                                @if(!Auth::User())
                                    <li>
                                        <a href="{{ route('register')}}" target="_blank" class="btn btn-primary btn-lg mr-3 sm-mb-3 ">Register</a>
                                    </li>  

                                    <li>
                                        <a href="{{ route('login')}}" target="_blank" class="btn btn-success btn-lg">Sign In</a>
                                    </li>

                                @else

                                <li>
                                        <a href="{{ url ('/')}}" target="_blank" class="btn btn-primary btn-lg mr-3 sm-mb-3 ">Dashboard</a>
                                    </li>
                                            
                                @endif
   
                                </ul>
                               
                            </nav><!-- .nk-nav-menu -->
                        </div><!-- .header-warp-->
                    </div><!-- .container-->
                </div><!-- .header-main-->
                <div class="header-content my-auto py-5 is-dark">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-7 col-md-10">
                                <div class="header-caption">

                                    <img class="mb-3" src="./assets/images/logo3.png"alt="logo" >
                             

                                    <h1 class="header-title">Nigerian Electricity Management Services Agency (NEMSA)</h1>
                                    <div class="header-text">
                                        <p>Check for Valid Certificate </p>
                                    </div>

                                   


                                </div><!-- .header-caption -->

                                <div class="row gy-4 align-center py-5">

                                

                                   <div class="col-lg-6">
                                            <div class="form-group">
                                                 <div class="form-control-wrap ">
                                                     <select class=" form-control form-control-lg">
                                                        <option value="Individual">Individual</option>
                                                        <option value="Manufacturer">Manufacturer</option>
                                                        <option value="Product">Product/Equipment</option>
                                                        <option value="Engineering">Engineering Firm</option>
                                                      </select>
                                                 </div>
                                            </div>
                                    </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control form-control-lg" placeholder="Input Certificate Number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                        <div class="form-group">
                                                        <a href="#" class="btn btn-success btn-lg"><span>Search</span></a>

                                                            </div>

                                                        </div>
                                                    </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .header-content -->
            </header><!-- .header -->

    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assetz/js/bundle.js?ver=2.9.1"></script>
    <script src="./assetz/js/scripts.js?ver=2.9.1"></script>
</body>

</html>