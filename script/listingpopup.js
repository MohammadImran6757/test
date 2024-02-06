var aft;

$(document).ready(function () {
    $(".full-column").on("mouseover", ".showAction, .nwactdrops", function () {
        $(this).closest(".cellDivacts").find(".nwactdrops").show();
    });

    $(".full-column").on("mouseleave", ".showAction, .nwactdrops", function () {
        $(this).closest(".cellDivacts").find(".nwactdrops").hide();
    });

    //filer search
    $('.full-column').on('click', '#showFilter', function () {alert('--');
        if ($('#saveFilter').html() === '') {
            var curr = $(this);
            curr.addClass('active');
            var dataString = '';
            $.ajax({
                url: "ajax/showDepartmentFilter.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function (data) {alert(data);
                    $('#popup').html(data).show();
                    makeDragable('.popup-header', '.popup-wrap');
                }
            });
        } else {
            getAppliedFilter($('#saveFilter').html());
            $('#popup').show();
            makeDragable('.popup-header', '.popup-wrap');
            $('.hasDatepicker').removeClass('hasDatepicker');
        }
    });

    // save master units
    $('.dev_wrap').on('click', '.status', function () {
        var curr = $(this);
        var action = curr.attr('action');
        if (action == 'active_user'){
            var action_msg = 'active';
        } else if (action == 'deactive_user'){
            var action_msg = 'deactive';
        } else if (action == 'delete'){
             var action_msg = 'delete';
        }    
        
        var id = curr.attr('id');
        var dataString = 'id=' + id + '&action=' + action;
        var title = 'Confirmation';
        var message = 'Are you sure want to ' + action_msg + '?';
        var action_url = 'action/departmentAction.php';
        dataStringAjax(dataString, title, message, action_url);
    });

    $('#popup').on('click', '#cancelFilter', function () {
        $('#popup').html('').hide();
    });

    $('#popup').on('click', '.ftab', function () {
        var id = $(this).attr('id');
        $('#popup').find('.filter-tabber').find('.active').removeClass('active');
        $(this).addClass('active');
        $('#popup').find('.tab1').hide();
        $('#popup').find('#stab_' + id).show();
    });

    $('.full-column').on('click', '.clrallfltr', function () {
        window.location.reload();
    });

    $('.full-column').on('click', '.rm_apl_fltr', function () {
        var id = $(this).closest('.filterchip').attr('id').split('_');
        getAppliedFilter($('#saveFilter').html());
        $('#popup').hide();
        if (id[0] === 'checkbox' || id[0] === 'radio') {
            $('#stab_' + id[1]).find('input[value="' + id[2] + '"]').removeAttr('checked');
        } else if (id[0] === 'text') {
            $('#stab_' + id[1]).find('input').val('');
        } else if (id[0] === 'select') {
            $('#stab_' + id[1]).find('select').val('');
        }
        $('#saveFilter').html($('#ffrm').html());
        clearTimeout(aft);
        aft = setTimeout(applyFilter, 500);
        $(this).closest('.filterchip').remove();
    });

    $('#popup').on('keyup', '.apply_filter_keyup', function () {
        clearTimeout(aft);
        aft = setTimeout(applyFilter, 500);
    });

    $('#popup').on('change', '.apply_filter_change', function () {
        clearTimeout(aft);
        aft = setTimeout(applyFilter, 500);
    });

    $("#popup").on('submit', '#ffrm', function (e) {
        var postData = new FormData(this);
        postData.append('action', 'filter_applied');
        var formURL = "ajax/filterStaffUser.php";
        setFilterHTML();
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            processData: false,
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                setTimeout(function () {
                    showAppliedFilter();
                    $('#main-body').html(data);
                    $('#columnFilterData').find('.filterColumn').each(function () {
                        var index = $('.filterColumn').index(this);
                        if ($(this).is(':checked') === true) {
                            $('.col' + (index + 1)).show();
                        } else {
                            $('.col' + (index + 1)).hide();
                        }
                    });
                    $('#saveFilter').html($('#ffrm').html());
                    $('tCount').text($('#total_count').val());
                }, 400);
            }
        });
        e.preventDefault();
    });

    $('.full-column').on('click', '#columnFilter', function () {
        var str = '';
        $('.cellDivHeader').each(function () {
            var column_name = $(this).find('p').text();
            if (column_name && column_name !== 'Details') {
                var col_checked = '';
                if ($(this).is(':visible')) {
                    col_checked = 'checked';
                }
                str += `<label><input type="checkbox" class="filterColumn" ${col_checked}>${column_name}</label>`;
            }
        });
        $('#columnFilterData').html(str);
        $('#checkboxes').show();
    });

    $('.full-column').on('click', '.filterColumn', function () {
        var index = $('.filterColumn').index(this);
        if ($(this).is(':checked') === true) {
            $('.cellDivHeader:eq(' + (index) + '), .col' + (index + 1)).show();
        } else {
            $('.cellDivHeader:eq(' + (index) + '), .col' + (index + 1)).hide();
        }
    });

    $('.full-column').on('click', '.perPage', function () {
        $(this).next('ul').toggle();
    });

    $('.full-column').on('click', '.setPage', function () {
        $('#pagelimit').val($(this).text());
        $('.perPage').text($(this).text());
        $(this).closest('ul').toggle();
        loadMoreStaffUser(0);
    });

    $('.full-column').on('click', '.export_excel', function () {
        exportMoreDepartment('export', 'excel', $(this).attr('id'));
    });

    $('.full-column').on('click', '.export_pdf', function () {
        exportMoreDepartment('export', 'pdf', $(this).attr('id'));
    });

    $('.full-column').on('click', '.export_print', function () {
        exportMoreDepartment('export', 'print', $(this).attr('id'));
    });

    $('.full-column').on('click', '#selectAll', function () {
        if ($(this).is(':checked') === true) {
            $('.chkBox').attr('checked', 'checked');
        } else {
            $('.chkBox').removeAttr('checked');
        }
    });

    // save department staff user
    $('.dev_wrap').on('click', '.create_new_department_user', function () {
        var check = 0;
        $(".fldrequired").each(function () {
            $(".frm-txtbox").removeClass("frm-focus");
            if ($(this).val() === "") {
                check++;
                $(this).closest(".dev_req_msg").find(".frm-er-msg").text("This field is required");
                $(this).addClass("frm-error");
            } else {
                $(this).closest(".dev_req_msg").find(".frm-er-msg").text("");
                $(this).removeClass("frm-error");
            }
        });
        if (check > 0) {
            return false;
        } else {
            $('#frm').find('.frm_hidden_data').html('');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action" value="add_new_department_user" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_url" value="action/departmentAction" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_btn_id" value=".create_new_department_user" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_btn_name" value="Create New User" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="after_success_action" value="reload" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="after_success_redirect" value="departmentstafflist" autocomplete="off">');
            $('#frm').submit();
        }
    });

    // edit department staff user
    $('.dev_wrap').on('click', '.edit_department_user', function () {
        var check = 0;
        $(".fldrequired").each(function () {
            $(".frm-txtbox").removeClass("frm-focus");
            if ($(this).val() === "") {
                check++;
                $(this).closest(".dev_req_msg").find(".frm-er-msg").text("This field is required");
                $(this).addClass("frm-error");
            } else {
                $(this).closest(".dev_req_msg").find(".frm-er-msg").text("");
                $(this).removeClass("frm-error");
            }
        });
        if (check > 0) {
            return false;
        } else {
            $('#frm').find('.frm_hidden_data').html('');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action" value="edit_department_user" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_url" value="action/departmentAction" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_btn_id" value=".edit_department_user" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="action_btn_name" value="Edit" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="after_success_action" value="reload" autocomplete="off">');
            $('#frm').find('.frm_hidden_data').append('<input type="hidden" name="after_success_redirect" value="departmentstafflist" autocomplete="off">');
            $('#frm').submit();
        }
    });

    $(".dev_wrap").on('submit', '#frm', function (e) {
        var postData = new FormData(this);
        var action_btn_id = $('input[name="action_btn_id"]').val();
        var action_btn_name = $('input[name="action_btn_name"]').val();
        var action_url = $('input[name="action_url"]').val();
        var after_success_action = $('input[name="after_success_action"]').val();
        var after_success_redirect = $('input[name="after_success_redirect"]').val();
        var formURL = action_url;

        $('.act_btn_ovrly').show();
        $(action_btn_id).text('Please wait...');
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            processData: false,
            contentType: false,
            success: function (data, textStatus, jqXHR) {
                console.log(data);
                $(action_btn_id).text(action_btn_name);
                var response_data = JSON.parse(data);
                if (response_data['status'] === '-1') {
                    printError(response_data['message'], 3000, '', '');
                } else if (response_data['status'] === '1') {
                    printSuccess(response_data['message'], 2000, after_success_action, after_success_redirect);
                } else if (response_data['status'] === '0') {
                    printError(response_data['message'], 3000, 'reload', '');
                } else {
                    printError(response_data['message'], 3000, 'reload', '');
                }
            },
            error: function (xhr, status, error) {
                printError(handleAjaxError(xhr), 3000, after_success_action, after_success_redirect);
            }
        });
        e.preventDefault();
    });

    $(document).mouseup(function (e) {
        var container = $("#checkboxes");
        if (!container.is(event.target) && !container.has(event.target).length) {
            container.hide();
        }
    });
});

