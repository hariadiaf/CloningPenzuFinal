<!DOCTYPE html>
<html>

<head>
    <title>Account setting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/setting.css") ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">    
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">
</head>
<script>
//loader
$(document).ready(function() {
    setTimeout(function() {
        $(".preloader").fadeOut("slow");
    }, 700);
});
</script>
<body>
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url("assets/img/logo_default-free.png")?>" width='149' height='44'
                style="margin-top: -100px;">
            <div class="spinner" style="margin-top: -5%; background-color: #E72D0E; padding: 4px 4px 4px 4px; ">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="<?= base_url("assets\img\penzu_white.png") ?>" id="logotgh"></a>
        <?php foreach($akuns as $row){?>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="#"> <button class="btn" type="button" id="C"><?= $row->first_name?></button></a>
        </form>
        <?php }?>
    </nav>
    <form action="<?= site_url("AccountController/update") ?>" method="post">
        <div>
            <div class="alert ng-binding alert-danger ng-hide" style="margin-bottom: 20px;"></div>
        </div>
        <div class="form-group">
        <?php foreach($akuns as $row){?>
            <div>
                <h2>Account Info</h2>
                <label>First Name</label>
                <label id="last">Last Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $row->first_name?>">
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $row->last_name?>">
            </div>
            <div>
                <label id="label3" for="exampleInputEmail1">EMAIL ADDRESS</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $row->email?>">
            </div>
            <button id="buton" type="submit" class="btn btn-primary">Save</button>
            <button id="buton2" type="submit" class="btn btn-primary">Change Password</button>
        </div>
        <?php }?>
        <br><br><br>
        <hr style="width: 42%; margin: 2% 0 0 35%">
        <div class="form-group">
            <div>
                <h2>Account Settings</h2>
                <label>Time Zone</label><br>
                <select id="time" name="time">
                    <option value="islan">UTC+12:45 — Chatham Islands</option>
                    <option value="indonesia">UTC+07:00 (Waktu Indonesia Barat) — Sumatra</option>
                </select>
            </div>
            <br>
            <div>
                <label>Journal Order</label><br>
                <select id="journal" name="journal">
                    <option value="MRU">Most Recently Update</option>
                    <option value="indonesia">Name A-Z</option>
                </select>
                <select id="dat" name="date">
                    <option value="1">Sun. 4/21/2019</option>
                    <option value="2">Sunday 4/21/2019</option>
                </select>
            </div>
            <br>
            <div>
                <label>Auto-Logout</label><br>
                <select id="logout" name="logout">
                    <option value="1">Do Not Auto-Logout</option>
                    <option value="2">After 5 minutes of inactivity</option>
                </select>
            </div>
            <br><br>
            <p>When should Penzu email you?</p>
            <input type="checkbox" id="cbox" name="vehicle3" value="Boat" checked>
            <a style="color:#9098A5;">When someone shares an entry with you</a><br>
            <input type="checkbox" id="cbox" name="vehicle3" value="Boat" checked>
            <a style="color:#9098A5;">Details on Penzu updates, promotions, and sales</a><br>
            <button id="buton" type="submit" class="btn btn-primary">Save</button>

        </div>
        </div>
    
    </form>
    

    <div style="position : absolute; bottom: 68%; left: 20%;">
        <a style="color:#9098A5;">
            << All Journals</a> <br><br>
                <a href="">Account Settings</a><br>
                <a href="<?= site_url("AccountController2")?>">Plans & Billing</a><br>
                <a href="<?= site_url("AccountController3") ?>">Delete Account</a>
    </div>
</body>