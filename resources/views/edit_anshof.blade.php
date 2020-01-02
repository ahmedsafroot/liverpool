<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
            <h2 class="step_title">GROWTH Direction(Step 5)</h2>
            <hr>
            <p class="descParagrah enlarge">
                    You will EXAMINE the DIRECTION for your company’s GROWTH and examine the potentials
            </p>
    
            <p class="sectionTitle mt-4">Instructions</p>
            <hr>
            <p class="descParagrah enlarge">Provide a score for each factor for its POTENTIAL; IMPORTANCE/URGENCY; RESOURCE REQUIREMENTS; POSSIBLE RETURN on INVESTMENT
    
                </p>
            
            <p class="sectionTitle mt-4">OUTCOME</p>
            <hr>
            <p class="descParagrah enlarge">PRIORITY Tactics for Growth will be identified, FEEDING into the action worksheets
    
                </p>
            <!--First Table-->
            <!--Market Penetration (Existing Products in Existing Markets/Customers)-->
            <div id="anshof1_factor1" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#anshof1">
                        <a class="card-title">
                            Market Penetration (Existing Products in Existing
                            Markets/Customers) </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="anshof1" class="card-body collapse" data-parent="#anshof1_factor1">
                    <input type="hidden" value="{{count($ansoffs_pens)}}" id="anshof1-input">
                        <table class="table table-striped col-md-7" id="anshof1-tabel">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Potential (High:3,Medium:2,Low:1,Nill:0)
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">IMPORTANCE/URGENCY
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">RESOURCE REQUIREMENTS
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">POSSIBLE RETURN on INVESTMENT
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Priority(1-40)
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="market_penetration">
                                    @if(isset($ansoffs_pens) && count($ansoffs_pens)>0)
                                    @for($i=0;$i<count($ansoffs_pens);$i++)
                                    <tr id="{{'market_penetration'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'anshof_penetration'.($i+1)}}">{{$ansoffs_pens[$i]->factor}}</textarea>
                                        </th>
                                        <td><select name="{{'anshof_penetration_Potential_'.($i+1)}}" class="anshof_select">
                                                <option value="3" {{ ($ansoffs_pens[$i]->potential==3)? "selected=selected" : "" }}>3</option>
                                                <option value="2" {{ ($ansoffs_pens[$i]->potential==2)? "selected=selected" : "" }}>2</option>
                                                <option value="1" {{ ($ansoffs_pens[$i]->potential==1)? "selected=selected" : "" }}>1</option>
                                                <option value="0" {{ ($ansoffs_pens[$i]->potential==0)? "selected=selected" : "" }}>0</option>
    
                                                </select></td>
                                        <td><select name="{{'anshof_penetration_control_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_pens[$i]->control==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_pens[$i]->control==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_pens[$i]->control==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_pens[$i]->control==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_pens[$i]->control==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                        <td><select name="{{'anshof_penetration_urgency_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_pens[$i]->urgency==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_pens[$i]->urgency==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_pens[$i]->urgency==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_pens[$i]->urgency==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_pens[$i]->urgency==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
    
                                        <td><select name="{{'anshof_penetration_risk_'.($i+1)}}" class="anshof_select">
    
                                                <option value="1" {{ ($ansoffs_pens[$i]->risk==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_pens[$i]->risk==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_pens[$i]->risk==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_pens[$i]->risk==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_pens[$i]->risk==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                       <td>
                                       <input type="text" style="width:30px;" class="anshof_total" readonly value="{{($ansoffs_pens[$i]->potential+$ansoffs_pens[$i]->control+$ansoffs_pens[$i]->urgency+$ansoffs_pens[$i]->risk)}}" name="{{'market_penetration-td'.($i+1)}}">
                                        </td>
    
    
                                        <td id="{{'market_penetration-td'.($i+1)}}">
                                            <button id="{{'market_penetration_remove'.($i+1)}}" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn
                                    add-market_penetration" type="button">add
                                    other
                                    factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <!--Second Table-->
            <!--Market Development (Existing Products in New Markets/Customers)-->
            <div id="anshof_factor2" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#anshof2">
                        <a class="card-title">
                                Market Development (Existing Products in New
                                Markets/Customers)</a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="anshof2" class="card-body collapse" data-parent="#anshof_factor2">
                    <input type="hidden" value="{{count($ansoffs_devs)}}" id="anshof2-input">
                        <table class="table table-striped col-md-7" id="anshof2-tabel">
                            <thead>
                                    <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="tableH supplyWidth">Potential (High:3,Medium:2,Low:1,Nill:0)
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">IMPORTANCE/URGENCY
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">RESOURCE REQUIREMENTS
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">POSSIBLE RETURN on INVESTMENT
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority(1-40)
                                        </tr>
                            </thead>
    
                            <tbody>
                                <div id="market_development">

                                    @if(isset($ansoffs_devs) && count($ansoffs_devs)>0)
                                    @for($i=0;$i<count($ansoffs_devs);$i++)
                                    <tr id="{{'market_development'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'anshof_development'.($i+1)}}">{{$ansoffs_devs[$i]->factor}}</textarea>
                                        </th>
                                        <td><select name="{{'anshof_development_Potential_'.($i+1)}}" class="anshof_select">
                                                <option value="3" {{ ($ansoffs_devs[$i]->potential==3)? "selected=selected" : "" }}>3</option>
                                                <option value="2" {{ ($ansoffs_devs[$i]->potential==2)? "selected=selected" : "" }}>2</option>
                                                <option value="1" {{ ($ansoffs_devs[$i]->potential==1)? "selected=selected" : "" }}>1</option>
                                                <option value="0" {{ ($ansoffs_devs[$i]->potential==0)? "selected=selected" : "" }}>0</option>
    
                                                </select></td>
                                        <td><select name="{{'anshof_development_control_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_devs[$i]->control==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_devs[$i]->control==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_devs[$i]->control==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_devs[$i]->control==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_devs[$i]->control==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                        <td><select name="{{'anshof_development_urgency_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_devs[$i]->urgency==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_devs[$i]->urgency==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_devs[$i]->urgency==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_devs[$i]->urgency==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_devs[$i]->urgency==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
    
                                        <td><select name="{{'anshof_development_risk_'.($i+1)}}" class="anshof_select">
    
                                                <option value="1" {{ ($ansoffs_devs[$i]->risk==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_devs[$i]->risk==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_devs[$i]->risk==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_devs[$i]->risk==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_devs[$i]->risk==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                       <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="{{($ansoffs_devs[$i]->potential+$ansoffs_devs[$i]->control+$ansoffs_devs[$i]->urgency+$ansoffs_devs[$i]->risk)}}" name="{{'attract-td'.($i+1)}}">
                                        </td>
    
    
                                        <td id="{{'attract-td'.($i+1)}}">
                                            <button id="{{'attract_remove'.($i+1)}}" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn
                                        add-market_development" type="button">add
                                        other
                                        factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <!--Third Table-->
            <!--Product/Service Development (New/Extended Products in Existing Markets/Customers)-->
            <div id="anshof_factor3" class="accordion mb-3 ml-2 mt-6
                        col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#anshof3">
                        <a class="card-title">
                                    Product/Service Development (New/Extended
                                    Products in Existing Markets/Customers)</a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="anshof3" class="card-body collapse" data-parent="#anshof_factor3">
                    <input type="hidden" value="{{count($ansoffs_services)}}" id="anshof3-input">
                        <table class="table table-striped col-md-7" id="anshof3-tabel">
                            <thead>
                                    <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="tableH supplyWidth">Potential (High:3,Medium:2,Low:1,Nill:0)
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">IMPORTANCE/URGENCY
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">RESOURCE REQUIREMENTS
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">POSSIBLE RETURN on INVESTMENT
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority(1-40)
                                        </tr>
                            </thead>
    
                            <tbody>
                                <div id="service_development">
 
                                    @if(isset($ansoffs_services) && count($ansoffs_services)>0)
                                    @for($i=0;$i<count($ansoffs_services);$i++)
                                    <tr id="{{'service_development'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'anshof_service'.($i+1)}}">{{$ansoffs_services[$i]->factor}}</textarea>
                                        </th>
                                        <td><select name="{{'anshof_service_Potential_'.($i+1)}}" class="anshof_select">
                                                <option value="3" {{ ($ansoffs_services[$i]->potential==3)? "selected=selected" : "" }}>3</option>
                                                <option value="2" {{ ($ansoffs_services[$i]->potential==2)? "selected=selected" : "" }}>2</option>
                                                <option value="1" {{ ($ansoffs_services[$i]->potential==1)? "selected=selected" : "" }}>1</option>
                                                <option value="0" {{ ($ansoffs_services[$i]->potential==0)? "selected=selected" : "" }}>0</option>
    
                                                </select></td>
                                        <td><select name="{{'anshof_service_control_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_services[$i]->control==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_services[$i]->control==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_services[$i]->control==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_services[$i]->control==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_services[$i]->control==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                        <td><select name="{{'anshof_service_urgency_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_services[$i]->urgency==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_services[$i]->urgency==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_services[$i]->urgency==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_services[$i]->urgency==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_services[$i]->urgency==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
    
                                        <td><select name="{{'anshof_service_risk_'.($i+1)}}" class="anshof_select">
    
                                                <option value="1" {{ ($ansoffs_services[$i]->risk==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_services[$i]->risk==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_services[$i]->risk==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_services[$i]->risk==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_services[$i]->risk==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                       <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="{{($ansoffs_services[$i]->potential+$ansoffs_services[$i]->control+$ansoffs_services[$i]->urgency+$ansoffs_services[$i]->risk)}}" name="{{'capability-td'.($i+1)}}">
                                        </td>
    
    
                                        <td id="{{'capability-td'.($i+1)}}">
                                            <button id="{{'capability_remove'.($i+1)}}" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
                                    
                                    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-service_development" type="button">add
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
            <!--Diversification (New/Extended Products in New Markets/Customers)-->
            <div id="anshof_factor4" class="accordion mb-3 ml-2 mt-6
                        col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#anshof4">
                        <a class="card-title">
                                Diversification (New/Extended Products in New Markets/Customers)</a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="anshof4" class="card-body collapse" data-parent="#anshof_factor4">
                    <input type="hidden" value="{{count($ansoffs_divs)}}" id="anshof4-input">
                        <table class="table table-striped col-md-7" id="anshof4-tabel">
                            <thead>
                                    <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="tableH supplyWidth">Potential (High:3,Medium:2,Low:1,Nill:0)
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">IMPORTANCE/URGENCY
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">RESOURCE REQUIREMENTS
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">POSSIBLE RETURN on INVESTMENT
                                            </th>
                                            <th scope="col" class="tableH supplyWidth">Priority(1-40)
                                        </tr>
                            </thead>
    
                            <tbody>
                                <div id="diversification">
                                    
                                    @if(isset($ansoffs_divs) && count($ansoffs_divs)>0)
                                    @for($i=0;$i<count($ansoffs_divs);$i++)
                                    <tr id="{{'diversification'.($i+1)}}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'anshof_diversification'.($i+1)}}">{{$ansoffs_divs[$i]->factor}}</textarea>
                                        </th>
                                        <td><select name="{{'anshof_diversification_Potential_'.($i+1)}}" class="anshof_select">
                                                <option value="3" {{ ($ansoffs_divs[$i]->potential==3)? "selected=selected" : "" }}>3</option>
                                                <option value="2" {{ ($ansoffs_divs[$i]->potential==2)? "selected=selected" : "" }}>2</option>
                                                <option value="1" {{ ($ansoffs_divs[$i]->potential==1)? "selected=selected" : "" }}>1</option>
                                                <option value="0" {{ ($ansoffs_divs[$i]->potential==0)? "selected=selected" : "" }}>0</option>
    
                                                </select></td>
                                        <td><select name="{{'anshof_diversification_control_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_divs[$i]->control==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_divs[$i]->control==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_divs[$i]->control==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_divs[$i]->control==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_divs[$i]->control==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                        <td><select name="{{'anshof_diversification_urgency_'.($i+1)}}" class="anshof_select">
                                                <option value="1" {{ ($ansoffs_divs[$i]->urgency==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_divs[$i]->urgency==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_divs[$i]->urgency==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_divs[$i]->urgency==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_divs[$i]->urgency==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
    
                                        <td><select name="{{'anshof_diversification_risk_'.($i+1)}}" class="anshof_select">
    
                                                <option value="1" {{ ($ansoffs_divs[$i]->risk==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($ansoffs_divs[$i]->risk==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($ansoffs_divs[$i]->risk==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($ansoffs_divs[$i]->risk==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($ansoffs_divs[$i]->risk==5)? "selected=selected" : "" }}>5</option>
                                                </select></td>
                                       <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="{{($ansoffs_divs[$i]->potential+$ansoffs_divs[$i]->control+$ansoffs_divs[$i]->urgency+$ansoffs_divs[$i]->risk)}}" name="{{'new-products-td'.($i+1)}}">
                                        </td>
    
    
                                        <td id="{{'new-products-td'.($i+1)}}">
                                            <button id="{{'new-products_remove'.($i+1)}}" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>
                                    @endfor
                                    @endif
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn
                                            add-diversification" type="button">add
                                            other
                                            factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-md
                                ml-4" onclick="ansoff()">Save</button>
            </div>
    
    
            <!--Next and prev-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <button type="button" class="btn btn-lg
                                        nextBtn" id="nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                        <button type="button" class="btn btn-lg
                                        prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
                    </div>
                </div>
            </div>
        </div>
        <!--second tab-->
    
        <!--container-->
    </div>
    
    
    <script>
        //add more supply factors
        $(".add-market_penetration").click(function(e) {
            e.preventDefault();
            var count = $("#anshof1-input").val();
            count = parseInt(count) + 1;
            $("#anshof1-input").val(count);
            var getLastChild = $("#anshof1-tabel tr").last().attr('id');
            var splitLastChild = getLastChild.split("market_penetration");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#market_penetration" + next;
            next = next + 1;
            var addRemove = "#market_penetration_removeRow-td" + (next);
            var markup = `  <tr id="market_penetration${next}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="anshof_penetration${next}"></textarea>
                                        </th>
                                        <td><select name='anshof_penetration_Potential_${next}' class="anshof_select">
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select></td>
                                        <td><select name='anshof_penetration_control_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                        <td><select name='anshof_penetration_urgency_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td><select name='anshof_penetration_risk_${next}' class="anshof_select">
    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="6" name="new-market${next}-td8">
                                        </td>
    
    
                                        <td id='new-market${next}-td9'>
                                            <button id="new-market${next}_remove1" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
            
        });
    
        $(".add-market_development").click(function(e) {
            e.preventDefault();
            var count = $("#anshof2-input").val();
            count = parseInt(count) + 1;
            $("#anshof2-input").val(count);
            var getLastChild = $("#anshof2-tabel tr").last().attr('id');
            var splitLastChild = getLastChild.split("market_development");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#market_development" + next;
            next = next + 1;
            var addRemove = "#market_development_removeRow-td" + (next);
            var markup = `  <tr id="market_development${next}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="anshof_development${next}"></textarea>
                                        </th>
                                        <td><select name='anshof_development_Potential_${next}' class="anshof_select">
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select></td>
                                        <td><select name='anshof_development_control_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                        <td><select name='anshof_development_urgency_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td><select name='anshof_development_risk_${next}' class="anshof_select">
    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                        <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="6" name="new-market${next}-td8">
                                        </td>
    
    
                                        <td id='new-market${next}-td9'>
                                            <button id="new-market${next}_remove1" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
            
        });
    
        $(".add-service_development").click(function(e) {
            e.preventDefault();
            var count = $("#anshof3-input").val();
            count = parseInt(count) + 1;
            $("#anshof3-input").val(count);
            var getLastChild = $("#anshof3-tabel tr").last().attr('id');
            var splitLastChild = getLastChild.split("service_development");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#service_development" + next;
            next = next + 1;
            var addRemove = "#service_development_removeRow-td" + (next);
            var markup = `  <tr id="service_development${next}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="anshof_service${next}"></textarea>
                                        </th>
                                        <td><select name='anshof_service_Potential_${next}' class="anshof_select">
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select></td>
                                        <td><select name='anshof_service_control_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                        <td><select name='anshof_service_urgency_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td><select name='anshof_service_risk_${next}' class="anshof_select">
    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="6" name="new-market${next}-td8">
                                        </td>
    
    
                                        <td id='new-market${next}-td9'>
                                            <button id="new-market${next}_remove1" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
            
        });
    
    
        $(".add-diversification").click(function(e) {
            e.preventDefault();
            var count = $("#anshof4-input").val();
            count = parseInt(count) + 1;
            $("#anshof4-input").val(count);
            var getLastChild = $("#anshof4-tabel tr").last().attr('id');
            var splitLastChild = getLastChild.split("diversification");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#diversification" + next;
            next = next + 1;
            var addRemove = "#diversification_removeRow-td" + (next);
            var markup = `  <tr id="diversification${next}">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="anshof_diversification${next}"></textarea>
                                        </th>
                                        <td><select name='anshof_diversification_Potential_${next}' class="anshof_select">
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select></td>
                                        <td><select name='anshof_diversification_control_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                        <td><select name='anshof_diversification_urgency_${next}' class="anshof_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td><select name='anshof_diversification_risk_${next}' class="anshof_select">
    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
    
                                        <td>
                                            <input type="text" style="width:30px;" class="anshof_total" readonly value="6" name="new-market${next}-td8">
                                        </td>
    
    
                                        <td id='new-market${next}-td9'>
                                            <button id="new-market${next}_remove1" class="btn removeRow">delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
            
        });
    </script>