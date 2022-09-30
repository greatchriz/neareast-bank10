{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources//dash/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/findash/html-dark/dashboard-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:22:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FinDash - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/dash/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/dash/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/dash/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/dash/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/dash/css/responsive.css">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="/dash/images/logo.png" class="img-fluid rounded" alt="">
                    <span>FinDash</span>
                </a>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                        <div class="hover-circle"><i class="ri-close-fill"></i></div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="true"><span class="ripple rippleEffect"></span><i
                                    class="las la-home iq-arrow-left"></i><span>Dashboard</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                                <li><a href="index.html"><i class="las la-laptop-code"></i>Account Dashboard</a></li>
                                <li><a href="dashboard-1.html"><i class="las la-ad"></i>Marketing Dashboard</a></li>
                                <li><a href="dashboard-2.html"><i class="lab la-bandcamp"></i>Product Management</a>
                                </li>
                                <li><a href="dashboard-3.html"><i class="las la-atom"></i>Sales Dashboard</a></li>
                                <li class="active"><a href="dashboard-4.html"><i class="las la-crosshairs"></i>Banking
                                        Dashboard</a></li>
                                <li><a href="dashboard-5.html"><i class="las la-cash-register"></i>Cash Management </a>
                                </li>
                                <li><a href="dashboard-6.html"><i class="las la-bullseye"></i>Manufacturing </a></li>
                            </ul>
                        </li>
                        <li aria-expanded="true">
                            <a href="#menu-design" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-menu-3-line iq-arrow-left"></i><span>Menu
                                    Design</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Horizontal menu</a>
                                </li>
                                <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>Horizontal Top
                                        Menu</a>
                                </li>
                                <li><a href="two-sidebar.html"><i class="ri-indent-decrease"></i>Two Sidebar</a></li>
                                <li><a href="vertical-top-menu.html"><i class="ri-line-height"></i>Vertical block
                                        menu</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html" class="iq-waves-effect"><i
                                    class="las la-calendar iq-arrow-left"></i><span>Calendar</span></a>
                        </li>
                        <li>
                            <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="false"><span class="ripple rippleEffect"></span><i
                                    class="las la-user-tie iq-arrow-left"></i><span>User</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle"
                                style="">
                                <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>
                                <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>
                                <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>
                                <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i
                                    class="las la-mail-bulk iq-arrow-left"></i><span>Email</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="app/index.html"><i class="las la-inbox"></i>Inbox</a></li>
                                <li><a href="app/email-compose.html"><i class="ri-mail-send-line"></i>Email
                                        Compose</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI
                                    Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                                <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                                <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                                <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                                <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                                <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                                <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                                <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                                <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                                <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                                <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                                <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                                <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                                <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                                <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                                <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                                <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                                <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                                <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                                <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="lab la-wpforms iq-arrow-left"></i><span>Forms</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                                <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                                <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                                <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a>
                                </li>
                                <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-archive-drawer-line iq-arrow-left"></i><span>Forms
                                    Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="wizard-form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                                <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate
                                        Wizard</a>
                                </li>
                                <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical
                                        Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-table-line iq-arrow-left"></i><span>Table</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                                <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                                <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i
                                    class="ri-pie-chart-box-line iq-arrow-left"></i><span>Charts</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a>
                                </li>
                                <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                                <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                                <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-list-check iq-arrow-left"></i><span>Icons</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                                <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome
                                        5</a></li>
                                <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a>
                                </li>
                                <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                                <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i
                                    class="ri-pages-line iq-arrow-left"></i><span>Authentication</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                                <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                                <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover
                                        Password</a></li>
                                <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm
                                        Mail</a></li>
                                <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-pantone-line iq-arrow-left"></i><span>Extra
                                    Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a>
                                </li>
                                <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a>
                                </li>
                                <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                                <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                                <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a>
                                </li>
                                <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                                <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a>
                                </li>
                                <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a>
                                </li>
                                <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a>
                                </li>
                                <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-record-circle-line iq-arrow-left"></i><span>Menu
                                    Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                                <li>
                                    <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                                    <ul>
                                        <li class="menu-level">
                                            <a href="#sub-menu" class="iq-waves-effect collapsed"
                                                data-toggle="collapse" aria-expanded="false"><i
                                                    class="ri-play-circle-line"></i><span>Sub-menu</span><i
                                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                            <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                                <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu
                                                        1</a></li>
                                                <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu
                                                        2</a></li>
                                                <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu
                                                        3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                                <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-menu-line"></i></div>
                            <div class="hover-circle"><i class="ri-close-fill"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                            <a href="index.html" class="header-logo">
                                <img src="/dash/images/logo.png" class="img-fluid rounded" alt="">
                                <span>FinDash</span>
                            </a>
                        </div>
                    </div>
                    <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item">
                                <a class="search-toggle iq-waves-effect language-title" href="#"><span
                                        class="ripple rippleEffect"
                                        style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img
                                        src="/dash/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1"
                                        style="height: 16px; width: 16px;"> EN <i
                                        class="ri-arrow-down-s-line"></i></a>
                                <div class="iq-sub-dropdown">
                                    <a class="iq-sub-card" href="#"><img src="/dash/images/small/flag-02.png"
                                            alt="img-flaf" class="img-fluid mr-2">French</a>
                                    <a class="iq-sub-card" href="#"><img src="/dash/images/small/flag-03.png"
                                            alt="img-flaf" class="img-fluid mr-2">Spanish</a>
                                    <a class="iq-sub-card" href="#"><img src="/dash/images/small/flag-04.png"
                                            alt="img-flaf" class="img-fluid mr-2">Italian</a>
                                    <a class="iq-sub-card" href="#"><img src="/dash/images/small/flag-05.png"
                                            alt="img-flaf" class="img-fluid mr-2">German</a>
                                    <a class="iq-sub-card" href="#"><img src="/dash/images/small/flag-06.png"
                                            alt="img-flaf" class="img-fluid mr-2">Japanese</a>
                                </div>
                            </li>
                            <li class="nav-item nav-icon">
                                <a href="#" class="iq-waves-effect bg-primary rounded"><span
                                        class="ripple rippleEffect"></span><i class="ri-shopping-cart-2-line"></i></a>
                            </li>
                            <li class="nav-item nav-icon">
                                <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">
                                    <i class="ri-notification-line"></i>
                                    <span class="bg-danger dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Notifications<small
                                                        class="badge  badge-light float-right pt-1">4</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/01.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Emma Watson Barry</h6>
                                                        <small class="float-right font-size-12">Just Now</small>
                                                        <p class="mb-0">95 MB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                        <small class="float-right font-size-12">5 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/03.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                        <small class="float-right font-size-12">2 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/04.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                        <small class="float-right font-size-12">3 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">
                                    <i class="ri-mail-line"></i>
                                    <span class="bg-danger count-mail"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Messages<small
                                                        class="badge  badge-light float-right pt-1">5</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/01.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                        <small class="float-left font-size-12">13 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                        <small class="float-left font-size-12">20 Apr</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/03.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Why do we use it?</h6>
                                                        <small class="float-left font-size-12">30 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/04.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Variations Passages</h6>
                                                        <small class="float-left font-size-12">12 Sep</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="/dash/images/user/05.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                        <small class="float-left font-size-12">5 Dec</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-list">
                        <li class="line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="/dash/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                                <div class="caption">
                                    <h6 class="mb-0 line-height">Barry Tech</h6>
                                    <p class="mb-0">Manager</p>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                            <span class="text-white font-size-12">Available</span>
                                        </div>
                                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Profile</h6>
                                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-profile-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Edit Profile</h6>
                                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-account-box-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Account settings</h6>
                                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-lock-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign
                                                out<i class="ri-login-box-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">FinDash</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- color-customizer -->
    <div class="iq-colorbox color-fix">
        <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a>
        </div>
        <div class="clearfix color-picker">
            <h3 class="iq-font-black">FinDash Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your
                own
                with limitless possibilities! </p>
            <ul class="iq-colorselect clearfix">
                <li class="color-1 iq-colormark" data-style="color-1"></li>
                <li class="color-2" data-style="iq-color-2"></li>
                <li class="color-3" data-style="iq-color-3"></li>
                <li class="color-4" data-style="iq-color-4"></li>
                <li class="color-5" data-style="iq-color-5"></li>
                <li class="color-6" data-style="iq-color-6"></li>
                <li class="color-7" data-style="iq-color-7"></li>
                <li class="color-8" data-style="iq-color-8"></li>
                <li class="color-9" data-style="iq-color-9"></li>
                <li class="color-10" data-style="iq-color-10"></li>
                <li class="color-11" data-style="iq-color-11"></li>
                <li class="color-12" data-style="iq-color-12"></li>
                <li class="color-13" data-style="iq-color-13"></li>
                <li class="color-14" data-style="iq-color-14"></li>
                <li class="color-15" data-style="iq-color-15"></li>
                <li class="color-16" data-style="iq-color-16"></li>
                <li class="color-17" data-style="iq-color-17"></li>
                <li class="color-18" data-style="iq-color-18"></li>
                <li class="color-19" data-style="iq-color-19"></li>
                <li class="color-20" data-style="iq-color-20"></li>
            </ul>
            <a target="_blank" class="btn btn-primary d-block mt-3" href="#">Purchase Now</a>
        </div>
    </div>
    <!-- color-customizer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/dash/js/jquery.min.js"></script>
    <script src="/dash/js/popper.min.js"></script>
    <script src="/dash/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="/dash/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="/dash/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="/dash/js/waypoints.min.js"></script>
    <script src="/dash/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="/dash/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="/dash/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="/dash/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="/dash/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="/dash/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="/dash/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="/dash/js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="/dash/js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="/dash/js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="/dash/js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="/dash/js/animated.js"></script>
    <!-- am Dark JavaScript -->
    <script src="/dash/js/dark.js"></script>
    <!-- am kelly JavaScript -->
    <script src="/dash/js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="/dash/js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="/dash/js/worldLow.js"></script>
    <!-- Style Customizer -->
    <script src="/dash/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/dash/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/dash/js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/findash/html-dark/dashboard-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:22:55 GMT -->

</html>