function applyFilter() {
    $('#main-body').html('<div class="medical-spinner" id="load"></div>');
    $("#ffrm").submit();
}

function setFilterHTML() {
    $('#popup input').each(function () {
        if ($(this).attr('type') !== 'file') {
            $(this).attr('value', $(this).val());
        }
    });
    $('#popup select').each(function () {
        var selvalues = $(this).find('option:selected').val();
        $(this).find('option').removeAttr('selected');
        $(this).find('option').prop('selected', false);
        $(this).find('option[value="' + selvalues + '"]').attr('selected', 'selected');
        $(this).find('option[value="' + selvalues + '"]').prop('selected', true);
    });
    $('#popup input:checkbox').each(function () {
        if ($(this).prop('checked') === true) {
            $(this).attr('checked', 'checked');
        } else {
            $(this).removeAttr('checked');
        }
    });
    $('#popup input:radio').each(function () {
        if ($(this).prop('checked') === true) {
            $(this).attr('checked', 'checked');
        } else {
            $(this).removeAttr('checked');
        }
    });
    $('#popup textarea').each(function () {
        var value = $(this).val();
        $(this).text('');
        $(this).append(value);
    });
}

function showAppliedFilter() {
    var applied_filter = '';
    $('#popup input').each(function () {
        if ($(this).val() && ($(this).attr('type') === 'text')) {
            var filter_key_id = $(this).closest('.tab1').attr('id').replace('stab_', '');
            var filter_key = $('#popup').find('.filter-tabber').find('#' + filter_key_id).text();
            var filter_value = $(this).val();
            applied_filter += generateFilter(filter_key_id, filter_key, filter_value, $(this).attr('type'), filter_value);
        }
        if ($(this).prop('checked') === true && ($(this).attr('type') === 'checkbox' || $(this).attr('type') === 'radio')) {
            var filter_key_id = $(this).closest('.tab1').attr('id').replace('stab_', '');
            var filter_key = $('#popup').find('.filter-tabber').find('#' + filter_key_id).text();
            var filter_value = $(this).closest('.filter-choice').find('.fltr-name').text().trim();
            var fil_value = $(this).val();
            applied_filter += generateFilter(filter_key_id, filter_key, filter_value, $(this).attr('type'), fil_value);
        }
    });
    $('#popup select').each(function () {
        var selvalues = $(this).find('option:selected').val();
        if (selvalues) {
            var filter_key_id = $(this).closest('.tab1').attr('id').replace('stab_', '');
            var filter_key = $('#popup').find('.filter-tabber').find('#' + filter_key_id).text();
            var filter_value = $(this).find('option:selected').text().trim();
            applied_filter += generateFilter(filter_key_id, filter_key, filter_value, 'select', selvalues);
        }
    });
    applied_filter += `<div class="clrallfltr">Clear all filter</div>`;
    $('#appliedFilter').html(applied_filter);
    $('.filter-nos').text($('.filterchip').length + ' filters applied').removeClass('hide');
    if ($('.filterchip').length === 0) {
        $('.clrallfltr').remove();
        $('.filter-nos').text('').addClass('hide');
    }
}

