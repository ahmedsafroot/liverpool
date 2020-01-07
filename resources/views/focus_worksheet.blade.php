<div class="container-fluid">
    <!--second tab-->
<input type="hidden" value="{{(isset($factors) && count($factors)>0)? count($factors) : 0}}" id="worksheet_count">
    <div class="tab animated">
        <h2 class="step_title">FOCUS Worksheet(Step 4)</h2>
        <hr>
        <p class="descParagrah enlarge">You will EXAMINE the High Scored Uncertainty Factors [STEP 2-2] against the SoftWare factors in STEP 3
        </p>
        <ol class="descParagrah enlarge">
            <li>Provide a score for the IMPACT of each factor [LOW to HIGH; 1-3]
             </li>
        </ol>
        <p class="sectionTitle mt-4">OUTCOME</p>
            <hr>
            <p class="descParagrah">
                    Areas of focus will be identified for you to attempt considering actions in the STEP 6
            </p>
        <div class="mb-3 ml-2 mt-6 col-md-12">
            <table class="table table-striped col-md-7" id="worksheet_tabel" border="1">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"  class="focus-product" colspan="{{ (isset($worksheet_product_feature) && count($worksheet_product_feature)>0)? count($worksheet_product_feature) : 1 }}">Product
                        </th>
                        <th scope="col"  class="focus-people" colspan="{{ (isset($worksheet_people_feature) && count($worksheet_people_feature)>0)? count($worksheet_people_feature) : 1 }}">People
                        </th>
                        <th scope="col"  class="focus-process" colspan="{{ (isset($worksheet_process_feature) && count($worksheet_process_feature)>0)? count($worksheet_process_feature) : 1 }}">Process
                        </th>
                        <th scope="col"  class="focus-operation" colspan="{{ (isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0)? count($worksheet_oper_feature) : 1 }}">Operation</th>
                        <th scope="col" class="focus-organ" colspan="{{ (isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0)? count($worksheet_organ_feature) : 1 }}">Organization</th>
                    </tr>
                    <tr class="focus-columns">
                     <td class="focus_feature"></td>
                       @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0)||
                       (isset($worksheet_people_feature) && count($worksheet_people_feature)>0) ||
                       (isset($worksheet_process_feature) && count($worksheet_process_feature)>0)||
                       (isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0)||
                       (isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                        @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0))
                           @foreach ($worksheet_product_feature as $item)
                              <td>{{$item->feature}}</td>
                           @endforeach
                        @else
                          <td></td>
                        @endif

                        @if((isset($worksheet_people_feature) && count($worksheet_people_feature)>0))
                        @foreach ($worksheet_people_feature as $item)
                           <td>{{$item->feature}}</td>
                        @endforeach
                        @else
                        <td></td>
                        @endif

                        @if((isset($worksheet_process_feature) && count($worksheet_process_feature)>0))
                        @foreach ($worksheet_process_feature as $item)
                           <td>{{$item->feature}}</td>
                        @endforeach
                        @else
                        <td></td>
                        @endif

                        @if((isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                        @foreach ($worksheet_oper_feature as $item)
                           <td>{{$item->feature}}</td>
                        @endforeach
                        @else
                        <td></td>
                        @endif


                        @if((isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0))
                        @foreach ($worksheet_organ_feature as $item)
                           <td>{{$item->feature}}</td>
                        @endforeach
                        @else
                        <td></td>
                        @endif

                       



                       @endif


                    </tr>
                </thead>
                <tbody>
                    <div id="worksheet_factors">
                        <tr id="worksheet_factor1">
                            <th scope="row" class="tableH worksheet_total">
                                <textarea type="text" class="form-control
                                    bea_txtarea" name="trub_factor1_txtarea" readonly>Total Score</textarea>
                            </th>

                            @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0)||
                            (isset($worksheet_people_feature) && count($worksheet_people_feature)>0) ||
                            (isset($worksheet_process_feature) && count($worksheet_process_feature)>0)||
                            (isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0)||
                            (isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                             @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0))
                                @foreach ($worksheet_product_feature as $item)
                                   <td>
                                   <input type="text" readonly="" style="width:30px;" class={{"total_".$item->feature}} value="{{$item->sum}}">
                                   </td>
                                @endforeach
                             @else
                               <td></td>
                             @endif
     
                             @if((isset($worksheet_people_feature) && count($worksheet_people_feature)>0))
                             @foreach ($worksheet_people_feature as $item)
                                    <td>
                                    <input type="text" readonly="" style="width:30px;" class={{"total_".$item->feature}} value="{{$item->sum}}">
                                    </td>
                             @endforeach
                             @else
                             <td></td>
                             @endif
     
                             @if((isset($worksheet_process_feature) && count($worksheet_process_feature)>0))
                             @foreach ($worksheet_process_feature as $item)
                                    <td>
                                    <input type="text" readonly="" style="width:30px;" class={{"total_".$item->feature}} value="{{$item->sum}}">
                                    </td>                             
                             @endforeach
                             @else
                             <td></td>
                             @endif
     
                             @if((isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                             @foreach ($worksheet_oper_feature as $item)
                                    <td>
                                    <input type="text" readonly="" style="width:30px;" class={{"total_".$item->feature}} value="{{$item->sum}}">
                                    </td>
                             @endforeach
                             @else
                             <td></td>
                             @endif
     
                             
                             @if((isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0))
                             @foreach ($worksheet_organ_feature as $item)
                                    <td>
                                    <input type="text" readonly="" style="width:30px;" class={{"total_".$item->feature}} value="{{$item->sum}}">
                                    </td>
                             @endforeach
                             @else
                             <td></td>
                             @endif
     
                            
     
     
     
                            @endif
    
                        </tr>

                        <tr id="disabledFactor">
                            <th><b>Factors</b></th>
                        </tr>
                        @if(isset($factors) && count($factors)>0)
                          @for($i = 0; $i<count($factors); $i++)
                          <tr id="{{'worksheet_factor'.($i+1)}}" class="work_row">
                              <th scope="row" class="tableH tru_factors">
                              <textarea type="text" class="form-control bea_txtarea" name="{{'worksheet_factor'.($i+1)}}" readonly="">{{$factors[$i]->factor}}</textarea>
                              </th>
                              @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0)||
                              (isset($worksheet_people_feature) && count($worksheet_people_feature)>0) ||
                              (isset($worksheet_process_feature) && count($worksheet_process_feature)>0)||
                              (isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0)||
                              (isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                               @if((isset($worksheet_product_feature) && count($worksheet_product_feature)>0))
                                      <?php $j=0;?>
                                  @foreach ($worksheet_product_feature as $item)
                                   <td>
                                        <select type="Product" feature="{{$item->feature}}" class="worksheet_select">
                                            <option value="1" {{ ($factors[$i]->scores_prodcut[$j]["score"]==1)? "selected=selected" : "" }}>1</option>
                                            <option value="2" {{ ($factors[$i]->scores_prodcut[$j]["score"]===2)? "selected=selected" : "" }}>2</option>
                                            <option value="3" {{ ($factors[$i]->scores_prodcut[$j]["score"]===3)? "selected=selected" : "" }}>3</option>
                                         </select>
                                    </td>
                                    <?php $j++;?>
                                  @endforeach
                               @else
                                 <td></td>
                               @endif
       
                               @if((isset($worksheet_people_feature) && count($worksheet_people_feature)>0))
                               <?php $j=0;?>
                               @foreach ($worksheet_people_feature as $item)
                                <td>
                                     <select type="People" feature="{{$item->feature}}" class="worksheet_select">
                                         <option value="1" {{ ($factors[$i]->scores_people[$j]["score"]==1)? "selected=selected" : "" }}>1</option>
                                         <option value="2" {{ ($factors[$i]->scores_people[$j]["score"]===2)? "selected=selected" : "" }}>2</option>
                                         <option value="3" {{ ($factors[$i]->scores_people[$j]["score"]===3)? "selected=selected" : "" }}>3</option>
                                      </select>
                                 </td>
                                 <?php $j++;?>
                               @endforeach
                               @else
                               <td></td>
                               @endif
       
                               @if((isset($worksheet_process_feature) && count($worksheet_process_feature)>0))
                               <?php $j=0;?>
                               @foreach ($worksheet_process_feature as $item)
                                <td>
                                     <select type="Process" feature="{{$item->feature}}" class="worksheet_select">
                                         <option value="1" {{ ($factors[$i]->scores_process[$j]["score"]==1)? "selected=selected" : "" }}>1</option>
                                         <option value="2" {{ ($factors[$i]->scores_process[$j]["score"]===2)? "selected=selected" : "" }}>2</option>
                                         <option value="3" {{ ($factors[$i]->scores_process[$j]["score"]===3)? "selected=selected" : "" }}>3</option>
                                      </select>
                                 </td>
                                 <?php $j++;?>
                               @endforeach
                               @else
                               <td></td>
                               @endif
       
                               @if((isset($worksheet_oper_feature) && count($worksheet_oper_feature)>0))
                               <?php $j=0;?>
                               @foreach ($worksheet_oper_feature as $item)
                                <td>
                                     <select type="Operation" feature="{{$item->feature}}" class="worksheet_select">
                                         <option value="1" {{ ($factors[$i]->scores_oper[$j]["score"]==1)? "selected=selected" : "" }}>1</option>
                                         <option value="2" {{ ($factors[$i]->scores_oper[$j]["score"]===2)? "selected=selected" : "" }}>2</option>
                                         <option value="3" {{ ($factors[$i]->scores_oper[$j]["score"]===3)? "selected=selected" : "" }}>3</option>
                                      </select>
                                 </td>
                                 <?php $j++;?>
                               @endforeach
                               @else
                               <td></td>
                               @endif
       
                               
                               @if((isset($worksheet_organ_feature) && count($worksheet_organ_feature)>0))
                               <?php $j=0;?>
                               @foreach ($worksheet_organ_feature as $item)
                                <td>
                                     <select type="Organisation" feature="{{$item->feature}}" class="worksheet_select">
                                         <option value="1" {{ ($factors[$i]->scores_organ[$j]["score"]==1)? "selected=selected" : "" }}>1</option>
                                         <option value="2" {{ ($factors[$i]->scores_organ[$j]["score"]===2)? "selected=selected" : "" }}>2</option>
                                         <option value="3" {{ ($factors[$i]->scores_organ[$j]["score"]===3)? "selected=selected" : "" }}>3</option>
                                      </select>
                                 </td>
                                 <?php $j++;?>
                               @endforeach
                               @else
                               <td></td>
                               @endif
       
                              
       
       
       
                              @endif
                              
                            
                              
                              </tr>
                          @endfor
                        @endif
                       
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