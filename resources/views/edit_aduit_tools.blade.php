<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
            <p class="step_title">Agility Audit Tool</p>
            <hr>
            <p class="descParagrah">
                    This quick Audit tool is designed to get you thinking seriously about issues that may be affecting your business. The philosophy here is that the more able you are to supply products and services tailored to the needs of your customers, quickly and cost-effectively, the more likely that you can win the competition, and consequently grow.
            </p>
    
            <p class="sectionTitle mt-4">Instructions</p>
            <hr>
            <p class="descParagrah">Please read through the questions and indicate how true you feel each statement to be for your business and its operations.
                </p>
            
            <p class="sectionTitle mt-4">OUTPUT</p>
            <hr>
            <p class="descParagrah">YOU WILL BE GIVEN A QUICK INDICATION OF THE STATE OF THE COMPANY
                </p>
            <!--First Table-->
            <!--Section One: Business and Marketing Strategy-->
            <div id="accordion5" class="accordion mb-3 ml-2 mt-6 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse5">
                        <a class="card-title">
                                Section One: Business
                                and Marketing Strategy
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse5" class="card-body collapse" data-parent="#accordion5">
                        
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH">Not at all for us</th>
                                    <th scope="col" class="tableH">Only slightly true for us</th>
                                    <th scope="col" class="tableH">Moderately true for us</th>
                                    <th scope="col" class="tableH">Mostly True for us</th>
                                    <th scope="col" class="tableH">Absolutely True for us
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="sec1-firstRow">
                                    <th scope="row" class="tableH">We have a reasonably good idea where we want our business to be in 3-5 years
                                    </th>
                                    <td><input type="radio" name="question1" value="1" {{ (isset($audit) && $audit->question1==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question1" value="2" {{ (isset($audit) && $audit->question1==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question1" value="3" {{ (isset($audit) && $audit->question1==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question1" value="4" {{ (isset($audit) && $audit->question1==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question1" value="5" {{ (isset($audit) && $audit->question1==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec1-secondRow">
                                    <th scope="row" class="tableH">Strategically, we tend to be proactive, constantly seeking new areas of growth
                                    </th>
                                    <td><input type="radio" name="question2" value="1" {{ (isset($audit) && $audit->question2==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question2" value="2" {{ (isset($audit) && $audit->question2==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question2" value="3" {{ (isset($audit) && $audit->question2==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question2" value="4" {{ (isset($audit) && $audit->question2==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question2" value="5" {{ (isset($audit) && $audit->question2==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec1-thirdRow">
                                    <th scope="row" class="tableH">We are prepared to trade-off short term goals in the interest of long-term growth
                                    </th>
                                    <td><input type="radio" name="question3" value="1" {{ (isset($audit) && $audit->question3==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question3" value="2" {{ (isset($audit) && $audit->question3==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question3" value="3" {{ (isset($audit) && $audit->question3==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question3" value="4" {{ (isset($audit) && $audit->question3==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question3" value="5" {{ (isset($audit) && $audit->question3==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec1-forthRow">
                                    <th scope="row" class="tableH">Our business and marketing objectives provide clear guidelines for market planning
                                    </th>
                                    <td><input type="radio" name="question4" value="1" {{ (isset($audit) && $audit->question4==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question4" value="2" {{ (isset($audit) && $audit->question4==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question4" value="3" {{ (isset($audit) && $audit->question4==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question4" value="4" {{ (isset($audit) && $audit->question4==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question4" value="5" {{ (isset($audit) && $audit->question4==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec1-fiveRow">
                                    <th scope="row" class="tableH">We have specific targets (volume, profit, ROI) for our strategic objectives
                                    </th>
                                    <td><input type="radio" name="question5" value="1" {{ (isset($audit) && $audit->question5==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question5" value="2" {{ (isset($audit) && $audit->question5==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question5" value="3" {{ (isset($audit) && $audit->question5==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question5" value="4" {{ (isset($audit) && $audit->question5==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question5" value="5" {{ (isset($audit) && $audit->question5==5)? "checked" : "" }}></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <!--Second Table-->
            <!--Section Two: Operational processes-->
            <div id="accordion6" class="accordion mb-3 ml-2 mt-6 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse6">
                        <a class="card-title">
                                    Section Two:
                                    Operational processes
                            </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse6" class="card-body collapse" data-parent="#accordion6">
                        
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH">Not at all for us</th>
                                    <th scope="col" class="tableH">Only slightly true for us</th>
                                    <th scope="col" class="tableH">Moderately true for us</th>
                                    <th scope="col" class="tableH">Mostly True for us</th>
                                    <th scope="col" class="tableH">Absolutely True for us
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="sec2-firstRow">
                                    <th scope="row" class="tableH">It is relatively easy for anyone to track the progress of any order in the system
                                    </th>
                                    <td><input type="radio" name="question6" value="1" {{ (isset($audit) && $audit->question6==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question6" value="2" {{ (isset($audit) && $audit->question6==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question6" value="3" {{ (isset($audit) && $audit->question6==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question6" value="4" {{ (isset($audit) && $audit->question6==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question6" value="5" {{ (isset($audit) && $audit->question6==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec2-secondRow">
                                    <th scope="row" class="tableH">Our machines (any type you use) are well maintained and never tend to break down
                                    </th>
                                    <td><input type="radio" name="question7" value="1" {{ (isset($audit) && $audit->question7==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question7" value="2" {{ (isset($audit) && $audit->question7==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question7" value="3" {{ (isset($audit) && $audit->question7==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question7" value="4" {{ (isset($audit) && $audit->question7==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question7" value="5" {{ (isset($audit) && $audit->question7==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec2-thirdRow">
                                    <th scope="row" class="tableH">We have a labelling system to identify physical items (materials, tools, products, etc.)
                                    </th>
                                    <td><input type="radio" name="question8" value="1" {{ (isset($audit) && $audit->question8==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question8" value="2" {{ (isset($audit) && $audit->question8==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question8" value="3" {{ (isset($audit) && $audit->question8==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question8" value="4" {{ (isset($audit) && $audit->question8==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question8" value="5" {{ (isset($audit) && $audit->question8==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec2-forthRow">
                                    <th scope="row" class="tableH">Our processes (material, product, service, orders, …) flow smoothly, rarely delayed
                                    </th>
                                    <td><input type="radio" name="question9" value="1"  {{ (isset($audit) && $audit->question9==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question9" value="2"  {{ (isset($audit) && $audit->question9==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question9" value="3"  {{ (isset($audit) && $audit->question9==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question9" value="4"  {{ (isset($audit) && $audit->question9==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question9" value="5"  {{ (isset($audit) && $audit->question9==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec2-fiveRow">
                                    <th scope="row" class="tableH">It is very rare for us to amend our schedules (for production or service delivery)
                                    </th>
                                    <td><input type="radio" name="question10" value="1"  {{ (isset($audit) && $audit->question10==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question10" value="2"  {{ (isset($audit) && $audit->question10==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question10" value="3"  {{ (isset($audit) && $audit->question10==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question10" value="4"  {{ (isset($audit) && $audit->question10==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question10" value="5"  {{ (isset($audit) && $audit->question10==5)? "checked" : "" }}></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <!--Third Table-->
            <!--Section Three: Products/Services-->
            <div id="accordion7" class="accordion mb-3 ml-2 mt-6 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse7">
                        <a class="card-title">
                                    Section Three:
                                    Products/Services
                            </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse7" class="card-body collapse" data-parent="#accordion7">
                        
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH">Not at all for us</th>
                                    <th scope="col" class="tableH">Only slightly true for us</th>
                                    <th scope="col" class="tableH">Moderately true for us</th>
                                    <th scope="col" class="tableH">Mostly True for us</th>
                                    <th scope="col" class="tableH">Absolutely True for us
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr id="sec3-firstRow">
                                    <th scope="row" class="tableH">We have a “right first time” policy for outputs (products/services) and achieve them
                                    </th>
                                    <td><input type="radio" name="question11" value="1"  {{ (isset($audit) && $audit->question11==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question11" value="2"  {{ (isset($audit) && $audit->question11==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question11" value="3"  {{ (isset($audit) && $audit->question11==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question11" value="4"  {{ (isset($audit) && $audit->question11==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question11" value="5"  {{ (isset($audit) && $audit->question11==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec3-secondRow">
                                    <th scope="row" class="tableH">Quality of products/services are consistently inspected before delivery
                                    </th>
                                    <td><input type="radio" name="question12" value="1"  {{ (isset($audit) && $audit->question12==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question12" value="2"  {{ (isset($audit) && $audit->question12==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question12" value="3"  {{ (isset($audit) && $audit->question12==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question12" value="4"  {{ (isset($audit) && $audit->question12==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question12" value="5"  {{ (isset($audit) && $audit->question12==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec3-thirdRow">
                                    <th scope="row" class="tableH">Quality of purchased items/services from suppliers are inspected consistently
                                    </th>
                                    <td><input type="radio" name="question13" value="1"  {{ (isset($audit) && $audit->question13==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question13" value="2"  {{ (isset($audit) && $audit->question13==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question13" value="3"  {{ (isset($audit) && $audit->question13==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question13" value="4" {{ (isset($audit) && $audit->question13==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question13" value="5"  {{ (isset($audit) && $audit->question13==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec3-forthRow">
                                    <th scope="row" class="tableH">We rarely have to change the design of our new products or services
                                    </th>
                                    <td><input type="radio" name="question14" value="1"  {{ (isset($audit) && $audit->question14==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question14" value="2"  {{ (isset($audit) && $audit->question14==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question14" value="3"  {{ (isset($audit) && $audit->question14==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question14" value="4"  {{ (isset($audit) && $audit->question14==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question14" value="5"  {{ (isset($audit) && $audit->question14==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec3-fiveRow">
                                    <th scope="row" class="tableH">It is rare to receive returned products or rejected services from customers
                                    </th>
                                    <td><input type="radio" name="question15" value="1"  {{ (isset($audit) && $audit->question15==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question15" value="2"  {{ (isset($audit) && $audit->question15==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question15" value="3"  {{ (isset($audit) && $audit->question15==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question15" value="4"  {{ (isset($audit) && $audit->question15==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question15" value="5"  {{ (isset($audit) && $audit->question15==5)? "checked" : "" }}></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
            <!--Forth Table-->
            <!--Section Four: Customer care and service (quality)-->
            <div id="accordion8" class="accordion mb-3 ml-2 mt-6 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse8">
                        <a class="card-title">
                                    Section Four: Customer
                                    care and service (quality)
                                </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse8" class="card-body collapse" data-parent="#accordion8">
                        
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH">Not at all for us</th>
                                    <th scope="col" class="tableH">Only slightly true for us</th>
                                    <th scope="col" class="tableH">Moderately true for us</th>
                                    <th scope="col" class="tableH">Mostly True for us</th>
                                    <th scope="col" class="tableH">Absolutely True for us
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr id="sec4-firstRow">
                                    <th scope="row" class="tableH">In our firm, exceptional service is defined clearly
                                    </th>
                                    <td><input type="radio" name="question16" value="1"  {{ (isset($audit) && $audit->question16==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question16" value="2"  {{ (isset($audit) && $audit->question16==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question16" value="3"  {{ (isset($audit) && $audit->question16==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question16" value="4"  {{ (isset($audit) && $audit->question16==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question16" value="5"  {{ (isset($audit) && $audit->question16==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec4-secondRow">
                                    <th scope="row" class="tableH">Performance of our employees is regularly measured and monitored
                                    </th>
                                    <td><input type="radio" name="question17" value="1"  {{ (isset($audit) && $audit->question17==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question17" value="2"  {{ (isset($audit) && $audit->question17==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question17" value="3"  {{ (isset($audit) && $audit->question17==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question17" value="4"  {{ (isset($audit) && $audit->question17==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question17" value="5"  {{ (isset($audit) && $audit->question17==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec4-thirdRow">
                                    <th scope="row" class="tableH">Satisfying customers’ needs and desires is well understood by all our employees
                                    </th>
                                    <td><input type="radio" name="question18" value="1"  {{ (isset($audit) && $audit->question18==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question18" value="2"  {{ (isset($audit) && $audit->question18==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question18" value="3"  {{ (isset($audit) && $audit->question18==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question18" value="4"  {{ (isset($audit) && $audit->question18==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question18" value="5"  {{ (isset($audit) && $audit->question18==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec4-forthRow">
                                    <th scope="row" class="tableH">Our employees understand that their behaviour reflects the firm’s image
                                    </th>
                                    <td><input type="radio" name="question19" value="1"  {{ (isset($audit) && $audit->question19==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question19" value="2"  {{ (isset($audit) && $audit->question19==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question19" value="3"  {{ (isset($audit) && $audit->question19==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question19" value="4"  {{ (isset($audit) && $audit->question19==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question19" value="5"  {{ (isset($audit) && $audit->question19==5)? "checked" : "" }}></td>
                                </tr>
    
                            </tbody>
                        </table>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <!--Five Table-->
            <!--Section Five: Competitor Orientation-->
            <div id="accordion9" class="accordion mb-3 ml-2 mt-6 col-md-8">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapse9">
                        <a class="card-title">
                                    Section Five:
                                    Competitor Orientation
                                    </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="collapse9" class="card-body collapse" data-parent="#accordion9">
                        
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="tableH">Not at all for us</th>
                                    <th scope="col" class="tableH">Only slightly true for us</th>
                                    <th scope="col" class="tableH">Moderately true for us</th>
                                    <th scope="col" class="tableH">Mostly True for us</th>
                                    <th scope="col" class="tableH">Absolutely True for us
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr id="sec5-firstRow">
                                    <th scope="row" class="tableH">One of our strengths is that we respond rapidly to threatening competitive actions
                                    </th>
                                    <td><input type="radio" name="question20" value="1"  {{ (isset($audit) && $audit->question20==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question20" value="2"  {{ (isset($audit) && $audit->question20==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question20" value="3"  {{ (isset($audit) && $audit->question20==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question20" value="4"  {{ (isset($audit) && $audit->question20==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question20" value="5"  {{ (isset($audit) && $audit->question20==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec5-secondRow">
                                    <th scope="row" class="tableH">We differentiate ourselves from competition very well
                                    </th>
                                    <td><input type="radio" name="question21" value="1"  {{ (isset($audit) && $audit->question21==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question21" value="2"  {{ (isset($audit) && $audit->question21==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question21" value="3"  {{ (isset($audit) && $audit->question21==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question21" value="4"  {{ (isset($audit) && $audit->question21==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question21" value="5"  {{ (isset($audit) && $audit->question21==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec5-thirdRow">
                                    <th scope="row" class="tableH">We consistently discuss and monitor our competitors’ strengths and strategies
                                    </th>
                                    <td><input type="radio" name="question22" value="1"  {{ (isset($audit) && $audit->question22==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question22" value="2"  {{ (isset($audit) && $audit->question22==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question22" value="3"  {{ (isset($audit) && $audit->question22==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question22" value="4"  {{ (isset($audit) && $audit->question22==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question22" value="5"  {{ (isset($audit) && $audit->question22==5)? "checked" : "" }}></td>
                                </tr>
    
                                <tr id="sec5-forthRow">
                                    <th scope="row" class="tableH">We target customers where we have an opportunity for competitive advantage
                                    </th>
                                    <td><input type="radio" name="question23" value="1"  {{ (isset($audit) && $audit->question23==1)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question23" value="2"  {{ (isset($audit) && $audit->question23==2)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question23" value="3"  {{ (isset($audit) && $audit->question23==3)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question23" value="4"  {{ (isset($audit) && $audit->question23==4)? "checked" : "" }}></td>
                                    <td><input type="radio" name="question23" value="5"  {{ (isset($audit) && $audit->question23==5)? "checked" : "" }}></td>
                                </tr>
    
                            </tbody>
                        </table>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
            <span class="btn btn-primary mb-4 mt-3 ml-4" onclick="audit_tool()">Save</span>
    
    
            <!--OUTCOME ANALYSIS ,Score ,Induction,What To Do-->
            <div class="myDialog" style="display:none;">
                <p style="text-align: center !important;">OUTCOME ANALYSIS
                </p>
                <hr>
                <span class="close-thik" onclick="removeDialog()"></span>
                <form id="scoreForm">
                    <div class="scoreParent">
                        <label> Score:</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="scoreInput" aria-describedby="emailHelp" readonly>
                        </div>
                        <!--<label> Induction:</label>-->
                        <div class="form-group">
                            <textarea class="form-control" id="inductionInput" aria-describedby="emailHelp" readonly></textarea>
                        </div>
                        <label> What To Do:</label>
                        <div class="form-group">
                            <textarea class="form-control" id="toDoInput" aria-describedby="emailHelp" readonly></textarea>
                        </div>
                    </div>
                </form>
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
        <!--second tab-->
    
        <!--container-->
    </div>