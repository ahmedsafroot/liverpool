<!--Third Tab-->
<div class="tab animated">
    <div class="ProductLines">
        <label class="mainLabel" style="margin-left: 5%;">Industry Leadership</label>
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="11" id="count">
                <table class="table table-striped col-md-7" id="trends">
                    <thead>
                        <tr>
                            <th scope="col" class="tableH boldText" width="15%">Observed Trend
                            </th>
                            <th scope="col" class="tableH">Likely to continue (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Revenue (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Cost (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Growth (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Vs competitor (Better:5 or Same:3 or Worse: 1)
                            </th>
                            <th scope="col" class="tableH factors">Notes
                            </th>
                            <th scope="col" class="tableH">Total
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <div id="field">
                            <tr id="field1">
                                <th scope="row" class="tableH factors">
                                    <textarea type="text" class="form-control
                                        dynamicArea" name="factor${next}"></textarea>
                                </th>
                                <td><select name='x1' class="dataset" dataset="0">

                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="4">5</option>
                                    </select></td>
                                <td><select name='y1' class="dataset" dataset="1">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="4">5</option>
                                    </select></td>
                                <td><select name='z1' class="dataset" dataset="2">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td><select name='l1' class="dataset" dataset="2">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td><select name='m1' class="dataset" dataset="2">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="comment1"></textarea>
                                </td>
                                <td>
                                    <p type="text" name="total1">1555</p>
                                </td>

                                <td id='delete-td1'>
                                    <button id="remove1" class="btn" onclick="deleteRow(this,1)">delete</button>
                                </td>

                            </tr>
                        </div>
                    </tbody>
                </table>

                <div class="col-md-5" style="margin-top: 9%;">
                    <div class="chart-container">
                        fdsfsd
                    </div>
                </div>

                <!--row-->
            </div>
            <!--container-->
        </div>
        <button id="b2" class="btn add-moreTrends" type="button">add other
            factor</button>
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
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->