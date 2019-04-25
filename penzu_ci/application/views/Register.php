<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/Regis.css") ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url("assets/img/favicon.ico")?>">
</head>

<body>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="<?= base_url("assets\img\penzu_white.png") ?>" id="logotgh"></a>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="<?= site_url("LoginController") ?>"> <button class="btn" type="button" id="C">Sign in</button></a>
        </form>
    </nav>
    <div class="container-fluid mt-5 pt-5 " id="bungkus">
        <div class="container mx-auto my-auto " id="form">
            <center>
                <div id="register">
                    <h1> Welcome to Penzu!</h1>
                    <h1>Let’s create your free account</h1>
                </div>
            </center>
            <form action="<?= site_url("RegisterController/index") ?>" method="POST">
                <div id="formemail" class="form-group form-inline">
                    <div class="form-group mb-2 m-3">
                        <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group mb-2 m-2" id="lastname">
                        <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <label id="label" for="exampleInputEmail1">First Name</label>
                    <label id="label2" for="exampleInputEmail1">Last Name</label>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                    <label id="label3" for="exampleInputEmail1">EMAIL ADDRESS</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    <label id="label3" for="exampleInputPassword1">PASSWORD</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_conf" id="exampleInputPassword1">
                    <label id="label3" for="exampleInputPassword1">CONFIRM PASSWORD</label>
                </div>
                <input type="checkbox" id="cbox" name="vehicle3" value="Boat" checked> <a style="color:#9098A5;">Send me
                    awesome updates from the Penzu team!</a><br><br><br><br>
                <p style="color:#9098A5; font-size:11px;">By signing up you agree to our<br>
                    Terms of Use and Privacy Policy</P>
                <button id="buton" type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                <p class="text-center" style="color:#9098A5; font-size:11px;">Under 13 years old? Sign Up Here!<br>
                    Are you a teacher? Get Penzu Classroom Here!</P>


            </form>
        </div>
    </div>
    <footer>
            <div class="container footerdalam">
            <div class="row">
                <div class="col- fot" style="width: 183px;">
                    <p>Penzu</p><hr>
                    <a href="<?= site_url("RegisterController") ?>">Free Signup</a><br>
                    <a href="">Penzu PRO</a><br>
                    <a href="<?= site_url("LoginController") ?>">Log in</a><br>
                    <a href="">Support</a>
                </div>
                <div class="col-" style="width: 363px; padding-left: 43px;">
                    <p>Journals</p><hr>
                    <div class="row">
                        <div class="col fot">
                            <a href="">Journal Prompts</a><br>
                            <a href="">What is a Journal</a><br>
                            <a href="">Pregnancy Journal</a><br>
                            <a href="">Reflective Journal</a><br>
                        </div>
                        <div class="col fot">
                            <a href="">Bible Journal</a><br>
                            <a href="">Dream Journal</a><br>
                            <a href="">Journal Examples</a><br>
                            <a href="">Five Year Journal</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-" style="width: 363px; padding-left: 43px;">
                    <p>Diaries</p><hr>
                    <div class="row">
                        <div class="col fot">
                            <a href="">Secret Diary</a><br>
                            <a href="">Electronic Diary</a><br>
                            <a href="">Diary Templates</a><br>
                            <a href="">Wedding Diary</a><br>
                        </div>
                        <div class="col fot">
                            <a href="">School Diary</a><br>
                            <a href="">Health Diary</a><br>
                            <a href="">Food Diary</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <center><p style='margin-top: 5%; font-size : 12.6px; line-height : 18.9px; font-weight: 300; color : rgb(133, 155, 172);'>
                    Copyright Penzu Inc. 2019</p></center>
            </div>
        </footer>
</body>

</html>