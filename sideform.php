<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>

    <div style="position:relative">
        <div class="side-container left">

            <div class="title" style="padding:8px 30px">
                <div class="bck-img-div left"><a href="#"><img src="img/back.svg" alt=""></a></div>
                <span class="title-stt left">Application Form</span>
                <div class="clr"></div>
            </div>

            <div class="bi-details-div">

                <div class="left-dt-div">
                    <div class="title">
                        <span class="title-stt mb-15 left">Personal Information</span>
                        <div class="clr"></div>
                    </div>

                    <div class="fields-div">
                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/name.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">Name</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/dob.png" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">DoB</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div" style="width:244px">
                                <span class="gd-span">Gender :</span>
                                <label>
                                    <span class="chk-span"><input type="radio" name="gender">Male</span>
                                </label>

                                <label>
                                    <span class="chk-span"><input type="radio" name="gender">Female</span>
                                </label>

                                <label>
                                    <span class="chk-span"><input type="radio" name="gender">Other</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="right-dt-div">
                    <div class="title">
                        <span class="title-stt mb-15 left">Mailing Address</span>
                        <div class="clr"></div>
                    </div>
                    <div class="fields-div">
                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/address.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">Address Line 1</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/address.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">Address Line 2</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/city.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">City</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/pin.png" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">ZIP</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                            <span class="input-img"><img src="img/states.png" alt=""></span>
                                <select name="" id="">
                                    <option value="" selected disabled hidden>Select State</option>
                                    <option value="">Uttar Pradesh</option>
                                    <option value="">Delhi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="left-dt-div">
                    <div class="title">
                        <span class="title-stt mb-15 left">Contact Information</span>
                        <div class="clr"></div>
                    </div>
                    <div class="fields-div">
                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/mobile.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">Mobile No.</label>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="input-div">
                                <span class="input-img"><img src="img/email.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                <label class="form-label">Email</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="title-btn left width-btn mb-15 ml-65"><a href="#">Submit</a></div>
            <div class="clr"></div>


        </div>
    </div>


</body>

</html>