function generateFilter(filter_key_id, filter_key, filter_value, attr_type, fil_value) {
    var applied_filter = '';
    applied_filter += `<div class="filterchip" id="${attr_type}_${filter_key_id}_${fil_value}">
                            <span class="left"><span style="font-weight:500;">${filter_key}:</span>${filter_value}</span>
                            <img class="right rm_apl_fltr" style="cursor:pointer;" title="Remove filter" src="img/clear.svg" alt="" height="12px">
                            <div class="clr"></div>
                        </div>`;
    return applied_filter;
}

function getAppliedFilter(html) {
    var str = `<div class="popup-overlay">
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
                                <div class="popup-body pp-medium-y">
                                    <form id="ffrm">
                                        ${html}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>`;
    $('#popup').html(str);
}

function exportMoreDepartment(exportlist, export_type, type) {
    var column_arr = [];
    var column_head = [];
    var fd = new FormData();
    fd.append('action', '');
    // check if any filter applied
    if ($('.filterchip').length) {
        getAppliedFilter($('#saveFilter').html());
        $('#popup').hide();
        var other_data = $('#ffrm').serializeArray();
        $.each(other_data, function (key, input) {
            fd.append(input.name, input.value);
        });
        fd.append('action', 'filter_applied');
    }
    fd.append('status', type);
    fd.append('exportlist', exportlist);
    fd.append('export_type', export_type);
    // check if any displayed columns exists
    if ($('.filterColumn').length === 0) {
        var str = '';
        $('.cellDivHeader').each(function () {
            var column_name = $(this).find('p').text();
            if (column_name && column_name !== 'Details') {
                var col_checked = '';
                if ($(this).is(':visible')) {
                    col_checked = 'checked';
                }
                str += `<label><input type="checkbox" class="filterColumn" ${col_checked}>${column_name}</label>`;
            }
        });
        $('#columnFilterData').html(str);
    }
    $('#columnFilterData').find('.filterColumn').each(function () {
        var index = $('.filterColumn').index(this);
        if ($(this).is(':checked') === true) {
            column_arr.push(index);
            column_head.push($(this).parent().text());
        }
    });
    fd.append('column_arr', column_arr);
    fd.append('column_head', column_head);
    if (export_type === 'excel') {
        var formUrl = "report/export_staff_user.php";
    } else if (export_type === 'pdf') {
        var formUrl = "pdf/export_staff_user.php";
    } else if (export_type === 'print') {
        var formUrl = "pdf/export_staff_user.php";
    }
    $.ajax({
        type: "POST",
        url: formUrl,
        data: fd,
        contentType: false,
        processData: false,
        cache: false,
        success: function (data) {
            var response_data = JSON.parse(data);
            if (export_type === 'print') {
                window.open('printdocument?file=' + response_data['url'] + '&ftype=' + response_data['ftype'], '_blank');
            } else {
                window.open('downloadexport?file=' + response_data['url'], '_blank');
            }
        }
    });
}

