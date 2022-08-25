<!doctype html>
<html lang="en">
<head>
<title>:: Lucid :: Form Advanced</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="../assets/vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="../assets/vendor/nouislider/nouislider.min.css" />

<link rel="stylesheet" href="../assets/vendor/select2/select2.css" />

<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

<style>
    .demo-card label{ display: block; position: relative;}
    .demo-card .col-lg-4{ margin-bottom: 30px;}
</style>
</head>
<body class="theme-cyan">

<div class="page-loader-wrapper">
<div class="loader">
<div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
<p>Please wait...</p>
</div>
</div>

<div id="wrapper">
<nav class="navbar navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-btn">
<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
</div>
<div class="navbar-brand">
<a href="index.html"><img src="../assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>
</div>
<div class="navbar-right">
<form id="navbar-search" class="navbar-form search-form">
<input value="" class="form-control" placeholder="Search here..." type="text">
<button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
</form>
<div id="navbar-menu">
<ul class="nav navbar-nav">
<li>
<a href="file-dashboard.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-folder-open-o"></i></a>
</li>
<li>
<a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
</li>
<li>
<a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
</li>
<li>
<a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
</li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
<i class="icon-bell"></i>
<span class="notification-dot"></span>
</a>
<ul class="dropdown-menu notifications">
<li class="header"><strong>You have 4 new Notifications</strong></li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-info text-warning"></i>
</div>
<div class="media-body">
<p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
<span class="timestamp">10:00 AM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-like text-success"></i>
</div>
<div class="media-body">
<p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
<span class="timestamp">11:30 AM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-pie-chart text-info"></i>
</div>
<div class="media-body">
<p class="text">Website visits from Twitter is 27% higher than last week.</p>
<span class="timestamp">04:00 PM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-info text-danger"></i>
</div>
<div class="media-body">
<p class="text">Error on website analytics configurations</p>
<span class="timestamp">Yesterday</span>
</div>
</div>
</a>
</li>
<li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
</ul>
</li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
<ul class="dropdown-menu user-menu menu-icon">
<li class="menu-heading">ACCOUNT SETTINGS</li>
<li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
 <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
<li class="menu-heading">BILLING</li>
<li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
</ul>
</li>
<li>
<a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
</li>
</ul>
</div>
</div>
</div>
</nav>
<div id="left-sidebar" class="sidebar">
<div class="sidebar-scroll">
<div class="user-account">
<img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
<div class="dropdown">
<span>Welcome,</span>
<a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
<ul class="dropdown-menu dropdown-menu-right account">
<li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
<li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
<li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
<li class="divider"></li>
<li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
</ul>
</div>
<hr>
<ul class="row list-unstyled">
<li class="col-4">
<small>Sales</small>
<h6>456</h6>
</li>
<li class="col-4">
<small>Order</small>
<h6>1350</h6>
</li>
<li class="col-4">
<small>Revenue</small>
<h6>$2.13B</h6>
</li>
</ul>
</div>

<!-- <ul class="nav nav-tabs">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="forms-advanced.html#menu">Menu</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="forms-advanced.html#Chat"><i class="icon-book-open"></i></a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="forms-advanced.html#setting"><i class="icon-settings"></i></a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="forms-advanced.html#question"><i class="icon-question"></i></a></li>
</ul>

<div class="tab-content p-l-0 p-r-0">
<div class="tab-pane active" id="menu">
<nav id="left-sidebar-nav" class="sidebar-nav">
<ul id="main-menu" class="metismenu">
<li>
<a href="forms-advanced.html#Dashboard" class="has-arrow"><i class="icon-home"></i> <span>Dashboard</span></a>
<ul>
<li><a href="index.html">Analytical</a></li>
<li><a href="index2.html">Demographic</a></li>
 <li><a href="index3.html">Hospital</a></li>
