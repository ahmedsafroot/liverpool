var total = 0;
var indeuction = "";
var what_to_do = "";

function getChecked() {
    var checkedValue = document.getElementById("marketCK5").checked;
    if (checkedValue == true) {
        document.getElementById("marketOther").focus();
    } else {
        document.getElementById("marketOther").blur();
    }
}

function getFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("marketCK5").checked = true;
    } else {
        document.getElementById("marketCK5").checked = false;
    }
}

function getCompanyStatus() {
    var checkedValue = document.getElementById("customRadio5").checked;
    if (checkedValue == true) {
        document.getElementById("companyStatusOther").focus();
    } else {
        document.getElementById("companyStatusOther").blur();
    }
}

function getCompanyStatusFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("customRadio5").checked = true;
    } else {
        document.getElementById("customRadio5").checked = false;
    }
}

function getCompanyProd() {
    var checkedValue = document.getElementById("customRadio21").checked;
    if (checkedValue == true) {
        document.getElementById("companyProdOther").focus();
    } else {
        document.getElementById("companyProdOther").blur();
    }
}

function getCompanyProdFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("customRadio21").checked = true;
    } else {
        document.getElementById("customRadio21").checked = false;
    }
}

function formValidation() {
    var userTelephone = document.getElementById("userTelephone").value;
    var userTelephoneLen = document.getElementById("userTelephone").value.length;
    if (isNaN(userTelephone)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must contain numbers only";
    } else if (isNaN(userTelephone) == false && (userTelephoneLen < 3)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must not be less than 3 numbers";
    } else if (isNaN(userTelephone) == false && (userTelephoneLen > 11)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must not be more than 11 numbers";
    }
}



