<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Jurnal</title>

    <!-- boostrap import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">
</head>
<body>
    <style media="screen">
    body {
        background-image: url("../assets/img/wood.jpg");
    }
    </style>

    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #EF4228; border-radius : 0px;">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <form class="form-inline ">
                    <div class="input-group flex-nowrap"
                        style="display: inherit; background-color : #B00B1B; border-radius : 20px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"
                                style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;">
                                <img src="<?= base_url('assets/img/search.png ')?>" width="18px"> </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                            aria-describedby="addon-wrapping"
                            style="border: none; border-radius : 20px; background-color : #B00B1B;">
                    </div>


                    <div class="text-center" style="margin-left : 340px; ">
                        <img style="width : 100px;" src="<?= base_url('assets/img/penzu_white.png')?>" width="10px">
                    </div>
                    <div class="float-right" style="margin-left : 340px;">
                        <a href="#" name="btnGoPro"
                            style="background-color : #ffffff; padding : 6px 8px; text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #E74C3C;">Go
                            PRO</a>
                    </div>

                    <style>
                    .vl {
                        border-left: 6px solid black;
                        height: 500px;
                    }
                    </style>
                    <?php foreach($akuns as $row){?>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="border : none; color : #FFFFFF;">
                            <?= $row->first_name?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Penzu Podcast</button>
                            <a href="<?= site_url("AccountController")?>" class="dropdown-item">Account</a>
                            <a href="<?= site_url("SupportController")?>" class="dropdown-item">Help & FAQs</a>
                            <button class="dropdown-item" type="button">Pro Support</button>
                            <a href="<?= site_url("HomeController")?>" class="dropdown-item">Log Out</a>
                        </div>
                        <?php }?>
                    </div>
                </form>
            </div>
        </nav>
        <div class="" style="background-color : #2F3940; position: relative; bottom: 24px; padding : 12px;">
            <a href="#" class="float-right" name="btnNewJournal"
                style="background-color : #258CD1; padding : 6px 8px;
      text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 180px;"> <img
                    src="<?= base_url('assets/img/book.png');?>" width="20px"> New Journal</a>

            <a href="#" class="float-right" name="btnTag"
                style="background-color : #273036; padding : 6px 8px;
      text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img
                    src="<?= base_url('assets/img/tag.png') ?>" width="20px"> Tags</a>

            <a href="#" class="float-right" name="btnChangeThemes"
                style="background-color : #273036; padding : 6px 8px;
      text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img
                    src="<?= base_url('assets/img/brush.png') ?>" width="20px"> Change Themes</a>

            <h6 style="margin-left : 200px; font-size: 16px; color : #FFFFFF;">Displaying 1 Journal</h6>
        </div>
    </div>
    <!-- endOfNavbar -->


    <div class="row" style="padding-left: 100px;">
        <div class="row">
            <img src="<?= base_url('assets/img/buku.PNG') ?>" width="680px" height="580px">
            <div class="card" style="width: 30rem; position: absolute; left: 25%; top:50%;">
                <?php foreach($akuns as $row){?>
                <div class="card-body">
                    <h3 class="card-text text-center" style="font-family : times news roman; font-size : 40px;">
                        <?= $row->first_name?>'s Journals</h3>
                    <a href="<?= site_url('Entries_Controller')  ?>" class="btn "> <img
                            src="<?= base_url('assets/img/edit.png') ?>" width="20px"> New Entry</a>
                    <a href="<?= site_url('ViewAllEntries_Controller') ?>" class="btn "> <img
                            src="<?= base_url('assets/img/list.png') ?>" width="20px"> </a>
                    <a href="#" class="btn "> <img src="<?= base_url('assets/img/settings.png') ?>" width="20px"> </a>
                    <a href="#" class="btn "> <img src="<?= base_url('assets/img/unlock.png') ?>" width="20px"> </a>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="">
            <div class="card ml-5 pl-5" style="width: 30rem;">
                <div class="card-body">
                    <img class="text-center" src="<?= base_url('assets/img/penzu-pro_red.png') ?>" width="200px">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text text-center">Upgrade to Penzu PRO for multiple journals, added security with
                        encryption, tags, global search, customizable journals, and more!.</p>
                    <div class="row">
                        <a href="#" class="btn btn-primary">Upgrade Now</a>
                        <a class="float-right" href="#" class="btn ml-2"
                            style="margin-left : 8px; font-style : bold; font-weight : bold; ">Learn More</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>