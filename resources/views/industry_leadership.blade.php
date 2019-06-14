<!--Third Tab-->
<div class="tab">
    <div class="ProductLines">
        <label class="mainLabel" style="margin-left: 5%;">Industry Leadership</label>
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="12" id="count">
                <table class="table table-striped step3Table col-md-7" id="example">
                    <thead>
                        <tr>
                            <th scope="col" class="tableH boldText">Differentiation factors
                            </th>
                            <th scope="col" class="tableH">Attractiveness to customer (Low:1 - High:5)
                                <span class="progressFactor col1">m</span>
                            </th>
                            <th scope="col" class="tableH">Compared to sector average (Bottom:1 - Top:5)
                                <span class="progressFactor col2">m</span>
                            </th>
                            <th scope="col" class="tableH">Effort in maintaining lead (Easy:5 - Hard:1)
                                <span class="progressFactor col3">m</span>
                            </th>
                            <th scope="col" class="tableH">Position (Qualifier:1 or Order winner:2)
                                <span class="progressFactor col4">m</span>
                            </th>
                            <th scope="col" class="tableH factors" style="width:20%;">Comments
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="field">
                            <tr id="field1">
                                <th scope="row" class="tableH factors">
                                    <textarea type="text" rows="3" cols="20" class="form-control" name="factor1" readonly>(Price/Cost)Provide the lowest price, best value for money etc.</textarea>
                                </th>
                                <td><select name="x1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                </select></td>
                                <td><select name="y1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                </select></td>
                                <td><select name="z1">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH ">
                                    <textarea type="text" class="form-control dynamicArea comments" name="comment1" onfocus="createTooltip(this)" onkeypress="theFocus(this);" onchange="theBlur()" title="Hooray!">
                                </textarea>

                                </td>

                                <td id='delete-td1'>
                                    <button id="remove1 " class="btn " onclick="deleteRow(1) ">delete</button>
                                </td>

                            </tr>


                            <tr id="field2 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor2 " readonly>(Quality) Reliable products and services,Accreditations etc.
                </textarea>
                                </th>
                                <td><select name="x2 ">
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y2 ">
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z2 ">
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k2 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " class="form-control dynamicArea comments " name="comment2 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! ">
                                        </textarea>
                                </td>
                                <td id='delete-td2'>
                                    <button id="remove2 " class="btn " onclick="deleteRow(2) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field3 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor3 " readonly>(Service) Responsive to customers problems,(e.g. Pre and Post Sales)
                </textarea>
                                </th>
                                <td><select name="x3 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y3 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z3 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k3 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " class="form-control dynamicArea comments " name="comment3 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! ">
                                        </textarea>
                                </td>
                                <td id='delete-td3'>
                                    <button id="remove3 " class="btn " onclick="deleteRow(3) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field4 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor4 " readonly>(Delivery/Cycle-time) Speedy turnaround time for products</textarea>
                                </th>

                                <td><select name="x4 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y4 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z4 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k4 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment4 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td4'>
                                    <button id="remove4 " class="btn " onclick="deleteRow(4) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field5 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor5 " readonly>(Product Performance) Reowned for high performance products </textarea>
                                </th>
                                <td><select name="x5 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y5 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z5 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k5 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " class="form-control dynamicArea comments " name="comment5 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td5'>
                                    <button id="remove5 " class="btn " onclick="deleteRow(5) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field6 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor6 " readonly>(Product range) The best/widesr product range </textarea>
                                </th>

                                <td><select name="x6 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y6 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z6 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k6 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment6 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td6'>
                                    <button id="remove6 " class="btn " onclick="deleteRow(6) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field7 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor7 " readonly>(Product range) The best/widesr product range </textarea>
                                </th>

                                <td><select name="x7 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y7 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z7 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k7 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment7 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td7'>
                                    <button id="remove7 " class="btn " onclick="deleteRow(7) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field8 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor8 " readonly>(Flexibility) Flexible products, processes, services, customisation, etc.
                </textarea>
                                </th>
                                <td><select name="x8 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y8 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z8 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k8 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment8 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td8'>
                                    <button id="remove8 " class="btn " onclick="deleteRow(8) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field9 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor9 " readonly>(Innovation) Known for innovation and new products
                </textarea>
                                </th>
                                <td><select name="x9 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y9 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z9 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k9 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment9 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td9'>
                                    <button id="remove9 " class="btn " onclick="deleteRow(9) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field10 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor10 " readonly>(Marketplace) visibility Known in marketplace (brand visibility)</textarea>
                                </th>
                                <td><select name="x10 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y10 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z10 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k10 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment10 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td10'>
                                    <button id="remove10 " class="btn " onclick="deleteRow(10) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field11 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor11 " readonly>(Trust/Credibility) Well-respected in the marketplace
                </textarea>
                                </th>

                                <td><select name="x11 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y11 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z11 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k11 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment11 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td11'>
                                    <button id="remove11 " class="btn " onclick="deleteRow(11) ">delete</button>
                                </td>
                            </tr>

                            <tr id="field12 ">
                                <th scope="row " class="tableH factors "><textarea type="text " rows="4 " cols="15 " class="form-control " name="factor12 " readonly>(Sales) Not Market Share.
                </textarea>
                                </th>

                                <td><select name="x12 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="y12 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
                                    <option value="3 ">3</option>
                                    <option value="4 ">4</option>
                                    <option value="4 ">5</option>
                                </select></td>
                                <td><select name="z12 ">
    
                                    <option value="5 ">5</option>
                                    <option value="4 ">4</option>
                                    <option value="3 ">3</option>
                                    <option value="2 ">2</option>
                                    <option value="1 ">1</option>
                                </select></td>
                                <td><select name="k12 ">
    
                                    <option value="1 ">1</option>
                                    <option value="2 ">2</option>
    
                                </select></td>
                                <td scope="row " class="tableH ">
                                    <textarea type="text " rows="3 " cols="20 " class="form-control dynamicArea comments " name="comment12 " onfocus="createTooltip(this) " onkeypress="theFocus(this); " onchange="theBlur() " title="Hooray! "></textarea>
                                </td>
                                <td id='delete-td12'>
                                    <button id="remove12 " class="btn " onclick="deleteRow(12) ">delete</button>
                                </td>
                            </tr>
                        </div>

                    </tbody>
                </table>

                <div class="col-md-5" style="margin-top: 9%;">
                    <div class="chart-container">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>


                <!--row-->
            </div>
            <!--container-->
        </div>
        <button id="b1 " class="btn add-more " type="button ">add other factor</button>

        <div class="container-fluid ">
            <div class="row ">
                <div class="col-12 col-sm-12 ">
                    <button type="button " class="btn btn-primary btn-md " style="float:right !important; " onclick="leadership() ">Save</button>
                    <button type="button " class="btn btn-lg prevBtn " id="prevBtn " onclick="nextPrev(-1) " data-toggle="tooltip " data-placement="top " title="Previous ">&#8249;</button>
                </div>
            </div>
            <!--nextPrev-->
        </div>
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->