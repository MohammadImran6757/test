<?php
// include_once '../config.php';
// include_once '../includes/checkSession.php';
// include_once '../includes/get_time_zone.php';
// include_once '../dbcon/db_connect.php';
// include_once '../functions/common.function.php';

?>
<style>
    /*Table filter*/
    .filter {
        bottom: 5%;
        right: 10%;
        z-index: 3;
    }

    .filter a {
        display: block;
        background: #611c33;
        padding: 15px;
        border-radius: 100px;
        width: 19px;
        height: 19px;
        box-shadow: 0px 0px 15px -3px;
    }

    .filter-wrap {
        background: #fff;
        right: 0px;
        z-index: 3;
        width: 32%;
        height: 98%;
        top: 0;
        box-shadow: 0px 0px 11px -1px;
        padding: 1%;
    }

    .filter-hding {
        font-size: 18px;
        font-weight: 500;
        border-bottom: 1px solid #f4f4f4;
        padding-bottom: 15px;
    }

    .filter-box {
        height: 87%;
    }

    .filter-action {}

    .filter-tabber {
        width: 35%;
        border-right: 1px solid #f4f4f4;
        /*! color: #611c33; */
    }

    .filter-tabber a {
        display: block;
        padding: 5px;
        border-bottom: 1px solid #f4f4f4;
        color: #36d1dc;
    }

    .filter-tabber a:hover,
    .filter-tabber a.active {
        background: #36d1dc;
        background: linear-gradient(90deg, #36d1dc, #5b86e5);
        color: white;
    }

    .filter-taboptions {
        width: 55%;
        padding: 15px;
    }

    .filter-choice {
        margin-bottom: 15px;
    }

    .filter-choice span {}

    .filter-choice span.fltr-radio {
        margin-right: 10px;
    }

    .filter-choice span.fltr-name {
        width: 85%;
    }

    .frm-lbl-actv {
        top: -23px;
        font-size: 11px;
        font-weight: 400;
        left: 2px;
        color: #666;
    }

    input.frm-txtbox {
        padding: 6px 2px;
        font-size: 14px;
        border: none;
        border-bottom: 2px solid #ddd !important;
        margin-bottom: 5px;
        width: 250px;
        outline-style: none;
        font-family: inherit;
        letter-spacing: 0.2px;
        color: #000;
    }


    /*Popup*/
    .popup-overlay {
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        z-index: 5;
        width: 100%;
        height: 100%;
    }

    .popup-wrap {
        width: 450px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        position: absolute;
    }

    .popup-header {
        padding: 20PX 25px;
        background: #36d1dc;
        background: linear-gradient(90deg, #36d1dc, #5b86e5);
        text-transform: capitalize;
    }

    .popup-body {
        min-height: 100px;
        padding: 25px;
    }

    .popup-actionwrap {
        padding: 10px 25px 20px 20px;
        background: #f4f4f4;
    }

    .popup-actionwrap a {
        padding: 10px 20px;
        margin-left: 20px;
        margin-top: 10px;
        border-radius: 2px;
        color: #000;
        font-weight: 500;
        text-transform: uppercase;
        background: #fff;
    }

    .popup-actionwrap a:hover {
        background: #ddd;
    }

    .popup-title {
        font-size: 18px;
        font-weight: 500;
        color: #fff;
    }

    .pp-primact {
        background: #611c33 !important;
        color: #fff !important;
    }

    .pp-secact {
        display: block;
        padding: 10px 15px;
        color: white;
        background: #36d1dc;
        background: linear-gradient(90deg, #36d1dc, #5b86e5);
        border-radius: 2px;
    }

    .pptrtact {
        color: #999 !important;
    }

    .cnfrm-task {
        height: 50px !important;
        min-height: auto;
        line-height: 45px;
    }

    .pp-small-x {
        width: 475px;
        top: calc(1vh - (0px / 2));
        left: calc(50vw - (475px / 2));
    }

    .pp-small-y {
        height: 285px;
    }

    .pp-medium-x {
        width: 750px;
        top: calc(1vh - (0px / 2));
        left: calc(50vw - (750px / 2));
    }

    .pp-medium-y {
        height: 350px;
        overflow-x: auto;
    }

    .pp-large-x {
        width: 1250px;
        top: calc(1vh - (0px / 2));
        left: calc(50vw - (1250px / 2));
    }

    .pp-large-y {
        height: 68vh;
        overflow-x: auto;
    }

    .popup-progress {
        background: #333;
        width: 100%;
        top: 64px;
        height: 5px;
    }

    .popup-progress p {
        color: #fff;
        font-size: 11px;
        text-align: center;
        padding: 3px 0;
    }

    .pp{
        position: relative;
        display: block;
    }
    .ppi{
        position: absolute;
        width: 100%;
    }
    @media only screen and (min-device-width: 350px) and (max-device-width: 1250px) and (orientation:portrait) {
        .pp-medium-x {
            width: 91%;
    border: 1px solid #aaa;
    position: absolute;
    top: calc(30vh - (0px / 2));
    left: 18px;
        }

        input.frm-txtbox {
            width: 100%;
        }

        .popup-body {
            padding: 10px;
        }

        .filter-tabber a {
            font-size: 11px;
        }
    }
    @media only screen and (min-device-width: 800px) and (max-device-width: 1250px) and (orientation:portrait) {

.pp-medium-x{
    width: 95%;
}
    }
</style>
<div class="popup-overlay">
    <div class="pp">
        <div class="ppi">
        <div class="popup-wrap pp-medium-x">
        <div class="popup-header" style="cursor: move;">
            <span class="popup-title text-wrapping left">Select filters to apply</span>
            <span class="popup-close right">
                <a style="cursor: pointer;" id="cancelFilter">
                    <img src="img/clear-w.svg" alt="" width="18px">
                </a>
            </span>
            <div class="clr"></div>
        </div>
        <div id="popupDiv">
            <div class="popup-body pp-large-y">
                <form id="ffrm">
                    <div class="filter-box">
                        <div class="filter-tabber left">
                            <a style="cursor:pointer;" id="1" class="ftab active">Department Name</a>
                            <a style="cursor:pointer;" id="2" class="ftab">Created On</a>
                            <a style="cursor:pointer;" id="3" class="ftab">Active</a>
                            <a style="cursor:pointer;" id="4" class="ftab">Last Updated On</a>
                        </div>

                        <div class="left filter-taboptions">
                            <div class="tab1" id="stab_1" style="border: none;">
                                <div class="input-container">
                                    <div class="input-div">
                                        <span class="input-img"><img src="img/name.svg" alt=""></span><input class="form-input width-m" type="text" placeholder="">
                                        <label class="form-label">Enter Department Name</label>
                                    </div>
                                </div>
                                <div class="tab1" id="stab_2" style="display:none; border: none;">
                                    From:
                                    <div class="filter-choice">

                                        <input type="text" name="sdate" class="frm-txtbox dept-frm-input spbdate apply_filter_change calshow" placeholder="Start Date">
                                    </div>
                                    To:
                                    <div class="filter-choice">

                                        <input type="text" name="edate" class="frm-txtbox dept-frm-input spbedate apply_filter_change calshow" placeholder="End Date">
                                    </div>
                                </div>
                                <div class="tab1" id="stab_3" style="display:none;">
                                    <label>
                                        <div class="filter-choice">
                                            <span class="fltr-radio left">
                                                <input type="checkbox" name="active[]" id="active" value="1" class="apply_filter_change">
                                            </span>
                                            <span class="fltr-name text-wrapping left">
                                                Yes
                                            </span>
                                            <div class="clr"></div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="filter-choice">
                                            <span class="fltr-radio left">
                                                <input type="checkbox" name="active[]" id="active" value="0" class="apply_filter_change">
                                            </span>
                                            <span class="fltr-name text-wrapping left">
                                                No
                                            </span>
                                            <div class="clr"></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="tab1" id="stab_4" style="display:none; border: none;">
                                    From:
                                    <div class="filter-choice">

                                        <input type="text" name="updt_sdate" class="frm-txtbox dept-frm-input spbdate apply_filter_change calshow" placeholder="Start Date">
                                    </div>
                                    To:
                                    <div class="filter-choice">

                                        <input type="text" name="updt_edate" class="frm-txtbox dept-frm-input spbedate apply_filter_change calshow" placeholder="End Date">
                                    </div>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
   
</div>