function loadMoreStaffUser(page, status) {
    var fd = new FormData();
    fd.append('action', '');
    if ($('.filterchip').length) {
        getAppliedFilter($('#saveFilter').html());
        $('#popup').hide();
        var other_data = $('#ffrm').serializeArray();
        $.each(other_data, function (key, input) {
            fd.append(input.name, input.value);
        });
        fd.append('action', 'filter_applied');
    }
    fd.append('offset', page);
    fd.append('status', status);
    fd.append('pagelimit', $('#pagelimit').val());
    fd.append('id', $('#unitid').val());
    $('#main-body').html('<div class="medical-spinner" id="load"></div>');
    $.ajax({
        type: "POST",
        url: "ajax/loadMoreStaffUser.php",
        data: fd,
        contentType: false,
        processData: false,
        cache: false,
        success: function (data) {
            setTimeout(function () {
                $("#main-body").html(data);
                $('#columnFilterData').find('.filterColumn').each(function () {
                    var index = $('.filterColumn').index(this);
                    if ($(this).is(':checked') === true) {
                        $('.col' + (index + 1)).show();
                    } else {
                        $('.col' + (index + 1)).hide();
                    }
                });
            }, 400);
        }
    });
}

function makeDragable(dragHandle, dragTarget) {
    // used to prevent dragged object jumping to mouse location
    let xOffset = 0;
    let yOffset = 0;
    let handle = document.querySelector(dragHandle);
    handle.addEventListener("mousedown", startDrag, true);
    handle.addEventListener("touchstart", startDrag, true);
    /*sets offset parameters and starts listening for mouse-move*/
    function startDrag(e) {
        e.preventDefault();
        e.stopPropagation();
        let dragObj = document.querySelector(dragTarget);
        // shadow element would take the original place of the dragged element, this is to make sure that every sibling will not reflow in the document
        let shadow = dragObj.cloneNode();
        shadow.id = ""
        // You can change the style of the shadow here
        shadow.style.opacity = 0.5
        dragObj.parentNode.insertBefore(shadow, dragObj.nextSibling);
        let rect = dragObj.getBoundingClientRect();
        dragObj.style.left = rect.left;
        dragObj.style.top = rect.top;
        dragObj.style.position = "absolute";
        dragObj.style.zIndex = 999999;
        /*Drag object*/
        function dragObject(e) {
            e.preventDefault();
            e.stopPropagation();
            if (e.type == "mousemove") {
                dragObj.style.left = e.clientX - xOffset + "px"; // adjust location of dragged object so doesn't jump to mouse position
                dragObj.style.top = e.clientY - yOffset + "px";
            } else if (e.type == "touchmove") {
                dragObj.style.left = e.targetTouches[0].clientX - xOffset + "px"; // adjust location of dragged object so doesn't jump to mouse position
                dragObj.style.top = e.targetTouches[0].clientY - yOffset + "px";
            }
        }
        /*End dragging*/
        document.addEventListener("mouseup", function () {
            // hide the shadow element, but still let it keep the room, you can delete the shadow element to let the siblings reflow if that is what you want
            shadow.style.opacity = 0
            shadow.style.zIndex = -999999
            window.removeEventListener('mousemove', dragObject, true);
            window.removeEventListener('touchmove', dragObject, true);
        }, true)

        if (e.type == "mousedown") {
            xOffset = e.clientX - rect.left; //clientX and getBoundingClientRect() both use viewable area adjusted when scrolling aka 'viewport'
            yOffset = e.clientY - rect.top;
            window.addEventListener('mousemove', dragObject, true);
        } else if (e.type == "touchstart") {
            xOffset = e.targetTouches[0].clientX - rect.left;
            yOffset = e.targetTouches[0].clientY - rect.top;
            window.addEventListener('touchmove', dragObject, true);
        }
    }
}

