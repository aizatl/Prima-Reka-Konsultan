<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> List of Department </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">

</head>
<style >
input.right {
      float: right;
    }

    /*
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    */
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    body {
      background: #a6bbb6;
      color: #666666;
      font-family: "Open Sans", sans-serif;
    }

    a {
      color: #2dc997;
    }

    a:hover, a:active, a:focus {
      color: #2dca98;
      outline: none;
      text-decoration: none;
    }

    p {
      padding: 0;
      margin: 0 0 30px 0;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      margin: 0 0 20px 0;
      padding: 0;
    }

    /* Prelaoder */
    #preloader {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 999;
      width: 100%;
      height: 100%;
      overflow: visible;
      background: #fff url("../img/preloader.svg") no-repeat center center;
    }

    /* Back to top button */
    .back-to-top {
      position: fixed;
      display: none;
      background: rgba(0, 0, 0, 0.2);
      color: #fff;
      padding: 6px 12px 9px 12px;
      font-size: 16px;
      border-radius: 2px;
      right: 15px;
      bottom: 15px;
      transition: background 0.5s;
    }

    @media (max-width: 768px) {
      .back-to-top {
        bottom: 15px;
      }
    }

    .back-to-top:focus {
      background: rgba(0, 0, 0, 0.2);
      color: #fff;
      outline: none;
    }

    .back-to-top:hover {
      background: #2dc997;
      color: #fff;
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
      padding: 30px 0;
      height: 92px;
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      transition: all 0.5s;
      z-index: 997;
    }

    #header #logo {
      float: left;
    }

    #header #logo h1 {
      font-size: 36px;
      margin: 0;
      padding: 6px 0;
      line-height: 1;
      font-family: "Poppins", sans-serif;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
    }

    #header #logo h1 a, #header #logo h1 a:hover {
      color: #fff;
    }

    #header #logo img {
      padding: 0;
      margin: 0;
    }

    @media (max-width: 768px) {
      #header #logo h1 {
        font-size: 26px;
      }
      #header #logo img {
        max-height: 40px;
      }
    }

    #header.header-fixed {
      background: rgba(52, 59, 64, 0.9);
      padding: 20px 0;
      height: 72px;
      transition: all 0.5s;
    }

    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/


    @media (min-width: 1024px) {
      #hero {
        background-attachment: fixed;
      }
    }

    #hero:before {
      content: "";
      background: rgba(0, 0, 0, 0.6);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #hero .hero-container {
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
    }
    #hero .box {
      width: 1000px;
      height: auto;
      padding:10px;
      text-align: center;
      margin: auto;
      background-color: rgba(44, 62, 80,0.7);
      margin-top: 40px;
    }

    .success-popup  {
        transition: .3s ease all;
        font-family: 'Roboto', sans-serif;
    }

     .formm
    {
        background-color: none;
        width: auto;
        border: 20px white;
        padding: 15px;
        margin: 21px;
        font-size: 18px;
        color: #ffffff;

    }

    #complaint
    {
      width:350px;
      height:150px;
    }
    #delBtn
    {
      color: white;
      border-radius: 0px;
      background: rgb(202, 60, 60); /* this is a maroon */
    }

    #viewBtn
    {
      color: black;
      border-radius: 0px;
      background: rgb(229, 238, 252);
    }

    #editBtn {
      background-color:#808080;
    	-moz-border-radius:20px;
    	-webkit-border-radius:20px;
    	border-radius:20px;
    	border:1px ;
    	display:inline-block;
    	cursor:pointer;
    	color:#464F4C;
    	font-family:Verdana;
    	font-size:10px;
    	padding:8px;
    	text-decoration:none;
    	text-shadow:0px 1px 15px #02dca9;
    }
    #editBtn:hover {
    	background-color:#a6bbb6;
    }
    #editBtn:active {
    	position:relative;
    	top:1px;
    }
    #numOfComplaints
    {
      font-family: "Open Sans", sans-serif;
      color: #ffffff;
      font-size: 24px;
    }

    #numOfTask
    {
      font-family: "Open Sans", sans-serif;
      color: #ffffff;
      font-size: 24px;
    }


    #search
    {
        border-radius: 0px;
        border-width: 2px;
        border-color: #000000;
        width: 230px;
        height:30px;
        font-family: Century Gothic;
        background: #ffffff;
    }

    #category, #gender, #matric,#display, #matricNo, #date
    {
        border-radius: 0px;
        border-width: 2px;
        border-color: #000000;
        width: auto;
        height:30px;
        font-family: Century Gothic;
        background: #fffff;
        color: #000;
    }

    #complaint
    {
      border-radius: 0px;
      border-width: 2px;
      border-color: #000000;
      width: auto;
      height:auto;
      font-family: Century Gothic;
      background: #fffff;
      color: #000;
    }

    #hero .search-panel
    {
      padding: 10px;
    }

    .submitBtn
    {
        position: relative;
        display: inline-block;
        font-weight: bold;
        text-decoration: none;
        color: #000;
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.73);
        padding: 0.3em 0.5em;
        background: #c3cbb1;
        border-top: solid 3px #c3cbb1;
        border-bottom: solid 3px #c3cbb1;
        transition: .4s;
    }

    .submitBtn:hover {
        text-shadow: -6px 0px 15px rgba(255, 255, 240, 0.83), 6px 0px 15px rgba(255, 255, 240, 0.83);
    }


    #hero .login-container
    {

    }

    #hero h1 {
      margin: 30px 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      text-transform: uppercase;
      color: #fff;
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }
    }

    #hero h2 {
      color: #eee;
      margin-bottom: 50px;
      font-size: 24px;
    }

    @media (max-width: 768px) {
      #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }
    }

    #hero .btn-login {
      font-family: "Poppins", sans-serif;
      text-transform: uppercase;
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 8px 28px;
      border-radius: 50px;
      transition: 0.5s;
      margin: 10px;
      border: 2px solid #fff;
      color: #fff;
    }

    #hero .btn-login:hover {
      background: #2dc997;
      border: 2px solid #2dc997;
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Nav Menu Essentials */
    .nav-menu, .nav-menu * {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .nav-menu ul {
      position: absolute;
      display: none;
      top: 100%;
      left: 0;
      z-index: 99;
    }

    .nav-menu li {
      position: relative;
      white-space: nowrap;
    }

    .nav-menu > li {
      float: left;
    }

    .nav-menu li:hover > ul,
    .nav-menu li.sfHover > ul {
      display: block;
    }

    .nav-menu ul ul {
      top: 0;
      left: 100%;
    }

    .nav-menu ul li {
      min-width: 180px;
    }

    /* Nav Menu Arrows */
    .sf-arrows .sf-with-ul {
      padding-right: 30px;
    }

    .sf-arrows .sf-with-ul:after {
      content: "\f107";
      position: absolute;
      right: 15px;
      font-family: FontAwesome;
      font-style: normal;
      font-weight: normal;
    }

    .sf-arrows ul .sf-with-ul:after {
      content: "\f105";
    }

    /* Nav Meu Container */
    #nav-menu-container {
      float: right;
      margin: 0;
    }

    @media (max-width: 768px) {
      #nav-menu-container {
        display: none;
      }
    }

    /* Nav Meu Styling */
    .nav-menu a {
      padding: 0 8px 10px 8px;
      text-decoration: none;
      display: inline-block;
      color: #fff;
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      text-transform: uppercase;
      font-size: 13px;
      outline: none;
    }

    .nav-menu > li {
      margin-left: 10px;
    }

    .nav-menu > li > a:before {
      content: "";
      position: absolute;
      width: 100%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #2dc997;
      visibility: hidden;
      -webkit-transform: scaleX(0);
      transform: scaleX(0);
      -webkit-transition: all 0.3s ease-in-out 0s;
      transition: all 0.3s ease-in-out 0s;
    }

    .nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .menu-active > a:before {
      visibility: visible;
      -webkit-transform: scaleX(1);
      transform: scaleX(1);
    }

    .nav-menu ul {
      margin: 4px 0 0 0;
      border: 1px solid #e7e7e7;
    }

    .nav-menu ul li {
      background: #fff;
    }

    .nav-menu ul li:first-child {
      border-top: 0;
    }

    .nav-menu ul li a {
      padding: 10px;
      color: #333;
      transition: 0.3s;
      display: block;
      font-size: 13px;
      text-transform: none;
    }

    .nav-menu ul li a:hover {
      background: #2dc997;
      color: #fff;
    }

    .nav-menu ul ul {
      margin: 0;
    }

    /* Mobile Nav Toggle */
    #mobile-nav-toggle {
      position: fixed;
      right: 0;
      top: 0;
      z-index: 999;
      margin: 20px 20px 0 0;
      border: 0;
      background: none;
      font-size: 24px;
      display: none;
      transition: all 0.4s;
      outline: none;
      cursor: pointer;
    }

    #mobile-nav-toggle i {
      color: #fff;
    }

    @media (max-width: 768px) {
      #mobile-nav-toggle {
        display: inline;
      }
    }

    /* Mobile Nav Styling */
    #mobile-nav {
      position: fixed;
      top: 0;
      padding-top: 18px;
      bottom: 0;
      z-index: 998;
      background: rgba(52, 59, 64, 0.9);
      left: -260px;
      width: 260px;
      overflow-y: auto;
      transition: 0.4s;
    }

    #mobile-nav ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    #mobile-nav ul li {
      position: relative;
    }

    #mobile-nav ul li a {
      color: #fff;
      font-size: 16px;
      overflow: hidden;
      padding: 10px 22px 10px 15px;
      position: relative;
      text-decoration: none;
      width: 100%;
      display: block;
      outline: none;
    }

    #mobile-nav ul li a:hover {
      color: #fff;
    }

    #mobile-nav ul li li {
      padding-left: 30px;
    }

    #mobile-nav ul .menu-has-children i {
      position: absolute;
      right: 0;
      z-index: 99;
      padding: 15px;
      cursor: pointer;
      color: #fff;
    }

    #mobile-nav ul .menu-has-children i.fa-chevron-up {
      color: #2dc997;
    }

    #mobile-nav ul .menu-item-active {
      color: #2dc997;
    }

    #mobile-body-overly {
      width: 100%;
      height: 100%;
      z-index: 997;
      top: 0;
      left: 0;
      position: fixed;
      background: rgba(52, 59, 64, 0.9);
      display: none;
    }

    /* Mobile Nav body classes */
    body.mobile-nav-active {
      overflow: hidden;
    }

    body.mobile-nav-active #mobile-nav {
      left: 0;
    }

    body.mobile-nav-active #mobile-nav-toggle {
      color: #fff;
    }

    /*--------------------------------------------------------------
    # Sections
    --------------------------------------------------------------*/
    /* Sections Header
    --------------------------------*/
    .section-header .section-title {
      font-size: 32px;
      color: #111;
      text-transform: uppercase;
      text-align: center;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .section-header .section-description {
      text-align: center;
      padding-bottom: 40px;
      color: #999;
    }

    /* About Us Section
    --------------------------------*/
    #about {
      background: #fff;
      padding: 80px 0;
    }

    #about .about-container .background {
      min-height: 300px;
      background: url(../img/about-img.jpg) center top no-repeat;
      margin-bottom: 10px;
    }

    #about .about-container .content {
      background: #fff;
    }

    #about .about-container .title {
      color: #333;
      font-weight: 700;
      font-size: 32px;
    }

    @media (max-width: 768px) {
      #about .about-container .title {
        padding-top: 15px;
      }
    }

    #about .about-container p {
      line-height: 26px;
    }

    #about .about-container p:last-child {
      margin-bottom: 0;
    }

    #about .about-container .icon-box {
      background: #fff;
      background-size: cover;
      padding: 0 0 30px 0;
    }

    #about .about-container .icon-box .icon {
      float: left;
      background: #fff;
      width: 64px;
      height: 64px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      border-radius: 50%;
      border: 2px solid #2dc997;
    }

    #about .about-container .icon-box .icon i {
      color: #2dc997;
      font-size: 24px;
    }

    #about .about-container .icon-box .title {
      margin-left: 80px;
      font-weight: 500;
      margin-bottom: 5px;
      font-size: 18px;
      text-transform: uppercase;
    }

    #about .about-container .icon-box .title a {
      color: #111;
    }

    #about .about-container .icon-box .description {
      margin-left: 80px;
      line-height: 24px;
      font-size: 14px;
    }

    /* Facts Section
    --------------------------------*/
    #facts {
      background: #f7f7f7;
      padding: 80px 0 60px 0;
    }

    #facts .counters span {
      font-size: 48px;
      display: block;
      color: #2dc997;
    }

    #facts .counters p {
      padding: 0;
      margin: 0 0 20px 0;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
    }

    /* Services Section
    --------------------------------*/
    #services {
      background: #fff;
      background-size: cover;
      padding: 80px 0 60px 0;
    }

    #services .box {
      padding: 50px 20px;
      margin-bottom: 50px;
      text-align: center;
      border: 1px solid #e6e6e6;
      height: 200px;
      position: relative;
      background: #fafafa;
    }

    #services .icon {
      position: absolute;
      top: -36px;
      left: calc(50% - 36px);
      transition: 0.2s;
      border-radius: 50%;
      border: 6px solid #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      width: 72px;
      height: 72px;
      background: #2dc997;
    }

    #services .icon a {
      display: inline-block;
    }

    #services .icon i {
      color: #fff;
      font-size: 24px;
    }

    #services .box:hover .icon {
      background: #fff;
      border: 2px solid #2dc997;
    }

    #services .box:hover .icon i {
      color: #2dc997;
    }

    #services .box:hover .icon a {
      color: #2dc997;
    }

    #services .title {
      font-weight: 700;
      font-size: 18px;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    #services .title a {
      color: #111;
    }

    #services .description {
      font-size: 14px;
      line-height: 24px;
    }

    /* Call To Action Section
    --------------------------------*/
    #call-to-action {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../img/call-to-action-bg.jpg) fixed center center;
      background-size: cover;
      padding: 80px 0;
    }

    #call-to-action .cta-title {
      color: #fff;
      font-size: 28px;
      font-weight: 700;
    }

    #call-to-action .cta-text {
      color: #fff;
    }

    @media (min-width: 769px) {
      #call-to-action .cta-btn-container {
        display: flex;
        align-items: center;
        justify-content: flex-end;
      }
    }

    #call-to-action .cta-btn {
      font-family: "Poppins", sans-serif;
      text-transform: uppercase;
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 8px 30px;
      border-radius: 50px;
      transition: 0.5s;
      margin: 10px;
      border: 2px solid #fff;
      color: #fff;
    }

    #call-to-action .cta-btn:hover {
      background: #2dc997;
      border: 2px solid #2dc997;
    }

    /* Portfolio Section
    --------------------------------*/
    #portfolio {
      background: #f7f7f7;
      padding: 80px 0;
    }

    #portfolio #portfolio-wrapper {
      padding-right: 15px;
    }

    #portfolio #portfolio-flters {
      padding: 0;
      margin: 0 0 45px 0;
      list-style: none;
      text-align: center;
    }

    #portfolio #portfolio-flters li {
      cursor: pointer;
      margin: 0 10px;
      display: inline-block;
      padding: 10px 22px;
      font-size: 12px;
      line-height: 20px;
      color: #666666;
      border-radius: 4px;
      text-transform: uppercase;
      background: #fff;
      margin-bottom: 5px;
      transition: all 0.3s ease-in-out;
    }

    #portfolio #portfolio-flters li:hover, #portfolio #portfolio-flters li.filter-active {
      background: #2dc997;
      color: #fff;
    }

    #portfolio .portfolio-item {
      position: relative;
      height: 200px;
      overflow: hidden !important;
      margin-bottom: 15px;
      transition: all 350ms ease;
      transform: scale(1);
    }

    #portfolio .portfolio-item a {
      display: block;
      margin-right: 15px;
    }

    #portfolio .portfolio-item img {
      position: relative;
      top: 0;
      transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    #portfolio .portfolio-item .details {
      height: 50px;
      background: #2dc997;
      position: absolute;
      width: 100%;
      height: 50px;
      bottom: -50px;
      transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    #portfolio .portfolio-item .details h4 {
      font-size: 14px;
      font-weight: 700;
      color: #fff;
      padding: 8px 0 2px 8px;
      margin: 0;
    }

    #portfolio .portfolio-item .details span {
      display: block;
      color: #fff;
      font-size: 13px;
      padding-left: 8px;
    }

    #portfolio .portfolio-item:hover .details {
      bottom: 0;
    }

    #portfolio .portfolio-item:hover img {
      top: -30px;
    }

    /* Team Section
    --------------------------------*/
    #team {
      background: #fff;
      padding: 80px 0 60px 0;
    }

    #team .member {
      text-align: center;
      margin-bottom: 20px;
    }

    #team .member .pic {
      margin-bottom: 15px;
      overflow: hidden;
      height: 260px;
    }

    #team .member .pic img {
      max-width: 100%;
    }

    #team .member h4 {
      font-weight: 700;
      margin-bottom: 2px;
      font-size: 18px;
    }

    #team .member span {
      font-style: italic;
      display: block;
      font-size: 13px;
    }

    #team .member .social {
      margin-top: 15px;
    }

    #team .member .social a {
      color: #b3b3b3;
    }

    #team .member .social a:hover {
      color: #2dc997;
    }

    #team .member .social i {
      font-size: 18px;
      margin: 0 2px;
    }

    /* Contact Section
    --------------------------------*/
    #contact {
      background: #f7f7f7;
      padding: 80px 0 40px 0;
    }

    #contact #google-map {
      height: 300px;
      margin-bottom: 20px;
    }

    #contact .info {
      color: #333333;
    }

    #contact .info i {
      font-size: 32px;
      color: #2dc997;
      float: left;
    }

    #contact .info p {
      padding: 0 0 10px 50px;
      margin-bottom: 20px;
      line-height: 22px;
      font-size: 14px;
    }

    #contact .info .email p {
      padding-top: 5px;
    }

    #contact .social-links {
      padding-bottom: 20px;
    }

    #contact .social-links a {
      font-size: 18px;
      display: inline-block;
      background: #333;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    #contact .social-links a:hover {
      background: #2dc997;
      color: #fff;
    }

    #contact .form #sendmessage {
      color: #2dc997;
      border: 1px solid #2dc997;
      display: none;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    #contact .form #errormessage {
      color: red;
      display: none;
      border: 1px solid red;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
      display: block;
    }

    #contact .form .validation {
      color: red;
      display: none;
      margin: 0 0 20px;
      font-weight: 400;
      font-size: 13px;
    }

    #contact .form input, #contact .form textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }

    #contact .form button[type="submit"] {
      background: #2dc997;
      border: 0;
      padding: 10px 24px;
      color: #fff;
      transition: 0.4s;
    }

    #contact .form button[type="submit"]:hover {
      background: #51d8ad;
    }

    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
      background: #343b40;
      padding: 30px 0;
      color: #fff;
      font-size: 14px;
    }

    #footer .copyright {
      text-align: center;
    }

    #footer .credits {
      padding-top: 10px;
      text-align: center;
      font-size: 13px;
      color: #ccc;
    }

