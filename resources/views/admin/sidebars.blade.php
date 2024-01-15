@extends('layouts.admin')

@section('content')
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ URL('/images/logo.png') }}" width="70px" height="70px" alt="ArrOw"></div>
        </div>
    </div>

    <nav class="navbar custom-navbar navbar-expand-lg py-2">
        <div class="container-fluid px-0">
            <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
            <a href="index.html" class="navbar-brand"><img src="{{ URL('/images/logo.png') }}" alt="BigBucket" />
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

                        <li class="nav-item dropdown">
                            <div class="d-flex align-items-center ">
                                <div class="dropdown" style="">
                                    <button class="" type="button" id="triggerId" data-bs-toggle="dropdown"> <i
                                            class="fa-solid fa-earth-africa fs-5 mt-2"></i> </button>
                                    <div class="dropdown-menu shadow-sm end-0" style="left: unset"
                                        aria-labelledby="triggerId">
                                        <ul class="m-0 p-0">
                                            <li class="dropdown-item col-12"><a href="/local?lang=en">
                                                    <i class="fa fa-language me-2" aria-hidden="true"></i>
                                                    <span>@lang('dropdown.en')</span>
                                                </a></li>
                                            <li class="dropdown-item col-12"><a href="/local?lang=fr">
                                                    <i class="fa fa-language me-2" aria-hidden="true"></i>
                                                    <span>@lang('dropdown.fr')</span>
                                                </a></li>
                                            <li class="dropdown-item col-12"><a href="/local?lang=ar">
                                                    <i class="fa fa-language me-2"
                                                        aria-hidden="true"></i><span>@lang('dropdown.ar')</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h6 class="dropdown-header">User menu</h6>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="fa fa-arrow-circle-right"
                                            aria-hidden="true"></i> Fermer Session</button>
                                </form>
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
                    <div class="image"><a href="javascript:void(0);"><img width="70px" height="99px"
                                src="{{ URL('/images/person.jpg') }}" alt="User"></a></div>
                    <div class="detail mt-3">
                        <h5 class="mb-0">@lang('admin.Admin')</h5>
                        <small>@lang('admin.Admin')</small>
                    </div>

                </div>
                <ul id="main-menu" class="metismenu">
                    <li class="g_heading">@lang('admin.Main')</li>
                    <li><a href=""><i class="ti-home"></i><span>@lang('admin.Dashboard')</span></a></li>
                    <li class="g_heading">@lang('admin.TablesFromsElements')</li>

                    <li class="active">
                        <a href="javascript:void(0)" class="has-arrow"><i
                                class="ti-view-list"></i><span>@lang('admin.Tabels')</span></a>
                        <ul>
                            <li><a href="{{ route('condidats') }}">@lang('admin.condidates')</a></li>
                            <li class="active"><a href="{{ route('licences') }}">@lang('admin.Licence')</a></li>
                            <li><a href="{{ route('XMLlicences') }}">@lang('admin.XML-Licence')</a></li>
                            <li><a href="{{ route('inscriptionsDossier') }}">@lang('admin.dossier-condidature')</a></li>
                            <li><a href="{{ route('Users') }}">@lang('admin.Users')</a></li>
                            <li><a href="{{ route('XMLUsers') }}">@lang('admin.ListeXMLUsers')</a></li>
                            <li><a href="{{ route('inscriptions') }}">@lang('admin.Listeinscription')</a></li>
                            <li><a href="{{ route('XMLinscriptions') }}">@lang('admin.ListeXMLinscription')</a></li>

                        </ul>
                    </li>
                    <li class="g_heading">@lang('admin.Users')</li>
                    <li><a href="page-profile.html"><i class="ti-user"></i><span>@lang('admin.Profile')</span></a></li>
                    <li><a href="{{ route('Users') }}"><i class="ti-menu-alt"></i><span>@lang('admin.list-admins')</span></a>
                    </li>
                    <li class="g_heading">@lang('admin.role_per')</li>
                        <li><a href="{{route('roles')}}"><i class="fa fa-shield"></i><span>@lang('admin.role_per')</span></a></li>

            </nav>
        </div>

        <div class="right_sidebar">
            <div class="setting_div">
                <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
            </div>
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings"
                        role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
                <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact"
                        role="tab" aria-controls="Contact" aria-selected="false">Contact</a></li>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="page">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="javascript:void(0);">@lang('admin.Data-Table')</a>

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
        <h2>@lang('admin.confirmation-dialog')</h2>
        <button class="cancel" onclick="cancelDelete()">@lang('admin.cancel')</button>
        <button class="confirm" onclick="submitDelete()">@lang('admin.delete')</button>
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
