<?php
$action = Route::currentRouteAction();
$class_basename = (class_basename($action));
$controller = explode('@', $class_basename);
//echo '<pre>';print_r($controller);die;
?>
<header class="<?php if($controller[0] == 'FrantController' && $controller[1] == 'index') { ?>main_menu home_menu<?php }else{echo 'main_menu single_page_menu';} ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}"> <img src="public/assets/img/logo.png" height="90" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">WPS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ubsk')}}">UBSK</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Contact</a>
                            </li>
                            <li class="d-none d-lg-block">
                                <a class="btn_1" href="{{url('donate')}}">Donate</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>