<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>



    <div class="popup-overlay">
        <div class="popup-wrapper">
            <div class="popup-container">
                <div class="popup-head"><span>Confirmation</span></div>
                <div class="popup-body">
                    <!-- <div class="input-container">
                        <div class="input-div">
                            <span class="input-img"><img src="img/name.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                            <label class="form-label ml-6">Name</label>
                        </div>
                    </div> -->

                    <div class="input-container">
                        <div class="textarea-div">
                            <textarea class="form-textarea" cols="54" rows="5" placeholder=""></textarea>
                            <label class="form-label-textarea">Your text here</label>
                        </div>
                    </div>
                    <div class="upload" style="cursor: pointer;">
                        <div class="upload-img left">
                            <img src="img/fileupload.svg" alt="upload files">
                        </div>
                        <div class="upload-stt left">
                            <span>Click here to upload</span>
                            <span>Maximum size : 2 MB each</span>
                            <span style="color: blue;margin-left:28px;margin-bottom: 5px" class="hide" id="remark_form"></span>
                            <div class="frm-er-msg" style="margin-left:22px"></div>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="popup-footer">
                    <div class="approve-btn"><a href="#">Approve</a></div>
                    <div class="cancel-btn"><a href="#">Cancel</a></div>

                </div>
            </div>
        </div>


    </div>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>
    <div style="position:relative">
        <div class="side-container left">


            <div class="title-div">
                <div class="title">
                    <div class="bck-img-div left"><a href="#"><img src="img/back.svg" alt=""></a></div>
                    <span class="title-stt left">Listing</span>
                    <div class="clr"></div>
                </div>
                <div class="title-btn"><a href="#">Approve</a></div>
            </div>
            <div class="table-div">
                <div class="table">
                    <div class="table-head">
                        <div class="head-cells">Name</div>
                        <div class="head-cells">Mobile No.</div>
                        <div class="head-cells">Email</div>
                        <div class="head-cells">Address</div>
                        <div class="head-cells" style="width:2%"></div>
                    </div>
                    <div class="table-rows">

                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>

                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>