function profileForm() {
    var mydata = [];
    mydata["userName"] = $("#userName").val();
    mydata["userParent"] = $("#userParent").val();
    mydata["userAddress"] = $("#userAddress").val();
    mydata["userTelephone"] = $("#userTelephone").val();
    mydata["userFax"] = $("#userFax").val();
    mydata["userUrl"] = $("#userUrl").val();
    mydata["userNum"] = $("#userNum").val();
    mydata["userAppro"] = $("#userAppro").val();
    mydata["userYears"] = $("#userYears").val();
    mydata["userPortfolio"] = $("#userPortfolio").val();
    if ($('#marketCK1').is(":checked")) {
        mydata["marketCK1"] = 1;
    } else {
        mydata["marketCK1"] = 0;
    }
    if ($('#marketCK2').is(":checked")) {
        mydata["marketCK2"] = 1;
    } else {
        mydata["marketCK2"] = 0;
    }
    if ($('#marketCK3').is(":checked")) {
        mydata["marketCK3"] = 1;
    } else {
        mydata["marketCK3"] = 0;
    }
    if ($('#marketCK4').is(":checked")) {
        mydata["marketCK4"] = 1;
    } else {
        mydata["marketCK4"] = 0;
    }
    if ($('#marketCK5').is(":checked")) {
        mydata["marketCK5"] = 1;
    } else {
        mydata["marketCK5"] = 0;
    }

    mydata["marketOther"] = $("#marketOther").val();


    mydata["userExport"] = $("#userExport").val();
    mydata["userImport"] = $("#userImport").val();
    mydata["userContact"] = $("#userContact").val();
    mydata["userContactNo"] = $("#userContactNo").val();
    mydata["companyStatus"] = $('input[name=customRadio]:checked').val();
    if (!mydata["companyStatus"])
        mydata["companyStatus"] = 0;

    mydata["companyStatusOther"] = $("#companyStatusOther").val();

    mydata["legalStructure"] = $('input[name=structure]:checked').val();
    if (!mydata["legalStructure"])
        mydata["legalStructure"] = 0;

    mydata["bussinessStructure"] = $('input[name=business]:checked').val();
    if (!mydata["bussinessStructure"])
        mydata["bussinessStructure"] = 0;

    mydata["marketStructure"] = $('input[name=market]:checked').val();
    if (!mydata["marketStructure"])
        mydata["marketStructure"] = 0;

    mydata["userLocation"] = $("#userLocation").val();


    mydata["prodLine1"] = $('input[name=prod1]:checked').val();
    if (!mydata["prodLine1"])
        mydata["prodLine1"] = 0;

    mydata["prodLine2"] = $('input[name=prod2]:checked').val();
    if (!mydata["prodLine2"])
        mydata["prodLine2"] = 0;

    mydata["prodLine3"] = $('input[name=prod3]:checked').val();
    if (!mydata["prodLine3"])
        mydata["prodLine3"] = 0;

    mydata["services"] = $('input[name=services]:checked').val();
    if (!mydata["services"])
        mydata["services"] = 0;

    mydata["companyProdOther"] = $("#companyProdOther").val();


    if ($('#customCheck1').is(":checked")) {
        mydata["marketing"] = 1;
    } else {
        mydata["marketing"] = 0;
    }
    if ($('#customCheck2').is(":checked")) {
        mydata["procurement"] = 1;
    } else {
        mydata["procurement"] = 0;
    }
    if ($('#customCheck3').is(":checked")) {
        mydata["development"] = 1;
    } else {
        mydata["development"] = 0;
    }
    if ($('#customCheck4').is(":checked")) {
        mydata["customerServices"] = 1;
    } else {
        mydata["customerServices"] = 0;
    }
    if ($('#customCheck5').is(":checked")) {
        mydata["finance"] = 1;
    } else {
        mydata["finance"] = 0;
    }
    if ($('#customCheck6').is(":checked")) {
        mydata["sales"] = 1;
    } else {
        mydata["sales"] = 0;
    }
    if ($('#customCheck7').is(":checked")) {
        mydata["distribution"] = 1;
    } else {
        mydata["distribution"] = 0;
    }
    if ($('#customCheck8').is(":checked")) {
        mydata["manufacturing"] = 1;
    } else {
        mydata["manufacturing"] = 0;
    }
    if ($('#customCheck9').is(":checked")) {
        mydata["hrm"] = 1;
    } else {
        mydata["hrm"] = 0;
    }
    if ($('#customCheck10').is(":checked")) {
        mydata["dedicated"] = 1;
    } else {
        mydata["dedicated"] = 0;
    }
    if ($('#customCheck11').is(":checked")) {
        mydata["engineeredToOrder"] = 1;
    } else {
        mydata["engineeredToOrder"] = 0;
    }
    if ($('#customCheck12').is(":checked")) {
        mydata["customised"] = 1;
    } else {
        mydata["customised"] = 0;
    }
    if ($('#customCheck13').is(":checked")) {
        mydata["assemblies"] = 1;
    } else {
        mydata["assemblies"] = 0;
    }
    if ($('#customCheck14').is(":checked")) {
        mydata["furtherProcessing"] = 1;
    } else {
        mydata["furtherProcessing"] = 0;
    }
    if ($('#customCheck15').is(":checked")) {
        mydata["massProduced"] = 1;
    } else {
        mydata["massProduced"] = 0;
    }
    if ($('#customCheck16').is(":checked")) {
        mydata["massCustomised"] = 1;
    } else {
        mydata["massCustomised"] = 0;
    }
    if ($('#customCheck17').is(":checked")) {
        mydata["modular"] = 1;
    } else {
        mydata["modular"] = 0;
    }
    if ($('#customCheck18').is(":checked")) {
        mydata["consumerGoods"] = 1;
    } else {
        mydata["consumerGoods"] = 0;
    }
    mydata["directConsumers"] = $('input[name=prod11]:checked').val();
    if (!mydata["directConsumers"])
        mydata["directConsumers"] = 0;

    mydata["directOem"] = $('input[name=prod22]:checked').val();
    if (!mydata["directOem"])
        mydata["directOem"] = 0;

    mydata["moreProcessing"] = $('input[name=prod33]:checked').val();
    if (!mydata["moreProcessing"])
        mydata["moreProcessing"] = 0;

    mydata["retailers"] = $('input[name=prod44]:checked').val();
    if (!mydata["retailers"])
        mydata["retailers"] = 0;

    mydata["distributors"] = $('input[name=prod55]:checked').val();
    if (!mydata["distributors"])
        mydata["distributors"] = 0;

    if ($('#customCheck23').is(":checked")) {
        mydata["kibs"] = 1;
    } else {
        mydata["kibs"] = 0;
    }
    if ($('#customCheck24').is(":checked")) {
        mydata["traditional"] = 1;
    } else {
        mydata["traditional"] = 0;
    }
    if ($('#customCheck25').is(":checked")) {
        mydata["consumerServices"] = 1;
    } else {
        mydata["consumerServices"] = 0;
    }
    if ($('#customCheck26').is(":checked")) {
        mydata["publicServices"] = 1;
    } else {
        mydata["publicServices"] = 0;
    }
    if ($('#customCheck27').is(":checked")) {
        mydata["nonProfit"] = 1;
    } else {
        mydata["nonProfit"] = 0;
    }

    //console.log(mydata);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step1";

    $.ajax({

        type: 'POST',

        url: url,

        data: {
            userName: mydata["userName"],
            userParent: mydata["userParent"],
            userAddress: mydata["userAddress"],
            userTelephone: mydata["userTelephone"],
            userFax: mydata["userFax"],
            userUrl: mydata["userUrl"],
            userNum: mydata["userNum"],
            userAppro: mydata["userAppro"],
            userYears: mydata["userYears"],
            userPortfolio: mydata["userPortfolio"],
            marketCK1: mydata["marketCK1"],
            marketCK2: mydata["marketCK2"],
            marketCK3: mydata["marketCK3"],
            marketCK4: mydata["marketCK4"],
            marketCK5: mydata["marketCK5"],
            marketOther: mydata["marketOther"],
            userExport: mydata["userExport"],
            userImport: mydata["userImport"],
            userContact: mydata["userContact"],
            userContactNo: mydata["userContactNo"],
            companyStatus: mydata["companyStatus"],
            companyStatusOther: mydata["companyStatusOther"],
            legalStructure: mydata["legalStructure"],
            bussinessStructure: mydata["bussinessStructure"],
            marketStructure: mydata["marketStructure"],
            userLocation: mydata["userLocation"],
            prodLine1: mydata["prodLine1"],
            prodLine2: mydata["prodLine2"],
            prodLine3: mydata["prodLine3"],
            services: mydata["services"],
            companyProdOther: mydata["companyProdOther"],
            marketing: mydata["marketing"],
            procurement: mydata["procurement"],
            development: mydata["development"],
            customerServices: mydata["customerServices"],
            finance: mydata["finance"],
            sales: mydata["sales"],
            distribution: mydata["distribution"],
            manufacturing: mydata["manufacturing"],
            hrm: mydata["hrm"],
            dedicated: mydata["dedicated"],
            engineeredToOrder: mydata["engineeredToOrder"],
            customised: mydata["customised"],
            assemblies: mydata["assemblies"],
            furtherProcessing: mydata["furtherProcessing"],
            massProduced: mydata["massProduced"],
            massCustomised: mydata["massCustomised"],
            modular: mydata["modular"],
            consumerGoods: mydata["consumerGoods"],
            directConsumers: mydata["directConsumers"],
            directOem: mydata["directOem"],
            moreProcessing: mydata["moreProcessing"],
            retailers: mydata["retailers"],
            distributors: mydata["distributors"],
            kibs: mydata["kibs"],
            traditional: mydata["traditional"],
            consumerServices: mydata["consumerServices"],
            publicServices: mydata["publicServices"],
            nonProfit: mydata["nonProfit"],

        },

        success: function(mymessage) {
            //alert(mymessage.success);
            $(".modal-body form").html("");
            var title = "Company Profile";
            $(".modal-title").text(title);
            var element = $('<div class="form-group ' + mymessage.background + '"><label class="col-form-label">' + mymessage.success + '</label></div>');
            $(".modal-body form").append(element);
            $(".modal-footer").hide();
            $('#myModal').modal('show');

        }

    });

    return false;
}