<li><a href="index4.html">University</a></li>
<li><a href="index5.html">Real Estate</a></li>
<li><a href="index6.html">Project</a></li>
<li><a href="index7.html">Cryptocurrency</a></li>
<li><a href="index8.html">eCommerce</a></li>
<li><a href="index9.html">IoT</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#App" class="has-arrow"><i class="icon-grid"></i> <span>App</span></a>
<ul>
<li><a href="app-inbox.html">Inbox</a></li>
<li><a href="app-chat.html">Chat</a></li>
<li><a href="app-calendar.html">Calendar</a></li>
<li><a href="app-contact.html">Contact list</a></li>
<li><a href="app-contact-grid.html">Contact Card <span class="badge badge-warning float-right">New</span></a></li>
<li><a href="app-taskboard.html">Taskboard</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#FileManager" class="has-arrow"><i class="icon-folder"></i> <span>File Manager</span></a>
<ul>
<li><a href="file-dashboard.html">Dashboard</a></li>
<li><a href="file-documents.html">Documents</a></li>
<li><a href="file-media.html">Media</a></li>
<li><a href="file-images.html">Images</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Blog" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
<ul>
<li><a href="blog-dashboard.html">Dashboard</a></li>
<li><a href="blog-post.html">New Post</a></li>
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-details.html">Blog Detail</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
<ul>
<li><a href="ui-typography.html">Typography</a></li>
<li><a href="ui-tabs.html">Tabs</a></li>
<li><a href="ui-buttons.html">Buttons</a></li>
<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
<li><a href="ui-icons.html">Icons</a></li>
<li><a href="ui-notifications.html">Notifications</a></li>
<li><a href="ui-colors.html">Colors</a></li>
<li><a href="ui-dialogs.html">Dialogs</a></li>
<li><a href="ui-list-group.html">List Group</a></li>
<li><a href="ui-media-object.html">Media Object</a></li>
<li><a href="ui-modals.html">Modals</a></li>
<li><a href="ui-nestable.html">Nestable</a></li>
<li><a href="ui-progressbars.html">Progress Bars</a></li>
<li><a href="ui-range-sliders.html">Range Sliders</a></li>
<li><a href="ui-treeview.html">Treeview</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Widgets" class="has-arrow"><i class="icon-puzzle"></i> <span>Widgets</span></a>
<ul>
<li><a href="widgets-statistics.html">Statistics</a></li>
<li><a href="widgets-data.html">Data</a></li>
<li><a href="widgets-chart.html">Chart</a></li>
<li><a href="widgets-weather.html">Weather</a></li>
<li><a href="widgets-social.html">Social</a></li>
<li><a href="widgets-blog.html">Blog</a></li>
<li><a href="widgets-ecommerce.html">eCommerce</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Authentication" class="has-arrow"><i class="icon-lock"></i> <span>Authentication</span></a>
<ul>
<li><a href="page-login.html">Login</a></li>
<li><a href="page-register.html">Register</a></li>
<li><a href="page-lockscreen.html">Lockscreen</a></li>
<li><a href="page-forgot-password.html">Forgot Password</a></li>
<li><a href="page-404.html">Page 404</a></li>
<li><a href="page-403.html">Page 403</a></li>
<li><a href="page-500.html">Page 500</a></li>
<li><a href="page-503.html">Page 503</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Pages" class="has-arrow"><i class="icon-docs"></i> <span>Pages</span></a>
<ul>
<li><a href="page-blank.html">Blank Page</a> </li>
<li><a href="page-profile.html">Profile <span class="badge badge-default float-right">v1</span></a></li>
<li><a href="page-profile2.html">Profile <span class="badge badge-warning float-right">v2</span></a></li>
<li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
<li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
<li><a href="page-timeline.html">Timeline</a></li>
<li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
<li><a href="page-pricing.html">Pricing</a></li>
<li><a href="page-invoices.html">Invoices</a></li>
<li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
<li><a href="page-search-results.html">Search Results</a></li>
<li><a href="page-helper-class.html">Helper Classes</a></li>
<li><a href="page-teams-board.html">Teams Board</a></li>
<li><a href="page-projects-list.html">Projects List</a></li>
<li><a href="page-maintenance.html">Maintenance</a></li>
<li><a href="page-testimonials.html">Testimonials</a></li>
<li><a href="page-faq.html">FAQ</a></li>
</ul>
</li>
<li class="active">
<a href="forms-advanced.html#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
<ul>
<li><a href="forms-validation.html">Form Validation</a></li>
<li class="active"><a href="forms-advanced.html">Advanced Elements</a></li>
<li><a href="forms-basic.html">Basic Elements</a></li>
<li><a href="forms-wizard.html">Form Wizard</a></li>
<li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
<li><a href="forms-cropping.html">Image Cropping</a></li>
<li><a href="forms-summernote.html">Summernote</a></li>
<li><a href="forms-editors.html">CKEditor</a></li>
<li><a href="forms-markdown.html">Markdown</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
<ul>
<li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
<li><a href="table-normal.html">Normal Tables</a> </li>
<li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
<li><a href="table-editable.html">Editable Tables</a> </li>
<li><a href="table-color.html">Tables Color</a> </li>
<li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
<li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
</ul>
</li>
<li>
<a href="forms-advanced.html#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
<ul>
<li><a href="chart-morris.html">Morris</a> </li>
<li><a href="chart-flot.html">Flot</a> </li>
<li><a href="chart-chartjs.html">ChartJS</a> </li>
<li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
<li><a href="chart-sparkline.html">Sparkline Chart</a></li>
<li><a href="chart-peity.html">Peity</a></li>
<li><a href="chart-c3.html">C3 Charts</a></li>
<li><a href="chart-gauges.html">Gauges</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
<ul>
<li><a href="map-google.html">Google Map</a></li>
<li><a href="map-yandex.html">Yandex Map</a></li>
<li><a href="map-jvectormap.html">jVector Map</a></li>
</ul>
</li>
<li>
<a href="forms-advanced.html#menu-level-1" class="has-arrow"><i class="icon-tag"></i> <span>Menu Level 1</span></a>
<ul>
<li>
<a href="forms-advanced.html#menu-level-2" class="has-arrow">Menu Level 2</a>
<ul>
<li><a href="forms-advanced.html#">Link 1</a></li>
<li><a href="forms-advanced.html#">Link 2</a></li>
<li><a href="forms-advanced.html#">Link 3</a></li>
<li><a href="forms-advanced.html#">Link 4</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</nav>
</div> -->
<?php
include_once "component/header.php"
?>

