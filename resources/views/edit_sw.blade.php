<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
            <h2 class="step_title">An Analysis of the company’s Strengths and Weaknesses in KEY areas(Step 3)
            </h2>
            <hr>
            <p class="descParagrah">Identify your strengths and weaknesses in terms of: Products; People; Processes; Operations; Organisation
            </p>

            <p class="sectionTitle mt-4">Instructions</p>
            <hr>
            <ol class="descParagrah enlarge">
                <li>In each section, choose the important factors and DELETE the rest (or ADD other factors you think are important to you)
                    </li>
                <li>EXPLAIN your strength AND/OR weakness for each factor, and how you assess yourself Vs your closest competitor
                    </li>
                <li>Priority: What is the priority of this factor for you to focus on?
                    </li>
                </ol>
            <p class="sectionTitle mt-4">OUTCOME</p>
            <hr>
            <p class="descParagrah">
                    The factors from this section will be used to IDENTIFY actions for improvement
            </p>
            <!--First Table-->
            <!--Factor One: SUPPLY CHAIN-->
            <div id="sw_factor1" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_SUPPLY1">
                        <a class="card-title">
                            Product
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_SUPPLY1" class="card-body collapse" data-parent="#sw_factor1">
                    <input type="hidden" value="{{count($sw_products)}}" id="sw_count_product">
                        <table class="table table-striped col-md-7" id="sw_products">
                            <thead>
                                <tr>
                                        <th scope="col">Factor</th>
                                        <th scope="col" class="tableH supplyWidth">Strengths
                                        </th>
                                        <th scope="col" class="tableH supplyWidth">Weaknesses
                                        </th>
                                        <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                                        </th>
                                        <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_supply">

                                    @if(isset($sw_products))
                                    @for($i=0;$i<count($sw_products);$i++)
                                    <tr id="{{'sw_products'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" name= "{{'sw_factor_prod'.($i+1)}}" class="dynamicArea fontSize" cols="20" rows="10" >{{$sw_products[$i]->factor}}</textarea>
                                        </th>
                                    <td><textarea class="dynamicArea fontSize" name="{{'sw_str_prod'.($i+1)}}" cols="20" rows="10"   cols="20" rows="10">{{$sw_products[$i]->strengths}}</textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_weak_prod'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_products[$i]->weaknesses}}</textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_comm_prod'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_products[$i]->comp}}</textarea></td>
                                        <td><select name="{{'sw_pro_prod'.($i+1)}}" class="sw_select">
                                                <option value="1" {{ ($sw_products[$i]->priority==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($sw_products[$i]->priority==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($sw_products[$i]->priority==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($sw_products[$i]->priority==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($sw_products[$i]->priority==5)? "selected=selected" : "" }}>5</option>
                                        </select></td>
    
                                        <td>
                                            <button  class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
                                      

    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="add_moreProduct" class="btn add-moreProduct" type="button">add other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Second Table-->
            <!--DYNAMIC CUSTOMER REQUIREMENTS-->
            <div id="sw_factor2" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_CUST_REQ">
                        <a class="card-title">
                                People
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_CUST_REQ" class="card-body collapse" data-parent="#sw_factor2">
                    <input type="hidden" value="{{count($sw_peoples)}}" id="sw_count_people">
                        <table class="table table-striped col-md-7" id="sw_peoples">
                            <thead>
                                    <tr>
                                            <th scope="col">Factor</th>
                                            <th scope="col" class="tableH supplyWidth">Strengths
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Weaknesses
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_cust_req">
                                    @if(isset($sw_peoples))
                                    @for($i=0;$i<count($sw_peoples);$i++)
                                    <tr id="{{'sw_peoples'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" name="{{'sw_factor_people'.($i+1)}}" class="dynamicArea fontSize" cols="20" rows="10" >{{$sw_peoples[$i]->factor}}</textarea>
                                        </th>
                                    <td><textarea class="dynamicArea fontSize" name="{{'sw_str_people'.($i+1)}}" cols="20" rows="10"   cols="20" rows="10">{{$sw_peoples[$i]->strengths}}</textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_weak_people'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_peoples[$i]->weaknesses}}</textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_comm_people'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_peoples[$i]->comp}}</textarea></td>
                                        <td><select name="{{'sw_pro_people'.($i+1)}}" class="sw_select">
                                                <option value="1" {{ ($sw_peoples[$i]->priority==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($sw_peoples[$i]->priority==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($sw_peoples[$i]->priority==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($sw_peoples[$i]->priority==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($sw_peoples[$i]->priority==5)? "selected=selected" : "" }}>5</option>
                                        </select></td>
    
                                        <td>
                                            <button  class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-morePeople" type="button">add other factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Third Table-->
            <!--RIVALRY/COMPTETION-->
            <div id="sw_factor3" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_RIVALRY">
                        <a class="card-title">
                            Process
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_RIVALRY" class="card-body collapse" data-parent="#sw_factor3">
                    <input type="hidden" value="{{count($sw_process)}}" id="sw_count_process">
                        <table class="table table-striped col-md-7" id="sw_process">
                            <thead>
                                    <tr>
                                            <th scope="col">Factor</th>
                                            <th scope="col" class="tableH supplyWidth">Strengths
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Weaknesses
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_rivalry">
                                      

                                        @if(isset($sw_process))
                                        @for($i=0;$i<count($sw_process);$i++)
                                        <tr id="{{'sw_process'.($i+1)}}">
                                            <th scope="row" class="tableH tru_factors">
                                                <textarea type="text" name= "{{'sw_factor_process'.($i+1)}}" class="dynamicArea fontSize" cols="20" rows="10" >{{$sw_process[$i]->factor}}</textarea>
                                            </th>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_str_process'.($i+1)}}" cols="20" rows="10"   cols="20" rows="10">{{$sw_process[$i]->strengths}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_weak_process'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_process[$i]->weaknesses}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_comm_process'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_process[$i]->comp}}</textarea></td>
                                            <td><select name="{{'sw_pro_process'.($i+1)}}" class="sw_select">
                                                    <option value="1" {{ ($sw_process[$i]->priority==1)? "selected=selected" : "" }}>1</option>
                                                    <option value="2" {{ ($sw_process[$i]->priority==2)? "selected=selected" : "" }}>2</option>
                                                    <option value="3" {{ ($sw_process[$i]->priority==3)? "selected=selected" : "" }}>3</option>
                                                    <option value="4" {{ ($sw_process[$i]->priority==4)? "selected=selected" : "" }}>4</option>
                                                    <option value="5" {{ ($sw_process[$i]->priority==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
        
                                            <td>
                                                <button  class="btn removeRow" >delete</button>
                                            </td>
                                        </tr>
                                        @endfor
                                        @endif
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreProcess" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Forth Table-->
            <!--PURCHASING-->
            <div id="sw_factor4" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_PURCHASING">
                        <a class="card-title">
                                Operation
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_PURCHASING" class="card-body collapse" data-parent="#sw_factor4">
                    <input type="hidden" value="{{count($sw_operation)}}" id="sw_count_operation">
                        <table class="table table-striped col-md-7" id="sw_operations">
                            <thead>
                                    <tr>
                                            <th scope="col">Factor</th>
                                            <th scope="col" class="tableH supplyWidth">Strengths
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Weaknesses
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_purchasing">
                                        @if(isset($sw_operation))
                                        @for($i=0;$i<count($sw_operation);$i++)
                                        <tr id="{{'sw_operations'.($i+1)}}">
                                            <th scope="row" class="tableH tru_factors">
                                                <textarea type="text" name= "{{'sw_factor_operation'.($i+1)}}" class="dynamicArea fontSize" cols="20" rows="10" >{{$sw_operation[$i]->factor}}</textarea>
                                            </th>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_str_operation'.($i+1)}}" cols="20" rows="10"   cols="20" rows="10">{{$sw_operation[$i]->strengths}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_weak_operation'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_operation[$i]->weaknesses}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_comm_operation'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_operation[$i]->comp}}</textarea></td>
                                            <td><select name="{{'sw_pro_operation'.($i+1)}}" class="sw_select">
                                                    <option value="1" {{ ($sw_operation[$i]->priority==1)? "selected=selected" : "" }}>1</option>
                                                    <option value="2" {{ ($sw_operation[$i]->priority==2)? "selected=selected" : "" }}>2</option>
                                                    <option value="3" {{ ($sw_operation[$i]->priority==3)? "selected=selected" : "" }}>3</option>
                                                    <option value="4" {{ ($sw_operation[$i]->priority==4)? "selected=selected" : "" }}>4</option>
                                                    <option value="5" {{ ($sw_operation[$i]->priority==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
        
                                            <td>
                                                <button  class="btn removeRow" >delete</button>
                                            </td>
                                        </tr>
                                        @endfor
                                        @endif
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreOperation" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Fifth Table-->
            <!--TECHNOLOGICAL CHANGES-->
            <div id="sw_factor5" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_TechChanges">
                        <a class="card-title">
                                Organisation
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_TechChanges" class="card-body collapse" data-parent="#sw_factor5">
                    <input type="hidden" value="{{count($sw_organisation)}}" id="sw_count_organ">
                        <table class="table table-striped col-md-7" id="sw_organs">
                            <thead>
                                    <tr>
                                            <th scope="col">Factor</th>
                                            <th scope="col" class="tableH supplyWidth">Strengths
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Weaknesses
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_TechChanges">
                                        

                                        @if(isset($sw_organisation))
                                        @for($i=0;$i<count($sw_organisation);$i++)
                                        <tr id="{{'sw_organs'.($i+1)}}">
                                            <th scope="row" class="tableH tru_factors">
                                                <textarea type="text" name= "{{'sw_factor_organ'.($i+1)}}" class="dynamicArea fontSize" cols="20" rows="10" >{{$sw_organisation[$i]->factor}}</textarea>
                                            </th>
                                        <td><textarea class="dynamicArea fontSize" name="{{'sw_str_organ'.($i+1)}}" cols="20" rows="10"   cols="20" rows="10">{{$sw_organisation[$i]->strengths}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_weak_organ'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_organisation[$i]->weaknesses}}</textarea></td>
                                            <td><textarea class="dynamicArea fontSize" name="{{'sw_comm_organ'.($i+1)}}" cols="20" rows="10"  cols="20" rows="10">{{$sw_organisation[$i]->comp}}</textarea></td>
                                            <td><select name="{{'sw_pro_organ'.($i+1)}}" class="sw_select">
                                                    <option value="1" {{ ($sw_organisation[$i]->priority==1)? "selected=selected" : "" }}>1</option>
                                                    <option value="2" {{ ($sw_organisation[$i]->priority==2)? "selected=selected" : "" }}>2</option>
                                                    <option value="3" {{ ($sw_organisation[$i]->priority==3)? "selected=selected" : "" }}>3</option>
                                                    <option value="4" {{ ($sw_organisation[$i]->priority==4)? "selected=selected" : "" }}>4</option>
                                                    <option value="5" {{ ($sw_organisation[$i]->priority==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
        
                                            <td>
                                                <button  class="btn removeRow" >delete</button>
                                            </td>
                                        </tr>
                                        @endfor
                                        @endif
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreOrgan" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
            <!--Save Data Section-->
            <div>
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="sw()">Save</button>
            </div>
    
    
            <!--Next and prev-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <button type="button" class="btn btn-lg
                            nextBtn" id="sw_nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                        <button type="button" class="btn btn-lg
                            prevBtn" id="sw_prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
                    </div>
                </div>
            </div>
        </div>
        <!--second tab-->
    
        <!--container-->
    </div>
    
    
    <script>
        //add more 
        $(".add-moreProduct").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_product").val();
            count = parseInt(count) + 1;
            $("#sw_count_product").val(count);
            var getLastChild = $("#sw_products tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_products");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_products" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_products${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_prod${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_prod${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_prod${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_prod${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_prod${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-morePeople").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_people").val();
            count = parseInt(count) + 1;
            $("#sw_count_people").val(count);
            var getLastChild = $("#sw_peoples tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_peoples");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_peoples" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_peoples${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_people${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_people${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_people${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_people${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_people${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreProcess").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_process").val();
            count = parseInt(count) + 1;
            $("#sw_count_process").val(count);
            var getLastChild = $("#sw_process tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_process");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_process" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_process${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_process${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_process${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_process${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_process${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_process${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreOperation").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_operation").val();
            count = parseInt(count) + 1;
            $("#sw_count_operation").val(count);
            var getLastChild = $("#sw_operations tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_operations");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_operations" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_operations${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_operation${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_operation${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_operation${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_operation${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_operation${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreOrgan").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_organ").val();
            count = parseInt(count) + 1;
            $("#sw_count_organ").val(count);
            var getLastChild = $("#sw_organs tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_organs");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_organs" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_organs${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_organ${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_organ${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_organ${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_organ${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_organ${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });
    
       
    </script>