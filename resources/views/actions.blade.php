<!--Third Tab-->
<div class="tab animated">
    <div class="ProductLines">
        <label class="mainLabel" style="margin-left: 5%;">Converting decisions into Actions</label>
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="1" id="decisions-input">
                <!--company's main product lines table of radio buttons-->
                <div class="ProductLines col-md-8">
                    <table class="table table-striped" id="decisions_tabel">
                        <thead>
                            <tr>
                                <th scope="col">Tasks to be accomplished:</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Due date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <div id="decisions">
                                <tr id="decisions1">
                                    <td><textarea class="dynamicArea fontSize" name="task1" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="owner1" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="date1" cols="30" rows="10"></textarea></td>                                   
                                    <td id='decisions_delete-td1'>
                                        <button id="decisions1_remove1" class="btn customer_remove-me">delete</button>
                                    </td>
                                </tr>

                            </div>
                        </tbody>
                    </table>
                </div>
                <!--row-->

            </div>
            <!--container-->
        </div>
        <div>
            <button id="b2" class="btn  add-decisions" type="button">add
                other
                factor</button>
                <button class="btn btn-primary mb-4 mt-3 ml-4" >Save</button>
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
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->
<script>
    $(".add-decisions").click(function(e) {
        e.preventDefault();
        var count = $("#decisions-input").val();
        count = parseInt(count) + 1;
        $("#decisions-input").val(count);
        var getLastChild = $("#decisions_tabel tr").last().attr('id');
        var splitLastChild = getLastChild.split("decisions");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#decisions" + next;
        next = next + 1;
        var addRemove = "#decisions_delete-td" + (next);
        var markup = `<tr id="decisions${next}">
                                    <td><textarea class="dynamicArea fontSize" name="task${next}" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="owner${next}" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="date${next}" cols="30" rows="10"></textarea></td>                                   
                                    <td id='decisions_delete-td${next}'>
                                        <button id="decisions${next}_remove${next}" class="btn customer_remove-me">delete</button>
                                    </td>
                                </tr>
`
                                var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

        add_label_trend("New Label");
    });
</script>