<div class="tab-pane p-l-15 p-r-15" id="Chat">
<form>
<div class="input-group m-b-20">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-magnifier"></i></span>
</div>
<input type="text" class="form-control" placeholder="Search...">
</div>
</form>
<ul class="right_chat list-unstyled">
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
<div class="media-body">
<span class="name">Chris Fox</span>
<span class="message">Designer, Blogger</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
<div class="media-body">
<span class="name">Joge Lucky</span>
<span class="message">Java Developer</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
<div class="media-body">
<span class="name">Isabella</span>
<span class="message">CEO, Thememakker</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
<div class="media-body">
<span class="name">Folisise Chosielie</span>
 <span class="message">Art director, Movie Cut</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
<div class="media-body">
<span class="name">Alexander</span>
<span class="message">Writter, Mag Editor</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane p-l-15 p-r-15" id="setting">
<h6>Choose Skin</h6>
<ul class="choose-skin list-unstyled">
<li data-theme="purple">
<div class="purple"></div>
<span>Purple</span>
</li>
<li data-theme="blue">
<div class="blue"></div>
<span>Blue</span>
</li>
<li data-theme="cyan" class="active">
<div class="cyan"></div>
<span>Cyan</span>
</li>
<li data-theme="green">
<div class="green"></div>
<span>Green</span>
</li>
<li data-theme="orange">
<div class="orange"></div>
<span>Orange</span>
</li>
<li data-theme="blush">
<div class="blush"></div>
<span>Blush</span>
</li>
</ul>
<hr>
<h6>General Settings</h6>
<ul class="setting-list list-unstyled">
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Report Panel Usag</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox" checked>
<span>Email Redirect</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox" checked>
<span>Notifications</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Auto Updates</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Offline</span>
</label>
</li>
<li>
 <label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Location Permission</span>
