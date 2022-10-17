<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Sing up</title>
</head>

<body class="main-body" >
<!-- <img src="img/joanna-kosinska-1_CMoFsPfso-unsplash.jpg" class="img-fluid" alt="..."> -->
<div class="">
    <div class="container-fluid vh-100 d-flex   justify-content-center">
        <div class="row align-content-center">
            <div class="bg col-6"></div>
            <div class="box  d-flex align-content-center" id="singup">
                <div class=" container-fluid">
                    <h2>Register Here</h2>
                    <div class="row">
                        <div class="col-6">

                            <div class="mb-3 ">
                                <label for="" class="form-label">Frist Name</label>
                                <input type="text" class="form-control" id="f">
                            </div>

                        </div>
                        <div class="col-6">

                            <div class="mb-3 ">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="l">
                            </div>

                        </div>

                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="e" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="p">
                    </div>

                    <div class="row">

                        <div class="col-6">

                            <label for="" class="form-label">Gender</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="g">
                                    <?php
                                    require "Database.php";

      
                                    $rs = Database::search("SELECT * FROM `gender`");
                                    $n = $rs->num_rows;
                                    for($x=0; $x < $n; $x++){
                                        $d = $rs->fetch_assoc();
                                        ?>
                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["gen"]; ?></option>
                                        
                                        <?php
                                    }

                                    ?>

                                    

                                </select>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="mb-3 ">
                                <label for="" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="m">
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-8">
                            <button type="button" class=" col-12 btn btn-primary d-grid" onclick="singup();">create new account</button>
                        </div>

                        <div class="col-4">
                            <button type="button" onclick="change();" class=" col-12 btn btn-dark d-grid">login Here</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="box d-none " id="login">
                <div class="container-fluid">
                    <h2>Login Here</h2>


                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="e2" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Enter your Email here</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="p2">
                    </div>



                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cm">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <label class="form-check-label mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="forget();" for="exampleCheck1"> forget password ?</label>
                    <div class="row">

                        <div class="col-6">
                            <button type="button" class=" col-12 btn btn-primary d-grid" onclick="login();" >Login here</button>
                        </div>

                        <div class="col-6">
                            <button type="button" onclick="change();" class=" col-12 btn btn-dark d-grid">Register</button>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Reset Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="col-auto mb-3">
                                    <label for="inputPassword2" class="visually-hidden">Verification code</label>
                                    <input type="password" class="form-control" id="vcode" placeholder="Verification code">
                                </div>

                                <div class="col-auto mb-3">
                                    <label for="" class="visually-hidden">New Password</label>
                                    <input type="password" class="form-control" id="pw1" placeholder="Password">
                                </div>

                                <div class="col-auto mb-3">
                                    <label for="" class="visually-hidden">Re Type Password</label>
                                    <input type="password" class="form-control" id="pw2" placeholder="Re Type New Password">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary"  onclick="resetpw();" >Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>







    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>

    </div>
</body>

</html>