function validateMaxlength(place) {
    var MAX_LENGTH = event.target.dataset.maxlength;
    var currentLength = event.target.value.length;
    var length = event.target.value.replace(/\n/g, '').length;
    var char_count = parseInt(MAX_LENGTH - length);
    if (length > MAX_LENGTH) {
        event.target.value = event.target.value.substr(0, currentLength - 1);
    }
    if (char_count >= 0) {
        if (char_count === 1 || char_count === 0) {
            $('.msg_txt').eq(place).text('* ' + char_count + ' character remaining.');
        } else {
            $('.msg_txt').eq(place).text('* ' + char_count + ' characters remaining.');
        }
    }
}

function calculateSqFt() {
    var num1 = $('.unit_width').val();
    var num2 = $('.unit_height').val();
    var dim_type = $('.dim_type:checked').val();
    if (dim_type === '0') {
        if (num1 && num2) {
            $('.prnt_sqft').text(((num1 * num2) / 144).toFixed(2) + ' Sq.Ft.');
        } else {
            $('.prnt_sqft').text('');
        }
    } else {
        if (num2) {
            $('.prnt_sqft').text(((num2) / 12).toFixed(2) + ' Running Ft.');
        } else {
            $('.prnt_sqft').text('');
        }
    }
}

function fillLatLng() {
    var qty_type = $('.qty_type:checked').val();
    if (qty_type === '0') {
        $('#slat, #elat').val($('#slat, #elat').val());
        $('#slng, #elng').val($('#slng, #elng').val());
    } else {

    }
}