</style>
<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#hero"> List of Department </a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="staffView.php">Home</a></li>
          <li class="menu-active"><a href="staffDepartment.php">Department</a></li>

          <li><a href="staffNotCompleted.php">Not Completed</a></li>
          <li><a href="staffCompleted.php">Completed</a></li>
          <li><a href="logout.php"> Logout </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div>
        <?php
        include "function.php";
        ?>

        <div class = search-panel>
          <form action="" method="GET">
            <input type="text"  id = "search" name="departmentIdToSearch">

            <input type="submit" id="id" name="searchDepartmentID" value="Search Department ID">
            <input type="submit" id ="display"  name="displayAll" value="Display All">
          </form>
        </div>

      <?php
      if(isSet($_GET['searchDepartmentID']))
        $departmentList = findDepartment();
      else
        $departmentList = getListOfDepartment();

      echo "<h3 id='numOfComplaints'> NO. OF DEPARTMENT: ".mysqli_num_rows($departmentList). "</h3>";
       ?>
     <table class="table table-bordered table-dark">
       <thead>
         <tr>
           <th scope="col" style="background-color:#FF5733">Department ID</th>
           <th scope="col" style="background-color:#FF5733">Department Name</th>
           <th scope="col" style="background-color:#FF5733">Option</i></th>
         </tr>
       </thead>

       <?php
       $count=1;

       while($row=mysqli_fetch_assoc($departmentList))
       {
         //display
         echo"<tr>";
         echo "<td>".$row['departmentId']."</td>";
         echo"<td>".$row['departmentName']."</td>";


          echo '<td>';
            $nameToView=$row['departmentName'];
            //echo $idToView;
          echo '<form action="staffViewSelectedDepartment.php" method="post">';
          echo "<input type='hidden' value='$nameToView' name='nameToView'>";
          echo '<input type="submit" id="editBtn" name="editButton" value="View">';
          echo '</form>';
          echo '</td>';
          echo"</tr>";

       }
       ?>
       <tr>
            <?php

            ?>



         </tr>
     </table>
    </div>
  </div>
  </section><!-- #hero -->

  <main id="main">

  </main>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
