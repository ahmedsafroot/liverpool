<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
                <h2 class="step_title">BUSINESS ENVIRONMENT UNCERTAINTY(Step 2-1)</h2>
                <div style="margin-left:5px">
                        <p class="descParagrah enlarge">YOU WILL IDENTIFY THE KEY FACTORS THAT MAY HAVE IMPACT ON THE COMPANY’S FUNCTION AND COMPETITIVENESS
                        </p>
                        <p style="font-weight:bold">THESE ARE BROKEN DOWN INTO FIVE AREAS: OPERATIONS; CUSTOMER/MARKETS; COMPETITION; SUPPLIERS/PURCHASING; TECHNOLOGY CHANGES
                        </p>
                        <hr><hr>
                        <p class="sectionTitle mt-4">Instructions</p>
                        <hr>
                        <p class="descParagrah">
                            <ol class="descParagrah enlarge">
                                <li>In each section choose the important factors, which will appear in the boxes
                                </li>
                                <li>
                                        SCORE in TWO parts:
                                        <ul>
                                            <li>STATE of the changes: LENGTH of the uncertainty factor; Is it increasing or decreasing; How often that occurs (frequency)
                                            </li>
                                            <li> Do you consider it as a THREAT or OPPORTUNITY? And HOW SEVERE you find it? 
                                            </li>
                                        </ul>
                                </li>
                            </ol>
                                
                        </p>
                        <hr><hr>
                        <p class="sectionTitle mt-4">OUTCOME</p>
                        <hr>
                        <p class="descParagrah enlarge">The factors from this section with HIGHER scores will be moved to section 4 after the SWOT ANALYSIS
                        </p>
        
                </div>
                <hr><hr>
                
            <!--First Table-->
            <!--Factor One: SUPPLY CHAIN-->
            <div id="factor1" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#SUPPLY1">
                        <a class="card-title">
                            Area One: OPERATIONS
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="SUPPLY1" class="card-body collapse" data-parent="#factor1">
                        <table class="table table-striped col-md-7" id="supply_BEAS">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Time length(Short:1, Medium:2, Long:3)</th>
                                    <th scope="col" class="tableH supplyWidth">Increasing(1) vs Decreasing(2)</th>
                                    <th scope="col" class="tableH supplyWidth">Frequency Cycles (Low:1, Medium:3, high:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Score</th>
                                    <th scope="col" class="tableH supplyWidth">Threat or Opportunity
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Severity(changes) (Low:1, High:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Total Score
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="supply">
                                    <?php $j=0;?>
                                    @for($i=0;$i<count($beas);$i++)
                                    @if($beas[$i]->type=="SUPPLY CHAIN")
                                    <tr id="{{'supply'.($j+1)}}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'supply'.($j+1).'_txtarea'}}">{{$beas[$i]->factor}}</textarea>
                                        </th>
                                    <td><select name="{{'supply'.($j+1).'_timeLen'}}" class="beaSelect" beaSelect="0">
    
                                                <option value="1" {{ ($beas[$i]->timeLenght==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->timeLenght==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->timeLenght==3)? "selected=selected" : "" }}>3</option>
                                            </select></td>
                                        <td><select name="{{'supply'.($j+1).'_increase'}}" class="beaSelect" beaSelect="1">
                                                <option value="1" {{ ($beas[$i]->inc_dec==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->inc_dec==2)? "selected=selected" : "" }}>2</option>
                                            </select></td>
                                        <td><select name="{{'supply'.($j+1).'_frequency'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->freq==1)? "selected=selected" : "" }}>1</option>
                                                <option value="3" {{ ($beas[$i]->freq==3)? "selected=selected" : "" }}>3</option>
                                                <option value="5" {{ ($beas[$i]->freq==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                        <input type="text" readonly style="width:30px;" name="{{'supply'.($j+1).'_score'}}" value="{{($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
                                        <td><select name="{{'supply'.($j+1).'_threat'}}" class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1" {{ ($beas[$i]->thread_oper==1)? "selected=selected" : "" }}>Threat</option>
                                                <option value="2" {{ ($beas[$i]->thread_oper==2)? "selected=selected" : "" }}>Opportunity</option>
                                            </select></td>
                                        <td><select name="{{'supply'.($j+1).'_Severity'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->sev==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->sev==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->sev==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($beas[$i]->sev==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($beas[$i]->sev==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="{{'supply'.($j+1).'_total'}}" class="total_score" value="{{$beas[$i]->sev*($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
    
                                        <td id="{{'supply_delete-td'.($j+1)}}">
                                            <button id="{{'supply_remove'.($j+1)}}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <?php $j++?>
                                    @endif
                                    @endfor

                                <input type="hidden" value="{{$j}}" id="count_supply">

                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-moreSupply" type="button">add
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
            <!--DYNAMIC CUSTOMER REQUIREMENTS-->
            <div id="factor2" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#CUST_REQ">
                        <a class="card-title">
                            Area Two: CUSTOMER/MARKETS
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="CUST_REQ" class="card-body collapse" data-parent="#factor2">
                        <table class="table table-striped col-md-7" id="customerReq_BEA">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Time length(Short:1, Medium:2, Long:3)</th>
                                    <th scope="col" class="tableH supplyWidth">Increasing(1) vs Decreasing(2)</th>
                                    <th scope="col" class="tableH supplyWidth">Frequency Cycles (Low:1, Medium:3, high:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Score</th>
                                    <th scope="col" class="tableH supplyWidth">Threat or Opportunity
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Severity(changes) (Low:1, High:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Total Score
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="cust_req">
                                    <?php $j=0;?>
                                    @for($i=0;$i<count($beas);$i++)
                                    @if($beas[$i]->type=="DYNAMIC CUSTOMER REQUIREMENTS")
                                    <tr id="{{'cust_req'.($j+1)}}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'cust_req'.($j+1).'_txtarea'}}">{{$beas[$i]->factor}}</textarea>
                                        </th>
                                    <td><select name="{{'cust_req'.($j+1).'_timeLen'}}" class="beaSelect" beaSelect="0">
    
                                                <option value="1" {{ ($beas[$i]->timeLenght==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->timeLenght==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->timeLenght==3)? "selected=selected" : "" }}>3</option>
                                            </select></td>
                                        <td><select name="{{'cust_req'.($j+1).'_increase'}}" class="beaSelect" beaSelect="1">
                                                <option value="1" {{ ($beas[$i]->inc_dec==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->inc_dec==2)? "selected=selected" : "" }}>2</option>
                                            </select></td>
                                        <td><select name="{{'cust_req'.($j+1).'_frequency'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->freq==1)? "selected=selected" : "" }}>1</option>
                                                <option value="3" {{ ($beas[$i]->freq==3)? "selected=selected" : "" }}>3</option>
                                                <option value="5" {{ ($beas[$i]->freq==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                        <input type="text" readonly style="width:30px;" name="{{'cust_req'.($j+1).'_score'}}" value="{{($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
                                        <td><select name="{{'cust_req'.($j+1).'_threat'}}" class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1" {{ ($beas[$i]->thread_oper==1)? "selected=selected" : "" }}>Threat</option>
                                                <option value="2" {{ ($beas[$i]->thread_oper==2)? "selected=selected" : "" }}>Opportunity</option>
                                            </select></td>
                                        <td><select name="{{'cust_req'.($j+1).'_Severity'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->sev==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->sev==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->sev==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($beas[$i]->sev==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($beas[$i]->sev==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="{{'cust_req'.($j+1).'_total'}}" class="total_score" value="{{$beas[$i]->sev*($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
    
                                        <td id="{{'cust_req_delete-td'.($j+1)}}">
                                            <button id="{{'cust_req_remove'.($j+1)}}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <?php $j++?>
                                    @endif
                                    @endfor

                                </div>
                                <input type="hidden" value="{{$j}}" id="count_req">
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-moreCustomer" type="button">add
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
            <!--RIVALRY/COMPETITION-->
            <div id="factor3" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#RIVALRY">
                        <a class="card-title">
                            Area Three: COMPETITION
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="RIVALRY" class="card-body collapse" data-parent="#factor3">
                        <table class="table table-striped col-md-7" id="rivalry_BEATable">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Time length(Short:1, Medium:2, Long:3)</th>
                                    <th scope="col" class="tableH supplyWidth">Increasing(1) vs Decreasing(2)</th>
                                    <th scope="col" class="tableH supplyWidth">Frequency Cycles (Low:1, Medium:3, high:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Score</th>
                                    <th scope="col" class="tableH supplyWidth">Threat or Opportunity
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Severity(changes) (Low:1, High:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Total Score
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="rivalry">
    
                                    <?php $j=0;?>
                                    @for($i=0;$i<count($beas);$i++)
                                    @if($beas[$i]->type=="RIVALRY/COMPTETION")
                                    <tr id="{{'rivalry'.($j+1)}}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'rivalry'.($j+1).'_txtarea'}}">{{$beas[$i]->factor}}</textarea>
                                        </th>
                                    <td><select name="{{'rivalry'.($j+1).'_timeLen'}}" class="beaSelect" beaSelect="0">
    
                                                <option value="1" {{ ($beas[$i]->timeLenght==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->timeLenght==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->timeLenght==3)? "selected=selected" : "" }}>3</option>
                                            </select></td>
                                        <td><select name="{{'rivalry'.($j+1).'_increase'}}" class="beaSelect" beaSelect="1">
                                                <option value="1" {{ ($beas[$i]->inc_dec==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->inc_dec==2)? "selected=selected" : "" }}>2</option>
                                            </select></td>
                                        <td><select name="{{'rivalry'.($j+1).'_frequency'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->freq==1)? "selected=selected" : "" }}>1</option>
                                                <option value="3" {{ ($beas[$i]->freq==3)? "selected=selected" : "" }}>3</option>
                                                <option value="5" {{ ($beas[$i]->freq==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                        <input type="text" readonly style="width:30px;" name="{{'rivalry'.($j+1).'_score'}}" value="{{($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
                                        <td><select name="{{'rivalry'.($j+1).'_threat'}}" class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1" {{ ($beas[$i]->thread_oper==1)? "selected=selected" : "" }}>Threat</option>
                                                <option value="2" {{ ($beas[$i]->thread_oper==2)? "selected=selected" : "" }}>Opportunity</option>
                                            </select></td>
                                        <td><select name="{{'rivalry'.($j+1).'_Severity'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->sev==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->sev==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->sev==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($beas[$i]->sev==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($beas[$i]->sev==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="{{'rivalry'.($j+1).'_total'}}" class="total_score" value="{{$beas[$i]->sev*($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
    
                                        <td id="{{'rivalry_delete-td'.($j+1)}}">
                                            <button id="{{'rivalry_remove'.($j+1)}}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <?php $j++?>
                                    @endif
                                    @endfor
                                <input type="hidden" value="{{$j}}" id="count_rivalry">

                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-morerivalry" type="button">add
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
            <div id="factor4" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#PURCHASING">
                        <a class="card-title">
                            Area Four: SUPPLIERS/PURCHASING
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="PURCHASING" class="card-body collapse" data-parent="#factor4">
                       
                        <table class="table table-striped col-md-7" id="purchasing_BEATable">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Time length(Short:1, Medium:2, Long:3)</th>
                                    <th scope="col" class="tableH supplyWidth">Increasing(1) vs Decreasing(2)</th>
                                    <th scope="col" class="tableH supplyWidth">Frequency Cycles (Low:1, Medium:3, high:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Score</th>
                                    <th scope="col" class="tableH supplyWidth">Threat or Opportunity
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Severity(changes) (Low:1, High:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Total Score
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="purchasing">
                                    
    
                                    <?php $j=0;?>
                                    @for($i=0;$i<count($beas);$i++)
                                    @if($beas[$i]->type=="PURCHASING")
                                    <tr id="{{'purchasing'.($j+1)}}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'purchasing'.($j+1).'_txtarea'}}">{{$beas[$i]->factor}}</textarea>
                                        </th>
                                    <td><select name="{{'purchasing'.($j+1).'_timeLen'}}" class="beaSelect" beaSelect="0">
    
                                                <option value="1" {{ ($beas[$i]->timeLenght==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->timeLenght==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->timeLenght==3)? "selected=selected" : "" }}>3</option>
                                            </select></td>
                                        <td><select name="{{'purchasing'.($j+1).'_increase'}}" class="beaSelect" beaSelect="1">
                                                <option value="1" {{ ($beas[$i]->inc_dec==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->inc_dec==2)? "selected=selected" : "" }}>2</option>
                                            </select></td>
                                        <td><select name="{{'purchasing'.($j+1).'_frequency'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->freq==1)? "selected=selected" : "" }}>1</option>
                                                <option value="3" {{ ($beas[$i]->freq==3)? "selected=selected" : "" }}>3</option>
                                                <option value="5" {{ ($beas[$i]->freq==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                        <input type="text" readonly style="width:30px;" name="{{'purchasing'.($j+1).'_score'}}" value="{{($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
                                        <td><select name="{{'purchasing'.($j+1).'_threat'}}" class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1" {{ ($beas[$i]->thread_oper==1)? "selected=selected" : "" }}>Threat</option>
                                                <option value="2" {{ ($beas[$i]->thread_oper==2)? "selected=selected" : "" }}>Opportunity</option>
                                            </select></td>
                                        <td><select name="{{'purchasing'.($j+1).'_Severity'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->sev==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->sev==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->sev==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($beas[$i]->sev==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($beas[$i]->sev==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="{{'purchasing'.($j+1).'_total'}}" class="total_score" value="{{$beas[$i]->sev*($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
    
                                        <td id="{{'purchasing_delete-td'.($j+1)}}">
                                            <button id="{{'purchasing_remove'.($j+1)}}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <?php $j++?>
                                    @endif
                                    @endfor
                                <input type="hidden" value="{{$j}}" id="count_purchasing">
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-morePurchasing" type="button">add
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
            <div id="factor5" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#TechChanges">
                        <a class="card-title">
                            Area Five: TECHNOLOGICAL CHANGES
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="TechChanges" class="card-body collapse" data-parent="#factor5">
                        
                        <table class="table table-striped col-md-7" id="TechChanges_BEATable">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH supplyWidth">Time length(Short:1, Medium:2, Long:3)</th>
                                    <th scope="col" class="tableH supplyWidth">Increasing(1) vs Decreasing(2)</th>
                                    <th scope="col" class="tableH supplyWidth">Frequency Cycles (Low:1, Medium:3, high:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Score</th>
                                    <th scope="col" class="tableH supplyWidth">Threat or Opportunity
                                    </th>
                                    <th scope="col" class="tableH supplyWidth">Severity(changes) (Low:1, High:5)</th>
                                    <th scope="col" class="tableH supplyWidth">Total Score
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="TechChanges">
                                   
                                    <?php $j=0;?>
                                    @for($i=0;$i<count($beas);$i++)
                                    @if($beas[$i]->type=="TECHNOLOGICAL CHANGES")
                                    <tr id="{{'TechChanges'.($j+1)}}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="{{'TechChanges'.($j+1).'_txtarea'}}">{{$beas[$i]->factor}}</textarea>
                                        </th>
                                    <td><select name="{{'TechChanges'.($j+1).'_timeLen'}}" class="beaSelect" beaSelect="0">
    
                                                <option value="1" {{ ($beas[$i]->timeLenght==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->timeLenght==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->timeLenght==3)? "selected=selected" : "" }}>3</option>
                                            </select></td>
                                        <td><select name="{{'TechChanges'.($j+1).'_increase'}}" class="beaSelect" beaSelect="1">
                                                <option value="1" {{ ($beas[$i]->inc_dec==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->inc_dec==2)? "selected=selected" : "" }}>2</option>
                                            </select></td>
                                        <td><select name="{{'TechChanges'.($j+1).'_frequency'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->freq==1)? "selected=selected" : "" }}>1</option>
                                                <option value="3" {{ ($beas[$i]->freq==3)? "selected=selected" : "" }}>3</option>
                                                <option value="5" {{ ($beas[$i]->freq==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                        <input type="text" readonly style="width:30px;" name="{{'TechChanges'.($j+1).'_score'}}" value="{{($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
                                        <td><select name="{{'TechChanges'.($j+1).'_threat'}}" class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1" {{ ($beas[$i]->thread_oper==1)? "selected=selected" : "" }}>Threat</option>
                                                <option value="2" {{ ($beas[$i]->thread_oper==2)? "selected=selected" : "" }}>Opportunity</option>
                                            </select></td>
                                        <td><select name="{{'TechChanges'.($j+1).'_Severity'}}" class="beaSelect" beaSelect="2">
                                                <option value="1" {{ ($beas[$i]->sev==1)? "selected=selected" : "" }}>1</option>
                                                <option value="2" {{ ($beas[$i]->sev==2)? "selected=selected" : "" }}>2</option>
                                                <option value="3" {{ ($beas[$i]->sev==3)? "selected=selected" : "" }}>3</option>
                                                <option value="4" {{ ($beas[$i]->sev==4)? "selected=selected" : "" }}>4</option>
                                                <option value="5" {{ ($beas[$i]->sev==5)? "selected=selected" : "" }}>5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="{{'TechChanges'.($j+1).'_total'}}" class="total_score" value="{{$beas[$i]->sev*($beas[$i]->timeLenght+$beas[$i]->inc_dec+$beas[$i]->freq)}}">
                                        </td>
    
                                        <td id="{{'TechChanges_delete-td'.($j+1)}}">
                                            <button id="{{'TechChanges_remove'.($j+1)}}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <?php $j++?>
                                    @endif
                                    @endfor
                                <input type="hidden" value="{{$j}}" id="count_tech">
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="supply_add" class="btn add-moreTechChanges" type="button">add
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
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="turbulence_impact()">Save</button>
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
        $(".add-moreSupply").click(function(e) {
            e.preventDefault();
            var count = $("#count_supply").val();
            count = parseInt(count) + 1;
            $("#count_supply").val(count);
            if(count>1)
            {
            var getLastChild = $("#supply_BEAS tr").last().attr('id');
            var splitLastChild = getLastChild.split("supply");
            var myNext = splitLastChild[1];
            }
            else
            {
                var myNext='0';  
            }

            var next = Number(myNext);
            var addto = "#supply" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="supply${next}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="supply${next}_txtarea"></textarea>
                                        </th>
                                        <td><select name='supply${next}_timeLen' class="beaSelect" beaSelect="0">
    
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select></td>
                                        <td><select name='supply${next}_increase' class="beaSelect" beaSelect="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select></td>
                                        <td><select name='supply${next}_frequency' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="supply${next}_score" value="3">
                                        </td>
                                        <td><select name='supply${next}_threat' class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1">Threat</option>
                                                <option value="2">Opportunity</option>
                                            </select></td>
                                        <td><select name='supply${next}_Severity' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="supply${next}_total"  class="total_score" value="3">
                                        </td>
    
                                        <td id='supply_delete-td${next}'>
                                            <button id="supply_remove${next}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);

            if(next>1)
            {
            $(addto).after(newInput);
            }
            else
            {
                $("#supply_BEAS tbody").append(newInput);
            }
    
        });
    
        $(".add-moreCustomer").click(function(e) {
            debugger;
            e.preventDefault();
            var count = $("#count_req").val();
            count = parseInt(count) + 1;
            $("#count_req").val(count);
            if(count>1)
            {
            var getLastChild = $("#customerReq_BEA tr").last().attr('id');
            var splitLastChild = getLastChild.split("cust_req");
            var myNext = splitLastChild[1];
            }
            else
            {
                var myNext='0';  
            }
            var next = Number(myNext);
            var addto = "#cust_req" + next;
            next = next + 1;
            var addRemove = "#cust_req_delete-td" + (next);
            var markup = `<tr id="cust_req${next}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="cust_req${next}_txtarea"></textarea>
                                        </th>
                                        <td><select name='cust_req${next}_timeLen' class="beaSelect" beaSelect="0">
    
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select></td>
                                        <td><select name='cust_req${next}_increase' class="beaSelect" beaSelect="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select></td>
                                        <td><select name='cust_req${next}_frequency' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="cust_req${next}_score" value="3">
                                        </td>
                                        <td><select name='cust_req${next}_threat' class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1">Threat</option>
                                                <option value="2">Opportunity</option>
                                            </select></td>
                                        <td><select name='cust_req${next}_Severity' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="cust_req${next}_total"  class="total_score" value="3">
                                        </td>
    
                                        <td id='cust_req_delete-td${next}'>
                                            <button id="cust_req_remove${next}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            if(next>1)
            {
            $(addto).after(newInput);
            }
            else
            {
                $("#customerReq_BEA tbody").append(newInput);
            }
    
        });
    
        $(".add-morerivalry").click(function(e) {
            e.preventDefault();
            var count = $("#count_rivalry").val();
            count = parseInt(count) + 1;
            $("#count_rivalry").val(count);
            if(count>1)
            {
            var getLastChild = $("#rivalry_BEATable tr").last().attr('id');
            var splitLastChild = getLastChild.split("rivalry");
            var myNext = splitLastChild[1];
            }
            else
            {
                var myNext='0';  
            }
           
            var next = Number(myNext);
            var addto = "#rivalry" + next;
            next = next + 1;
            var addRemove = "#rivalry_delete-td" + (next);
            var markup = `<tr id="rivalry${next}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="rivalry${next}_txtarea"></textarea>
                                        </th>
                                        <td><select name='rivalry${next}_timeLen' class="beaSelect" beaSelect="0">
    
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select></td>
                                        <td><select name='rivalry${next}_increase' class="beaSelect" beaSelect="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select></td>
                                        <td><select name='rivalry${next}_frequency' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="rivalry${next}_score" value="3">
                                        </td>
                                        <td><select name='rivalry${next}_threat' class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1">Threat</option>
                                                <option value="2">Opportunity</option>
                                            </select></td>
                                        <td><select name='rivalry${next}_Severity' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="rivalry${next}_total"  class="total_score" value="3">
                                        </td>
    
                                        <td id='rivalry_delete-td${next}'>
                                            <button id="rivalry_remove${next}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            if(next>1)
            {
            $(addto).after(newInput);
            }
            else
            {
                $("#rivalry_BEATable tbody").append(newInput);
            }
    
        });
    
        $(".add-morePurchasing").click(function(e) {
            e.preventDefault();
            var count = $("#count_purchasing").val();
            count = parseInt(count) + 1;
            $("#count_purchasing").val(count);
            if(count>1)
            {
            var getLastChild = $("#purchasing_BEATable tr").last().attr('id');
            var splitLastChild = getLastChild.split("purchasing");
            var myNext = splitLastChild[1];
            }
            else
            {
                var myNext='0';  
            }

            var next = Number(myNext);
            var addto = "#purchasing" + next;
            next = next + 1;
            var addRemove = "#purchasing_delete-td" + (next);
            var markup = `<tr id="purchasing${next}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="purchasing${next}_txtarea"></textarea>
                                        </th>
                                        <td><select name='purchasing${next}_timeLen' class="beaSelect" beaSelect="0">
    
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select></td>
                                        <td><select name='purchasing${next}_increase' class="beaSelect" beaSelect="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select></td>
                                        <td><select name='purchasing${next}_frequency' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="purchasing${next}_score" value="3">
                                        </td>
                                        <td><select name='purchasing${next}_threat' class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1">Threat</option>
                                                <option value="2">Opportunity</option>
                                            </select></td>
                                        <td><select name='purchasing${next}_Severity' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="purchasing${next}_total"  class="total_score" value="3">
                                        </td>
    
                                        <td id='purchasing_delete-td${next}'>
                                            <button id="purchasing_remove${next}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            if(next>1)
            {
            $(addto).after(newInput);
            }
            else
            {
                $("#purchasing_BEATable tbody").append(newInput);
            }
    
        });
    
        $(".add-moreTechChanges").click(function(e) {
            e.preventDefault();
            var count = $("#count_tech").val();
            count = parseInt(count) + 1;
            $("#count_tech").val(count);
            if(count>1)
            {
            var getLastChild = $("#TechChanges_BEATable tr").last().attr('id');
            var splitLastChild = getLastChild.split("TechChanges");
            var myNext = splitLastChild[1];
            }
            else
            {
                var myNext='0';  
            }

            var next = Number(myNext);
            var addto = "#TechChanges" + next;
            next = next + 1;
            var addRemove = "#TechChanges_delete-td" + (next);
            var markup = `<tr id="TechChanges${next}" style="display: table-row;">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" class="form-control bea_txtarea" name="TechChanges${next}_txtarea"></textarea>
                                        </th>
                                        <td><select name='TechChanges${next}_timeLen' class="beaSelect" beaSelect="0">
    
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select></td>
                                        <td><select name='TechChanges${next}_increase' class="beaSelect" beaSelect="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select></td>
                                        <td><select name='TechChanges${next}_frequency' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="TechChanges${next}_score" value="3">
                                        </td>
                                        <td><select name='TechChanges${next}_threat' class="threat_op beaSelect" beaSelect="2">
    
                                                <option value="1">Threat</option>
                                                <option value="2">Opportunity</option>
                                            </select></td>
                                        <td><select name='TechChanges${next}_Severity' class="beaSelect" beaSelect="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                        <td>
                                            <input type="text" readonly style="width:30px;" name="TechChanges${next}_total"  class="total_score" value="3">
                                        </td>
    
                                        <td id='TechChanges_delete-td${next}'>
                                            <button id="removeRow${next}" class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            if(next>1)
            {
            $(addto).after(newInput);
            }
            else
            {
                $("#TechChanges_BEATable tbody").append(newInput);
            }    
        });
    </script>