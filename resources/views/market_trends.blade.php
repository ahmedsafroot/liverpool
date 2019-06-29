<!--Third Tab-->
<div class="tab animated">
    <div class="ProductLines">
        <label class="mainLabel" style="margin-left: 5%;">Market Trends</label>
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="1" id="count_trend">
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
                        <div id="marketField">
                            <tr id="marketField1">
                                <th scope="row" class="tableH factors">
                                    <textarea type="text" class="form-control
<<<<<<< HEAD:resources/views/market_trends.php
                                        dynamicArea" name="market_factor1"></textarea>
=======
                                        dynamicArea" name="factor_trend1"></textarea>
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
                                </th>
                                <td><select name='cont1' class="datasetTrend" datasetTrend="0">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td><select name='revenue1' class="datasetTrend" datasetTrend="1">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td><select name='cost1' class="datasetTrend" datasetTrend="2">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="0">0</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td><select name='growth1' class="datasetTrend" datasetTrend="2">
                                        <option value="-1">-1</option>
                                        <option value="-2">-2</option>
                                        <option value="-3">-3</option>
                                        <option value="-4">-4</option>
                                        <option value="-5">-5</option>
                                        <option value="0">0</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td><select name='comp1' class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5">5</option>
                                        <option value="3">3</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="comment_trend1"></textarea>
                                </td>
                                <td>
                                    <input type="text" readonly style="width:30px;" name="total_impact1" value="3">
                                </td>

                                <td id='market_delete-td1'>
<<<<<<< HEAD:resources/views/market_trends.php
                                    <button id="market_remove1" class="btn
                                        market_remove-me" onclick="deleteRow(this,1)">delete</button>
=======
                                    <button id="market_remove1" class="btn market_remove-me" onclick="deleteRow(this,1,1)">delete</button>
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
                                </td>
                            </tr>

                        </div>

                    </tbody>

                </table>

                <!--chart section-->
                <div class="col-md-5">
                    <div class="chart-container">
                        <canvas id="market_trends_chart"></canvas>
                    </div>

                    <div class="chart-container" style="margin-top:15%
                        !important;">
                        <canvas id="market1_trends_chart"></canvas>
                    </div>

                </div>
                <div>
                    <button id="b2" class="btn add-moreTrends" type="button">add
                        other
                        factor</button>
                    <button class="btn btn-primary mb-4 mt-3 ml-4">Save</button>
                </div>
                <!--row-->
            </div>
<<<<<<< HEAD:resources/views/market_trends.php
=======
            <button id="b2" class="btn add-moreTrends" type="button">add other
                Trend</button>
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
            <!--container-->
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

         <div class="row">
                <div class="col-12 col-sm-12">
                    <button type="button" class="btn btn-primary btn-md"  onclick="market_trends()">Save</button>
                    <button type="button" class="btn btn-lg prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">&#8249;</button>
                </div>
         </div>
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->;