</label>
</li>
</ul>
</div>
<div class="tab-pane p-l-15 p-r-15" id="question">
<form>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-magnifier"></i></span>
</div>
<input type="text" class="form-control" placeholder="Search...">
</div>
</form>
<ul class="list-unstyled question">
<li class="menu-heading">HOW-TO</li>
<li><a href="javascript:void(0);">How to Create Campaign</a></li>
<li><a href="javascript:void(0);">Boost Your Sales</a></li>
<li><a href="javascript:void(0);">Website Analytics</a></li>
<li class="menu-heading">ACCOUNT</li>
<li><a href="javascript:void(0);">Cearet New Account</a></li>
<li><a href="javascript:void(0);">Change Password?</a></li>
<li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
<li class="menu-heading">BILLING</li>
<li><a href="javascript:void(0);">Payment info</a></li>
<li><a href="javascript:void(0);">Auto-Renewal</a></li>
<li class="menu-button m-t-30">
<a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12">
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>New Customer</h2>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
<li class="breadcrumb-item">new</li>
<li class="breadcrumb-item active">customer</li>
</ul>
</div>
<div class="col-lg-7 col-md-4 col-sm-12 text-right">
<div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
</div>
<div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2>Basic Info</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Company Name</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">

<label class="control-label"> Title</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Track As Company
  </label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">First</label>
<input type="text" id="text" class="form-control">

</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Last</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone-ex" class="control-label">Email</label>
<input type="email" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Customer ID</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Rewards Member
  </label>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2> Contact</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Phone</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Phone 2</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Alternate contact</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Alternate Phone</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">
<label class="control-label">Common Type</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option>Tax</option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>

</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    OK to e-mail this customer
  </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2> Bill to Address</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Street</label>
<input type="text"  class="form-control">
<!-- <span class="help-block">a*-999-a999</span> -->
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Street 2</label>
<input type="text"  class="form-control">
<!-- <span class="help-block">a*-999-a999</span> -->
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">City</label>
<input type="text"  class="form-control">
<!-- <span class="help-block">a*-999-a999</span> -->
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">State</label>
<input type="text"  class="form-control">
<!-- <span class="help-block">a*-999-a999</span> -->
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">ZIP</label>
<input type="text"  class="form-control">
<!-- <span class="help-block">a*-999-a999</span> -->
</div>
</div>
<!-- <div class="col-lg-3 col-md-6">
<label class="control-label">Common Type</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option>Tax</option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div> -->
<!-- <div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<button type="button" class="btn btn-primary float-right m-t-30 " data-toggle="modal" data-target="#smallModal">
    Save
</button> 
</div>
</div> -->
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Do not allow shipment to this address
  </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2> Ship to Address</h2>
</div>
<div class="body">
<div class="row clearfix">
<!-- <div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Street</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Street 2</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">City</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">State</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">ZIP</label>
<input type="text"  class="form-control">
</div>
</div> -->
<div class="col-lg-3 col-md-6">
<label class="control-label">Address Name</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option>Bill To Address</option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Shipping Address</label>
<textarea class="control-label form-control"></textarea>
</div>
</div>
<!-- <div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<button type="button" class="btn btn-primary float-right m-t-30 " data-toggle="modal" data-target="#smallModal">
    Save
</button> 
</div>
</div> -->
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Default Shipping Address
  </label>
</div>
</div>
<div class="col-lg-12 col-md-6 col-sm-12">
<div class="form-group">
<button type="button" class="btn btn-primary m-t-30 ">
    Save
</button> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->
<!-- <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="title" id="smallModalLabel">Add to Chat</h4>
</div>
<div class="modal-body"> 
    <form action="" method="post">
<div class="row">
        <div class="col-sm-12 col-md-12">
        <input type="text" placeholder="add to chat" class="float-right form-control">
</div>
</div>
</div>
</form>
<div class="modal-footer">
<button type="button" class="btn btn-primary">save</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
</div>
</div>
</div>
</div> -->


<!-- </div> -->
<!-- <div class="col-lg-12">
 <div class="card">
