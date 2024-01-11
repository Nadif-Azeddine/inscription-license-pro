@extends('layouts.admin')

@section('content')
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{URL("/images/logo.png")}}" width="70px" height="70px" alt="ArrOw"></div>
    </div>
</div>

<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="index.html" class="navbar-brand"><img src="{{URL("/images/logo.png")}}" alt="BigBucket" />
            <strong>Big</strong> Bucket</a>
        <div id="navbar_main">
            <ul class="navbar-nav mr-auto hidden-xs">
                <li class="nav-item page-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Table Basic</li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item hidden-xs">
                    <form class="form-inline main_search">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..."
                            aria-label="Search">
                    </form>
                </li>
                <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i class="fa fa-cogs"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fa fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                        <div class="py-3 px-3">
                            <h5 class="heading h6 mb-0">Notifications <span
                                    class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                        </div>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-pink">TC</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur eiusmod tempor</p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-blue">WS</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem sit amet consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </a>
                        </div>
                        <div class="py-3 text-center">
                            <a href="javascript:void(0);" class="link link-sm link--style-3">View all notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">User menu</h6>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span
                                class="float-right badge badge-success">$50K</span><i
                                class="fa fa-briefcase text-primary"></i>My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-warning">4</span><i
                                class="fa fa-envelope text-primary"></i>Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-sign-out text-primary"></i>Sign
                            out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main_content" id="main-content">
    <div class="left_sidebar">
        <nav class="sidebar">
            <div class="user-info">
                <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
                <div class="detail mt-3">
                    <h5 class="mb-0">Mike Thomas</h5>
                    <small>Admin</small>
                </div>
                <div class="social">
                    <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                    <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                </div>
            </div>
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>
                <li><a href=""><i class="ti-home"></i><span>Dashboard</span></a></li>
                <li class="g_heading">Chart, Froms & Elements</li>
             
                <li class="active">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Tabels</span></a>
                    <ul>
                        <li><a href="{{ route('condidats') }}">condidates</a></li>
                        <li class="active"><a href="{{ route('licences') }}">Licence</a></li>
                        <li><a href="{{ route('XMLlicences') }}">XML-Licence</a></li>
                        <li><a href="table-editable.html">dossier-condidature</a></li>
                        <li><a href="{{ route('Users') }}">Users</a></li>
                        <li><a href="{{ route('XMLUsers') }}">XML-Users</a></li>
                        <li><a href="{{ route('inscriptions') }}">inscriptions</a></li>
                        <li><a href="{{ route('XMLinscriptions') }}">XMLinscriptions</a></li>
                       
                    </ul>
                </li>
                <li class="g_heading">Users</li>
                <li><a href="page-profile.html"><i class="ti-user"></i><span>Profile</span></a></li>
                <li><a href="{{ route('Users') }}"><i class="ti-menu-alt"></i><span>list-admins</span></a></li>
               
               
        </nav>
    </div>

    <div class="right_sidebar">
        <div class="setting_div">
            <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
        </div>
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings"
                    role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                    aria-controls="Contact" aria-selected="false">Contact</a></li>
        </ul>
        <hr>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                <div class="sidebar-scroll">
                    <div class="sidebar-widget px-3">
                        <h5>Theme Setting</h5>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="black">
                                <div class="black"></div>
                            </li>
                            <li data-theme="azure">
                                <div class="azure"></div>
                            </li>
                            <li data-theme="indigo" class="active">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Dark Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-dark">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Mini Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-sidebar">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>Language Setting</h5>
                        <select class="selectpicker" title="Select language">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>Chinese</option>
                            <option>Hindi</option>
                            <option>Arabic</option>
                        </select>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>General Setting</h5>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Report Panel Usage</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Email Redirect</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Notifications</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox">
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Location Permission</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked>
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="sidebar-widget px-3">
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">New Project</h4>
                            <h4 class="progress-percentage text-uppercase">$950</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase"> Admin</h4>
                            <h4 class="progress-percentage text-uppercase">$10k</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Balance</h4>
                            <h4 class="progress-percentage text-uppercase">$50k</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Storage</h4>
                            <h4 class="progress-percentage text-uppercase">35GB</h4>
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                            <span class="btn-inner--visible">Upgrade Now</span>
                            <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                <div class="sidebar-widget px-3">
                    <ul class="list-unstyled contact-list">
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="javascript:void(0);">Data Table</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-align-justify"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">                        
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Application</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Calendar</a>
                        <a class="dropdown-item" href="javascript:void(0);">TaskBoard</a>
                        <a class="dropdown-item" href="javascript:void(0);">Chat App</a>
                        <a class="dropdown-item" href="javascript:void(0);">Contacts</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Timeline</a>
                        <a class="dropdown-item" href="javascript:void(0);">Invoices</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Stater page</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Pricing</a>
                        <a class="dropdown-item" href="javascript:void(0);">Search</a>
                        <a class="dropdown-item" href="javascript:void(0);">Testimonials</a>
                        <a class="dropdown-item" href="javascript:void(0);">Map</a>
                        <a class="dropdown-item" href="javascript:void(0);">Icon</a>
                        <a class="dropdown-item" href="javascript:void(0);">Carousel</a>
                        <a class="dropdown-item" href="javascript:void(0);">Gallery</a>
                        <a class="dropdown-item" href="javascript:void(0);">Lookup</a>
                    </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn btn-primary">{{ __('add') }}</button>
                    <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio" class="btn btn-success ml-2">Portfolio</a>
                </form>
            </div>
        </nav>
        
        <div id="app">
            <main class="">
                @yield('table')
            </main>
        </div>
    </div>
</div>
<style>
    .confirmation-dialog {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        z-index: 1000;
    }

    .confirmation-dialog h2 {
        margin-bottom: 10px;
    }

    .confirmation-dialog button {
        padding: 10px 15px;
        margin-right: 10px;
        cursor: pointer;
    }

    .confirmation-dialog button.cancel {
        background-color: #d9534f;
        color: #fff;
    }

    .confirmation-dialog button.confirm {
        background-color: #5bc0de;
        color: #fff;
    }
</style>

<div class="confirmation-dialog" id="confirmationDialog">
    <h2>Are you sure you want to delete this ?</h2>
    <button class="cancel" onclick="cancelDelete()">Cancel</button>
    <button class="confirm" onclick="submitDelete()">Delete</button>
</div>

<script>
    function confirmDelete() {
        document.getElementById('confirmationDialog').style.display = 'block';
    }

    function cancelDelete() {
        document.getElementById('confirmationDialog').style.display = 'none';
    }

    function submitDelete() {
        document.getElementById('deleteForm').submit();
    }
</script>
@section('scripts')
@endsection

@endsection
