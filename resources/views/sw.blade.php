<div class="container-fluid">
    <!--second tab-->
    <div class="tab animated">
        <p class="sectionTitle mt-4">SW</p>
        <hr>
        <input type="hidden" value="1" id="sw_input">
        <div class="mb-3 ml-2 mt-6 col-md-10">
            <table class="table table-striped col-md-7" id="sw_tabel">
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
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <div id="sw_factors">
                        <!--Product-->
                        <tr class="disable" id="sw1_factors">
                            <th><b>Product</b></b>
                            </th>

                            <tr id="features_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                    bea_txtarea" name="features_factor_txtarea" readonly>Features</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="features1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="features2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="features3" cols="20" rows="10"></textarea></td>
                                <td><select name='features_factor_Control' class="datasetTrend" datasetTrend="2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td id='features_delete-td1'>
                                    <button id="features_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="design_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="design_factor_txtarea" readonly>Design</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="design1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="design2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="design3" cols="20" rows="10"></textarea></td>
                                <td><select name='design_factor_Control' class="datasetTrend" datasetTrend="2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td id='features_delete-td2'>
                                    <button id="features_remove2" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="technology_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                            bea_txtarea" name="Technology_factor_txtarea" readonly>Technology</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="technology1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="technology2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="technology3" cols="20" rows="10"></textarea></td>
                                <td><select name='Technology_factor_Control' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                <td id='features_delete-td13'>
                                    <button id="features_remove3" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>
                        </tr>

                        <!--People-->
                        <tr class="disable" id="sw2_factors">
                            <th><b>People</b></b>
                            </th>

                            <tr id="skill_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="skill_factor_txtarea" readonly>Skill</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="skill1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="skill2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="skill3" cols="20" rows="10"></textarea></td>
                                <td><select name='skill_factor_Control' class="datasetTrend" datasetTrend="2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td id='skill_delete-td1'>
                                    <button id="skill_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="managed_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                            bea_txtarea" name="managed_factor_txtarea" readonly>Managed</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="managed1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="managed2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="managed3" cols="20" rows="10"></textarea></td>
                                <td><select name='managed_factor_Control' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                <td id='skill_delete-td2'>
                                    <button id="skill_remove2" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="culture_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                bea_txtarea" name="culture_factor_txtarea" readonly>Culture</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="culture1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="culture2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="culture3" cols="20" rows="10"></textarea></td>
                                <td><select name='culture_factor_Control' class="datasetTrend" datasetTrend="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                <td id='skill_delete-td2'>
                                    <button id="skill_remove3" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>
                        </tr>

                        <!--Process-->
                        <tr class="disable" id="sw3_factors">
                            <th><b>Process</b></b>
                            </th>

                            <tr id="design_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                            bea_txtarea" name="design_factor_txtarea" readonly>Design</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="design1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="design2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="design3" cols="20" rows="10"></textarea></td>
                                <td><select name='design_factor_Control' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                <td id='design_delete-td1'>
                                    <button id="design_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="technology2_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                bea_txtarea" name="technology2_factor_txtarea" readonly>Technology</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="technology1-process" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="technology2-process" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="technology3-process" cols="20" rows="10"></textarea></td>
                                <td><select name='technology2_factor_Control' class="datasetTrend" datasetTrend="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                <td id='technology2_delete-td2'>
                                    <button id="technology2_remove2" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>
                        </tr>


                        <!--Operation-->
                        <tr class="disable" id="sw4_factors">
                            <th><b>Operation</b></b>
                            </th>

                            <tr id="supplier_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                            bea_txtarea" name="supplier_factor_txtarea" readonly>Supplier Management</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="supplier1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="supplier2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="supplier3" cols="20" rows="10"></textarea></td>
                                <td><select name='supplier_factor_Control' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
                                <td id='supplier_delete-td1'>
                                    <button id="supplier_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="planning_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                bea_txtarea" name="planning_factor_txtarea" readonly>Planning & Control</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="planning1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="planning2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="planning3" cols="20" rows="10"></textarea></td>
                                <td><select name='planning_factor_Control' class="datasetTrend" datasetTrend="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                <td id='planning_delete-td1'>
                                    <button id="planning_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="newProduct_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                    bea_txtarea" name="newProduct_factor_txtarea" readonly>New Product Dev.</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="newProduct1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="newProduct2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="newProduct3" cols="20" rows="10"></textarea></td>
                                <td><select name='newProduct_factor_Control' class="datasetTrend" datasetTrend="2">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                <td id='newProduct_delete-td1'>
                                    <button id="newProduct_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="costing _factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                    bea_txtarea" name="costing _factor_txtarea" readonly>Costing </textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="costing1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="costing2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="costing3" cols="20" rows="10"></textarea></td>
                                <td><select name='costing _factor_Control' class="datasetTrend" datasetTrend="2">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                <td id='costing_delete-td1'>
                                    <button id="costing_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="sales_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                        bea_txtarea" name="sales_factor_txtarea" readonly>Marketing & Sales</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="sales1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="sales2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="sales3" cols="20" rows="10"></textarea></td>
                                <td><select name='sales_factor_Control' class="datasetTrend" datasetTrend="2">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                <td id='sales_delete-td1'>
                                    <button id="sales_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>
                        </tr>

                        <!--Organisation-->
                        <tr class="disable" id="sw5_factors">
                            <th><b>Organisation</b></b>
                            </th>

                            <tr id="structure_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                bea_txtarea" name="structure_factor_txtarea" readonly>Structure</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="structure1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="structure2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="structure3" cols="20" rows="10"></textarea></td>
                                <td><select name='structure_factor_Control' class="datasetTrend" datasetTrend="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
                                <td id='structure_delete-td1'>
                                    <button id="structure_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="management_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                    bea_txtarea" name="management_factor_txtarea" readonly>Management</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="management1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="management2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="management3" cols="20" rows="10"></textarea></td>
                                <td><select name='management_factor_Control' class="datasetTrend" datasetTrend="2">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
                                <td id='management_delete-td1'>
                                    <button id="management_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="partnerships_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                        bea_txtarea" name="partnerships_factor_txtarea" readonly>Partnerships</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="partnerships1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="partnerships2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="partnerships3" cols="20" rows="10"></textarea></td>
                                <td><select name='partnerships_factor_Control' class="datasetTrend" datasetTrend="2">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                <td id='partnerships_delete-td1'>
                                    <button id="partnerships_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                            <tr id="Location_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                                        bea_txtarea" name="Location_factor_txtarea" readonly>Location</textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="costing1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="costing2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="costing3" cols="20" rows="10"></textarea></td>
                                <td><select name='Location_factor_Control' class="datasetTrend" datasetTrend="2">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                <td id='Location_delete-td1'>
                                    <button id="Location_remove1" class="btn customer_remove-me">delete</button>
                                </td>
                            </tr>

                        </tr>
                    </div>
                </tbody>
            </table>
        </div>
        <!--Save Data Section-->
        <div>
            <button id="b3" class="btn  add-moreSW" type="button">add
                        other
                        factor</button>
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
</div>
</div>

<script>
    $(".add-moreSW").click(function(e) {
        e.preventDefault();
        var count = $("#sw_input").val();
        count = parseInt(count) + 1;
        $("#sw_input").val(count);
        var getLastChild = $("#sw_tabel tr").last().attr('id');
        var splitLastChild = getLastChild.split("sw_factors");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#sw_factors" + next;
        next = next + 1;
        var addRemove = "#sw_factors_delete-td" + (next);
        var markup = ` <tr class="disable" id="sw${next}_factors">
                            <th><b>Product</b></b>
                            </th>

                            <tr id="newRow${next}_factor">
                                <th scope="row" class="tableH tru_factors">
                                    <textarea type="text" class="form-control fontSize
                                    bea_txtarea" name="features_factor_txtarea"></textarea>
                                </th>
                                <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor1" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor2" cols="20" rows="10"></textarea></td>
                                <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor3" cols="20" rows="10"></textarea></td>
                                <td><select name='newRow${next}_factor${next}_Control' class="datasetTrend" datasetTrend="2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td id='newRow${next}_delete-td${next}'>
                                        <button id="customerField_remove13" class="btn customer_remove-me">delete</button>
                                    </td>
                            </tr>
                        </tr>`
        var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

    });
</script>