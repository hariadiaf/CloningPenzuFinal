<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>View All Entries</title>

    <!-- boostrap import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url("assets/viewallentries.css") ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">
</head>
<script>
$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
</script>

<body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #EF4228; border-radius : 0px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="form-inline">
                    <a href="<?=  site_url('JurnalController') ?>"><img src="<?= base_url('assets/img/home.png') ?>"
                            width="20px"> </a>
                    <div class="input-group flex-nowrap ml-3"
                        style="display: inherit; background-color : #B00B1B; border-radius : 20px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"
                                style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;">
                                <img src="<?= base_url('assets/img/search.png ')?>" width="18px"> </span>
                        </div>
                        <!-- TESTT -->
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
                    <!-- disini nih -->


                    <div class="dropdown">
                        <?php foreach($akuns as $row){?>
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="border : none; color : #FFFFFF;">
                            <?= $row->first_name?>
                        </button>
                        <?php }?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Penzu Podcast</button>
                            <button class="dropdown-item" type="button">Account</button>
                            <button class="dropdown-item" type="button">Help & FAQs</button>
                            <button class="dropdown-item" type="button">Pro Support</button>
                            <button class="dropdown-item" type="button">Logout </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>

        </nav>
        <div class="" style="background-color : #E8E8E8; position: relative; bottom: 24px; padding : 12px;">
            <div class="container">
                <a href="<?= site_url('Entries_Controller') ?>" class="float-right" name="btnNewJournal"
                    style="background-color : #258CD1; padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 4px; font-style : bold; color : #ffffff; margin-right : 180px;"> <img src="<?= base_url('assets/img/add.png');?>" width="16px"> New Entry </a>

                <a href="#" class="float-right" name="btnTag"
                    style=" padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img
                        src="<?= base_url('assets/img/cloudDownload.png') ?>" width="20px"></a>

                <a href="#" class="float-right" name="btnChangeThemes"
                    style=" padding : 6px 8px;
  text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;"> <img
                        src="<?= base_url('assets/img/settings.png') ?>" width="20px"></a>
                <?php foreach($akuns as $row){?>
                <div class="">
                    <a class="name" href="#" style=""><?= $row->first_name?>'s Journal</a>
                    <p style="margin-left : 200px; font-family: arial; color : #575E66"><?= $this->db->count_all_results('entries');?> total entries | Created on
                        Thu. 3/28/2019</p>
                </div>
                <?php }?>
                <div>
                    <form class="row">
                        <div class="">
                            <p style="font-weight : bold; color : #9098A5; margin-left : 210px; font-size : 12px;">
                                SELECT</p>
                            <select name="cars" class="custom-select-lg mb-3"
                                style="margin-left: 210px; width : 180px; border-radius : 3px; font-size : 16px;">
                                <option value="allentries">All Entries</option>
                                <option value="this page">This Page</option>
                                <option selected value="none">None</option>
                            </select>
                        </div>
                        <div class="">
                            <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;">SINCE
                            </p>
                            <select name="cars" class="custom-select-lg mb-3"
                                style="margin-left: 20px; width : 180px; border-radius : 3px; font-size : 16px;">
                                <option selected>All Time</option>
                                <option value="today">Today</option>
                                <option value="yesterday">Yesterday</option>
                                <option value="this week">This Week</option>
                                <option value="last 7 days">Last 7 Days</option>
                                <option value="This Month">This Month</option>
                                <option value="Last Month">Last Month</option>
                                <option value="last 30 days">Last 30 days</option>
                                <option value="this year">This Year</option>
                            </select>
                        </div>
                        <div class="">
                            <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;">VIEW
                            </p>
                            <select name="cars" class="custom-select-lg mb-3"
                                style="margin-left: 20px; width : 180px; border-radius : 3px; font-size : 16px;">
                                <option selected>Active Entries</option>
                                <option value="Starred">Starred</option>
                                <option value="Trash">Trash</option>
                            </select>
                        </div>
                        <div class="">
                            <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;"> </p>
                            <input class="form-control mb-3" id="myInput" type="text" placeholder=" Search this journal"
                                style="margin-left : 20px; width : 200px; margin-top : 26px; font-size : 16px; border-radius : 3px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container" style="width: 850px;">
        <div class="table-wrapper">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Entry</th>
                        <th>Date Created</th>
                        <th>Shared</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($entries as $row){?>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td><?= $row->title?></td>
                        <td><?= $row->date?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>