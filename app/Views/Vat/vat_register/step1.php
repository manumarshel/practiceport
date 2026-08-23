<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/styles.css" rel="stylesheet"/>

    <link href="/public/assets/vat/css/common.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/common2.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/library.css" rel="stylesheet"/>
    <link href="/public/assets/vat/css/nuance-c2c-button.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <style>
    .file-label {
    display: inline-block;
    padding: 4px 15px;
    background-color: #00904a;
    color: white; 
    cursor: pointer;
    font-size: 16px;
  }
  .file-label:hover {
    background-color: #00904a;
  }
  #file-name {
    margin-left: 10px;
    font-size: 16px;
  }
  .step-form {
    display: none;
}
.step-form.active {
    display: block;
}
  
  .para-label{
      margin-top: 20px;
    margin-bottom: 7px;
  }
  
  
        .sapMPageHeader {
            padding: 10px;
        }

        .sapMPageHeader img {
            width: Auto !important;
            max-height: 3rem;
        }
.labelm{
        font-size: 14px;
    font-weight: 500;
}
        .nav-link {
            font-size: 12px;
        }

        .sapMListTblRow {
            height: 22px;
        }

        .step-wrapper li {
            width: 132px;
        }

        .step-wrapper li span a {
            font-size: 13px;
        }

        .sapMColumnHeader {
            display: flex;
            flex: 1 1 auto;
            padding: 0rem;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: #000;
        }

        .sb-sidenav-dark .sb-sidenav-menu .nav-link svg {
            color: #000;
        }

        .sapMInputBaseContentWrapper {
            border: 1px solid #ffffff;
        }

        .box {
            border: 1px solid #000; /* Border for the box */
            border-radius: 5px; /* Rounded corners */
            overflow: hidden; /* Prevent overflow for child elements */
        }

        .box-header {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .box-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%; /* Circular avatar */
            margin-right: 10px;
        }
 
        .box-footer {
            background-color: #00274d; /* Navy background */
            color: #fff; /* White text */
            padding: 10px;
            text-align: left;
        }

        .upload-button {
            display: inline-block;
            background-color: #1e3a56;
            color: white;
            padding: 7px 20px;
            border: none;
            margin-left: 15px;
            cursor: pointer;
            font-size: 16px;
        }

        .upload-button:hover {
            background-color: #1e3a56;
        }

        input[type="file"] {
            display: none;
        }

        .sb-sidenav .sb-sidenav-menu .nav .nav-link:hover {
            color: black;
        }


        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 18px;
            transition: 0.3s;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .accordion:hover {
            background-color: #ccc;
        }

        .accordion.active {
            background-color: #ccc;
        }

        .panel {
            padding: 15px;
            background-color: #f9f9f9;
            display: none;
            border-left: 3px solid #ccc;
            border-radius: 5px;
        }

        .step-bar-wrapper {
            font-size: 0;
            background: #fff;
            text-align: center;
            padding: 50px 0 0;
            box-shadow: 5px 5px 24px 0px rgba(0, 0, 0, 0.2);
            width: 600px;
            margin: 30px auto 0;
            position: relative;
            z-index: 10;
            border-radius: 10px
        }

        a {
            color: #5c399e; /* change primary color */
        }

        .step-wrapper {
            padding: 0;
            margin: 0;
            font-size: 0;
            display: flex;
            counter-reset: step;
            tr
        }

        .step-wrapper li {
            width: 120px;
        }

        .step-wrapper li > a:before {
            content: '';
            width: 36px;
            height: 36px;
            display: block;
            font-size: 16px;
            font-weight: 700;
            background-color: transparent;
            border-radius: 100%;
            z-index: 1;
            position: absolute;
            text-align: center;
        }

        .step-wrapper li > a:after {
            content: counter(step);
            counter-increment: step;
            width: 36px;
            line-height: 36px;
            display: block;
            font-size: 16px;
            color: #bbb;
            font-weight: 700;
            background-color: transparent;
            border-radius: 100%;
            z-index: 1;
            position: absolute;
            text-align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .step-wrapper li.completed > a:after {
            content: '\2713';
            color: currentColor;
        }

        .step-wrapper li:first-of-type a:before,
        .step-wrapper li:first-of-type a:after {
            margin-left: -41px;
        }

        .step-wrapper li:last-of-type > a:before,
        .step-wrapper li:last-of-type > a:after {
            margin-left: 41px;
        }

        .step-wrapper li.completed > a:before {
            background: #fff;
            color: #c4c4c4;
            -webkit-box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.15);
        }

        .step-wrapper li.active > a:before {
            background-color: #1e3a56;
            -webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.15), inset 0px 0px 0px 0px rgba(0, 0, 0, 0.15), 0px 0px 9px 0px currentColor;
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(247, 247, 247, 0.5)), to(rgba(231, 231, 231, .01)));
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(247, 247, 247, 0.5)), to(rgba(231, 231, 231, .01)));
            background-image: -webkit-linear-gradient(top, rgba(247, 247, 247, 0.5), rgba(231, 231, 231, .01));
            background-image: -moz-linear-gradient(top, rgba(247, 247, 247, 0.5), rgba(231, 231, 231, .01));
            background-image: -ms-linear-gradient(top, #1e3a56);
            background-image: -o-linear-gradient(top, rgba(247, 247, 247, 0.5), rgba(231, 231, 231, .01));
        }

        .step-wrapper li.active > a:after {
            color: #fff;
        }

        .step-wrapper li span {
            display: block;
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }

        .step-wrapper li span a {
            font-size: 14px;
            font-weight: 700;
        }

        .step-wrapper li:not(.active):not(.completed) span a {
            color: #bbb;
        }

        .step-wrapper li > a {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 48px
        }

        .step-wrapper li:first-of-type > a {
            padding-left: 40px;
        }

        .step-wrapper li:last-of-type > a {
            padding-right: 40px;
        }

        .step-wrapper li > a svg {
            height: 48px;
            min-height: 48px;
            width: auto;
            position: absolute;
            display: inline-block;
            stroke-width: 0;
            transition: all 300ms ease-in-out;
        }

        .step-wrapper li > a svg {
            filter: url(#inset-shadow);
        }
.sb-topnav { 
    z-index: 0;
}
#layoutSidenav_nav {
    z-index: 0;
}
        a.button {
            margin: 50px 15px;
            display: inline-block;
            border-radius: 4px;
            width: 100px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #ab8240;

        }

        a.button span {
            color: #fff;
            font-size: 16px;
        }
  .autocomplete {
            position: relative;
            display: inline-block;
            width: 100%;
        }
       
        .dropdown-container {
            position: absolute;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 4px 4px;
            z-index: 99;
            top: 100%;
            left: 0;
            right: 0;
            max-height: 200px;
            overflow-y: auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: none;
        }
        .dropdown-item {
            padding: 10px;
            cursor: pointer;
        }
        .dropdown-item:hover {
            background-color: #f1f1f1;
        }

    </style>
</head>