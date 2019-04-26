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
          <nav class="navbar navbar-expand-lg navbar-light" id="bg" style="background-color : #EF4228; border-radius : 0px;">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <form class="form-inline" style="height: 42.5px; margin-left: 9px; margin-top: -2px;">
                      <a href="<?=  site_url('JurnalController') ?>"><img src="<?= base_url('assets/img/home.png') ?>"
                              width="19.75px" style="margin-left: -10.75px; margin-top: -6px;"> </a>
                      <div class="input-group flex-nowrap ml-3"
                          style="margin-left: 3px; display: inherit; background-color : #B00B1B; height : 31px; width : 200px; border-radius : 20px; vertical-align: middle;">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="addon-wrapping"
                                  style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;">
                                  <img src="<?= base_url('assets/img/search.png')?>" width="13px" style='margin-left: 2 px;' ></span>
                          </div>
                          <!-- TESTT -->
                          <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                              aria-describedby="addon-wrapping"
                              style="margin-left: -10px; margin-top: -2px; font-family : 'Open Sans', helvetica, sans-serif; font-size : 14px; border: none; background-color : transparent;">
                      </div>
                      <div class="text-center" style="margin-left : 340px; ">
                          <img style="width : 90.5px; margin-left: 35px; margin-top: 3px;" src="<?= base_url('assets/img/penzu_white.png')?>" width="10px">
                      </div>
                      <div class="float-right" style="margin-left : 420px;">
                          <a href="#" name="btnGoPro"
                              style='font-family : "Open Sans", helvetica, sans-serif; background-color : #ffffff; padding : 4.5px 9px; text-decoration: none;  font-weight : 700; border-radius : 4px; font-style : bold; color : #E74C3C;'>Go
                              PRO</a>
                      </div>

                      <style>
                      .vl {
                          border-left: 6px solid black;
                          height: 500px;
                      }
                      </style>

                      <div class="dropdown" style="margin-left: 18px;">
                          <?php foreach($akuns as $row){?>
                          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" style="height: 28px; vertical-align: middle; border-left-color: rgba(112, 87, 87, 0.603); border-radius: 0; border-left-width: 0.2px; color : #FFFFFF;font-family : 'Open Sans', helvetica, sans-serif;padding : 3px 18px 6px 10px;">
                              <?= $row->first_name?>
                          </button>
                          <?php }?>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Penzu Podcast</button>
                              <a href="<?= site_url("AccountController")?>" class="dropdown-item">Account</a>
                              <a href="<?= site_url("SupportController")?>" class="dropdown-item">Help & FAQs</a>
                              <button class="dropdown-item" type="button">Pro Support</button>
                              <a href="<?= site_url("HomeController")?>" class="dropdown-item">Log Out</a>
                          </div>
                      </div>
                  </form>
              </div>
          </nav>

          </nav>
          <div class="" style="background-color : #E8E8E8; position: relative; bottom: 24px; padding : 12px;">
              <div class="container" style="margin-left: 4%; margin-top: 3.75px;">
                  <a href="<?= site_url('Entries_Controller') ?>" class="float-right" name="btnNewJournal"
                      style="background-color :  #3498DB; padding : 6px 8px;
    text-decoration: none;  font-weight : bold; height : 32px; width : 119.5px; border-radius : 4px; font-family : 'Open Sans', helvetica, sans-serif; font-size : 14px; font-weight : 600; color : #ffffff; margin-right : 103px; margin-top: 7.5px; text-align: center;"> <img src="<?= base_url('assets/img/add.png');?>" width="12px">⠀New Entry </a>
                  <a href="#" class="float-right" name="btnTag"
                      style=" padding : 6px 8px;
    text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px; margin-top: 7.5px;"> <img
                          src="<?= base_url('assets/img/cloudDownload.png') ?>" width="20px"></a>

                  <a href="#" class="float-right" name="btnChangeThemes"
                      style=" padding : 6px 8px;
    text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px; margin-top: 7.5px;"> <img
                          src="<?= base_url('assets/img/settings.png') ?>" width="20px"></a>
                  <?php foreach($akuns as $row){?>
                  <div class="">
                      <a class="name" href="<?= site_url('Entries_Controller') ?>"><?= $row->first_name?>'s Journal</a>
                      <p style="margin-left : 200px; margin-top: 4px; font-family: arial; color : #575E66">
                          <?= $this->db->count_all_results('entries');?> total entries | Created on
                          Thu. 3/28/2019</p>
                  </div>
                  <?php }?>
                  <div>
                      <form class="row"style='font-family : "Open Sans", helvetica, sans-serif; margin-left: -10px;'>
                          <div class="">
                              <p style="font-weight : bold; color : #9098A5; margin-left : 210px; font-size : 12px; margin-top: 6px;">
                                  SELECT</p>
                              <select name="cars" class="custom-select-lg mb-3"
                                  style="margin-left: 209px; border-radius : 3px; font-size : 16px; margin-top: -7px;">
                                  <option value="allentries">All Entries</option>
                                  <option value="this page">This Page</option>
                                  <option selected value="none">None</option>
                              </select>
                          </div>
                          <div class="">
                              <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;margin-top: 6px;">SINCE
                              </p>
                              <select name="cars" class="custom-select-lg mb-3"
                                  style="margin-left: 20px; width : 180px; border-radius : 3px; font-size : 16px;margin-top: -7px;">
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
                              <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;margin-top: 6px;">VIEW
                              </p>
                              <select name="cars" class="custom-select-lg mb-3"
                                  style="margin-left: 20px; width : 180px; border-radius : 3px; font-size : 16px;margin-top: -7px;">
                                  <option selected>Active Entries</option>
                                  <option value="Starred">Starred</option>
                                  <option value="Trash">Trash</option>
                              </select>
                          </div>
                          <div class="">
                              <p style="font-weight : bold; color : #9098A5; margin-left : 20px; font-size : 12px;"> </p>
                              <input class="form-control mb-3" id="myInput" type="text" placeholder=" Search this journal"
                                  style="margin-left : 20px; width : 265.391px; margin-top : 26px; font-size : 16px; border-radius : 3px;">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      </div>

      <div class="container" style="width: 850px; margin-left: 257px; margin-top: -8px;">
          <div class="table-wrapper">
              <table class="table">
                  <thead>
                      <tr>
                          <th style="width:30px;">
                              <span class="custom-checkbox">
                                  <input type="checkbox" id="selectAll">
                                  <label for="selectAll"></label>
                              </span>
                          </th>
                          <th style="width:200px;">Entry</th>
                          <th style="width:150px;">Date Created</th>
                          <th  style="text-align: center; width:50px;">Shared</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach($entries as $row){?>
                      <tr>
                          <td style="line-height:15px;">
                              <span class="custom-checkbox">
                                  <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                  <label for="checkbox1"></label>
                              </span>
                          </td>
                          <td style="line-height:15px;">
                            <div><?= $row->title?></div>
                            <div style='font-size : 13px; text-align : left white-space : wrap; color : #9098A5;' ><?= $row->text?></div>
                          </td>
                          <td style='line-height:15px; font-size : 14px; color :  #8E8E93; vertical-align: middle; '><?= $row->date?></td>
                          <td>
                          <img src="<?= base_url('assets/img/shared.png') ?>"
                              width="16px" style="margin-left: 45%;">
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
  </body>

  </html>