function audit_tool() {
    var question1 = $('input[name=question1]:checked').val();
    if (!question1)
        question1 = 0;

    var question2 = $('input[name=question2]:checked').val();
    if (!question2)
        question2 = 0;

    var question3 = $('input[name=question3]:checked').val();
    if (!question3)
        question3 = 0;

    var question4 = $('input[name=question4]:checked').val();
    if (!question4)
        question4 = 0;

    var question5 = $('input[name=question5]:checked').val();
    if (!question5)
        question5 = 0;

    var question6 = $('input[name=question6]:checked').val();
    if (!question6)
        question6 = 0;

    var question7 = $('input[name=question7]:checked').val();
    if (!question7)
        question7 = 0;

    var question8 = $('input[name=question8]:checked').val();
    if (!question8)
        question8 = 0;

    var question9 = $('input[name=question9]:checked').val();
    if (!question9)
        question9 = 0;

    var question10 = $('input[name=question10]:checked').val();
    if (!question10)
        question10 = 0;

    var question11 = $('input[name=question11]:checked').val();
    if (!question11)
        question11 = 0;

    var question12 = $('input[name=question12]:checked').val();
    if (!question12)
        question12 = 0;

    var question13 = $('input[name=question13]:checked').val();
    if (!question13)
        question13 = 0;

    var question14 = $('input[name=question14]:checked').val();
    if (!question14)
        question14 = 0;

    var question15 = $('input[name=question15]:checked').val();
    if (!question15)
        question15 = 0;

    var question16 = $('input[name=question16]:checked').val();
    if (!question16)
        question16 = 0;

    var question17 = $('input[name=question17]:checked').val();
    if (!question17)
        question17 = 0;

    var question18 = $('input[name=question18]:checked').val();
    if (!question18)
        question18 = 0;

    var question19 = $('input[name=question19]:checked').val();
    if (!question19)
        question19 = 0;

    var question20 = $('input[name=question20]:checked').val();
    if (!question20)
        question20 = 0;

    var question21 = $('input[name=question21]:checked').val();
    if (!question21)
        question21 = 0;

    var question22 = $('input[name=question22]:checked').val();
    if (!question22)
        question22 = 0;

    var question23 = $('input[name=question23]:checked').val();
    if (!question23)
        question23 = 0;

    total = parseInt(question1) + parseInt(question2) + parseInt(question3) + parseInt(question4) + parseInt(question5) + parseInt(question6) +
        parseInt(question7) + parseInt(question8) + parseInt(question9) + parseInt(question10) + parseInt(question11) + parseInt(question12) +
        parseInt(question13) + parseInt(question14) + parseInt(question15) + parseInt(question16) + parseInt(question17) + parseInt(question18) +
        parseInt(question19) + parseInt(question20) + parseInt(question21) + parseInt(question22) + parseInt(question23);

    indeuction = "";
    what_to_do = "";
    if (23 <= total && total <= 46) {
        indeuction = "YOU ARE DOING WELL";
        what_to_do = "DO NOT NEED TO DO MUCH BUT KEEP THE STRENGTH UP AND GOING";
    } else if (70 <= total && total <= 92) {
        indeuction = "THERE ARE AREAS OF VOLUNERABILITY,HENCE THE NEED FOR TAKING A CLOSER LOOK AT YOUR BUSINESS";
        what_to_do = "LOOK CLOSELY ATTHE SCORES YOU ACHIEVED FOR EACH SECTION;FIND OUT AREAS IN NEED OF ATTENTION WORK ON THOS AREAS IN A STRCUTURED WAY";
    } else if (92 < total && total <= 115) {
        indeuction = "CONSIDERABLE SCOPE FOR IMPROVING BUSINESS";
        what_to_do = "ATTEND ISSUES SERIOUSLY AND CONSIDER CHANGING THE WAY YOU DO BUSINESS";
    }


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step2";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            question1: question1,
            question2: question2,
            question3: question3,
            question4: question4,
            question5: question5,
            question6: question6,
            question7: question7,
            question8: question8,
            question9: question9,
            question10: question10,
            question11: question11,
            question12: question12,
            question13: question13,
            question14: question14,
            question15: question15,
            question16: question16,
            question17: question17,
            question18: question18,
            question19: question19,
            question20: question20,
            question21: question21,
            question22: question22,
            question23: question23,


        },

        success: function(mymessage) {
            /*$(".modal-body form").html("");
             var title="OUTCOME ANALYSIS";
             $(".modal-title").text(title);
             var element=$('<div class="form-group"><label class="col-form-label">Score:</label><span class="form-control">'+total+'</span></div>');
             $(".modal-body form").append(element);

             var element_induction=$('<div class="form-group"><label class="col-form-label">Induction:</label><span class="form-control">'+indeuction+'</span></div>');
             $(".modal-body form").append(element_induction);

             var element_to_do=$('<div class="form-group"><label class="col-form-label">What To Do:</label><span class="form-control">'+what_to_do+'</span></div>');
             $(".modal-body form").append(element_to_do);*/

            /*This is to diplay the div of outcomes analysis */
            /*$(".myDialog").css('display', 'block');
            $(".myDialog").addClass('animated fadeInLeft');*/
            if (mymessage.background == "bg-danger") {
                $(".modal-body form").html("");
                var title = "OUTCOME ANALYSIS";
                $(".modal-title").text(title);
                var element = $('<div class="form-group ' + mymessage.background + '"><label class="col-form-label">' + mymessage.success + '</label></div>');
                $(".modal-body form").append(element);
                $(".modal-footer").hide();
                $('#myModal').modal('show');
            } else {
                $("#scoreInput").val(total);
                $("#inductionInput").val(indeuction);
                $("#toDoInput").val(what_to_do);
                $(".myDialog").css('display', 'block');
                $(".myDialog").addClass('animated fadeInLeft');
            }

        }

    });

    return false;


}

