$(function () {
    console.log(baseUrl);
    let b2bFlag = 1;
    $('.date-picker').datepicker();
    $('.datepicker').datepicker();

    $('button:contains("Back")').on('click', function(e) {
       window.location.href= '/simulation/returns-dashboard';
    });

    function processAjax(action, formData, successFn, b2bError, errElem) {
        $.ajax({
            method: "POST",
            url: action,
            dataType: 'json',
            data: formData,
            cache: false
        }).done(function (msg) {
            $('#show-errors').show();
            console.log("success");
            successFn(msg);
        }).fail(function (msg) {
            $('#show-errors').show();
            console.log("error");
            b2bError(msg, errElem)
        });
    }

    let b2bError = function(response, errElem='') {
        $('#u_name').val('');
        $('#supply_type').val('');
        $('#itemDetails').addClass('ng-hide');
        displayValidationErr(errElem, response.responseJSON.resp);
        $('#pos').prop('selectedIndex', 0);
        $('.accpt').prop('disabled', true);
    }
    let b2bDetails = function(response) {
        let type = $('#type').val();
        if ( type === 'b2b' ) {
            if ( response['receiver_name'] ) $('#u_name').val(response['receiver_name']);

        } else if ( type === 'b2cl' ) {
            console.log(response);
        } else if ( type === 'cdnr' ) {
            if ( response['receiver__name'] ) $('#u_name').val(response['receiver__name']);
        } else if ( type === 'cdnr-amendment' ) {
            if ( response['receiver__name'] ) $('#u_name').val(response['receiver__name']);
        }

        if ( $('#pos').length > 0 ) {
            $('#pos>option[value="' + response['pos'] + '"]').prop('selected', true);
        }


        if ($('input[name="supply_type"]').length > 0 ) {
            if ( response['supply_type'] ) $('input[name="supply_type"]').val(response['supply_type']);
        }

        if ( $('.item-details' ).length > 0) {
            $('.item-details').removeClass('ng-hide');
            $('#itemDetails').removeClass('ng-hide');
        }

        $('.accpt').prop('disabled', false);

    }

    let b2bSaveError = function(response, errElem='') {
        console.log(errElem);
        let targetDiv = document.getElementById(errElem);
        console.log(targetDiv);


        let errors = response.responseJSON;
        // errors.forEach(function(item, index) {
            console.log(errors);
            let para = document.createElement('P');
            let newContent = document.createTextNode('The data you entered in the field is incorrect. Please recalculate and try again.');
            para.appendChild(newContent);
            targetDiv.append(para);
        // });
    }

    let b2bSaveError2 = function(response, errElem='') {
        console.log(errElem);
        let targetDiv = document.getElementById(errElem);
        console.log(targetDiv);


        let errors = response.responseJSON;
        // errors.forEach(function(item, index) {
        console.log(errors);
        if( errors ) {
            let para = document.createElement('P');
            let newContent = document.createTextNode(errors.resp);
            para.appendChild(newContent);
            targetDiv.append(para);
        }

        // });
    }

    let b2bSaveSuccess2 = function(response) {
        $('#show-errors').html('<p>Success</p>');
    }


    let b2bSaveSuccess = function(response) {
        $('#show-errors').html('<p>Success</p>');
        let type = $('#type').val();
        setTimeout(function() {
            window.location.href = type;
        }, 1000);

    }

    let gstr3bSaveSuccess = function(response) {
        $('#show-errors').html('<p>Success</p>');
        let type = $('#type').val();
        setTimeout(function() {
            window.location.href = 'gstr3B';
        }, 1000);

    }
    let displayValidationErr = function(elem, msg='') {
        elem.removeClass('ng-hide').text(msg);
    }

    // $("#invdate").on("change",function(){
    //     let value = $(this).val();
    //     let action = baseUrl + '/gstr1-process';
    //     let type = $('#type').val();
    //     let field = $(this).attr('name');
    //     b2bFlag = 1;
    //     let formData = {'value' : value, 'action': 'retrieve_field_val','type' : type, 'field' : field, 'is_date': 1 }
    //     console.log(value);
    //     if (value === '') {
    //         b2bFlag = 0;
    //         displayValidationErr($(this).parent('div').parent('div').find('.err'), 'This information is required.')
    //     }
    //
    //     if ( b2bFlag ) {
    //         $('span.err').addClass('ng-hide');
    //         processAjax(action, formData, b2bDetails, b2bError, $(this).parent('div').parent('div').find('.err'));
    //     }
    // });

    $('#ruid').focusout(function (e) {
        e.preventDefault();
        e.stopPropagation();
        let id = $(this).attr('id');
        let value = $(this).val();
        let type = $('#type').val();
        let field = $(this).attr('name');
        let action = baseUrl + '/gstr1-process';
        formData = {'value': value, 'action': 'retrieve_field_val', 'type': type, 'field': field, 'is_date': 0};

        if (value === '') {
            b2bFlag = 0;
            // $('span.err').removeClass('ng-hide');
            // displayValidationErr($(this).next('span'), 'This information is required.')
        } else {
            $('span.err').addClass('ng-hide');

            processAjax(action, formData, b2bDetails, b2bError, $(this).next('span'));
        }
    });

    $('#pos').on('change', function(e) {
        // console.log($(this).val());
    });

    $('body').on('keyup', '.tax-value', function () {
        let type = $(this).attr('data-taxtype');
        let rate = parseFloat($(this).attr('data-taxrate'));
        let value = parseFloat($(this).val());
        let tblType = $(this).attr('data-tblType');

        if (! Number.isNaN(value) ) {
            if ( tblType === 'igst') {
                let itElem = $('[name="'+ type+'[integrated_tax]' +'"]');
                let result = (value * rate)/100;
                itElem.val(result);

            } else {
                let cgstElem = $('[name="'+ type+'[cgst]' +'"]');
                let sgstElem = $('[name="'+ type+'[sgst]' +'"]');
                let result = (value * rate)/200;
                cgstElem.val(result);
                sgstElem.val(result);
                // console.log('2');
            }
        } else {
            if ( tblType === 'igst') {
                let itElem = $('[name="'+ type+'[integrated_tax]' +'"]');
                itElem.val('');
            } else {
                let cgstElem = $('[name="'+ type+'[cgst]' +'"]');
                let sgstElem = $('[name="'+ type+'[sgst]' +'"]');
                cgstElem.val('');
                sgstElem.val('');
            }

        }

    });

    function getTemplate(templateName, alternate_title = false) {
        $.ajax({
            method: "GET",
            url: baseUrl + '/gstr1/getTemplate',
            dataType: 'html',
            data: {'templateName': templateName, 'alternate_title' : alternate_title},
            cache: false
        }).done(function (msg) {
            $('.item-details').html(msg);
        }).fail(function (msg) {
            // console.log(msg);
        });
    }
    $('.isIgst').on('change', function(e) {
        let alternate = false;
        if ( $('.alternate') && $('.alternate').length > 0 ) {
            alternate = $('.alternate').val();
        }
        // console.log(alternate);
        if ( $('.isIgst').is(":checked") === true ) {
            getTemplate('igst', alternate);
            // $('.display-igst').removeClass('hide');
            // $('.display-cgst-sgst').addClass('hide');
        } else {
            getTemplate('cgst_sgst', alternate);
            // $('.display-igst').addClass('hide');
            // $('.display-cgst-sgst').removeClass('hide');
        }
    });
    $('.isIgst2').on('change', function(e) {
        if ( $(this).is(":checked") === true ) {
            $('.display-igst').removeClass('hide');
            $('.display-cgst-sgst').addClass('hide');
        } else {
            $('.display-igst').addClass('hide');
            $('.display-cgst-sgst').removeClass('hide');
        }
    });

    $('#submitCheckbox').on('change', function (e) {
        if ( $(this).is(":checked") === true ) {
            $('#gstr1_submit_btn').prop('disabled', false);
        } else {
            $('#gstr1_submit_btn').prop('disabled', true);
        }
    });
    $('#gstr1_submit_btn').on('click', function(e) {
       //TODO: Compare backend with current user json.
    });
    function GoBackWithRefresh(event) {
        if ('referrer' in document) {
            window.location = document.referrer;
            /* OR */
            //location.replace(document.referrer);
        } else {
            window.history.back();
        }
    }

    // $('#b2b_Form').on('submit', function(e) {
    //    e.preventDefault();
    //    let formData = $(this).serialize();
    //     formData += '&u_name=' + $('#u_name').val() + '&supplyty=' + $('#supply_type').val() + '&action=save_b2b_transaction';
    //     let action = baseUrl + "/gstr1-process";
    //     // console.log($('#u_name').val());
    //     console.log(formData);
    //     processAjax(action, formData, b2bSaveSuccess, b2bSaveError, '');
    // });

    $('form').on('submit', function(e) {
        e.preventDefault();
        if ( ! $(this).hasClass('gstr3b') && ! $(this).hasClass('others') && ! $(this).hasClass('check-period')) {
            let formData = $(this).serialize();
            let disElements = '';
            $('#show-errors').hide();
            $('#show-errors').html('');
            $( "input:disabled" ).each(function(ind, elem) {
                disElements += '&' + $(this).attr('name') + '=' + encodeURIComponent($(this).val());
            });
            // console.log(disElements);

            formData += disElements + '&action=save_transaction';

            let action = baseUrl + "/gstr1-process";
            // console.log(formData);
            processAjax(action, formData, b2bSaveSuccess, b2bSaveError, 'show-errors');
        } else if( $(this).hasClass('others') ) {
            let name = $(this).attr('name');

            if ( name === 'amendSearch' ) {
                window.location.href="/simulation/b2cl-amendment-add/?fin_year=" + $('.fin_year').val() + '&invoice_no=' + encodeURIComponent($('.invoice_number').val());
            } else if ( name === 'exportAmendSearch' ) {
                window.location.href="/simulation/export-amendment-add/?fin_year=" + $('.fin_year').val() + '&invoice_no=' + encodeURIComponent($('.invoice_number').val());
            } else if ( name === 'b2bAmendSearch' ) {
                window.location.href="/simulation/b2b-amendment-add/?fin_year=" + $('.fin_year').val() + '&invoice_no=' + encodeURIComponent($('.invoice_number').val());
            } else if ( name === 'b2csAmendSearch' ) {
                window.location.href="/simulation/b2cs-amendment-add/?fin_year=" + $('.fin_year').val() + '&pos=' + $('#pos').val() + '&return_filing_period=' + $('.return_filing_period').val();
            } else if ( name === 'cdnAmendSearch' ) {
                window.location.href="/simulation/cdnr-amendment-add/?fin_year=" + $('.fin_year').val() + '&invoice_no=' + encodeURIComponent($('.invoice_number').val());
            } else if ( name === 'cdnuramendSearch' ) {
                window.location.href="/simulation/cdnur-amendment-add/?fin_year=" + $('.fin_year').val() + '&invoice_no=' + encodeURIComponent($('.invoice_number').val());
            } else if ( name === 'advTaxAmendSearch' ) {
                window.location.href="/simulation/advtax-amendment-add/?fin_year=" + $('.fin_year').val() + '&pos=' + $('#pos').val() + '&return_filing_period=' + $('.return_filing_period').val();
            } else if ( name === 'taxPaidAmendSearch' ) {
                window.location.href="/simulation/taxpaid-amendment-add/?fin_year=" + $('.fin_year').val() + '&pos=' + $('#pos').val() + '&return_filing_period=' + $('.return_filing_period').val();
            }


        } else if ( $(this).hasClass('check-period') ) {
            let formData = $(this).serialize();
            // $('#show-errors').hide();
            $('#show-errors').html('');

            formData += '&action=check_period';

            let action = baseUrl + "/check-period";
            processAjax(action, formData, b2bSaveSuccess2, b2bSaveError2, 'show-errors');

        } else {
            console.log("3b ss")
            let formData = $(this).serialize();
            let disElements = '';
            // $('#show-errors').hide();
            $('#show-errors').html('');
            // $( "input:disabled" ).each(function(ind, elem) {
            //     disElements += '&' + $(this).attr('name') + '=' + $(this).val();
            // });
            // console.log(disElements);

            formData += disElements + '&action=save_transaction';

            let action = baseUrl + "/gstr3b-process";
            // console.log(formData);
            processAjax(action, formData, gstr3bSaveSuccess, b2bSaveError, 'show-errors');
        }

    });

    $('#gstr1_submit_btn').on('click', function(e) {
        $('#gstr1_file_btn').prop('disabled', false);
       // window.location.href= 'https://practicepot.com/simulation/return-filing-gstr1';
    });

    $('#gstr1_file_btn').on('click', function(e) {
        window.location.href= 'https://practicepot.com/simulation/return-filing-gstr1';
    });

    $('#verify_otp').on('click', function(e) {
       e.preventDefault();
       let otp = $('#otp_value').val();

       if ( '1234' == otp ) {
           window.location.href= 'https://practicepot.com/simulation/return-filing-gstr1?return-status=filed';
       } else {
           alert('Incorrect otp');
       }
    });

    $('#verify_otp_3b').on('click', function(e) {
        e.preventDefault();
        let otp = $('#otp_value').val();

        if ( '1234' == otp ) {
            window.location.href= 'https://practicepot.com/simulation/return-filing-gstr3b?return-status=filed';
        } else {
            alert('Incorrect otp');
        }
    });

    $('.save-gstr3b').on('click', function(e) {
        console.log("asa");
        $('.proceed-payment3b').prop('disabled', false);
    });

    $('.proceed-payment').on('click', function(e) {
        window.location.href= 'https://practicepot.com/simulation/payment';
    });

    $('#proccedToFile3b').on('click', function(e) {
        window.location.href= 'return-filing-gstr3b';
    });

    $('.proceed-payment3b').on('click', function(e) {
        window.location.href= 'payment';//'return-filing-gstr3b';
    });

    $('#createChallan').on('click', function(e) {
        window.location.href= 'create-challan';
    });

    $('#rate').on('change', function() {
        let rate = parseFloat($(this).val());
        let value = parseFloat($('[name="total_invoice_value"]').val());
        let itElem = $('[name="igst"]');
        let cgstElem = $('[name="cgst"]');
        let sgstElem = $('[name="sgst"]');
        if ( $('.isIgst2').is(":checked") === true ) {

            let result = (value * rate)/100;
            itElem.val(result);
            cgstElem.val(0);
            sgstElem.val(0);
        } else {

            let result = (value * rate)/200;
            cgstElem.val(result);
            sgstElem.val(result);
            itElem.val(0);
        }
    });



    var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
    var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];

    function inWords (num) {
        if ((num = num.toString()).length > 9) return 'overflow';
        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
        if (!n) return; var str = '';
        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + ' rupees only ' : ' rupees only ';
        let str2 = str.charAt(0).toUpperCase() + str.slice(1);
        return str2;
    }

    let row1TotalInput = $('.row1-total');
    let row2TotalInput = $('.row2-total');
    let row3TotalInput = $('.row3-total');
    let row4TotalInput = $('.row4-total');
    let challanWords = '';
    let totalChallan = $('.total-challan');

    function calculateTotal() {
        let r1 = 0;
        let r2 = 0
        let r3 = 0;
        let r4 = 0;
        let total = 0;
        if ( parseFloat(row1TotalInput.val()) ) {
            r1 = parseFloat(row1TotalInput.val());
        }

        if ( parseFloat(row2TotalInput.val()) ) {
            r2 = parseFloat(row2TotalInput.val());
        }

        if ( parseFloat(row3TotalInput.val()) ) {
            r3 = parseFloat(row3TotalInput.val());
        }

        if ( parseFloat(row4TotalInput.val()) ) {
            r4 = parseFloat(row4TotalInput.val());
        }

        total = r1+r2+r3+r4;
        challanWords = inWords(total);
        totalChallan.text('₹' + total);
        $('.total-challan-words').text(challanWords);
    }
    $('.row1').focusout(function (e) {
        e.preventDefault();
        e.stopPropagation();


        let total = 0;
        let row1Total = 0;
        $('.row1').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                console.log(parseFloat($(ele).val()));
                row1Total += parseFloat($(ele).val());
            }

        });
        row1TotalInput.val(row1Total);
        calculateTotal();
    });

    $('.row2').focusout(function (e) {
        e.preventDefault();
        let row2Total = 0;
        $('.row2').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                row2Total += parseFloat($(ele).val());
            }

        });
        row2TotalInput.val(row2Total);
        calculateTotal();
    });

    $('.row3').focusout(function (e) {
        e.preventDefault();
        let row3Total = 0;
        $('.row3').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                row3Total += parseFloat($(ele).val());
            }

        });
        row3TotalInput.val(row3Total);
        calculateTotal();
    });

    $('.row4').focusout(function (e) {
        e.preventDefault();
        let row4Total = 0;
        $('.row4').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                row4Total += parseFloat($(ele).val());
            }

        });
        row4TotalInput.val(row4Total);
        calculateTotal();
    });

    // $('.challan-input').focusout(function (e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     let challanWords = '';
    //     let totalChallan = $('.total-challan');
    //     let total = 0;
    //     $('.challan-input').each(function(i, ele) {
    //         if ( parseFloat($(ele).val()) ) {
    //             console.log(parseFloat($(ele).val()));
    //             total += parseFloat($(ele).val());
    //         }
    //
    //     })
    //     challanWords = inWords(total);
    //     totalChallan.text('₹' + total);
    //     $('.total-challan-words').text(challanWords);
    //
    // });

    $('.single-payment-mode').on('click', function(e) {
       e.preventDefault();
       $('.create-challan-success').prop('disabled', false);
    });

    $('.create-challan-success').on('click', function(e) {
       e.preventDefault();
       alert("Challan Created");
       $('.back-payment').removeClass('hide');
    });

    $('.back-payment').on('click', function(e) {
        e.preventDefault();
        window.location = "https://practicepot.com/simulation/payment";
    })

    $('#OffSetLiab').on('click', function(e) {
        e.preventDefault();
        alert('Offset Successful');
        $('#proccedToFile3b').prop('disabled', false);
    });

    let sectionAItTotal = 0;
    let sectionACtTotal = 0;
    let sectionAStTotal = 0;
    let sectionACsTotal = 0;


    let sectionBItTotal = 0;
    let sectionBCtTotal = 0;
    let sectionBStTotal = 0;
    let sectionBCsTotal = 0;


    let sectionCItTotal = 0;
    let sectionCCtTotal = 0;
    let sectionCStTotal = 0;
    let sectionCCsTotal = 0;

    $('.sectiona').focusout(function (e) {
        e.preventDefault();
        let tempAItTotal = 0;
        let tempACtTotal = 0;
        let tempAStTotal = 0;
        let tempACsTotal = 0;
        $('.sectionait').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempAItTotal += parseFloat($(ele).val());
            }
            sectionAItTotal = tempAItTotal;
        });

        $('.sectionact').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempACtTotal += parseFloat($(ele).val());
            }
            sectionACtTotal = tempACtTotal;
        });

        $('.sectionast').each(function(i, ele) {

            if ( parseFloat($(ele).val()) ) {
                tempAStTotal += parseFloat($(ele).val());
            }
            sectionAStTotal = tempAStTotal;
        });

        $('.sectionacss').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempACsTotal += parseFloat($(ele).val());
            }
            sectionACsTotal = tempACsTotal;
        });


        sectionCItTotal = sectionAItTotal - sectionBItTotal;
        sectionCCtTotal = sectionACtTotal - sectionBCtTotal;
        sectionCStTotal = sectionAStTotal - sectionBStTotal;
        sectionCCsTotal = sectionACsTotal - sectionBCsTotal;

        $('.sectioncit').val(sectionCItTotal);
        $('.sectioncct').val(sectionCCtTotal);
        $('.sectioncst').val(sectionCStTotal);
        $('.sectionccs').val(sectionCCsTotal);
    });
    $('.sectionb').focusout(function (e) {
        e.preventDefault();
        let tempBItTotal = 0;
        let tempBCtTotal = 0;
        let tempBStTotal = 0;
        let tempBCsTotal = 0;
        $('.sectionbit').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempBItTotal += parseFloat($(ele).val());
            }
            sectionBItTotal = tempBItTotal;
        });

        $('.sectionbct').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempBCtTotal += parseFloat($(ele).val());
            }
            sectionBCtTotal = tempBCtTotal;
        });

        $('.sectionbst').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempBStTotal += parseFloat($(ele).val());
            }
            sectionBStTotal = tempBStTotal;
        });

        $('.sectionbcss').each(function(i, ele) {
            if ( parseFloat($(ele).val()) ) {
                tempBCsTotal += parseFloat($(ele).val());
            }
            sectionBCsTotal = tempBCsTotal;
        });

        sectionCItTotal = sectionAItTotal - sectionBItTotal;
        sectionCCtTotal = sectionACtTotal - sectionBCtTotal;
        sectionCStTotal = sectionAStTotal - sectionBStTotal;
        sectionCCsTotal = sectionACsTotal - sectionBCsTotal;
        $('.sectioncit').val(sectionCItTotal);
        $('.sectioncct').val(sectionCCtTotal);
        $('.sectioncst').val(sectionCStTotal);
        $('.sectionccs').val(sectionCCsTotal);
    });


    $('.save_data').on('click', function(e) {
        e.preventDefault();
        let formNumber = parseInt($(this).attr('datatype'));
        let formData = $('.form' + formNumber).serialize();


        $('#show-errors' + formNumber).hide();
        $('#show-errors' + formNumber).html('');
        // console.log(disElements);

        formData += '&action=save_documents';

        let action = baseUrl + "/process-document";

        $.ajax({
            method: "POST",
            url: action,
            dataType: 'json',
            data: formData,
            cache: false
        }).done(function (msg) {
            $('#show-errors' + formNumber).html('<p>Success</p>').show();
            // console.log("success");
            setTimeout(function () {
                window.location.reload();
            }, 500)
        }).fail(function (msg) {
            console.log(msg);
            $('#show-errors' + formNumber).html('The data you entered in the field is incorrect. Please recalculate and try again.').show();
            setTimeout(function () {
                window.location.reload();
            }, 500)
            // console.log("error");
        });
    });
});
