<!DOCTYPE html>
<html>

<head>
    <title>Accountsetting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/set2.css") ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">
</head>

<body>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="<?= base_url("assets\img\penzu_white.png") ?>" id="logotgh"></a>
        <?php foreach($akuns as $row){?>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="#"> <button class="btn" type="button" id="C"><?= $row->first_name?></button></a>
        </form>
        <?php }?>
    </nav>
    <form name="accountInfoForm">
        <div>
            <div class="alert ng-binding alert-danger ng-hide" style="margin-bottom: 20px;"></div>
        </div>
        <div class="form-group">
            <div>
                <h2>Subscription Info</h2>
                <label>Account Type: Free</label><br><br>
                <button id="buton" type="submit" class="btn btn-primary">Upgrade to PRO</button>
            </div>
        </div>
</body>

<body>
    <div class="link">
        <a style="color:#9098A5;"><< All Journals</a><br><br>
        <a href="<?= site_url("AccountController/edit/").$this->session->userdata('id') ?>">Account Settings</a><br>
        <a>Plans & Billing</a><br>
        <a href="<?= site_url("AccountController3") ?>">Delete Account</a>
    </div>
</body>