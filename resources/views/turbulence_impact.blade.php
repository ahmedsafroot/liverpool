<div class="container-fluid">
    <!--second tab-->
    <div class="tab animated">
        <p class="sectionTitle mt-4">Turbulance Factors</p>
        <hr>
        <!--First Table-->
        <!--Factor One: SUPPLY CHAIN-->
        <div id="factor1" class="accordion mb-3 ml-2 mt-6 col-md-10">
            <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#SUPPLY1">
                    <a class="card-title">
                        Factor One: SUPPLY CHAIN
                    </a>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div id="SUPPLY1" class="card-body collapse" data-parent="#factor1">
                    <input type="hidden" value="1" id="count_BEA">
                    <table class="table table-striped col-md-7" id="supply_BEA">
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
                                <tr id="supply1">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply1_txtarea">Labour force
                                            size</textarea>
                                    </th>
                                    <td><select name='supply1_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply1_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply1_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply1_score" value="3">
                                    </td>
                                    <td><select name='supply1_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply1_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply1_total" value="3">
                                    </td>

                                    <td id='supply_delete-td1'>
                                        <button id="supply_remove1" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply2">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply2_txtarea">Training needs</textarea>
                                    </th>
                                    <td><select name='supply2_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply2_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply2_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply2_score" value="3">
                                    </td>
                                    <td><select name='supply2_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply2_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply2_total" value="3">
                                    </td>

                                    <td id='supply_delete-td2'>
                                        <button id="supply_remove2" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply3">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply3_txtarea">Multi-skilled personnel requirements</textarea>
                                    </th>
                                    <td><select name='supply3_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply3_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply3_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply3_score" value="3">
                                    </td>
                                    <td><select name='supply3_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply3_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply3_total" value="3">
                                    </td>

                                    <td id='supply_delete-td3'>
                                        <button id="supply_remove3" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply4">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply4_txtarea">Staff turnover (staff leaving over a period of time)</textarea>
                                    </th>
                                    <td><select name='supply4_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply4_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply4_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply4_score" value="3">
                                    </td>
                                    <td><select name='supply4_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply4_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply4_total" value="3">
                                    </td>

                                    <td id='supply_delete-td4'>
                                        <button id="supply_remove4" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply5">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply5_txtarea">Labour cost</textarea>
                                    </th>
                                    <td><select name='supply5_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply5_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply5_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply5_score" value="3">
                                    </td>
                                    <td><select name='supply5_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply5_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply5_total" value="3">
                                    </td>

                                    <td id='supply_delete-td5'>
                                        <button id="supply_remove5" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply6">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply6_txtarea">Labour force productivity</textarea>
                                    </th>
                                    <td><select name='supply6_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply6_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply6_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply6_score" value="3">
                                    </td>
                                    <td><select name='supply6_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply6_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply6_total" value="3">
                                    </td>

                                    <td id='supply_delete-td6'>
                                        <button id="supply_remove6" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply7">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply7_txtarea">Turnover per employee</textarea>
                                    </th>
                                    <td><select name='supply7_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply7_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply7_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply7_score" value="3">
                                    </td>
                                    <td><select name='supply7_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply7_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply7_total" value="3">
                                    </td>

                                    <td id='supply_delete-td7'>
                                        <button id="supply_remove7" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply8">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply8_txtarea">% of defects per employee</textarea>
                                    </th>
                                    <td><select name='supply8_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply8_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply8_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply8_score" value="3">
                                    </td>
                                    <td><select name='supply8_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply8_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply8_total" value="3">
                                    </td>

                                    <td id='supply_delete-td8'>
                                        <button id="supply_remove8" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply9">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply9_txtarea">Throughput ration to capacity</textarea>
                                    </th>
                                    <td><select name='supply9_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply9_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply9_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply9_score" value="3">
                                    </td>
                                    <td><select name='supply9_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply9_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply9_total" value="3">
                                    </td>

                                    <td id='supply_delete-td9'>
                                        <button id="supply_remove9" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply10">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply10_txtarea">Number of changes for process improvement</textarea>
                                    </th>
                                    <td><select name='supply10_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply10_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply10_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply10_score" value="3">
                                    </td>
                                    <td><select name='supply10_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply10_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply10_total" value="3">
                                    </td>

                                    <td id='supply_delete-td10'>
                                        <button id="supply_remove10" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply11">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply11_txtarea">Number of Machine Breakdowns</textarea>
                                    </th>
                                    <td><select name='supply11_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply11_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply11_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply11_score" value="3">
                                    </td>
                                    <td><select name='supply11_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply11_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply11_total" value="3">
                                    </td>

                                    <td id='supply_delete-td11'>
                                        <button id="supply_remove11" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply12">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply12_txtarea">Schedule changes</textarea>
                                    </th>
                                    <td><select name='supply12_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply12_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply12_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply12_score" value="3">
                                    </td>
                                    <td><select name='supply12_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply12_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply12_total" value="3">
                                    </td>

                                    <td id='supply_delete-td12'>
                                        <button id="supply_remove12" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply13">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply13_txtarea">% of occasions of stock out</textarea>
                                    </th>
                                    <td><select name='supply13_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply13_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply13_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply13_score" value="3">
                                    </td>
                                    <td><select name='supply13_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply13_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply13_total" value="3">
                                    </td>

                                    <td id='supply_delete-td13'>
                                        <button id="supply_remove13" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply14">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply14_txtarea">Packaging variation per product</textarea>
                                    </th>
                                    <td><select name='supply14_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply14_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply14_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply14_score" value="3">
                                    </td>
                                    <td><select name='supply14_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply14_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply14_total" value="3">
                                    </td>

                                    <td id='supply_delete-td14'>
                                        <button id="supply_remove14" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply15">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply15_txtarea">No of live jobs at any one time</textarea>
                                    </th>
                                    <td><select name='supply15_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply15_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply15_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply15_score" value="3">
                                    </td>
                                    <td><select name='supply15_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply15_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply15_total" value="3">
                                    </td>

                                    <td id='supply_delete-td15'>
                                        <button id="supply_remove15" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="supply16">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply16_txtarea">No of occasions incorrect stocks identified</textarea>
                                    </th>
                                    <td><select name='supply16_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply16_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply16_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply16_score" value="3">
                                    </td>
                                    <td><select name='supply16_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply16_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply16_total" value="3">
                                    </td>

                                    <td id='supply_delete-td16'>
                                        <button id="supply_remove16" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

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
                        Factor Two: DYNAMIC CUSTOMER REQUIREMENTS
                    </a>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div id="CUST_REQ" class="card-body collapse" data-parent="#factor2">
                    <input type="hidden" value="1" id="cust_req_BEA">
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
                                <tr id="cust_req1">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req1_txtarea">No of customers in the company’s customer base
                                            size</textarea>
                                    </th>
                                    <td><select name='cust_req1_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req1_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req1_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req1_score" value="3">
                                    </td>
                                    <td><select name='cust_req1_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req1_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req1_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td1'>
                                        <button id="cust_req_remove1" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req2">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req2_txtarea">No of customers % of customers dictating delivery time</textarea>
                                    </th>
                                    <td><select name='cust_req2_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req2_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req2_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req2_score" value="3">
                                    </td>
                                    <td><select name='cust_req2_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req2_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req2_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td2'>
                                        <button id="cust_req_remove2" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req3">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req3_txtarea">No of customers % of customers dictating batch size</textarea>
                                    </th>
                                    <td><select name='cust_req3_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req3_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req3_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req3_score" value="3">
                                    </td>
                                    <td><select name='cust_req3_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req3_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req3_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td3'>
                                        <button id="cust_req_remove3" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req4">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req4_txtarea">Share of sales to min/major customers</textarea>
                                    </th>
                                    <td><select name='cust_req4_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req4_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req4_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req4_score" value="3">
                                    </td>
                                    <td><select name='cust_req4_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req4_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req4_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td4'>
                                        <button id="cust_req_remove4" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req5">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req5_txtarea">% of customers you are the preferred supplier for</textarea>
                                    </th>
                                    <td><select name='cust_req5_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req5_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req5_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req5_score" value="3">
                                    </td>
                                    <td><select name='cust_req5_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req5_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req5_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td5'>
                                        <button id="cust_req_remove5" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req6">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req6_txtarea">Market utilisation (over-capacity hence power with customer vice versa)</textarea>
                                    </th>
                                    <td><select name='cust_req6_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req6_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req6_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req6_score" value="3">
                                    </td>
                                    <td><select name='cust_req6_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req6_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req6_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td6'>
                                        <button id="cust_req_remove6" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req7">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req7_txtarea">Customer loyalty (% of customers returning)</textarea>
                                    </th>
                                    <td><select name='cust_req7_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req7_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req7_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req7_score" value="3">
                                    </td>
                                    <td><select name='cust_req7_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req7_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req7_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td7'>
                                        <button id="cust_req_remove7" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req8">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req8_txtarea">% of cases price is negotiated by customers (customer influence)</textarea>
                                    </th>
                                    <td><select name='cust_req8_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req8_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req8_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req8_score" value="3">
                                    </td>
                                    <td><select name='cust_req8_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req8_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req8_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td8'>
                                        <button id="cust_req_remove8" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req9">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req9_txtarea">% of orders amended by customers</textarea>
                                    </th>
                                    <td><select name='cust_req9_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req9_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req9_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req9_score" value="3">
                                    </td>
                                    <td><select name='cust_req9_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req9_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req9_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td9'>
                                        <button id="cust_req_remove9" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req10">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req10_txtarea">% of orders cancelled</textarea>
                                    </th>
                                    <td><select name='cust_req10_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req10_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req10_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req10_score" value="3">
                                    </td>
                                    <td><select name='cust_req10_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req10_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req10_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td10'>
                                        <button id="cust_req_remove10" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req11">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req11_txtarea">% of orders lost due to price negotiation</textarea>
                                    </th>
                                    <td><select name='cust_req11_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req11_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req11_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req11_score" value="3">
                                    </td>
                                    <td><select name='cust_req11_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req11_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req11_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td11'>
                                        <button id="cust_req_remove11" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req12">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req12_txtarea">% of orders lost due to not meeting delivery time request</textarea>
                                    </th>
                                    <td><select name='cust_req12_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req12_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req12_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req12_score" value="3">
                                    </td>
                                    <td><select name='cust_req12_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req12_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req12_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td12'>
                                        <button id="cust_req_remove12" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req13">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req13_txtarea">Delayed customers payments</textarea>
                                    </th>
                                    <td><select name='cust_req13_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req13_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req13_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req13_score" value="3">
                                    </td>
                                    <td><select name='cust_req13_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req13_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req13_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td13'>
                                        <button id="cust_req_remove13" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req14">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req14_txtarea">Lead time requested by customers</textarea>
                                    </th>
                                    <td><select name='cust_req14_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req14_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req14_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req14_score" value="3">
                                    </td>
                                    <td><select name='cust_req14_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req14_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req14_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td14'>
                                        <button id="cust_req_remove14" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req15">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req15_txtarea">Customer specified suppliers (% of occasions)</textarea>
                                    </th>
                                    <td><select name='cust_req15_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req15_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req15_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req15_score" value="3">
                                    </td>
                                    <td><select name='cust_req15_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req15_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req15_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td15'>
                                        <button id="cust_req_remove15" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req16">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req16_txtarea">Customers specified materials</textarea>
                                    </th>
                                    <td><select name='cust_req16_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req16_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req16_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req16_score" value="3">
                                    </td>
                                    <td><select name='cust_req16_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req16_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req16_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td16'>
                                        <button id="cust_req_remove16" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req17">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req17_txtarea">Customers order volumes</textarea>
                                    </th>
                                    <td><select name='cust_req17_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req17_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req17_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req17_score" value="3">
                                    </td>
                                    <td><select name='cust_req17_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req17_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req17_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td17'>
                                        <button id="cust_req_remove17" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req18">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req18_txtarea">Customers order frequencies</textarea>
                                    </th>
                                    <td><select name='cust_req18_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req18_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req18_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req18_score" value="3">
                                    </td>
                                    <td><select name='cust_req18_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req18_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req18_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td18'>
                                        <button id="cust_req_remove18" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>


                                <tr id="cust_req19">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req19_txtarea">Online customer orders</textarea>
                                    </th>
                                    <td><select name='cust_req19_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req19_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req19_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req19_score" value="3">
                                    </td>
                                    <td><select name='cust_req19_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req19_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req19_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td19'>
                                        <button id="cust_req_remove19" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req20">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req20_txtarea">% of customers involved in design stage</textarea>
                                    </th>
                                    <td><select name='cust_req20_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req20_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req20_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req20_score" value="3">
                                    </td>
                                    <td><select name='cust_req20_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req20_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req20_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td20'>
                                        <button id="cust_req_remove20" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req21">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req21_txtarea">% of concept changes</textarea>
                                    </th>
                                    <td><select name='cust_req21_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req21_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req21_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req21_score" value="3">
                                    </td>
                                    <td><select name='cust_req21_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req21_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req21_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td21'>
                                        <button id="cust_req_remove21" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req22">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req22_txtarea">% of prototypes generated for customer evaluation</textarea>
                                    </th>
                                    <td><select name='cust_req22_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req22_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req22_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req22_score" value="3">
                                    </td>
                                    <td><select name='cust_req22_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req22_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req22_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td22'>
                                        <button id="cust_req_remove22" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req23">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req23_txtarea">% of products that are maintenance free</textarea>
                                    </th>
                                    <td><select name='cust_req23_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req23_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req23_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req23_score" value="3">
                                    </td>
                                    <td><select name='cust_req23_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req23_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req23_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td23'>
                                        <button id="cust_req_remove23" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req24">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req24_txtarea">% of products requiring installation/commissioning</textarea>
                                    </th>
                                    <td><select name='cust_req24_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req24_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req24_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req24_score" value="3">
                                    </td>
                                    <td><select name='cust_req24_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req24_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req24_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td24'>
                                        <button id="cust_req_remove24" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>


                                <tr id="cust_req25">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req25_txtarea">% of products that are reconfigurable</textarea>
                                    </th>
                                    <td><select name='cust_req25_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req25_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req25_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req25_score" value="3">
                                    </td>
                                    <td><select name='cust_req25_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req25_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req25_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td25'>
                                        <button id="cust_req_remove25" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>


                                <tr id="cust_req26">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req26_txtarea">% of bespoke products</textarea>
                                    </th>
                                    <td><select name='cust_req26_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req26_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req26_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req26_score" value="3">
                                    </td>
                                    <td><select name='cust_req26_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req26_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req26_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td26'>
                                        <button id="cust_req_remove26" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="cust_req27">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req27_txtarea">% of products dependent on external products</textarea>
                                    </th>
                                    <td><select name='cust_req27_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req27_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req27_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req27_score" value="3">
                                    </td>
                                    <td><select name='cust_req27_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req27_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req27_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td27'>
                                        <button id="cust_req_remove27" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>
                            </div>

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
        <!--RIVALRY/COMPTETION-->
        <div id="factor3" class="accordion mb-3 ml-2 mt-6 col-md-10">
            <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#RIVALRY">
                    <a class="card-title">
                        Factor Three: RIVALRY/COMPTETION
                    </a>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div id="RIVALRY" class="card-body collapse" data-parent="#factor3">
                    <input type="hidden" value="1" id="rivalry_BEA">
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
                                <tr id="rivalry1">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry1_txtarea">No of competitors
                                        </textarea>
                                    </th>
                                    <td><select name='rivalry1_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry1_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry1_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry1_score" value="3">
                                    </td>
                                    <td><select name='rivalry1_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry1_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry1_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td1'>
                                        <button id="rivalry_remove1" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry2">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry2_txtarea">No of Mergers/Acquisitions</textarea>
                                    </th>
                                    <td><select name='rivalry2_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry2_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry2_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry2_score" value="3">
                                    </td>
                                    <td><select name='rivalry2_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry2_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry2_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td2'>
                                        <button id="rivalry_remove2" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry3">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry3_txtarea">Market size</textarea>
                                    </th>
                                    <td><select name='rivalry3_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry3_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry3_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry3_score" value="3">
                                    </td>
                                    <td><select name='rivalry3_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry3_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry3_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td3'>
                                        <button id="rivalry_remove3" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry4">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry4_txtarea">No of customers</textarea>
                                    </th>
                                    <td><select name='rivalry4_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry4_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry4_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry4_score" value="3">
                                    </td>
                                    <td><select name='rivalry4_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry4_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry4_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td4'>
                                        <button id="rivalry_remove4" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry5">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry5_txtarea">Product pricing</textarea>
                                    </th>
                                    <td><select name='rivalry5_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry5_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry5_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry5_score" value="3">
                                    </td>
                                    <td><select name='rivalry5_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry5_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry5_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td5'>
                                        <button id="rivalry_remove5" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry6">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry6_txtarea">Average product pricing</textarea>
                                    </th>
                                    <td><select name='rivalry6_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry6_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry6_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry6_score" value="3">
                                    </td>
                                    <td><select name='rivalry6_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry6_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry6_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td6'>
                                        <button id="rivalry_remove6" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry7">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry7_txtarea">Number of new products to market and their associated services</textarea>
                                    </th>
                                    <td><select name='rivalry7_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry7_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry7_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry7_score" value="3">
                                    </td>
                                    <td><select name='rivalry7_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry7_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry7_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td7'>
                                        <button id="rivalry_remove7" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry8">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry8_txtarea">Average industry/sector time to market</textarea>
                                    </th>
                                    <td><select name='rivalry8_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry8_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry8_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry8_score" value="3">
                                    </td>
                                    <td><select name='rivalry8_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry8_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry8_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td8'>
                                        <button id="rivalry_remove8" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry9">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry9_txtarea">Promotional expenditure (gap with industry average)</textarea>
                                    </th>
                                    <td><select name='rivalry9_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry9_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry9_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry9_score" value="3">
                                    </td>
                                    <td><select name='rivalry9_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry9_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry9_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td9'>
                                        <button id="rivalry_remove9" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry10">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry10_txtarea">R&D expenditure within market</textarea>
                                    </th>
                                    <td><select name='rivalry10_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry10_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry10_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry10_score" value="3">
                                    </td>
                                    <td><select name='rivalry10_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry10_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry10_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td10'>
                                        <button id="rivalry_remove10" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry11">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry11_txtarea">New product success rate</textarea>
                                    </th>
                                    <td><select name='rivalry11_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry11_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry11_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry11_score" value="3">
                                    </td>
                                    <td><select name='rivalry11_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry11_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry11_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td11'>
                                        <button id="rivalry_remove11" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry12">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry12_txtarea">Market delivery time (Vs industry average)</textarea>
                                    </th>
                                    <td><select name='rivalry12_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry12_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry12_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry12_score" value="3">
                                    </td>
                                    <td><select name='rivalry12_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry12_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry12_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td12'>
                                        <button id="rivalry_remove12" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry13">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry13_txtarea">Number of markets targeted</textarea>
                                    </th>
                                    <td><select name='rivalry13_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry13_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry13_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry13_score" value="3">
                                    </td>
                                    <td><select name='rivalry13_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry13_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry13_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td13'>
                                        <button id="rivalry_remove13" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry14">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry14_txtarea">No of brand names company sells under</textarea>
                                    </th>
                                    <td><select name='rivalry14_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry14_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry14_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry14_score" value="3">
                                    </td>
                                    <td><select name='rivalry14_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry14_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry14_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td14'>
                                        <button id="rivalry_remove14" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry15">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry15_txtarea">No of first-to-market</textarea>
                                    </th>
                                    <td><select name='rivalry15_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry15_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry15_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry15_score" value="3">
                                    </td>
                                    <td><select name='rivalry15_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry15_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry15_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td15'>
                                        <button id="rivalry_remove15" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry16">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry16_txtarea">Life-cycle of products</textarea>
                                    </th>
                                    <td><select name='rivalry16_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry16_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry16_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry16_score" value="3">
                                    </td>
                                    <td><select name='rivalry16_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry16_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry16_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td16'>
                                        <button id="rivalry_remove16" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry17">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry17_txtarea">Sales at reduced costs</textarea>
                                    </th>
                                    <td><select name='rivalry17_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry17_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry17_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry17_score" value="3">
                                    </td>
                                    <td><select name='rivalry17_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry17_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry17_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td17'>
                                        <button id="rivalry_remove17" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="rivalry18">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry18_txtarea">Order winning services (No of occasions orders won due to services)</textarea>
                                    </th>
                                    <td><select name='rivalry18_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry18_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry18_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry18_score" value="3">
                                    </td>
                                    <td><select name='rivalry18_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry18_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry18_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td18'>
                                        <button id="rivalry_remove18" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

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
                        Factor Four: PURCHASING
                    </a>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div id="PURCHASING" class="card-body collapse" data-parent="#factor4">
                    <input type="hidden" value="1" id="purchasing_BEA">
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
                                <tr id="purchasing1">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing1_txtarea">No of active suppliers
                                        </textarea>
                                    </th>
                                    <td><select name='purchasing1_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing1_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing1_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing1_score" value="3">
                                    </td>
                                    <td><select name='purchasing1_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing1_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing1_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td1'>
                                        <button id="purchasing_remove1" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing2">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing2_txtarea">% of products with only ONE supplier</textarea>
                                    </th>
                                    <td><select name='purchasing2_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing2_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing2_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing2_score" value="3">
                                    </td>
                                    <td><select name='purchasing2_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing2_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing2_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td2'>
                                        <button id="purchasing_remove2" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing3">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing3_txtarea">Inward supplies defects (rate)</textarea>
                                    </th>
                                    <td><select name='purchasing3_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing3_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing3_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing3_score" value="3">
                                    </td>
                                    <td><select name='purchasing3_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing3_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing3_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td3'>
                                        <button id="purchasing_remove3" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing4">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing4_txtarea">% of suppliers involved in new product development</textarea>
                                    </th>
                                    <td><select name='purchasing4_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing4_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing4_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing4_score" value="3">
                                    </td>
                                    <td><select name='purchasing4_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing4_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing4_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td4'>
                                        <button id="purchasing_remove4" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing5">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing5_txtarea">% of preferred suppliers</textarea>
                                    </th>
                                    <td><select name='purchasing5_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing5_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing5_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing5_score" value="3">
                                    </td>
                                    <td><select name='purchasing5_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing5_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing5_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td5'>
                                        <button id="purchasing_remove5" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing6">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing6_txtarea">% of suppliers the company is the main customer</textarea>
                                    </th>
                                    <td><select name='purchasing6_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing6_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing6_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing6_score" value="3">
                                    </td>
                                    <td><select name='purchasing6_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing6_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing6_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td6'>
                                        <button id="purchasing_remove6" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing7">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing7_txtarea">% of suppliers’ prices negotiated</textarea>
                                    </th>
                                    <td><select name='purchasing7_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing7_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing7_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing7_score" value="3">
                                    </td>
                                    <td><select name='purchasing7_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing7_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing7_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td7'>
                                        <button id="purchasing_remove7" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing8">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing8_txtarea">Suppliers lead time</textarea>
                                    </th>
                                    <td><select name='purchasing8_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing8_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing8_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing8_score" value="3">
                                    </td>
                                    <td><select name='purchasing8_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing8_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing8_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td8'>
                                        <button id="purchasing_remove8" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing9">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing9_txtarea">% of suppliers’ delivery time negotiated</textarea>
                                    </th>
                                    <td><select name='purchasing9_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing9_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing9_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing9_score" value="3">
                                    </td>
                                    <td><select name='purchasing9_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing9_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing9_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td9'>
                                        <button id="purchasing_remove9" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="purchasing10">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing10_txtarea">New suppliers being sourced</textarea>
                                    </th>
                                    <td><select name='purchasing10_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing10_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing10_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing10_score" value="3">
                                    </td>
                                    <td><select name='purchasing10_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing10_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing10_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td10'>
                                        <button id="purchasing_remove10" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

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
                        Factor Five: TECHNOLOGICAL CHANGES
                    </a>
                    <i class="fa fa-angle-down"></i>
                </div>
                <div id="TechChanges" class="card-body collapse" data-parent="#factor5">
                    <input type="hidden" value="1" id="TechChanges_BEA">
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
                                <tr id="TechChanges1">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges1_txtarea">Product technology changes
                                        </textarea>
                                    </th>
                                    <td><select name='TechChanges1_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges1_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges1_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges1_score" value="3">
                                    </td>
                                    <td><select name='TechChanges1_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges1_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges1_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td1'>
                                        <button id="TechChanges_remove1" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="TechChanges2">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges2_txtarea">Process technology changes</textarea>
                                    </th>
                                    <td><select name='TechChanges2_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges2_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges2_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges2_score" value="3">
                                    </td>
                                    <td><select name='TechChanges2_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges2_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges2_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td2'>
                                        <button id="TechChanges_remove2" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="TechChanges3">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges3_txtarea">% turnover spent on technology change</textarea>
                                    </th>
                                    <td><select name='TechChanges3_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges3_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges3_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges3_score" value="3">
                                    </td>
                                    <td><select name='TechChanges3_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges3_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges3_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td3'>
                                        <button id="TechChanges_remove3" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="TechChanges4">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges4_txtarea">Technologies available to the company</textarea>
                                    </th>
                                    <td><select name='TechChanges4_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges4_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges4_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges4_score" value="3">
                                    </td>
                                    <td><select name='TechChanges4_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges4_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges4_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td4'>
                                        <button id="TechChanges_remove4" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

                                <tr id="TechChanges5">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges5_txtarea">Support services improvements</textarea>
                                    </th>
                                    <td><select name='TechChanges5_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges5_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges5_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges5_score" value="3">
                                    </td>
                                    <td><select name='TechChanges5_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges5_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges5_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td5'>
                                        <button id="TechChanges_remove5" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>

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
            <button type="button" class="btn btn-primary btn-md ml-4">Save</button>
        </div>


        <!--Next and prev-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <button type="button" class="btn btn-lg
                        nextBtn" id="nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">&#8250;</button>
                    <button type="button" class="btn btn-lg
                        prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">&#8249;</button>
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
        var count = $("#count_BEA").val();
        count = parseInt(count) + 1;
        $("#count_BEA").val(count);
        var getLastChild = $("#supply_BEA tr").last().attr('id');
        var splitLastChild = getLastChild.split("supply");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#supply" + next;
        next = next + 1;
        var addRemove = "#supply_delete-td" + (next);
        var markup = `<tr id="supply${next}">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="supply${next}_txtarea"></textarea>
                                    </th>
                                    <td><select name='supply${next}_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='supply${next}_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='supply${next}_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply${next}_score" value="3">
                                    </td>
                                    <td><select name='supply${next}_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='supply${next}_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="supply${next}_total" value="3">
                                    </td>

                                    <td id='supply_delete-td${next}'>
                                        <button id="supply_remove${next}" class="btn
                                            supply_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });

    $(".add-moreCustomer").click(function(e) {
        e.preventDefault();
        var count = $("#customerReq_BEA").val();
        count = parseInt(count) + 1;
        $("#customerReq_BEA").val(count);
        var getLastChild = $("#customerReq_BEA tr").last().attr('id');
        var splitLastChild = getLastChild.split("cust_req");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#cust_req" + next;
        next = next + 1;
        var addRemove = "#cust_req_delete-td" + (next);
        var markup = `<tr id="cust_req${next}">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="cust_req${next}_txtarea"></textarea>
                                    </th>
                                    <td><select name='cust_req${next}_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='cust_req${next}_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='cust_req${next}_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req${next}_score" value="3">
                                    </td>
                                    <td><select name='cust_req${next}_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='cust_req${next}_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="cust_req${next}_total" value="3">
                                    </td>

                                    <td id='cust_req_delete-td${next}'>
                                        <button id="cust_req_remove${next}" class="btn
                                            cust_req_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });

    $(".add-morerivalry").click(function(e) {
        e.preventDefault();
        var count = $("#rivalry_BEA").val();
        count = parseInt(count) + 1;
        $("#rivalry_BEA").val(count);
        var getLastChild = $("#rivalry_BEATable tr").last().attr('id');
        var splitLastChild = getLastChild.split("rivalry");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#rivalry" + next;
        next = next + 1;
        var addRemove = "#rivalry_delete-td" + (next);
        var markup = `<tr id="rivalry${next}">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="rivalry${next}_txtarea"></textarea>
                                    </th>
                                    <td><select name='rivalry${next}_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='rivalry${next}_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='rivalry${next}_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry${next}_score" value="3">
                                    </td>
                                    <td><select name='rivalry${next}_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='rivalry${next}_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="rivalry${next}_total" value="3">
                                    </td>

                                    <td id='rivalry_delete-td${next}'>
                                        <button id="rivalry_remove${next}" class="btn
                                            rivalry_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });

    $(".add-morePurchasing").click(function(e) {
        e.preventDefault();
        var count = $("#purchasing_BEA").val();
        count = parseInt(count) + 1;
        $("#purchasing_BEA").val(count);
        var getLastChild = $("#purchasing_BEATable tr").last().attr('id');
        var splitLastChild = getLastChild.split("purchasing");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#purchasing" + next;
        next = next + 1;
        var addRemove = "#purchasing_delete-td" + (next);
        var markup = `<tr id="purchasing${next}">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="purchasing${next}_txtarea"></textarea>
                                    </th>
                                    <td><select name='purchasing${next}_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='purchasing${next}_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='purchasing${next}_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing${next}_score" value="3">
                                    </td>
                                    <td><select name='purchasing${next}_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='purchasing${next}_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="purchasing${next}_total" value="3">
                                    </td>

                                    <td id='purchasing_delete-td${next}'>
                                        <button id="purchasing_remove${next}" class="btn
                                            purchasing_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });

    $(".add-moreTechChanges").click(function(e) {
        e.preventDefault();
        var count = $("#TechChanges_BEA").val();
        count = parseInt(count) + 1;
        $("#TechChanges_BEA").val(count);
        var getLastChild = $("#TechChanges_BEATable tr").last().attr('id');
        var splitLastChild = getLastChild.split("TechChanges");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#TechChanges" + next;
        next = next + 1;
        var addRemove = "#TechChanges_delete-td" + (next);
        var markup = `<tr id="TechChanges${next}">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control bea_txtarea" name="TechChanges${next}_txtarea"></textarea>
                                    </th>
                                    <td><select name='TechChanges${next}_timeLen' class="datasetTrend" datasetTrend="0">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                                    <td><select name='TechChanges${next}_increase' class="datasetTrend" datasetTrend="1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select></td>
                                    <td><select name='TechChanges${next}_frequency' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges${next}_score" value="3">
                                    </td>
                                    <td><select name='TechChanges${next}_threat' class="datasetTrend" datasetTrend="2">

                                            <option value="1">Threat</option>
                                            <option value="2">Opportunity</option>
                                        </select></td>
                                    <td><select name='TechChanges${next}_Severity' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                    <td>
                                        <input type="text" readonly style="width:30px;" name="TechChanges${next}_total" value="3">
                                    </td>

                                    <td id='TechChanges_delete-td${next}'>
                                        <button id="TechChanges_remove${next}" class="btn
                                            TechChanges_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                    </td>
                                </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });
</script>