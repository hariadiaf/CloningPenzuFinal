<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Entries</title>

  <!-- boostrap import -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }

  .sidenav a:hover {
    color: #f1f1f1;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
</style>
</head>
<body>

  <!--
  <h2>Animated Sidenav Example</h2>
  <p>Click on the element below to open the side navigation menu.</p> -->


  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>

  <style media="screen">
  body {
    background-image: url("../assets/img/wood.jpg");
  }
  </style>

  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #EF4228; border-radius : 0px;">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border : none; color : #FFFFFF;">
            hariadi's journal
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button href="<?= site_url('JurnalController') ?>" class="dropdown-item" type="button"> <img src="<?= base_url('assets/img/home.png') ?>" width="16px"> Home</button>
            <button class="dropdown-item" type="button">hariadi's journal</button>
          </div>
          <div class="input-group flex-nowrap" style="display: inherit; background-color : #B00B1B; border-radius : 20px;">
            <!-- <div class="input-group-prepend">
            <span class="input-group-text" id="addon-wrapping"
            style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;"> <img src="<?= base_url('assets/img/search.png ')?>" width="18px" > </span>
          </div> -->
          <input type="text" class="form-control" placeholder="Search Journal ..." aria-label="Username" aria-describedby="addon-wrapping"
          style="border: none; border-radius : 20px; background-color : #ffffff;">
        </div>

      </div>
      <a href="#" style="font-family : arial; font-size : 20px;"> <img src="<?= base_url('assets/img/add.png') ?>" width="20px"> New Entry</a>
      <a href="<?= site_url('viewallentries_controller') ?>" style="font-family : arial; font-size : 20px;"> <img src="<?= base_url('assets/img/list2.png')  ?>" width="20px"> View All Entries</a>
      <a href="#" style="font-family : arial; font-size : 20px;"> <img src="<?= base_url('assets/img/star.png') ?>" width="20px"> View Starred Entries</a>
      <a href="#" style="font-family : arial; font-size : 20px;">Test</a>
      <input type="checkbox" name="date" value="date" style="margin-left : 32px;"> Sat. 4/20/19<br>

      <?php foreach ($entri as $row) {?>
        <a href="<?= base_url('index.php/Entries_Controller/getDataJurnalWhere/').$row->idJurnal?>" style="font-family : arial; font-size : 20px;"><?= $row->title?></a>
        <input type="checkbox" name="date" value="date" style="margin-left : 32px;"><?= $row->date?><br>
        <?php
      }?>
    </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="<?= site_url('JurnalController') ?>" class="btn " style="margin-left : 8px;"> <img src="<?= base_url('assets/img/home.png') ?>" width="20px"> </a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

      <form class="form-inline ">
        <div class="input-group flex-nowrap" style="display: inherit; background-color : #B00B1B; border-radius : 20px;">
          <div class="input-group-prepend">
            <!-- <span class="input-group-text" id="addon-wrapping"
            style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;"> <img src="<?= base_url('assets/img/search.png ')?>" width="18px" > </span> -->
          </div>
          <!-- <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping"
          style="border: none; border-radius : 20px; background-color : #B00B1B;"> -->
        </div>
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search"
        style="border: none;border-radius : 20px; background-color : #B00B1B;
        background : url(../assets/img/search.png) no-repeat scroll 7px 7px;
        padding-left : 30px"> -->

        <!-- <button class="btn btn-outline-success my-2 my-sm-0 Rounded corners" type="submit">Search</button> -->
        <!-- <img src=".../assets/img/penzu_white.png" alt=""> -->
        <!-- test -->
        <div class="text-center" style="margin-left : 540px; ">
          <img  style="width : 100px;" src="<?= base_url('assets/img/penzu_white.png')?>" width="10px">
        </div>
        <div class="float-right" style="margin-left : 340px;">
          <a href="#" name="btnGoPro" style="background-color : #ffffff; padding : 6px 8px; text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #E74C3C;">Go PRO</a>
        </div>

        <style>
        .vl {
          border-left: 6px solid black;
          height: 500px;
        }
        </style>

        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border : none; color : #FFFFFF;">
            User
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Penzu Podcast</button>
            <button class="dropdown-item" type="button">Account</button>
            <button class="dropdown-item" type="button">Help & FAQs</button>
            <button class="dropdown-item" type="button">Pro Support</button>
            <button class="dropdown-item" type="button">Logout  </button>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <!-- <div class="" style="background-color : #2F3940; position: relative; bottom: 24px; padding : 12px;">
  <a href="#" class="float-right" name="btnNewJournal" style="background-color : #258CD1; padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 180px;"> <img src="<?= base_url('assets/img/book.png');?>" width="20px"> New Journal</a>

  <a href="#" class="float-right" name="btnTag" style="background-color : #273036; padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img src="<?= base_url('assets/img/tag.png') ?>" width="20px"> Tags</a>

  <a href="#" class="float-right" name="btnChangeThemes" style="background-color : #273036; padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img src="<?= base_url('assets/img/brush.png') ?>" width="20px"> Change Themes</a>

  <h6 style="margin-left : 200px; font-size: 16px; color : #FFFFFF;" >Displaying 1 Journal</h6>
</div> -->

</div>
<style media="screen">
#title{

}
</style>



