<div class="container-fluid">
    <!--second tab-->
    <input type="hidden" value="0" id="worksheet_count">
    <div class="tab animated">
        <p class="sectionTitle mt-4">Focus Worksheet</p>
        <hr>
        <div class="mb-3 ml-2 mt-6 col-md-12">
            <table class="table table-striped col-md-7" id="worksheet_tabel" border="1">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"  class="focus-product">Product
                        </th>
                        <th scope="col"  class="focus-people">People
                        </th>
                        <th scope="col"  class="focus-process">Process
                        </th>
                        <th scope="col"  class="focus-operation">Operation</th>
                        <th scope="col" class="focus-organ">Organization</th>
                    </tr>
                    <tr class="focus-columns">
                        <td></td>



                    </tr>
                </thead>
                <tbody>
                    <div id="worksheet_factors">
                        <tr id="worksheet_factor1">
                            <th scope="row" class="tableH">
                                <textarea type="text" class="form-control
                                    bea_txtarea" name="trub_factor1_txtarea" readonly>Total Score</textarea>
                            </th>
    
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
                            nextBtn" id="nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                        <button type="button" class="btn btn-lg
                            prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>