function printObjectFileList() {
    const input = document.getElementById('browsePic');
    const {files} = input;
    $('#file_list').html('');
    var str = '';
    $.each(files, function (i, val) {
        var filename = val.name;

        str += '<div class="file-add-itm file_div" title="' + filename + '">';
        str += '<span class="frm-flnm text-wrapping left">' + filename + '</span>';
        str += '<span class="frm-flnm-rmv right">';
        str += '<input type="hidden" class="index" id="index" value="' + i + '">';
        str += '<a style="cursor: pointer;" class="remove_file" id="' + i + '">';
        str += '<img src="img/clear.svg" alt="" width="12px">';
        str += '</a>';
        str += '</span>';
        str += '<div class="clr"></div>';
        str += '</div>';

    });
    $('#file_list').html(str);
}

function removeFileFromFileList(index) {
    const dt = new DataTransfer();
    const input = document.getElementById('browsePic');
    const {files} = input;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (index !== i) {
            dt.items.add(file);
        }
    }
    input.files = dt.files;
    printObjectFileList();
}

function printSubUnits() {
    var unit_prefix = $('#unit_prefix').val();
    var qty_type = $('.qty_type:checked').val();
    var qty = $('.qty').val();
    //console.log(unit_prefix +' = '+ qty_type + ' = ' + qty);
    if (unit_prefix && qty_type && qty) {
        if (qty_type === '1') {
            var str = '';
            str += `<div class="left frm-rdowrap row-highlight-green">
                        <label>
                            <div class="frm-rdobtn left">
                                <input type="checkbox" class="frm.typrdo" id="chk_all_sub_unit">
                            </div>
                            <div class="left frm-rdotxt text-wrapping">Active All</div>
                        </label>
                        <div class="clr"></div>
                    </div>`;
            for (var i = 0; i < qty; i++) {
                str += `<div class="left frm-rdowrap">
                        <label>
                            <div class="frm-rdobtn left">
                                <input type="checkbox" class="frm.typrdo chk_sub_unit" name="sub_unit_${i}">
                            </div>
                            <div class="left frm-rdotxt text-wrapping">${unit_prefix}-${i + 1}</div>
                        </label>
                        <div class="clr"></div>
                    </div>`;
            }
            $('#sub_unit_list').html('').html(str);
            $('#sub_unit_list').removeClass('hide');
        } else {
            var str = '';
            str += `<div class="left frm-rdowrap">
                        <label>
                            <div class="frm-rdobtn left">
                                <input type="checkbox" class="frm.typrdo chk_sub_unit" name="sub_unit_1">
                            </div>
                            <div class="left frm-rdotxt text-wrapping">${unit_prefix}-1</div>
                        </label>
                        <div class="clr"></div>
                    </div>`;
            $('#sub_unit_list').html('').addClass('hide').html(str);
        }
    } else {
        $('#sub_unit_list').html('').addClass('hide');
        if (unit_prefix === '') {
            printError('Enter unit prefix', 3000, '', '');
        }
    }
}