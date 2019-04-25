<!DOCTYPE html>
<html>

<head>
    <title>Accountsetting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/set3.css") ?>">
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
                <h2>Delete Account</h2><br>
                <p>We will permanently delete your Penzu account and all associated journals and entries.<br>
                 Please be sure that you want to delete everything on your account before<br>
                proceeding.We will not be able to recover your journals or entries after you delete your account!</p><br>
                <a id="buton" href="<?= base_url('index.php/Accountcontroller3/hapus/'.$this->session->userdata('id'))?>" class="btn btn-primary">Delete Penzu Account</a>
            </div>
        </div>
</body>

<body>
    <div class="link">
        <a style="color:#9098A5;"><< All Journals</a><br><br>
        <a href="<?= site_url("AccountController") ?>">Account Settings</a><br>
        <a href="<?= site_url("AccountController2") ?>">Plans & Billing</a><br>
        <a>Delete Account</a>
    </div>
</body>