<?php if($this->uri->segment('2') == "getDataJurnalWhere"){?>
  <?php foreach($ent as $row){?>
    <form method="post" action="<?= base_url('index.php/Entries_Controller/ubahEntries/'.$row->idJurnal) ?>">
      <div id="title" class="d-flex flex-column container">
        <input type="text" name="title" placeholder="Entry Title" style="
        font-family : times new roman;
        font-size : 32px;
        padding : 16px 24px;
        border-radius :2px;" value="<?= $row->title?>">
        <div class="" style="background-color : #ffffff; border-radius : 2px;">
          <h6><img src="<?= base_url('assets/img/calendar.png') ?>" width="20px"> Mon. 4/22/2019</h6>
          <input type="submit" class="float-right" name="btnChangeThemes" style="background-color : #484848; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;" value="Save"/>
          <input type="submit" class="float-right" name="btnEdit" value="Edit" style="background-color : #484848; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"/>
          <a href="<?= base_url('index.php/Entries_Controller/hapusEntries/'.$row->idJurnal) ?>" class="float-right" name="btnChangeThemes" style="background-color : #EF4228; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;">Delete</a>
        </div>
        <textarea name="deskripsi" id="name" rows="8" cols="80" placeholder="Your Entry Here" style="
        font-family : times new roman;
        font-size : 16px;
        border-radius : 2px;
        padding : 16px 24px;"><?= $row->text?></textarea>
      </form>
    <?php } ?>
  <?php }else{ ?>
    <form action="<?= base_url('index.php/Entries_Controller/tambahEntries')?>" method="post">
      <div id="title" class="d-flex flex-column container">
        <input type="text" name="title" value="" placeholder="Entry Title" style="
        font-family : times new roman;
        font-size : 32px;
        padding : 16px 24px;
        border-radius :2px;">
        <div class="" style="background-color : #ffffff; border-radius : 2px;">
          <h6><img src="<?= base_url('assets/img/calendar.png') ?>" width="20px"> Mon. 4/22/2019</h6>
          <input type="submit" class="float-right" name="btnChangeThemes" style="background-color : #484848; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;" value="Save"/>
          <a href="" class="float-right" name="btnChangeThemes" style="background-color : #484848; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;">Edit</a>
          <a href="#" class="float-right" name="btnChangeThemes" style="background-color : #EF4228; padding : 6px 8px;
          text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;">Delete</a>
        </div>
        <textarea name="deskripsi" id="name" rows="8" cols="80" placeholder="Your Entry Here" style="
        font-family : times new roman;
        font-size : 16px;
        border-radius : 2px;
        padding : 16px 24px;"></textarea>
      </form>
    <?php } ?>
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'deskripsi');
    </script>
    <script>
    CKEDITOR.replace( 'deskripsi1');
    </script>
  </div>
</body>
</html>