<div class="header">
<h2>Masked Input with icons <small>Taken from <a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></small> </h2>
<ul class="header-dropdown">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="javascript:void(0);">Action</a></li>
<li><a href="javascript:void(0);">Another Action</a></li>
<li><a href="javascript:void(0);">Something else</a></li>
</ul>
</li>
</ul>
</div>
<div class="body">
<div class="demo-masked-input">
<div class="row clearfix">
<div class="col-lg-3 col-md-6">
<b>Date</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-calendar"></i></span>
</div>
<input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Time (24 hour)</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-clock"></i></span>
</div>
<input type="text" class="form-control time24" placeholder="Ex: 23:59">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Time (12 hour)</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-clock"></i></span>
</div>
<input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Date Time</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-calendar"></i></span>
</div>
<input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Mobile Phone Number</b>
<div class="input-group mb-3">
 <div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
</div>
<input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Phone Number</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-phone"></i></span>
</div>
<input type="text" class="form-control phone-number" placeholder="Ex: +00 (000) 000-00-00">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Money (Dollar)</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-dollar"></i></span>
</div>
<input type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>IP Address</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-desktop"></i></span>
</div>
<input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Credit Card</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
</div>
<input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Email Address</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
</div>
<input type="text" class="form-control email" placeholder="Ex: example@example.com">
</div>
</div>
<div class="col-lg-3 col-md-6">
<b>Serial Key</b>
<div class="input-group mb-3">
<div class="input-group-prepend">
 <span class="input-group-text"><i class="fa fa-key"></i></span>
</div>
<input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="card">
<div class="header">
<h2>Multi Select <small>Taken from <a href="https://github.com/lou/multi-select/" target="_blank">github.com/lou/multi-select</a></small> </h2>
<ul class="header-dropdown">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="javascript:void(0);">Action</a></li>
<li><a href="javascript:void(0);">Another Action</a></li>
<li><a href="javascript:void(0);">Something else</a></li>
</ul>
</li>
</ul>
</div>
<div class="body">
<select id="optgroup" class="ms" multiple="multiple">
<optgroup label="Alaskan/Hawaiian Time Zone">
<option value="AK">Alaska</option>
<option value="HI">Hawaii</option>
</optgroup>
<optgroup label="Pacific Time Zone">
<option value="CA">California</option>
<option value="NV">Nevada</option>
<option value="OR">Oregon</option>
<option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
<option value="AZ">Arizona</option>
<option value="CO">Colorado</option>
<option value="ID">Idaho</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NM">New Mexico</option>
<option value="ND">North Dakota</option>
<option value="UT">Utah</option>
<option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="IL">Illinois</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="OK">Oklahoma</option>
<option value="SD">South Dakota</option>
<option value="TX">Texas</option>
<option value="TN">Tennessee</option>
<option value="WI">Wisconsin</option>
</optgroup>
<optgroup label="Eastern Time Zone">
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="IN">Indiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="OH">Ohio</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WV">West Virginia</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
<h2>Multiselect</h2>
</div>
<div class="body demo-card">
<div class="row clearfix">
<div class="col-lg-4 col-md-12">
<label>Default</label>
<select id="multiselect1" name="multiselect1[]" class="multiselect" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
<option value="mushrooms">Mushrooms</option>
<option value="pepperoni">Pepperoni</option>
<option value="onions">Onions</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>"Select All" Option Enabled</label>
<select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="multiselect-all">Select All</option>
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
<option value="mushrooms">Mushrooms</option>
<option value="pepperoni">Pepperoni</option>
<option value="onions">Onions</option>
</select>
</div>
 <div class="col-lg-4 col-md-12">
