<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url("assets/support.css") ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <title>Penzu | Portal</title>
    </head>
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".preloader").fadeOut("slow");
            }, 700);
        })
    </script>
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">

    <body>
        <div class="preloader">
            <div class="loading">
                <img src="<?= base_url("assets/img/logo_default-free.png")?>" width='149' height='44' style="margin-top: -100px;">
                <div class="spinner" style="margin-top: -5%; background-color: #E72D0E; padding: 4px 4px 4px 4px; ">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <a class="navbar-brand" href="<?= site_url("HomeController") ?>">
                <img src="<?= base_url('assets/img/logo_default-free.png')?>" width="100" height="29" alt="" style="margin : -5px 0 0 184px; display: inline-block;">
            </a>
        </nav>
        <header>
            <div class="container">
                <p class="support">Support Center</p>
            </div>
        </header>
        <form>
            <div class="input-group search">
                <input type="text" class="form-control" placeholder="Have a Question? Ask or enter a search term here." style="color: rgb(141, 144, 148); height : 39px ; width: 807px; border-top : 1px solid  rgb(126, 126, 126);">
                <div class="input-group-btn">
                    <button class="btn btn-default btnsearch" type="submit">SEARCH</button>
                </div>
            </div>
        </form>
        <div class="row" style="margin-left: 0.2px;">
            <div class="container bodysupport col-">
                <h3 style="font-size : 22px; font-weight : 700; margin: 2px 0 0 -1px; padding-bottom: 6px;">Browse by Topic</h3>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="topicTitle">Plans & Billing</p>
                        <h6 class="articles"><img id="imgart" src="<?= base_url("assets/img/articles.png")?>" alt=""> 11 Articles <a href="http://support.penzu.com/customer/en/portal/topics/898452-plans-billing-/articles" class="viewall">View All</a></h6>
                        <ul>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2546871-my-pro-account-was-renewed-and-i-didn-t-want-it-to-be">My Pro account was renewed and I didn&#x...</a></li>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2525804-how-to-delete-your-account">How to delete your account</a></li>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2525787-how-to-downgrade-your-account">How to downgrade your account</a></li>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2525789-how-to-change-your-payment-method">How to change your payment method</a></li>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2525790-how-to-turn-on-off-auto-renew">How to turn on / off auto-renew</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <p class="topicTitle">Account Settings</p>
                        <h6 class="articles"><img id="imgart" src="<?= base_url("assets/img/articles.png")?>" alt=""> 8 Articles <a href="http://support.penzu.com/customer/en/portal/topics/898452-plans-billing-/articles" class="viewall">View All</a></h6>
                        <ul>
                            <li><a href="#">How to turn on / off the podcast player</a></li>
                            <li><a href="#">How to change your name, email address, ...</a></li>
                            <li><a href="#">How to change your time zone</a></li>
                            <li><a href="#">How to change your default journal sort ...</a></li>
                            <li><a href="#">How to change your default entry date fo...</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="topicTitle">Journal Settings & Management</p>
                        <h6 class="articles"><img id="imgart" src="<?= base_url("assets/img/articles.png")?>" alt=""> 13 Articles <a href="http://support.penzu.com/customer/en/portal/topics/898452-plans-billing-/articles" class="viewall">View All</a></h6>
                        <ul>
                            <li><a href="#">How to create a new journal</a></li>
                            <li><a href="#">How to sort your journals & change y...</a></li>
                            <li><a href="#">How to view all tags</a></li>
                            <li><a href="#">How to change your default journal cover...</a></li>
                            <li><a href="#">How to change your journal title</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <p class="topicTitle">Writing</p>
                        <h6 class="articles"><img id="imgart" src="<?= base_url("assets/img/articles.png")?>" alt=""> 16 Articles <a href="http://support.penzu.com/customer/en/portal/topics/898452-plans-billing-/articles" class="viewall">View All</a></h6>
                        <ul>
                            <li><a href="#">How to format rich text in an entry</a></li>
                            <li><a href="#">How to back-date an entry or change an e...</a></li>
                            <li><a href="#">How to add a photo to your entry</a></li>
                            <li><a href="#">How to add a tag to your entry</a></li>
                            <li><a href="#">How to customize entry background or pad...</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="topicTitle">iOS Help</p>
                        <h6 class="articles"><img id="imgart" src="<?= base_url("assets/img/articles.png")?>" alt=""> 1 Articles <a href="http://support.penzu.com/customer/en/portal/topics/898452-plans-billing-/articles" class="viewall">View All</a></h6>
                        <ul>
                            <li><a href="http://support.penzu.com/customer/en/portal/articles/2444324-how-do-i-rename-my-journal-in-the-ios-app-">How do I rename my journal in the iOS ap...</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-">
                <h3 style='font-size : 22px; font-weight : 700; margin: 24px 0 0 30px; padding-bottom: 6px; font-family : "Open Sans", Arial, Helvetica, sans-serif font-size : 24px; font-weight : 700; color :  #4B525B; letter-spacing: 0.5px;'>Common Questions</h3>
                <hr style="margin: 16px 0 0 30px; width: 237px; padding-bottom: 25px;">
                <a class="common" href="#">How to Unlock your Journal</a>
                <br>
                <a class="common" href="#">My Pro account was renewed and I<br>⠀⠀ ⠀didn't want it to be</a>
                <br>
                <a class="common" href="#">PRO and PRO+ Features</a>
                <br>
                <a class="common" href="#">How to Delete your Account</a>
                <br>
            </div>
        </div>
        <div class="container desk" style="margin: 25px 0 0 200px;">
            Powered by<a href="http://www.desk.com"><img src="<?= base_url("assets/img/salesforce-desk-logo.png")?>" alt="" style="width:10%;"></a>
        </div>
        <br>
        <br>
        <br>
    </body>

    </html>