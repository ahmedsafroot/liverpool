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
                        <img src="{{ asset('public/images/logo.png')}}"
                        class="rounded float-left mt-4" alt="logo"
                            width="70%">
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
    
            <!--Container for questions and ADs-->
            <div class="container">
                <div class="row questionsRow">
                    <div class="col-12 col-sm-12">
                        <form id="submitForm">
                            {!! csrf_field() !!}

                         @include('company_details')
                         @include('aduit_tools')
                         @include('industry_leadership')
                        </form>
                        <!--parent col section of tabs-->
                    </div>
    
                    <!--this div is just for manage responsive-->
                    <div class="col-md-1"></div>
    
                    <!--ADs section-->
                    <!--<div class="col-md-4 col-xs-12">
                       
                        <img width="100%" src="" alt="ADs"
                        class="mb-3">
                        <img width="100%" src="" alt="ADs">
                    </div>-->
                    <!--parent row-->
                </div>
                <!--parent container-->
            </div>
    
    
            <!--Indecators-->
           <!-- <div style="text-align:center; margin-right: 36% !important;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>-->
            <!--Footer-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card-footer">
                            @Liverpool.com
                        </div>
                    </div>
                </div>
            </div>
    
    
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New
                                message</h5>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
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
            var APP_URL = {!! json_encode(url('/')) !!};
        </script>
        <script src="{{asset('public/js/profile.js')}}"></script>
        <script>
            $(document).ready(function() {
        
                $(".add-more").click(function(e) {
                    e.preventDefault();
                    var count=$("#count").val();
                    count=parseInt(count)+1;
                    $("#count").val(count);
                    var getLastChild = $("#example tr").last().attr('id');
                    var splitLastChild = getLastChild.split("field");
                    var myNext = splitLastChild[1];
                    console.log("getLastChild", myNext);
                    var next = Number(myNext);
                    var addto = "#field" + next;
                    next = next + 1;
                    var addRemove = "#delete-td" + (next);
                    var markup = `<tr id="field${next}">
                                            <th scope="row" class="tableH">
                                                <textarea type="text" rows="4" cols="15" class="form-control dynamicArea" name="factor${next}"></textarea>
                                            </th>
                                            <td><select name='x${next}'>
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="4">5</option>
                                                    </select></td>
                                            <td><select name='y${next}'>
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="4">5</option>
                                                    </select></td>
                                            <td><select name='z${next}'>
                                                      
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select></td>
                                            <td><select name='k${next}'>
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                   
                                                    </select></td>
                                                    <td scope="row" class="tableH">
                                                        <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment${next}"></textarea>
                                                    </td>
                                                    <td class="hideMe">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                                            aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector${next}"></div>
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive${next}"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort${next}"></div>
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100" id="prog_position${next}"></div>
                                                    </div>
                                                </td>
                                            
                                                    <td id='delete-td${next}'>
                                                    </td>
        
                                        </tr>`
                    var newIn = markup;
                    var newInput = $(newIn);
                    var removeBtn = '<button id="remove' + next + '" class="btn remove-me" >delete</button></div><div id="delete-td">';
                    var removeButton = $(removeBtn);
                    $(addto).after(newInput);
                    $(addRemove).append(removeButton);
                    $('.remove-me').click(function(e, next) {
                        e.preventDefault();
                        var fieldNum = 0;
                        if (myNext > 9) {
                            fieldNum = this.id.slice(-2);
                        } else {
                            fieldNum = this.id.slice(-1);
                        }
        
                        console.log("fieldNum", fieldNum);
                        var fieldID = "#field" + fieldNum;
                        console.log("fieldIDfieldID", fieldID);
                        $(this).remove();
                        $(fieldID).remove();
                    });
                });
        
            });
        
            function deleteRow(id) {
                var fieldNum = id;
                console.log("fieldNumkkk", fieldNum);
                var fieldID = "#field" + fieldNum;
                console.log("fieldID", fieldID);
                $(fieldID).remove();
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
        
                //fixStepIndicator(n)
            }
        
            function nextPrev(n) {
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
        
             function viewInductionModal(n=0){
                            $(document).ready(function(){
                               $("#nextBtn1").click(function(){
                                   if(n==0)
                                   {
                                    debugger;
                                    $(".modal-footer").show();
                                    $(".modal-body form").html("");
                                    var title="OUTCOME ANALYSIS";
                                    $(".modal-title").text(title);
                                    var element=$('<div class="form-group"><label class="col-form-label">Score:</label><span class="form-control">'+total+'</span></div>');
                                    $(".modal-body form").append(element);
        
                                    var element_induction=$('<div class="form-group"><label class="col-form-label">Induction:</label><span class="form-control">'+indeuction+'</span></div>');
                                    $(".modal-body form").append(element_induction);
        
                                    var element_to_do=$('<div class="form-group"><label class="col-form-label">What To Do:</label><span class="form-control">'+what_to_do+'</span></div>');
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
        </script>
       
</html>