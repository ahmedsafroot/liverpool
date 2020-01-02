<!--Third Tab-->
<div class="tab animated">
    <div class="ProductLines">
        <h2 class="step_title">Market Trends(Step 1-2)</h2>
        <div style="margin-left:5px">
        <p class="descParagrah enlarge">In this part you identify the KEY TRENDS in your market that are important for the company.
            </p>
        <hr><hr>
        <p class="sectionTitle mt-4">Instructions</p>
        <hr>
        <p class="descParagrah">Think of trends you find to exist or emerge soon [examples: customer demand volume or variety; Technology; Economy; Law and regulation; Environmental; Manpower; Machines; Materials; Political issues; …] and add to the boxes provided
          <ul class="descParagrah">
              <li>GIVE SCORES REGARDING:
                <ol>
                    <li>How likely it is to continue</li>
                    <li>If you do NOTHING about it, what is the IMPACT on company’s:
                       <ul><li>REVENUE; COST; GROWTH [Negative measures are used]</li>
                       </ul> 
                    </li>
                    <li>How do you perform Vs your competitors?
                        </li>
                    <li>You can add comment and add more rows if needed
                        </li>
                </ol>
            </li>
            <li>You will see a graph depicting the state of the company
                </li>
          </ul>
        </p>
    </div>
        <label class="mainLabel" style="margin-left: 5%;"></label>
        <div class="container-fluid">
            <div class="row">
                
                <input type="hidden" value={{ (isset($trends) && count($trends)>0)? count($trends) : 4 }} id="count_trend">
                <table class="table table-striped col-md-7" id="trends">
                    <thead>
                        <tr>
                            <th scope="col" class="tableH boldText" width="15%">Observed Trend
                            </th>
                            <th scope="col" class="tableH">Likely to continue (Low:1 High:5)
                            </th>
                            <th scope="col" class="tableH">Revenue (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Cost (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Growth (Low:-5 High:5)
                            </th>
                            <th scope="col" class="tableH">Vs competitor (Better:5 or Same:3 or Worse: 1)
                            </th>
                            <th scope="col" class="tableH factors factor_trend">Notes
                            </th>
                            <th scope="col" class="tableH">Total
                            </th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <div id="marketField">
                            @if(!isset($trends) || count($trends)==0)
                            <tr class="trend_row"  id="marketField1">
                                <th scope="row" class="tableH factors factor_trend">
                                    <textarea type="text" class="form-control
                                        dynamicArea" name="factor_trend1"></textarea>
                                </th>
                                <td class="cont"><select name='cont1' class="datasetTrend" datasetTrend="0">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td class="revenue"><select name='revenue1' class="datasetTrend" datasetTrend="1">
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
                                <td class="cost"><select name='cost1' class="datasetTrend" datasetTrend="2">
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
                                <td class="growth"><select name='growth1' class="datasetTrend" datasetTrend="2">
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
                                <td class="comp"><select name='comp1' class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5">5</option>
                                        <option value="3">3</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH comment_trend">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment_trend1"></textarea>
                                </td>
                                <td>
                                    <input type="text" readonly style="width:30px;" class="total_impact"  name="total_impact1" value="3">
                                </td>

                                <td id='market_delete-td1'>
                                    <button id="market_remove1" class="btn market_remove-me" onclick="deleteRow(this,1,1)">delete</button>
                                </td>
                            </tr>
                            <tr class="trend_row"  id="marketField2">
                                <th scope="row" class="tableH factors factor_trend">
                                    <textarea type="text" class="form-control
                                        dynamicArea" name="factor_trend2"></textarea>
                                </th>
                                <td class="cont"><select name='cont2' class="datasetTrend" datasetTrend="0">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td class="revenue"><select name='revenue2' class="datasetTrend" datasetTrend="1">
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
                                <td class="cost"><select name='cost2' class="datasetTrend" datasetTrend="2">
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
                                <td class="growth"><select name='growth2' class="datasetTrend" datasetTrend="2">
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
                                <td class="comp"><select name='comp2' class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5">5</option>
                                        <option value="3">3</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH comment_trend">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="comment_trend2"></textarea>
                                </td>
                                <td>
                                    <input type="text" readonly style="width:30px;" class="total_impact"  name="total_impact2" value="3">
                                </td>

                                <td id='market_delete-td2'>
                                    <button id="market_remove2" class="btn market_remove-me" onclick="deleteRow(this,2,1)">delete</button>
                                </td>
                            </tr>

                            <tr class="trend_row"  id="marketField3">
                                <th scope="row" class="tableH factors factor_trend">
                                    <textarea type="text" class="form-control
                                        dynamicArea" name="factor_trend3"></textarea>
                                </th>
                                <td class="cont"><select name='cont3' class="datasetTrend" datasetTrend="0">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td class="revenue"><select name='revenue3' class="datasetTrend" datasetTrend="1">
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
                                <td class="cost"><select name='cost3' class="datasetTrend" datasetTrend="2">
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
                                <td class="growth"><select name='growth3' class="datasetTrend" datasetTrend="2">
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
                                <td class="comp"><select name='comp3' class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5">5</option>
                                        <option value="3">3</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH comment_trend">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="comment_trend3"></textarea>
                                </td>
                                <td>
                                    <input type="text" readonly style="width:30px;" class="total_impact"  name="total_impact3" value="3">
                                </td>

                                <td id='market_delete-td3'>
                                    <button id="market_remove3" class="btn market_remove-me" onclick="deleteRow(this,3,1)">delete</button>
                                </td>
                            </tr>

                            <tr class="trend_row"  id="marketField4">
                                <th scope="row" class="tableH factors factor_trend">
                                    <textarea type="text" class="form-control
                                        dynamicArea" name="factor_trend4"></textarea>
                                </th>
                                <td class="cont"><select name='cont4' class="datasetTrend" datasetTrend="0">

                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                <td class="revenue"><select name='revenue4' class="datasetTrend" datasetTrend="1">
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
                                <td class="cost"><select name='cost4' class="datasetTrend" datasetTrend="2">
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
                                <td class="growth"><select name='growth4' class="datasetTrend" datasetTrend="2">
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
                                <td class="comp"><select name='comp4' class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5">5</option>
                                        <option value="3">3</option>
                                        <option value="1">1</option>
                                    </select></td>
                                <td scope="row" class="tableH comment_trend">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="comment_trend4"></textarea>
                                </td>
                                <td>
                                    <input type="text" readonly style="width:30px;" class="total_impact"  name="total_impact4" value="3">
                                </td>

                                <td id='market_delete-td4'>
                                    <button id="market_remove4" class="btn market_remove-me" onclick="deleteRow(this,4,1)">delete</button>
                                </td>
                            </tr>
                            @else
                              @for ($i = 0; $i < count($trends); $i++)
                              <tr class="trend_row" id="{{'marketField'.($i+1)}}">
                                <th scope="row" class="tableH factors factor_trend">
                                    <textarea type="text" class="form-control dynamicArea" name="{{'factor_trend'.($i+1)}}">{{$trends[$i]->observed}}</textarea>
                                </th>
                                <td class="cont"><select name="{{'cont'.($i+1)}}" class="datasetTrend" datasetTrend="0">

                                    <option value="1" {{ ($trends[$i]->cont==1)? "selected=selected" : "" }}>1</option>
                                    <option value="2" {{ ($trends[$i]->cont==2)? "selected=selected" : "" }}>2</option>
                                    <option value="3" {{ ($trends[$i]->cont==3)? "selected=selected" : "" }}>3</option>
                                    <option value="4" {{ ($trends[$i]->cont==4)? "selected=selected" : "" }}>4</option>
                                    <option value="5" {{ ($trends[$i]->cont==5)? "selected=selected" : "" }}>5</option>
                                    </select></td>
                                <td class="revenue"><select name="{{'revenue'.($i+1)}}" class="datasetTrend" datasetTrend="1">
                                    <option value="-1" {{ ($trends[$i]->revenue==-1)? "selected=selected" : "" }}>-1</option>
                                    <option value="-2" {{ ($trends[$i]->revenue==-2)? "selected=selected" : "" }}>-2</option>
                                    <option value="-3" {{ ($trends[$i]->revenue==-3)? "selected=selected" : "" }}>-3</option>
                                    <option value="-4" {{ ($trends[$i]->revenue==-4)? "selected=selected" : "" }}>-4</option>
                                    <option value="-5" {{ ($trends[$i]->revenue==-5)? "selected=selected" : "" }}>-5</option>
                                    <option value="0" {{ ($trends[$i]->revenue==0)? "selected=selected" : "" }}>0</option>
                                    <option value="1" {{ ($trends[$i]->revenue==1)? "selected=selected" : "" }}>1</option>
                                    <option value="2" {{ ($trends[$i]->revenue==2)? "selected=selected" : "" }}>2</option>
                                    <option value="3" {{ ($trends[$i]->revenue==3)? "selected=selected" : "" }}>3</option>
                                    <option value="4" {{ ($trends[$i]->revenue==4)? "selected=selected" : "" }}>4</option>
                                    <option value="5" {{ ($trends[$i]->revenue==5)? "selected=selected" : "" }}>5</option>
                                    </select></td>
                                <td class="cost"><select name="{{'cost'.($i+1)}}" class="datasetTrend" datasetTrend="2">
                                    <option value="-1" {{ ($trends[$i]->cost==-1)? "selected=selected" : "" }}>-1</option>
                                    <option value="-2" {{ ($trends[$i]->cost==-2)? "selected=selected" : "" }}>-2</option>
                                    <option value="-3" {{ ($trends[$i]->cost==-3)? "selected=selected" : "" }}>-3</option>
                                    <option value="-4" {{ ($trends[$i]->cost==-4)? "selected=selected" : "" }}>-4</option>
                                    <option value="-5" {{ ($trends[$i]->cost==-5)? "selected=selected" : "" }}>-5</option>
                                    <option value="0" {{ ($trends[$i]->cost==0)? "selected=selected" : "" }}>0</option>
                                    <option value="1" {{ ($trends[$i]->cost==1)? "selected=selected" : "" }}>1</option>
                                    <option value="2" {{ ($trends[$i]->cost==2)? "selected=selected" : "" }}>2</option>
                                    <option value="3" {{ ($trends[$i]->cost==3)? "selected=selected" : "" }}>3</option>
                                    <option value="4" {{ ($trends[$i]->cost==4)? "selected=selected" : "" }}>4</option>
                                    <option value="5" {{ ($trends[$i]->cost==5)? "selected=selected" : "" }}>5</option>
                                    </select></td>
                                <td class="growth"><select name="{{'growth'.($i+1)}}" class="datasetTrend" datasetTrend="2">
                                    <option value="-1" {{ ($trends[$i]->growth==-1)? "selected=selected" : "" }}>-1</option>
                                    <option value="-2" {{ ($trends[$i]->growth==-2)? "selected=selected" : "" }}>-2</option>
                                    <option value="-3" {{ ($trends[$i]->growth==-3)? "selected=selected" : "" }}>-3</option>
                                    <option value="-4" {{ ($trends[$i]->growth==-4)? "selected=selected" : "" }}>-4</option>
                                    <option value="-5" {{ ($trends[$i]->growth==-5)? "selected=selected" : "" }}>-5</option>
                                    <option value="0" {{ ($trends[$i]->growth==0)? "selected=selected" : "" }}>0</option>
                                    <option value="1" {{ ($trends[$i]->growth==1)? "selected=selected" : "" }}>1</option>
                                    <option value="2" {{ ($trends[$i]->growth==2)? "selected=selected" : "" }}>2</option>
                                    <option value="3" {{ ($trends[$i]->growth==3)? "selected=selected" : "" }}>3</option>
                                    <option value="4" {{ ($trends[$i]->growth==4)? "selected=selected" : "" }}>4</option>
                                    <option value="5" {{ ($trends[$i]->growth==5)? "selected=selected" : "" }}>5</option>
                                    </select></td>
                                <td class="comp"><select name="{{'comp'.($i+1)}}" class="datasetTrend" datasetTrend="2">
                                      
                                        <option value="5" {{ ($trends[$i]->comp==5)? "selected=selected" : "" }}>5</option>
                                        <option value="3" {{ ($trends[$i]->comp==3)? "selected=selected" : "" }}>3</option>
                                        <option value="1" {{ ($trends[$i]->comp==1)? "selected=selected" : "" }}>1</option>
                                    </select></td>
                                <td scope="row" class="tableH comment_trend">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea
                                        comments" name="{{'comment_trend'.($i+1)}}">
                                    {{$trends[$i]->notes}}
                                    </textarea>
                                </td>
                                <td>
                                <input type="text" readonly style="width:30px;" class="total_impact" name="{{'total_impact'.($i+1)}}" value="{{ ($trends[$i]->cont+$trends[$i]->revenue+$trends[$i]->cost+$trends[$i]->growth+$trends[$i]->comp)}}">
                                </td>

                                <td id='market_delete-td1'>
                                    <button id="{{'market_remove'.($i+1)}}" class="btn market_remove-me" onclick="deleteRow(this,{{$i+1}},1)">delete</button>
                                </td>
                            </tr>
                            @endfor
                            @endif
                        </div>

                    </tbody>

                </table>

                <!--chart section-->
                <div class="col-md-5">
                    <div class="chart-container">
                        <canvas id="edit_market_trends_chart"></canvas>
                    </div>

                    <div class="chart-container" style="margin-top:15%
                        !important;">
                        <canvas id="edit_market1_trends_chart"></canvas>
                    </div>

                </div>
                <div>
                    <button id="b2" class="btn add-moreTrends" type="button">add other factor</button>
                    <button class="btn btn-primary mb-4 mt-3 ml-4" onclick="market_trends()">Save</button>
                </div>
                <!--row-->
            </div>
            <!--container-->
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

        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->

<script>
            //chart of market trends
            debugger;
            var labels=[];
            var conts=[];
            var total_impacts=[];
            var revenue=[];
            var cost=[];
            var growth=[];

            $('.trend_row').each(function(i, obj) {
            labels.push($(this).children(".factor_trend").children("textarea").text().trim().split(' ').slice(0,2).join(' ')+'...');
            conts.push($(this).children(".cont").children("select").val());
            total_impacts.push($(this).children("td").children(".total_impact").val());
            revenue.push($(this).children(".revenue").children("select").val());
            cost.push($(this).children(".cost").children("select").val());
            growth.push($(this).children(".growth").children("select").val());

            });
            var edit_marketChart = document.getElementById("edit_market_trends_chart");
            var edit_myMarketChart = new Chart(edit_marketChart, {
                type: 'bar',
                data: {
                    labels: labels,
            
                    datasets: [{
                            label: 'Likely To Continu (Low:1- High:5)',
                            data: conts,
                            type: 'line',
                            backgroundColor: "orange",
                            fill: false,
                        }, {
                            label: "Total Impact",
                            data: total_impacts,
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
                            text: 'Total Impact Vs Continuous Probability'
                        }
                    },
                });
            
            
            var edit_marketChart1 = document.getElementById("edit_market1_trends_chart");
            var edit_myMarketChart1 = new Chart(edit_marketChart1, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                            label: "Revenue",
                            backgroundColor: "#0080FF",
                            data: revenue,
                        }, {
                            label: "Cost",
                            backgroundColor: "orange",
                            data: cost,
                        },
                        {
                            label: "Growth",
                            backgroundColor: "grey",
                            data: growth,
                        }
                     ]
                    },
                });
            
            
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
                        var markup = `<tr class="trend_row"  id="marketField${next}">
                                                        <th scope="row" class="tableH factors factor_trend">
                                                            <textarea type="text"  class="form-control dynamicArea" name="factor_trend${next}" ></textarea>
                                                        </th>
                                                        <td class="cont"><select name='cont${next}' class="datasetTrend" datasetTrend="0">                                               
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select></td>
                                                        <td class="revenue"><select name='revenue${next}' class="datasetTrend" datasetTrend="1">
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
                                                        <td class="cost"><select name='cost${next}' class="datasetTrend" datasetTrend="2">
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
                                                                <td class="growth"><select name='growth${next}' class="datasetTrend" datasetTrend="2">
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
                                                                <td class="comp"><select name='comp${next}' class="datasetTrend" datasetTrend="2">
                                                                  
                                                                    <option value="5">5</option>
                                                                    <option value="3">3</option>
                                                                    <option value="1">1</option>
                                                                </select></td>
                                                                <td scope="row" class="tableH comment_trend">
                                                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment_trend${next}"></textarea>
                                                                </td> 
            
                                                        <td>
                                                <input type="text" readonly style="width:30px;" value="3" class="total_impact"  name="total_impact${next}">
                                            </td>
                                                                                                           
                                                                <td id='market_delete-td${next}'>
                                                                    <button id="market_remove${next}" class="btn market_remove-me" onclick="deleteRow(this,${next},1)">delete</button>
            
                                                                </td>
                    
                                                    </tr>`
                        var newIn = markup;
                        var newInput = $(newIn);
                        $(addto).after(newInput);
                       
                        add_label_trend_edit("New Labeldddddd");
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
                        update_label_trend_edit(label, 1, value,1);
            
                        if($(this).attr("name").indexOf('cont') > -1)
                         {
                            update_label_trend_edit(label,0, $(this).val(),1);
            
                         }
                         if($(this).attr("name").indexOf('revenue') > -1)
                         {
                            update_label_trend_edit(label,0, $(this).val(),2);
            
                         }
                         if($(this).attr("name").indexOf('cost') > -1)
                         {
                            update_label_trend_edit(label,1, $(this).val(),2);
            
                         }
                         if($(this).attr("name").indexOf('growth') > -1)
                         {
                            update_label_trend_edit(label,2, $(this).val(),2);
            
                         }
            
                    });
            
            
            </script>