function leadership() {
    var count = $("#count").val();
    var factor = [];
    var attractive = [];
    var sector = [];
    var effort = [];
    var position = [];
    var comment = [];
    var total;
    var prog_sector;
    var prog_attractive;
    var prog_effort;
    var prog_position;
    for (var i = 1; i <= count; i++) {
        if ($('[name=factor' + i + ']').length) {
            factor.push($('[name=factor' + i + ']').val());
            attractive.push($('[name=x' + i + ']').val());
            sector.push($('[name=y' + i + ']').val());
            effort.push($('[name=z' + i + ']').val());
            position.push($('[name=k' + i + ']').val());
            comment.push($('[name=comment' + i + ']').val());

            total = parseInt($('[name=x' + i + ']').val()) + parseInt($('[name=y' + i + ']').val()) +
                parseInt($('[name=z' + i + ']').val()) + parseInt($('[name=k' + i + ']').val());
            prog_sector = (parseInt($('[name=x' + i + ']').val()) / total) * 100;
            prog_attractive = (parseInt($('[name=y' + i + ']').val()) / total) * 100;
            prog_effort = (parseInt($('[name=z' + i + ']').val()) / total) * 100;
            prog_position = (parseInt($('[name=k' + i + ']').val()) / total) * 100;
            $('#prog_sector' + i).attr("style", "width:" + prog_sector + "%");
            $('#prog_attractive' + i).attr("style", "width:" + prog_attractive + "%");
            $('#prog_effort' + i).attr("style", "width:" + prog_effort + "%");
            $('#prog_position' + i).attr("style", "width:" + prog_position + "%");
            $('#prog_sector' + i).text($('[name=x' + i + ']').val());
            $('#prog_attractive' + i).text($('[name=y' + i + ']').val());
            $('#prog_effort' + i).text($('[name=z' + i + ']').val());
            $('#prog_position' + i).text($('[name=k' + i + ']').val());


        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step3";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            sector: sector,
            attractive: attractive,
            effort: effort,
            position: position,
            comment: comment,
            count: count,



        },

        success: function(mymessage) {
            $(".hideMe").css('display', 'table-cell');
            $(".modal-body form").html("");
            var title = "Industry LeaderShip";
            $(".modal-title").text(title);
            var element = $('<div class="form-group ' + mymessage.background + '"><label class="col-form-label">' + mymessage.success + '</label></div>');
            $(".modal-body form").append(element);
            $(".modal-footer").hide();
            $('#myModal').modal('show');


        }

    });

    return false;

}

