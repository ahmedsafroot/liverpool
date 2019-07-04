<!DOCTYPE html>
<html lang="en">

@include('header')

<body>
    <!--Container for top page (logo and title)-->
    <!-- This is a row for logo and company name-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-md-1"></div>
            <div class="col-10 col-sm-10 col-md-4">
                <img src="{{ asset('public/images/logo.png')}}" class="rounded float-left mt-4" alt="logo" width="70%">
            </div>
            <div class="col"></div>
        </div>
        <!-- This is a row for page title-->
        <div class="row title">
            <div class="col-12 col-sm-12">
                <h2>Agility Model</h2>
                <p>Liverpool Agility Center</p>
            </div>
        </div>
    </div>

    <!--Container for questions-->
    <form id="submitForm">
        {!! csrf_field() !!} 
        @include('company_details')
        @include('aduit_tools')
        @include('industry_leadership')
        @include('market_trends')    
        @include('customer_experience')     
        @include('turbulence_impact')
    </form>
    <!--Indecators-->
    <div style="text-align:center;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>


    <!--Footer-->
    <div class="col-12 col-sm-12">
        <div class="card-footer">
            @Liverpool.com
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="okBtnModal" type="button" class="btn
                            btn-primary" onclick="nextPrev(1)">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    var APP_URL = {!!json_encode(url('/')) !!};
</script>
<script src="{{asset('public/js/createCharts.js')}}"></script>
<script src="{{asset('public/js/profile.js')}}"></script>
<script>
    var me = this;
    $(document).ready(function() {

        $(".animated").addClass('fadeInUp');

      
    });


    /* This is for add new row in step3*/
    function deleteRow(elem, id,chart=0) {
        var label = $(elem).parent().parent().index();
        debugger;
        if(chart==0)
        {
        remove_label(label);
        }
        else
        {
        remove_label_trend(label);
        }
        var fieldNum = id;
        console.log("fieldNumkkk", fieldNum);
        var fieldID = "#field" + fieldNum;
        console.log("fieldID", fieldID);
        $(elem).closest("tr").remove();
    }
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        /*if (n == (x.length - 1)) {
          addSubmitClass();
        } else {
          document.getElementById("nextBtn").innerHTML = "&#8250;";
          removeSubmitClass()
        }*/
        //... and run a function that will display the correct step indicator:

        fixStepIndicator(n)
    }

    function nextPrev(n) {
        //to back the page opened at the top .
        $(".animated").addClass('fadeInUp');
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:

        if (n == 1 && false) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("submitForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    function viewInductionModal(n = 0) {
        $(document).ready(function() {
            $("#nextBtn1").click(function() {
                if (n == 0) {
                    $(".modal-footer").show();
                    $(".modal-body form").html("");
                    var title = "OUTCOME ANALYSIS";
                    $(".modal-title").text(title);
                    var element = $('<div class="form-group"><label class="col-form-label">Score:</label><span class="form-control">' + total + '</span></div>');
                    $(".modal-body form").append(element);

                    var element_induction = $('<div class="form-group"><label class="col-form-label">Induction:</label><span class="form-control">' + indeuction + '</span></div>');
                    $(".modal-body form").append(element_induction);

                    var element_to_do = $('<div class="form-group"><label class="col-form-label">What To Do:</label><span class="form-control">' + what_to_do + '</span></div>');
                    $(".modal-body form").append(element_to_do);
                }
                $("#myModal").modal();

            });
        });
        document.getElementById('okBtnModal').setAttribute("data-dismiss", "modal");
    }

    function addSubmitClass() {
        var nextBtn = document.getElementById("nextBtn");
        nextBtn.innerText = "Submit";
        var styleArr = ['btn', 'btn-sm', 'btn-primary', 'submitBtn'];
        nextBtn.classList.add(...styleArr);
    }

    function removeSubmitClass() {
        var nextBtn = document.getElementById("nextBtn");
        nextBtn.innerHTML = "&#8250;";
        var styleArr = ['btn-sm', 'btn-primary', 'submitBtn'];
        nextBtn.classList.remove(...styleArr);
        nextBtn.classList.add('nextBtn');
    }

    function showProgress() {
        $(".hideMe").css('display', 'table-cell');
    }

    function createTooltip(obj) {

        $(obj).after("<div id='tooltip'></p>");
    }

    function theFocus(obj) {
        var tooltip = document.getElementById("tooltip");
        tooltip.innerHTML = $(obj).val().trim();
        tooltip.style.display = "block";

    }

    function theBlur(obj) {
        $("#tooltip").remove();
    }

    function heh() {
        $(".myDialog").css('display', 'block');
        $(".myDialog").addClass('animated fadeInLeft');
    }

    function removeDialog() {
        $(".myDialog").css('display', 'none');
    }
    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>

</html>