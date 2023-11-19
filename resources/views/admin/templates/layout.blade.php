<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from master-admin-template.multipurposethemes.com/bs5/travel/analysis.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2023 13:30:59 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://master-admin-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Master Admin - Dashboard</title>

    <!-- Vendors Style-->
    <!-- <link rel="stylesheet" href="{{asset('admin/css/vendors_css.css')}}"> -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/admin.css')}}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-30">
                        <span class="light-logo"><img src="{{asset('admin//images/logo-letter.png')}}" alt="logo"></span>
                        <span class="dark-logo"><img src="{{asset('admin//images/logo-letter.png')}}" alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="{{asset('admin//images/logo-dark-text.png')}}" alt="logo"></span>
                        <span class="dark-logo"><img src="{{asset('admin//images/logo-light-text.png')}}" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-outline no-border btn-primary-light" data-toggle="push-menu" role="button">
                                <i data-feather="align-left"></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="contact_app_chat.html" class="waves-effect waves-light nav-link btn-outline no-border svg-bt-icon btn-info-light" title="Chat">
                                <i data-feather="message-circle"></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="mailbox.html" class="waves-effect waves-light nav-link btn-outline no-border svg-bt-icon btn-danger-light" title="Mailbox">
                                <i data-feather="at-sign"></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="extra_taskboard.html" class="waves-effect waves-light btn-outline no-border nav-link svg-bt-icon btn-success-light" title="Taskboard">
                                <i data-feather="clipboard"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-outline no-border full-screen btn-warning-light" title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border btn-info-light" data-bs-toggle="dropdown" title="Notifications">
                                <i data-feather="bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle no-border p-5" data-bs-toggle="dropdown" title="User">
                                <img class="avatar avatar-pill" src="../images/avatar/3.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light btn-outline no-border btn-danger-light">
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Dashboard</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('show_new_order')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Đơn Hàng mới</a></li>
                                    <li><a href="analysis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Analysis</a></li>
                                </ul>
                            </li>
                            <li class="header">Apps & Pages </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="grid"></i>
                                    <span>Apps</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
                                    <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
                                    <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
                                    <li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
                                    <li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="edit"></i>
                                    <span>Dịch vụ</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('Admin_add_deal')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tạo mã Giảm giá</a></li>
                                    <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
                                    <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
                                    <li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
                                    <li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
                                    <li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
                                    <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
                                    <li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="shopping-cart"></i>
                                    <span>Sản phẩm</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('Admin_add_pro')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Thêm sản phẩm</a></li>
                                    <li><a href="{{route('list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Danh sách sản phẩm</a></li>
                                    <li><a href="{{route('add_cate')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Thêm loại sản phẩm</a></li>
                                    <li><a href="{{route('list_cate')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Loại sản phẩm</a></li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="cast"></i>
                                    <span>Pages</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
                                    <li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>
                                    <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
                                    <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
                                    <li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
                                    <li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>
                                    <li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
                                    <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
                                    <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
                                    <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
                                    <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
                                    <li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
                                    <li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
                                </ul>
                            </li>
                            <li class="header">User Interface</li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="package"></i>
                                    <span>Features</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
                                    <li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
                                    <li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
                                    <li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>
                                    <li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
                                    <li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
                                    <li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
                                    <li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
                                            <li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
                                            <li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>
                                            <li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
                                            <li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
                                            <li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
                                            <li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
                                            <li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
                                    <li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
                                    <li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
                                    <li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
                                    <li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
                                    <li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="credit-card"></i>
                                    <span>Card</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
                                    <li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
                                    <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
                                    <li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
                                    <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="eye"></i>
                                    <span>Components</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
                                    <li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
                                    <li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
                                    <li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
                                    <li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
                                    <li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
                                    <li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
                                    <li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
                                    <li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
                                    <li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
                                </ul>
                            </li>
                            <li class="header">Forms, Tables & Charts</li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="inbox"></i>
                                    <span>Forms & Tables</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
                                            <li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
                                            <li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>
                                            <li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
                                            <li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
                                            <li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
                                            <li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
                                            <li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
                                            <li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
                                            <li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
                                            <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
                                            <li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
                                            <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="pie-chart"></i>
                                    <span>Charts</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
                                    <li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
                                    <li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
                                    <li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
                                    <li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
                                    <li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
                                    <li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
                                    <li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                    <li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
                                    <li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
                                    <li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
                                    <li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
                                    <li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
                                </ul>
                            </li>
                            <li class="header">Login & Error</li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="lock"></i>
                                    <span>Authentication</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
                                    <li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
                                    <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
                                    <li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="alert-triangle"></i>
                                    <span>Miscellaneous</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
                                    <li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
                                    <li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="sidebar-widgets">
                            <div class="copyright text-start m-25">
                                <p><strong class="d-block">Master Admin Dashboard</strong> © 2021 All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
        <!-- content -->
        @yield('content')
        <!-- content -->
        <script src="{{asset('admin/js/vendors.min.js')}}"></script>
        <!-- <script src="{{asset('admin/js/pages/chat-popup.js')}}"></script> -->
        <script src="{{asset('admin/assets/icons/feather-icons/feather.min.js')}}"></script>

        <!-- <script src="{{asset('admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
        <script src="{{asset('admin/assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script> -->

        <!-- Master Admin App -->
        <script src="{{asset('admin/js/template.js')}}"></script>
        <!-- <script src="{{asset('admin/js/pages/dashboard2.js')}}"></script> -->
        @yield('script')
</body>

<!-- Mirrored from master-admin-template.multipurposethemes.com/bs5/travel/analysis.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jul 2023 13:31:00 GMT -->

</html>