<label>Options Group</label>
<select id="multiselect5" name="multiselect5" class="multiselect-custom" multiple="multiple">
<optgroup label="Mathematics">
<option value="analysis">Analysis</option>
<option value="algebra">Linear Algebra</option>
<option value="discrete">Discrete Mathematics</option>
<option value="numerical">Numerical Analysis</option>
<option value="probability">Probability Theory</option>
</optgroup>
<optgroup label="Computer Science">
<option value="programming">Introduction to Programming</option>
<option value="automata">Automata Theory</option>
<option value="complexity">Complexity Theory</option>
<option value="software">Software Engineering</option>
</optgroup>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Smaller Size</label>
<select id="multiselect-size" name="multiselect7[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Custom Checkbox</label>
<select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
<option value="mushrooms">Mushrooms</option>
<option value="pepperoni">Pepperoni</option>
<option value="onions">Onions</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Single Selection</label>
<select id="single-selection" name="single_selection" class="multiselect multiselect-custom">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
<option value="mushrooms">Mushrooms</option>
<option value="pepperoni">Pepperoni</option>
<option value="onions">Onions</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Filter Enabled</label>
<select id="multiselect4-filter" name="multiselect4[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="bootstrap">Bootstrap</option>
<option value="bootstrap-marketplace">Bootstrap Marketplace</option>
<option value="bootstrap-theme">Bootstrap Theme</option>
<option value="html">HTML</option>
<option value="html-template">HTML Template</option>
<option value="wp-marketplace">WordPress Marketplace</option>
<option value="wp-plugin">WordPress Plugin</option>
<option value="wp-theme">WordPress Theme</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Disabled Options</label>
<select id="multiselect6" name="multiselect6[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
<option value="mushrooms" disabled="disabled">Mushrooms</option>
<option value="pepperoni" disabled="disabled">Pepperoni</option>
<option value="onions" disabled="disabled">Onions</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Custom Button Class (btn-primary)</label>
<select id="multiselect-color" name="multiselect9[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Custom Button Class (btn-success)</label>
<select id="multiselect-color2" name="multiselect10[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
</select>
</div>
<div class="col-lg-4 col-md-12">
<label>Link (btn-link)</label>
<select id="multiselect-link" name="multiselect8[]" class="multiselect multiselect-custom" multiple="multiple">
<option value="cheese">Cheese</option>
<option value="tomatoes">Tomatoes</option>
<option value="mozarella">Mozzarella</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-lg-12">
<div class="card">
<div class="header">
<h2>Tags Input <small>Taken from <a href="https://github.com/bootstrap-tagsinput/bootstrap-tagsinput" target="_blank">github.com/bootstrap-tagsinput/bootstrap-tagsinput</a></small> </h2>
<ul class="header-dropdown">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="javascript:void(0);">Action</a></li>
<li><a href="javascript:void(0);">Another Action</a></li>
<li><a href="javascript:void(0);">Something else</a></li>
</ul>
</li>
</ul>
</div>
<div class="body">
<div class="input-group demo-tagsinput-area">
<input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo">
</div>
</div>
</div>
</div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="card">
<div class="header">
<h2>Input Slider <small>Taken from <a href="http://refreshless.com/nouislider" target="_blank">refreshless.com/nouislider</a> & <a href="http://materializecss.com" target="_blank">materializecss.com</a></small> </h2>
<ul class="header-dropdown">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="javascript:void(0);">Action</a></li>
<li><a href="javascript:void(0);">Another Action</a></li>
<li><a href="javascript:void(0);">Something else</a></li>
</ul>
</li>
</ul>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-6 col-md-12">
<p><b>Basic Example</b></p>
<div id="nouislider_basic_example"></div>
<div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
</div>
<div class="col-lg-6 col-md-12">
<p><b>Range Example</b></p>
<div id="nouislider_range_example"></div>
<div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
<h2>Date Picker</h2>
</div>
<div class="body">
<div class="row">
<div class="col-lg-4 col-md-12">
<label>Default</label>
<div class="input-group mb-3">
<input data-provide="datepicker" data-date-autoclose="true" class="form-control">
</div>
</div>
<div class="col-lg-4 col-md-12">
<label>Custom Format (dd/mm/yyyy)</label>
<div class="input-group mb-3">
<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
</div>
</div>
<div class="col-lg-4 col-md-12">
<label>With Component</label>
<div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
<input type="text" class="form-control">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar"></i></button>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<label>Range</label>
<div class="input-daterange input-group" data-provide="datepicker">
<input type="text" class="input-sm form-control" name="start">
<span class="input-group-addon">to</span>
<input type="text" class="input-sm form-control" name="end">
</div>
</div>
<div class="col-lg-6 col-md-12">
<label>Inline</label>
<div class="inline-datepicker"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4"></div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</div> -->

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> 
<script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script> 
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> 
<script src="../assets/vendor/nouislider/nouislider.js"></script> 
<script src="../assets/vendor/select2/select2.min.js"></script> 
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
</body>
</html>
