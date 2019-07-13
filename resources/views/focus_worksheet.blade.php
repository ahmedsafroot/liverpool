<div class="container-fluid">
    <!--second tab-->
    <input type="hidden" value="0" id="worksheet_count">
    <div class="tab animated">
        <p class="sectionTitle mt-4">Focus Worksheet</p>
        <hr>
        <div class="mb-3 ml-2 mt-6 col-md-12">
            <table class="table table-striped col-md-7" id="worksheet_tabel">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" colspan="3">Product
                        </th>
                        <th scope="col" colspan="3">People
                        </th>
                        <th scope="col" colspan="2">Process
                        </th>
                        <th scope="col" colspan="5">Operation</th>
                        <th scope="col" colspan="4">Organization</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="tableH1 supplyWidth rotate">Features</td>
                        <td class="tableH1 supplyWidth rotate">Desgin</td>
                        <td class="tableH1 supplyWidth rotate">Technology</td>
                        <td class="tableH1 supplyWidth rotate">skill</td>
                        <td class="tableH1 supplyWidth rotate">managed</td>
                        <td class="tableH1 supplyWidth rotate">culture</td>
                        <td class="tableH1 supplyWidth rotate">Desgin</td>
                        <td class="tableH1 supplyWidth rotate">Technology</td>
                        <td class="tableH1 supplyWidth rotate">supplier management</td>
                        <td class="tableH1 supplyWidth rotate">planing and control</td>
                        <td class="tableH1 supplyWidth rotate">new product dev</td>
                        <td class="tableH1 supplyWidth rotate">costing</td>
                        <td class="tableH1 supplyWidth rotate">marketing and sales</td>
                        <td class="tableH1 supplyWidth rotate">structure</td>
                        <td class="tableH1 supplyWidth rotate">management</td>
                        <td class="tableH1 supplyWidth rotate">partnerships</td>
                        <td class="tableH1 supplyWidth rotate">location</td>


                    </tr>
                </thead>
                <tbody>
                    <div id="worksheet_factors">
                        <tr id="worksheet_factor1">
                            <th scope="row" class="tableH">
                                <textarea type="text" class="form-control
                                    bea_txtarea" name="trub_factor1_txtarea" readonly>Total Score</textarea>
                            </th>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_feature_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_design_prod_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_tech_prod" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_skill_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_managed_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_culture_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_design_process_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_tech_process_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_supplier_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_control_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_dev_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_cost_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_sales_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_structure_total" value="0">
                            </td>

                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_mang_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_part_total" value="0">
                            </td>
                            <td> <input type="text" readonly style="width:30px;" class="worksheet_total" name="worksheet_location_total" value="0">
                            </td>
                        </tr>

                        <tr id="disabledFactor">
                            <th><b>Factors</b></th>
                        </tr>


                </tbody>

            </table>
            </div>
            <!--Save Data Section-->
            <div>
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="worksheet()">Save</button>
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