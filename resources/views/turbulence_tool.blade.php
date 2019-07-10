<div class="container-fluid">
    <!--second tab-->
    <div class="tab animated">
        <p class="sectionTitle mt-4">Turbulance Factors</p>
        <hr>
        <div class=" mb-3 ml-2 mt-6 col-md-10">
            <table class="table table-striped col-md-7" id="supply_BEA">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="tableH supplyWidth">Revenue (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Cost (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Growth (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Control (None: -1, Some: 1, High:2)</th>
                        <th scope="col" class="tableH supplyWidth">Vs competitor (Above: 1, Below: 3)
                        </th>
                        <th scope="col" class="tableH supplyWidth">THREAT</th>
                        <th scope="col" class="tableH supplyWidth">OPPORTUNITY
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <div id="trub_factors">
                        <tr id="trub_factor1">
                            <th scope="row" class="tableH tru_factors">
                                <textarea type="text" class="form-control
                                bea_txtarea" name="trub_factor1_txtarea" readonly>Labour
                                force size</textarea>
                            </th>
                            <td><select name='trub_factor1_Revenue' class="datasetTrend" datasetTrend="0">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>

                            </select></td>
                            <td><select name='trub_factor1_Cost' class="datasetTrend" datasetTrend="2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                            <td><select name='trub_factor1_Growth' class="datasetTrend" datasetTrend="2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>

                            <td><select name='trub_factor1_Control' class="datasetTrend" datasetTrend="2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select></td>

                            <td><select name='trub_factor1_competitor' class="datasetTrend" datasetTrend="2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select></td>
                            <td> <input type="text" readonly style="width:30px;" name="trub_factor1_threat" value="3">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" name="trub_factor1_opportunity" value="3">
                            </td>
                        </tr>

                </tbody>
            </table>
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


    </div>
</div>