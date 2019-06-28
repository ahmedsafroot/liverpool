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
                        <div id="marketField">
                            <tr id="marketField1">
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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
                                        <option value="0">0</option>
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
                                    <input type="text" readonly style="width:30px;" name="total_impact1">
                                </td>

                                <td id='market_delete-td1'>
                                    <button id="market_remove1" class="btn market_remove-me" onclick="deleteRow(this,1)">delete</button>
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

                    <div class="chart-container" style="margin-top:15% !important;">
                        <canvas id="market1_trends_chart"></canvas>
                    </div>
                </div>
                <!--row-->
            </div>
            <button id="b2" class="btn add-moreTrends" type="button">add other
                factor</button>
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
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->;

<script>
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


var marketChart1 = document.getElementById("market1_trends_chart");
var myMarketChart1 = new Chart(marketChart1, {
    type: 'bar',
    data: {
        labels: ["Trend1[Example1]", "Trend2[Example2]", "Trend3[Example3]", "Trend4[Example4]", "Trend5[Example5]", "Trend6[Example6]"],
        datasets: [{
                label: "Revenue",
                backgroundColor: "#0080FF",
                data: [5, 6, 10, 3, 4, 2],
            }, {
                label: "Cost",
                backgroundColor: "orange",
                data: [5, 6, 10, 3, 4, 2],
            },
            {
                label: "Growth",
                backgroundColor: "grey",
                data: [5, 6, 10, 3, 4, 2],
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Trends Vs Impact'
        }
    }
});


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
                                                <textarea type="text"  class="form-control dynamicArea" name="factor${next}" ></textarea>
                                            </th>
                                            <td><select name='x${next}' class="dataset" dataset="0">
                                                        
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
                                            <td><select name='y${next}' class="dataset" dataset="1">
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
                                            <td><select name='z${next}' class="dataset" dataset="2">
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
                                                    <td><select name='l${next}' class="dataset" dataset="2">
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
                                                    <td><select name='m${next}' class="dataset" dataset="2">
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
                                                    <td scope="row" class="tableH">
                                                        <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment${next}"></textarea>
                                                    </td> 

                                            <td>
                                    <input type="text" readonly style="width:30px;" name="total_impact${next}">
                                </td>
                                                                                               
                                                    <td id='market_delete-td${next}'>
                                                    </td>
        
                                        </tr>`
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

</script>