<script>
<<<<<<< HEAD:resources/views/market_trends.php
    //chart of market trends
    var marketChart = document.getElementById("market_trends_chart");
    var myMarketChart = new Chart(marketChart, {
        type: 'bar',
        data: {
            labels: ["Trend1[Example1]", "Trend2[Example2]", "Trend3[Example3]", "Trend4[Example4]", "Trend5[Example5]", "Trend6[Example6]"],

            datasets: [{
                    label: 'Likely To Continu (Low:1- High:5)',
                    data: [5, 6, 10, 3, 4, 2],
                    type: 'line',
                    backgroundColor: "orange",
                    fill: false,
                }, {
                    label: "Total Impact",
                    data: [5, 6, 1, 2, 8, -1],
                    backgroundColor: "#0080FF",
                    hoverBackgroundColor: "#0080FF",
=======
//chart of market trends
var marketChart = document.getElementById("market_trends_chart");
var myMarketChart = new Chart(marketChart, {
    type: 'bar',
    data: {
        labels: ["Trend1[Example1]"],

        datasets: [{
                label: 'Likely To Continu (Low:1- High:5)',
                data: [1],
                type: 'line',
                backgroundColor: "orange",
                fill: false,
            }, {
                label: "Total Impact",
                data: [3],
                backgroundColor: "#0080FF",
                hoverBackgroundColor: "#0080FF",
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php

                },


            ]
        },
        options: {
            elements: {
                line: {
                    tension: 0 // disables bezier curves
                }
            },
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            },
            title: {
                display: true,
                text: 'Total Impact Vs Contineous Probability'
            }
        },
    });


<<<<<<< HEAD:resources/views/market_trends.php
    var marketChart1 = document.getElementById("market1_trends_chart");
    var myMarketChart1 = new Chart(marketChart1, {
        type: 'bar',
        data: {
            labels: ["Trend1[Example1]", "Trend2[Example2]", "Trend3[Example3]", "Trend4[Example4]", "Trend5[Example5]", "Trend6[Example6]"],
            datasets: [{
=======
var marketChart1 = document.getElementById("market1_trends_chart");
var myMarketChart1 = new Chart(marketChart1, {
    type: 'bar',
    data: {
        labels: ["Trend1[Example1]"],
        datasets: [{
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
                label: "Revenue",
                backgroundColor: "#0080FF",
                data: [-1],
            }, {
                label: "Cost",
                backgroundColor: "orange",
<<<<<<< HEAD:resources/views/market_trends.php
                data: [5, 6, 10, 3, 4, 2],
            }, {
                label: "Growth",
                backgroundColor: "grey",
                data: [5, 6, 10, 3, 4, 2],
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Trends Vs Impact'
=======
                data: [-1],
            },
            {
                label: "Growth",
                backgroundColor: "grey",
                data: [-1],
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
            }
        }
    });


<<<<<<< HEAD:resources/views/market_trends.php
    $(".add-moreTrends").click(function(e) {
        e.preventDefault();
        var count = $("#count").val();
        count = parseInt(count) + 1;
        $("#count").val(count);
        var getLastChild = $("#trends tr").last().attr('id');
        var splitLastChild = getLastChild.split("marketField");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#marketField" + next;
        next = next + 1;
        var addRemove = "#market_delete-td" + (next);
        var markup = `<tr id="marketField${next}">
                                            <th scope="row" class="tableH factors">
                                                <textarea type="text"  class="form-control dynamicArea" name="market_factor${next}" ></textarea>
=======
        $(".add-moreTrends").click(function(e) {
            e.preventDefault();
            var count = $("#count_trend").val();
            count = parseInt(count) + 1;
            $("#count_trend").val(count);
            var getLastChild = $("#trends tr").last().attr('id');
            var splitLastChild = getLastChild.split("marketField");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#marketField" + next;
            next = next + 1;
            var addRemove = "#market_delete-td" + (next);
            var markup = `<tr id="marketField${next}">
                                            <th scope="row" class="tableH factors">
                                                <textarea type="text"  class="form-control dynamicArea" name="factor_trend${next}" ></textarea>
>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
                                            </th>
                                            <td><select name='cont${next}' class="datasetTrend" datasetTrend="0">                                               
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            <td><select name='revenue${next}' class="datasetTrend" datasetTrend="1">
                                                        <option value="-1">-1</option>
                                                        <option value="-2">-2</option>
                                                        <option value="-3">-3</option>
                                                        <option value="-4">-4</option>
                                                        <option value="-5">-5</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                                            <td><select name='cost${next}' class="datasetTrend" datasetTrend="2">
                                            <option value="-1">-1</option>
                                                        <option value="-2">-2</option>
                                                        <option value="-3">-3</option>
                                                        <option value="-4">-4</option>
                                                        <option value="-5">-5</option>
                                                        <option value="0">0</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select></td>
                                                    <td><select name='growth${next}' class="datasetTrend" datasetTrend="2">
                                            <option value="-1">-1</option>
                                                        <option value="-2">-2</option>
                                                        <option value="-3">-3</option>
                                                        <option value="-4">-4</option>
                                                        <option value="-5">-5</option>
                                                        <option value="0">0</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select></td>
                                                    <td><select name='comp${next}' class="datasetTrend" datasetTrend="2">
                                                      
                                                        <option value="5">5</option>
                                                        <option value="3">3</option>
                                                        <option value="1">1</option>
                                                    </select></td>
                                                    <td scope="row" class="tableH">
                                                        <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment_trend${next}"></textarea>
                                                    </td> 

                                            <td>
                                    <input type="text" readonly style="width:30px;" value="3" name="total_impact${next}">
                                </td>
                                                                                               
                                                    <td id='market_delete-td${next}'>
                                                        <button id="market_remove${next}" class="btn market_remove-me" onclick="deleteRow(this,${next},1)">delete</button>

                                                    </td>
        
                                        </tr>`
<<<<<<< HEAD:resources/views/market_trends.php
        var newIn = markup;
        var newInput = $(newIn);
        var removeBtn = '<button id="market_remove' + next + '" class="btn market_remove-me" >delete</button></div><div id="market_delete-td">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).append(removeButton);
        $('.market_remove-me').click(function(e, next) {
            var label = $(elem).parent().parent().index();
            remove_label(label);
            e.preventDefault();
            var fieldNum = 0;
            if (myNext > 9) {
                fieldNum = this.id.slice(-2);
            } else {
                fieldNum = this.id.slice(-1);
            }

            console.log("fieldNum", fieldNum);
            var fieldID = "#marketField" + fieldNum;
            console.log("fieldIDfieldID", fieldID);
            $(this).remove();
            $(fieldID).remove();
        });
        add_label("New Label");
    });
=======
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
           
            add_label_trend("New Label");
        });

        var previous;

        $(document).on("change", ".datasetTrend", function() {
            var elements=$(this).closest("tr").children("td");
            var sum=0;
            elements.each(function(i, obj) {
                if($(obj).children(".datasetTrend").length!=0)
                  {
                    sum+=parseInt($(obj).children(".datasetTrend").val());
                  }
            });

            $(this).parent().siblings().children("input[name*='total_impact']").val(sum);
            debugger;
            var label = $(this).parent().parent().index();
            var value = sum;
            update_label_trend(label, 1, value,1);

            if($(this).attr("name").indexOf('cont') > -1)
             {
                update_label_trend(label,0, $(this).val(),1);

             }
             if($(this).attr("name").indexOf('revenue') > -1)
             {
                update_label_trend(label,0, $(this).val(),2);

             }
             if($(this).attr("name").indexOf('cost') > -1)
             {
                update_label_trend(label,1, $(this).val(),2);

             }
             if($(this).attr("name").indexOf('growth') > -1)
             {
                update_label_trend(label,2, $(this).val(),2);

             }

        });


>>>>>>> 490fdead16b957be55a6cc45779b9134332aee43:resources/views/market_trends.blade.php
</script>