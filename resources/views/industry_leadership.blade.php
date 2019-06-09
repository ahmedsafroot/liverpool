<!--Third Tab-->
<div class="tab">
    <div class="ProductLines">
        <label class="mainLabel">Industry Leadership</label>
        <input type="hidden" value="12" id="count">
        <table class="table table-striped" id="example">
            <thead>
                <tr>
                    <th scope="col" class="tableH boldText" style="width:25%">Differentiation factors
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
                    <th scope="col" class="tableH" style="width:12%">Comments
                    </th>
                    <th scope="col" class="tableH hideMe" style="width:25%">Porogress bar for the 4 cols
                    </th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <div class="field">
                    <tr id="field1">
                        <th scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="15" class="form-control" name="factor1" readonly>(Price/Cost)Provide the lowest price, best value for money etc.</textarea>
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
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment1"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector1"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive1"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort1"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position1"></div>
                            </div>
                        </td>

                        <td id='delete-td1'>
                            <button id="remove1" class="btn" onclick="deleteRow(1)">delete</button>
                        </td>

                    </tr>


                    <tr id="field2">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor2" readonly>(Quality) Reliable products and services,Accreditations etc.
            </textarea>
                        </th>
                        <td><select name="x2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z2">
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k2">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                            <td scope="row" class="tableH">
                                <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment2"></textarea>
                            </td>
                            <td class="hideMe">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector2"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive2"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort2"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" id="prog_position2"></div>
                                </div>
                            </td>
                        
                        <td id='delete-td2'>
                            <button id="remove2" class="btn" onclick="deleteRow(2)">delete</button>
                        </td>
                    </tr>

                    <tr id="field3">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor3" readonly>(Service) Responsive to customers problems,(e.g. Pre and Post Sales)
            </textarea>
                        </th>
                        <td><select name="x3">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y3">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z3">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k3">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                            <td scope="row" class="tableH">
                                <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment3"></textarea>
                            </td>
                            <td class="hideMe">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector3"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive3"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort3"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" id="prog_position3"></div>
                                </div>
                            </td>
                      
                        <td id='delete-td3'>
                            <button id="remove3" class="btn" onclick="deleteRow(3)">delete</button>
                        </td>
                    </tr>

                    <tr id="field4">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor4" readonly>(Delivery/Cycle-time) Speedy turnaround time for products</textarea>
                        </th>

                        <td><select name="x4">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y4">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z4">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k4">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                            <td scope="row" class="tableH">
                                <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment4"></textarea>
                            </td>
                            <td class="hideMe">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector4"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive4"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort4"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" id="prog_position4"></div>
                                </div>
                            </td>
                      
                        <td id='delete-td4'>
                            <button id="remove4" class="btn" onclick="deleteRow(4)">delete</button>
                        </td>
                    </tr>

                    <tr id="field5">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor5" readonly>(Product Performance) Reowned for high performance products </textarea>
                        </th>
                        <td><select name="x5">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y5">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z5">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k5">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment5"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector5"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive5"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort5"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position5"></div>
                            </div>
                        </td>

                        <td id='delete-td5'>
                            <button id="remove5" class="btn" onclick="deleteRow(5)">delete</button>
                        </td>
                    </tr>

                    <tr id="field6">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor6" readonly>(Product range) The best/widesr product range </textarea>
                        </th>

                        <td><select name="x6">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y6">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z6">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k6">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment6"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector6"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive6"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort6"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position6"></div>
                            </div>
                        </td>

                        <td id='delete-td6'>
                            <button id="remove6" class="btn" onclick="deleteRow(6)">delete</button>
                        </td>
                    </tr>

                    <tr id="field7">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor7" readonly>(Product range) The best/widesr product range </textarea>
                        </th>

                        <td><select name="x7">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y7">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z7">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k7">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment7"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector7"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive7"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort7"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position7"></div>
                            </div>
                        </td>

                        <td id='delete-td7'>
                            <button id="remove7" class="btn" onclick="deleteRow(7)">delete</button>
                        </td>
                    </tr>

                    <tr id="field8">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor8" readonly>(Flexibility) Flexible products, processes, services, customisation, etc.
            </textarea>
                        </th>
                        <td><select name="x8">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y8">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z8">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k8">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment8"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector8"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive8"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort8"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position8"></div>
                            </div>
                        </td>

                        <td id='delete-td8'>
                            <button id="remove8" class="btn" onclick="deleteRow(8)">delete</button>
                        </td>
                    </tr>

                    <tr id="field9">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor9" readonly>(Innovation) Known for innovation and new products
            </textarea>
                        </th>
                        <td><select name="x9">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y9">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z9">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k9">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment9"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector9"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive9"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort9"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position9"></div>
                            </div>
                        </td>

                        <td id='delete-td9'>
                            <button id="remove9" class="btn" onclick="deleteRow(9)">delete</button>
                        </td>
                    </tr>

                    <tr id="field10">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor10" readonly>(Marketplace) visibility Known in marketplace (brand visibility)</textarea>
                        </th>
                        <td><select name="x10">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y10">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z10">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k10">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment10"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector10"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive10"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort10"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position10"></div>
                            </div>
                        </td>

                        <td id='delete-td10'>
                            <button id="remove10" class="btn " onclick="deleteRow(10)">delete</button>
                        </td>
                    </tr>

                    <tr id="field11">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor11" readonly>(Trust/Credibility) Well-respected in the marketplace
            </textarea>
                        </th>

                        <td><select name="x11">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y11">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z11">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k11">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment11"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector11"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive11"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort11"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position11"></div>
                            </div>
                        </td>

                        <td id='delete-td11'>
                            <button id="remove11" class="btn " onclick="deleteRow(11)">delete</button>
                        </td>
                    </tr>

                    <tr id="field12">
                        <th scope="row" class="tableH"><textarea type="text" rows="4" cols="15" class="form-control"
                                name="factor12" readonly>(Sales) Not Market Share.
            </textarea>
                        </th>

                        <td><select name="x12">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="y12">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select></td>
                        <td><select name="z12">

                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select></td>
                        <td><select name="k12">

                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select></td>
                        <td scope="row" class="tableH">
                            <textarea type="text" rows="3" cols="20" class="form-control dynamicArea" name="comment12"></textarea>
                        </td>
                        <td class="hideMe">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100" value="5" id="prog_sector12"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="prog_attractive12"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="prog_effort12"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" id="prog_position12"></div>
                            </div>
                        </td>

                        <td id='delete-td12'>
                            <button id="remove12" class="btn " onclick="deleteRow(12)">delete</button>
                        </td>
                    </tr>
                </div>

            </tbody>
        </table>
        <button id="b1" class="btn add-more" type="button">add other factor</button>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <button type="button" class="btn btn-primary btn-md" style="float:right !important;" onclick="leadership()">Save</button>
                    <button type="button" class="btn btn-lg
                                            prevBtn" id="prevBtn"
                        onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">&#8249;</button>
                </div>
            </div>
        </div>
    </div>