function remove_label(label) {
    myChart1.data.datasets[0].data.splice(label, 1);

    myChart1.data.datasets[1].data.splice(label, 1);
    myChart1.data.datasets[2].data.splice(label, 1);
    myChart1.data.datasets[3].data.splice(label, 1);
    myChart1.data.labels.splice(label, 1);
    myChart1.update();

}

function update_label(label, datast, value) {
    myChart1.data.datasets[datast].data[label] = value;
    myChart1.update();

}

function add_label(label) {
    myChart1.config.data.labels.push(label);
    myChart1.config.data.datasets[0].data.push(1);
    myChart1.config.data.datasets[1].data.push(1);
    myChart1.config.data.datasets[2].data.push(5);
    myChart1.config.data.datasets[3].data.push(1);

    myChart1.update();

}
$(document).on("change", ".dataset", function() {
    var label = $(this).parent().parent().index();
    var datast = $(this).attr("dataset");
    var value = $(this).val();
    update_label(label, datast, value);
});
$(document).on("keyup", ".factors .dynamicArea", function() {
    var index = $(this).parent().parent().index();
    myChart1.data.labels[index] = $(this).val();
    myChart1.update();
});

/*$(document).on("keyup",".comments",function() {
    var value=$(this).val().trim();
    $(this).attr("title",value);
});*/