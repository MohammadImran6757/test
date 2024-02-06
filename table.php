<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/jquery-1.8.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script>
        document.write('<style type="text/css">body{display:none}</style>');
        jQuery(function(a) {
            a("body").css("display", "block")
        });
    </script> -->
    <!-- Add this in the <head> section of your HTML -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        /* Add this to your CSS */
        .kebab-drops {
            display: none;
        }

        /* Style the toggle button */
        .toggle-btn {
            cursor: pointer;
        }
        .kebab-drops.show {
            display: block; /* Show the dropdown when the 'show' class is applied */
        }
    </style>
</head>

<body>
    <div id="popup"></div>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>

    <div style="position:relative" class="dev_wrap">
        <div class="side-container left" style="position:relative">


            <div class="title-div">
                <div class="title">
                    <div class="bck-img-div left"><a href="#"><img src="img/back.svg" alt=""></a></div>
                    <span class="title-stt left">Listing</span>
                    <div class="clr"></div>
                </div>
                <div class="right" style="display:flex">
                    <!-- <div class="title-btn"><a href="#">Approve</a></div> -->
                    <div class="title-btn"><a href="#">Approve</a></div>
                </div>

            </div>

            <div class="right search-filter">
                <div class="tbl-data right" title="Show Columns">
                    <a style="cursor:pointer;" id="columnFilter">
                        <img src="img/table.svg" height="22px">
                    </a>
                    <!-- <div id="checkboxes"
                           style="min-width:200px; margin-top: -2px; min-height: 100px; max-height: 300px; overflow: auto; position: absolute; background: #fff; z-index: 11; right: 15px;">
                          <div style="height: 20px; padding: 10px; font-size:14px;font-weight: 600;">
                              Displayed Columns
                          </div>
                          <div id="columnFilterData"></div>
                      </div> -->
                </div>

                <div class="tbl-data right" title="Export Excel">
                    <a style="cursor:pointer;" class="export_excel" id="all">
                        <img src="img/excel.svg" height="22px">
                    </a>
                </div>
                <div class="tbl-data right" title="Export PDF">
                    <a style="cursor:pointer;" class="export_pdf" id="all">
                        <img src="img/pdficn.svg" height="22px">
                    </a>
                </div>
                <div class="tbl-data right" title="Print">
                    <a style="cursor:pointer;" class="export_print" id="all">
                        <img src="img/printicn.svg" height="22px">
                    </a>
                </div>

                <div class="right fltrbtn" style="cursor:pointer;" nav="all" id="showFilter">
                    <span><img src="img/filterb.svg" height="18px;" alt=""></span>
                    <p>Search & Filter</p>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
            <div class="table-div">
                <div class="table">
                    <div class="table-head">
                        <label style="cursor:pointer;">
                            <div class="head-cells"><input type="checkbox" style="margin-left:-1px;">All</div>
                        </label>
                        <div class="head-cells">Name</div>
                        <div class="head-cells">Mobile No.</div>
                        <div class="head-cells">Email</div>
                        <div class="head-cells">Address</div>
                        <div class="head-cells" style="width:2%"></div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-rows">
                        <label class="dsp-contents">
                            <div class="row-cells" style="width:1%"><input type="checkbox"></div>
                        </label>
                        <div class="row-cells"> <a href="#">Mr. Mukesh Kumar</a></div>
                        <div class="row-cells">987654310</div>
                        <div class="row-cells">mukesh@gamil.com</div>
                        <div class="row-cells">Ambedkar Nagar New Delhi</div>
                        <div class="row-cells" style="width:1%">
                            <div class="kebab-act posrel">
                                <a href="#" class="toggle-btn"><img src="img/kebabmenu.svg" alt=""></a>
                                <div class="kebab-drops posabs">
                                    <a href="#">Edit</a>
                                    <a href="#">Approve</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination" style="position:absolute">
                <div class="left rsltpp">
                    <div class="rsl-hding left">Result Per Page</div>
                    <div class="rsl-counter left posrel">
                        <a style="cursor:pointer;" class="perPage">100</a>
                        <ul class="posabsolut" style="display: none;">
                            <li><a style="cursor:pointer;" class="setPage">500</a></li>
                            <li><a style="cursor:pointer;" class="setPage">200</a></li>
                            <li><a style="cursor:pointer;" class="setPage">100</a></li>
                            <li><a style="cursor:pointer;" class="setPage">50</a></li>
                            <li><a style="cursor:pointer;" class="setPage">20</a></li>
                        </ul>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="right pgntn rmarg">

                    <div class="clr"></div>
                </div>
                <input type="hidden" id="pagelimit" autocomplete="off" value="100">
                <div class="clr"></div>
            </div>
        </div>
    </div>


</body>
<script src="scripts/jquery-1.8.23.ui.min.js"></script>
<script src="scripts/jquery.confirm.js"></script>
<script src="scripts/common.js"></script>
<script src="scripts/listingpopup.js"></script>
<!-- Add this before the closing </body> tag of your HTML -->
<script>
    $('.dev_wrap').on('click', '#showFilter', function() {
        var curr = $(this);
        $('#popup').load('ajax/showDepartmentFilter.php', function() {
            $('#popup').show();
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toggleBtns = document.querySelectorAll('.toggle-btn');

        toggleBtns.forEach(function(toggleBtn) {
            toggleBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                var kebabMenu = this.parentElement.querySelector('.kebab-drops');
                
                // Close all other open kebab menus
                var allKebabMenus = document.querySelectorAll('.kebab-drops.show');
                allKebabMenus.forEach(function(menu) {
                    if (menu !== kebabMenu) {
                        menu.classList.remove('show');
                    }
                });

                kebabMenu.classList.toggle('show');
            });
        });

        // Close kebab menus when clicking outside of them
        window.addEventListener('click', function(event) {
            if (!event.target.closest('.kebab-act')) {
                var allKebabMenus = document.querySelectorAll('.kebab-drops.show');
                allKebabMenus.forEach(function(menu) {
                    menu.classList.remove('show');
                });
            }
        });
    });
</script>


</html>