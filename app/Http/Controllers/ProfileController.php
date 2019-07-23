<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;
use App\auditTool;
use App\leaderShip;
use App\trend;
use App\experience;
use App\Bea;
use App\Turbulences;
use App\Ansoff;
use App\action;
use App\SW;
use App\worksheet;
use App\sheets;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        Session::flush();
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  
    public function store_profile(Request $request)
    {
       if(empty($request->userName))
         {
             $message="Profile Name is Required";
             $background="bg-danger";
         }
         else{
            $ret= $this->create_profile($request);
            if($ret==1)
            {
                $message="Profile Edited Succefully";
                $background="bg-success";

            }
            else
            {
                $message="New Profile Created Succefully";
                $background="bg-success";

            }
         }

         return response()->json(['success'=>$message,'background'=>$background]);


    }
     public function create_profile($data)
    {
        if(session()->has('profileid'))
        {
            $profile=Profile::find(Session::get('profileid'));
            $ret=1;
        }
        else
        {
            $profile =new Profile;
            $ret=2;
        }
        $profile->userName=$data->userName;
        $profile->userParent=$data->userParent;
        $profile->userAddress=$data->userAddress;
        $profile->userTelephone=$data->userTelephone;
        $profile->userFax=$data->userFax;
        $profile->userUrl=$data->userUrl;
        $profile->userNum=$data->userNum;
        $profile->userAppro=$data->userAppro;
        $profile->userYears=$data->userYears;
        $profile->userPortfolio=$data->userPortfolio;
        $profile->marketCK1=$data->marketCK1;
        $profile->marketCK2=$data->marketCK2;
        $profile->marketCK3=$data->marketCK3;
        $profile->marketCK4=$data->marketCK4;
        $profile->marketCK5=$data->marketCK5;
        $profile->marketOther=$data->marketOther;
        $profile->userExport=$data->userExport;
        $profile->userImport=$data->userImport;
        $profile->userContact=$data->userContact;
        $profile->userContactNo=$data->userContactNo;
        $profile->companyStatus=$data->companyStatus;
        $profile->companyStatusOther=$data->companyStatusOther;
        $profile->legalStructure=$data->legalStructure;
        $profile->bussinessStructure=$data->bussinessStructure;
        $profile->marketStructure=$data->marketStructure;
        $profile->userLocation=$data->userLocation;
        $profile->prodLine1=$data->prodLine1;
        $profile->prodLine2=$data->prodLine2;
        $profile->prodLine3=$data->prodLine3;
        $profile->services=$data->services;
        $profile->companyProdOther=$data->companyProdOther;
        $profile->marketing=$data->marketing;
        $profile->procurement=$data->procurement;
        $profile->development=$data->development;
        $profile->customerServices=$data->customerServices;
        $profile->finance=$data->finance;
        $profile->sales=$data->sales;
        $profile->distribution=$data->distribution;
        $profile->manufacturing=$data->manufacturing;
        $profile->hrm=$data->hrm;
        $profile->dedicated=$data->dedicated;
        $profile->engineeredToOrder=$data->engineeredToOrder;
        $profile->customised=$data->customised;
        $profile->assemblies=$data->assemblies;
        $profile->furtherProcessing=$data->furtherProcessing;
        $profile->massProduced=$data->massProduced;
        $profile->massCustomised=$data->massCustomised;
        $profile->modular=$data->modular;
        $profile->consumerGoods=$data->consumerGoods;
        $profile->directConsumers=$data->directConsumers;
        $profile->directOem=$data->directOem;
        $profile->moreProcessing=$data->moreProcessing;
        $profile->retailers=$data->retailers;
        $profile->distributors=$data->distributors;
        $profile->kibs=$data->kibs;
        $profile->traditional=$data->traditional;
        $profile->consumerServices=$data->consumerServices;
        $profile->publicServices=$data->publicServices;
        $profile->nonProfit=$data->nonProfit;
        $profile->save();
        Session::put('profileid', $profile->id);
        return $ret;
    }
    public function store_audit_tool(Request $request)
    {
            
            $ret= $this->create_audit_tool($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";

            }
            else if($ret==1)
            {
                $message="Audit Tool Edited Succefully";
                $background="bg-success";

            }
            else
            {
                $message="new Audit Tool created Succefully";
                $background="bg-success";

            }
         

        return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_audit_tool($data)
    {
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }
        if(session()->has('audit_tool_id'))
        {
            $audit=auditTool::find(Session::get('audit_tool_id'));
            $ret=1;
        }
        else
        {
            $audit =new auditTool;
            $ret=2;
        }
        $audit->profileid=$profileid;
        $audit->question1=$data->question1;
        $audit->question2=$data->question2;
        $audit->question3=$data->question3;
        $audit->question4=$data->question4;
        $audit->question5=$data->question5;
        $audit->question6=$data->question6;
        $audit->question7=$data->question7;
        $audit->question8=$data->question8;
        $audit->question9=$data->question9;
        $audit->question10=$data->question10;
        $audit->question11=$data->question11;
        $audit->question12=$data->question12;
        $audit->question13=$data->question13;
        $audit->question14=$data->question14;
        $audit->question15=$data->question15;
        $audit->question16=$data->question16;
        $audit->question17=$data->question17;
        $audit->question18=$data->question18;
        $audit->question19=$data->question19;
        $audit->question20=$data->question20;
        $audit->question21=$data->question21;
        $audit->question22=$data->question22;
        $audit->question23=$data->question23;


        $audit->save();
        Session::put('audit_tool_id', $audit->id);
        return $ret;
    }

    public function store_industry_leadership(Request $request)
    {
       
            $ret= $this->create_leader_ship($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";
            }
            else if($ret==1)
            {
                $message="Industry LeaderShip Edited Succefully";
                $background="bg-success";
            }
            else
            {
                $message="New Industry LeaderShip Created Succefully";
                $background="bg-success";
            }
         

            return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_leader_ship($data)
    {
        $factor=$data->factor;
        $sector=$data->sector;
        $attractive=$data->attractive;
        $effort=$data->effort;
        $position=$data->position;
        $comment=$data->comment;
        $count=count($factor);
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('leader_ship_id'))
        {
            leaderShip::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $newLeaderShip=new leaderShip;
            $newLeaderShip->profileid=$profileid;
            $newLeaderShip->question=$factor[$i];
            $newLeaderShip->attractiveness=$attractive[$i];
            $newLeaderShip->sector=$sector[$i];
            $newLeaderShip->mainting=$effort[$i];
            $newLeaderShip->position=$position[$i];
            if(!empty($comment[$i]))
            $newLeaderShip->comment=$comment[$i];
            else
            $newLeaderShip->comment="";

            $newLeaderShip->save();
        }
      
        Session::put('leader_ship_id', 1);
        return $ret;
    }
    
    public function store_market_trend(Request $request)
    {
       
            $ret= $this->create_market_trend($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";
            }
            else if($ret==1)
            {
                $message="Market Trends Edited Succefully";
                $background="bg-success";
            }
            else
            {
                $message="New Market Trend Created Succefully";
                $background="bg-success";
            }
         

            return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_market_trend($data)
    {
        $observe=$data->observe;
        $cont=$data->cont;
        $revenue=$data->revenue;
        $cost=$data->cost;
        $growth=$data->growth;
        $comp=$data->comp;
        $comment=$data->comment;
        $count=count($observe);
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('market_trend_id'))
        {
            trend::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $trend=new trend;
            $trend->profileid=$profileid;
            $trend->observed=$observe[$i];
            $trend->cont=$cont[$i];
            $trend->revenue=$revenue[$i];
            $trend->cost=$cost[$i];
            $trend->growth=$growth[$i];
            $trend->comp=$comp[$i];
            if(!empty($comment[$i]))
            $trend->notes=$comment[$i];
            else
            $trend->notes="";

            $trend->save();
        }
      
        Session::put('market_trend_id', 1);
        return $ret;
    }
    public function store_customer_experience(Request $request)
    {
        $ret= $this->create_customer_experience($request);
        if($ret==3)
        {
            $message="You Must create Profile before";
            $background="bg-danger";
        }
        else if($ret==1)
        {
            $message="Customer Experience Edited Succefully";
            $background="bg-success";
        }
        else
        {
            $message="New Customer Experience Created Succefully";
            $background="bg-success";
        }
     

        return response()->json(['success'=>$message,'background'=>$background]);
    }
    public function create_customer_experience($data)
    {
        $interface=$data->interface;
        $how=$data->how;
        $poten=$data->poten;
     
        $count=count($interface);
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('customer_experience_id'))
        {
            experience::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $experience=new experience;
            $experience->profileid=$profileid;
            $experience->interface=$interface[$i];
            $experience->how=$how[$i];
            $experience->potientail=$poten[$i];
     

            $experience->save();
        }
      
        Session::put('customer_experience_id', 1);
        return $ret;   
    }

    public function report()
    {
        $profiles=Profile::all();
        return view("report",compact('profiles'));
    }
    public function profile_details($id)
    {
        $profile=Profile::find($id);
        $market_sector="";
        if($profile->marketCK1==1)
        {
              $market_sector="Foofstuffs, beverages & tobacco";
        }
        if($profile->marketCK2==1)
        {
              if($market_sector!="")
              $market_sector=$market_sector." && Textiles, footwear & wearing apparel";
              else
              $market_sector=$market_sector."Textiles, footwear & wearing apparel";
        }
        if($profile->marketCK3==1)
        {
            if($market_sector!="")
            $market_sector=$market_sector." && General Engineering";
            else
            $market_sector=$market_sector."General Engineering";
        }
        if($profile->marketCK4==1)
        {
            if($market_sector!="")
            $market_sector=$market_sector." && Paper products, printing & publishing";
            else
            $market_sector=$market_sector."Paper products, printing & publishing";
        }
        if($profile->marketCK5==1)
        {
            if($market_sector!="")
            $market_sector=$market_sector." && ".$profile->marketOther;
            else
            $market_sector=$market_sector.$profile->marketOther;
        }
        if($profile->companyStatus==1)
        {
          $profile->status="Startup";
        }
        else if($profile->companyStatus==2)
        {
            $profile->status="Established";

        }
        else if($profile->companyStatus==3)
        {
            $profile->status="Competitive";

        }
        else if($profile->companyStatus==4)
        {
            $profile->status="Market leader";

        }
        else if($profile->companyStatus==5)
        {
            $profile->status=$profile->companyStatusOther;

        }
        else
        {
            $profile->status="";

        }
        if($profile->legalStructure==1)
        {
          $profile->legal_structure="Limited";
        }
        else if($profile->legalStructure==2)
        {
            $profile->legal_structure="Sole trader";

        }
        else if($profile->legalStructure==3)
        {
            $profile->legal_structure="Limited Liability Partnership";

        }
        else if($profile->legalStructure==4)
        {
            $profile->legal_structure="Corporation";

        }
        else if($profile->legalStructure==5)
        {
            $profile->legal_structure="Non-profit";

        }
        else
        {
            $profile->legal_structure="";

        }
        if($profile->bussinessStructure==1)
        {
          $profile->business_structure="Functional";
        }
        else if($profile->bussinessStructure==2)
        {
            $profile->business_structure="Divisional";

        }
        else if($profile->bussinessStructure==3)
        {
            $profile->business_structure="Matrix";

        }
        else if($profile->bussinessStructure==4)
        {
            $profile->business_structure="Hybrid";

        }
        else
        {
            $profile->business_structure="";

        }
        if($profile->marketStructure==1)
        {
          $profile->market_structure="Monopoly";
        }
        else if($profile->marketStructure==2)
        {
            $profile->market_structure="Oligopoly";

        }
        else if($profile->marketStructure==3)
        {
            $profile->market_structure="Competitive";

        }
        else if($profile->marketStructure==4)
        {
            $profile->market_structure="Contestable";

        }
        else
        {
            $profile->market_structure="";

        }
        if($profile->prodLine1==1)
        {
          $profile->line1="Growing demand";
        }
        else if($profile->prodLine1==2)
        {
            $profile->line1="Stable demand";

        }
        else if($profile->prodLine1==3)
        {
            $profile->line1="Declining demand";

        }
        else
        {
            $profile->line1="";

        }
        if($profile->prodLine2==1)
        {
          $profile->line2="Growing demand";
        }
        else if($profile->prodLine2==2)
        {
            $profile->line2="Stable demand";

        }
        else if($profile->prodLine2==3)
        {
            $profile->line2="Declining demand";

        }
        else
        {
            $profile->line2="";

        }
        if($profile->prodLine3==1)
        {
          $profile->line1="Growing demand";
        }
        else if($profile->prodLine3==2)
        {
            $profile->line3="Stable demand";

        }
        else if($profile->prodLine3==3)
        {
            $profile->line3="Declining demand";

        }
        else
        {
            $profile->line3="";

        }
        if($profile->services==1)
        {
          $profile->services="Growing demand";
        }
        else if($profile->services==2)
        {
            $profile->services="Stable demand";

        }
        else if($profile->services==3)
        {
            $profile->services="Declining demand";

        }
        else if($profile->services==4)
        {
            $profile->services=$profile->companyProdOther;

        }
        else
        {
            $profile->services="";
        }
        $conducted="";
        if($profile->marketing==1)
        {
              $conducted ="Marketing";
        }
        if($profile->procurement==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Procurement";
              else
              $conducted =$conducted ."Procurement";
        }
        if($profile->development==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Product Development";
              else
              $conducted =$conducted ."Product Development";
        }
        if($profile->customerServices==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Customer Services";
              else
              $conducted =$conducted ."Customer Services";
        }
        if($profile->finance==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Accounting/Finance";
              else
              $conducted =$conducted ."Accounting/Finance";
        }
        if($profile->sales==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Sales";
              else
              $conducted =$conducted ."Sales";
        }
        if($profile->distribution==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Distribution";
              else
              $conducted =$conducted ."Distribution";
        }
        if($profile->manufacturing==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Manufacturing";
              else
              $conducted =$conducted ."Manufacturing";
        }
        if($profile->hrm==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && HRM";
              else
              $conducted =$conducted ."HRM";
        }
        if($profile->dedicated==1)
        {
              if($conducted !="")
              $conducted =$conducted ." && Dedicated IT";
              else
              $conducted =$conducted ."Dedicated IT";
        }
        $main_products="";
        if($profile->engineeredToOrder==1)
        {
              $main_products ="Engineered-to-order";
        }
        if($profile->customised==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Customised";
              else
              $main_products =$main_products ."Customised";
        }
        if($profile->assemblies==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Standard compenents/assemblies";
              else
              $main_products =$main_products ."Standard compenents/assemblies";
        }
        if($profile->furtherProcessing==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Requires further processing";
              else
              $main_products =$main_products ."Requires further processing";
        }
        if($profile->massProduced==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Mass Produced";
              else
              $main_products =$main_products ."Mass Produced";
        }
        if($profile->massCustomised==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Mass customised";
              else
              $main_products =$main_products ."Mass customised";
        }
        if($profile->modular==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Modular";
              else
              $main_products =$main_products ."Modular";
        }
        if($profile->consumerGoods==1)
        {
              if($main_products !="")
              $main_products =$main_products ." && Consumer goods";
              else
              $main_products =$main_products ."Consumer goods";
        }

        if($profile->directConsumers==1)
        {
          $profile->consumer="<10 %";
        }
        else if($profile->directConsumers==2)
        {
            $profile->consumer="10 - 30 %";

        }
        else if($profile->directConsumers==3)
        {
            $profile->consumer="30 - 50 %";

        }
        else if($profile->directConsumers==4)
        {
            $profile->consumer="50 - 70 %";

        }
        else if($profile->directConsumers==5)
        {
            $profile->consumer="70 - 90 %";

        }
        else if($profile->directConsumers==6)
        {
            $profile->consumer="> 90 %";

        }
        else
        {
            $profile->consumer="";
        }
        if($profile->directOem==1)
        {
          $profile->oem="<10 %";
        }
        else if($profile->directOem==2)
        {
            $profile->oem="10 - 30 %";

        }
        else if($profile->directOem==3)
        {
            $profile->oem="30 - 50 %";

        }
        else if($profile->directOem==4)
        {
            $profile->oem="50 - 70 %";

        }
        else if($profile->directOem==5)
        {
            $profile->oem="70 - 90 %";

        }
        else if($profile->directOem==6)
        {
            $profile->oem="> 90 %";

        }
        else
        {
            $profile->oem="";
        }
        if($profile->moreProcessing==1)
        {
          $profile->processing="<10 %";
        }
        else if($profile->moreProcessing==2)
        {
            $profile->processing="10 - 30 %";

        }
        else if($profile->moreProcessing==3)
        {
            $profile->processing="30 - 50 %";

        }
        else if($profile->moreProcessing==4)
        {
            $profile->processing="50 - 70 %";

        }
        else if($profile->moreProcessing==5)
        {
            $profile->processing="70 - 90 %";

        }
        else if($profile->moreProcessing==6)
        {
            $profile->processing="> 90 %";

        }
        else
        {
            $profile->processing="";
        }
        if($profile->retailers==1)
        {
          $profile->retailers="<10 %";
        }
        else if($profile->retailers==2)
        {
            $profile->retailers="10 - 30 %";

        }
        else if($profile->retailers==3)
        {
            $profile->retailers="30 - 50 %";

        }
        else if($profile->retailers==4)
        {
            $profile->retailers="50 - 70 %";

        }
        else if($profile->retailers==5)
        {
            $profile->retailers="70 - 90 %";

        }
        else if($profile->retailers==6)
        {
            $profile->retailers="> 90 %";

        }
        else
        {
            $profile->retailers="";
        }
        if($profile->distributors==1)
        {
          $profile->distributors="<10 %";
        }
        else if($profile->distributors==2)
        {
            $profile->distributors="10 - 30 %";

        }
        else if($profile->distributors==3)
        {
            $profile->distributors="30 - 50 %";

        }
        else if($profile->distributors==4)
        {
            $profile->distributors="50 - 70 %";

        }
        else if($profile->distributors==5)
        {
            $profile->distributors="70 - 90 %";

        }
        else if($profile->distributors==6)
        {
            $profile->distributors="> 90 %";

        }
        else
        {
            $profile->distributors="";
        }

        $types_services="";
        if($profile->kibs==1)
        {
              $types_services ="B2B (KIBS)";
        }
        if($profile->traditional==1)
        {
              if($types_services !="")
              $types_services =$types_services ." && B2B (traditional)";
              else
              $types_services =$types_services ."B2B (traditional)";
        }
        if($profile->consumerServices==1)
        {
              if($types_services !="")
              $types_services =$types_services ." && Consumer services";
              else
              $types_services =$types_services ."Consumer services";
        }
        if($profile->publicServices==1)
        {
              if($types_services !="")
              $types_services =$types_services ." && Public services";
              else
              $types_services =$types_services ."Public services";
        }
        if($profile->nonProfit==1)
        {
              if($types_services !="")
              $types_services =$types_services ." && Non-for-Profit";
              else
              $types_services =$types_services ."Non-for-Profit";
        }
       
          $profile->types_services=$types_services;
          $profile->main_products=$main_products;
          $profile->conducted=$conducted;
          $profile->market_sector=$market_sector;
        return view("details",compact('profile'));
    }
    public function audit_tools_details($id)
    {
       $audit=auditTool::where("profileid",$id)->first();
       $myvalues=array("Not at all for us","Only slightly true for us","Moderately true for us","Mostly True for us","Absolutely True for us");
       if($audit!=NULL)
       {
           
       if($audit->question1!=0)
       $audit->question1=$myvalues[$audit->question1-1];
       else
       $audit->question1="";

       if($audit->question2!=0)
       $audit->question2=$myvalues[$audit->question2-1];
       else
       $audit->question2="";

       if($audit->question3!=0)
       $audit->question3=$myvalues[$audit->question3-1];
       else
       $audit->question3="";

       if($audit->question4!=0)
       $audit->question4=$myvalues[$audit->question4-1];
       else
       $audit->question4="";

       if($audit->question5!=0)
       $audit->question5=$myvalues[$audit->question5-1];
       else
       $audit->question5="";

       if($audit->question6!=0)
       $audit->question6=$myvalues[$audit->question6-1];
       else
       $audit->question6="";

       if($audit->question7!=0)
       $audit->question7=$myvalues[$audit->question7-1];
       else
       $audit->question7="";

       if($audit->question8!=0)
       $audit->question8=$myvalues[$audit->question8-1];
       else
       $audit->question8="";

       if($audit->question9!=0)
       $audit->question9=$myvalues[$audit->question9-1];
       else
       $audit->question9="";

       if($audit->question10!=0)
       $audit->question10=$myvalues[$audit->question10-1];
       else
       $audit->question10="";

       if($audit->question11!=0)
       $audit->question11=$myvalues[$audit->question11-1];
       else
       $audit->question11="";

       if($audit->question12!=0)
       $audit->question12=$myvalues[$audit->question12-1];
       else
       $audit->question12="";

       if($audit->question13!=0)
       $audit->question13=$myvalues[$audit->question13-1];
       else
       $audit->question13="";

       if($audit->question14!=0)
       $audit->question14=$myvalues[$audit->question14-1];
       else
       $audit->question14="";

       if($audit->question15!=0)
       $audit->question15=$myvalues[$audit->question15-1];
       else
       $audit->question15="";

       if($audit->question16!=0)
       $audit->question16=$myvalues[$audit->question16-1];
       else
       $audit->question16="";

       if($audit->question17!=0)
       $audit->question17=$myvalues[$audit->question17-1];
       else
       $audit->question17="";

       if($audit->question18!=0)
       $audit->question18=$myvalues[$audit->question18-1];
       else
       $audit->question18="";

       if($audit->question19!=0)
       $audit->question19=$myvalues[$audit->question19-1];
       else
       $audit->question19="";

       if($audit->question20!=0)
       $audit->question20=$myvalues[$audit->question20-1];
       else
       $audit->question20="";

       if($audit->question21!=0)
       $audit->question21=$myvalues[$audit->question21-1];
       else
       $audit->question21="";

       if($audit->question22!=0)
       $audit->question22=$myvalues[$audit->question22-1];
       else
       $audit->question22="";

       if($audit->question23!=0)
       $audit->question23=$myvalues[$audit->question23-1];
       else
       $audit->question23="";
       }
       

       return view("audit_details",compact('audit'));
    }

    public function industry_leadership_details($id)
    {
       $ships=leaderShip::where("profileid",$id)->get();
       return view("leaderships_details",compact('ships'));

    }

    public function market_trends_details($id)
    {
       $trends=trend::where("profileid",$id)->get();
       return view("trends_details",compact('trends'));

    }
    public function customer_experience_details($id)
    {
        $factors=experience::where("profileid",$id)->get();
        return view("customer_experience_details",compact('factors'));  
    }


    public function store_bea(Request $request)
    {
        $ret= $this->create_bea($request);
        if($ret==3)
        {
            $message="You Must create Profile before";
            $background="bg-danger";
        }
        else if($ret==1)
        {
            $message="BEA-Trublance Impact Edited Succefully";
            $background="bg-success";
        }
        else
        {
            $message="New BEA-Trublance Impact Created Succefully";
            $background="bg-success";
        }
     

        return response()->json(['success'=>$message,'background'=>$background]);
    }
    public function create_bea($data)
    {
            $factor=$data->factor;
            $timeLenght=$data->timeLenght;
            $inc_dec=$data->inc_dec;
            $freq=$data->freq;
            $thread_oper=$data->thread_oper;
            $sev=$data->sev;
            $type=$data->type;
     
        $count=count($factor);
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('bea_id'))
        {
            Bea::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $bea=new Bea;
            $bea->profileid=$profileid;
            $bea->factor=$factor[$i];
            $bea->timeLenght=$timeLenght[$i];
            $bea->inc_dec=$inc_dec[$i];
            $bea->freq=$freq[$i];
            $bea->thread_oper=$thread_oper[$i];
            $bea->sev=$sev[$i];
            $bea->type=$type[$i];


            $bea->save();
        }
      
        Session::put('bea_id', 1);
        return $ret;   
    }

    public function bea_details($id)
    {
       $beas=Bea::where("profileid",$id)->get();
       return view("bea_details",compact('beas'));

    }

    public function store_trublance(Request $request)
    {
       
            $ret= $this->create_store_trublance($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";
            }
            else if($ret==1)
            {
                $message="Turbulence Factors Edited Succefully";
                $background="bg-success";
            }
            else
            {
                $message="New Turbulence Factors Created Succefully";
                $background="bg-success";
            }
         

            return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_store_trublance($data)
    {
        $factor=$data->factor;
        $revenue=$data->revenue;
        $cost=$data->cost;
        $growth=$data->growth;
        $comp=$data->comp;
        $control=$data->control;
        if($factor!=NULL)
        $count=count($factor);
        else
        $count=0;
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('trubluence_id'))
        {
            Turbulences::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $trub=new Turbulences;
            $trub->profileid=$profileid;
            $trub->factor=$factor[$i];
            $trub->control=$control[$i];
            $trub->revenue=$revenue[$i];
            $trub->cost=$cost[$i];
            $trub->growth=$growth[$i];
            $trub->comp=$comp[$i];
            $trub->save();
        }
      
        Session::put('trubluence_id', 1);
        return $ret;
    }

    public function trub_details($id)
    {
        $trubs=Turbulences::where("profileid",$id)->get();
        return view("trubs_details",compact('trubs'));
    }

    public function store_ansoff(Request $request)
    {
       
            $ret= $this->create_ansoff($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";
            }
            else if($ret==1)
            {
                $message="Ansoff Edited Succefully";
                $background="bg-success";
            }
            else
            {
                $message="New Ansoff Created Succefully";
                $background="bg-success";
            }
         

            return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_ansoff($data)
    {
        $factor=$data->factor;
        $potential=$data->potential;
        $control=$data->control;
        $urgency=$data->urgency;
        $risk=$data->risk;
        $time=$data->time;
        $type=$data->type;
        $resource=$data->resource;
        $invest=$data->invest;

        if($factor!=NULL)
        $count=count($factor);
        else
        $count=0;
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('ansoff_id'))
        {
            Ansoff::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $Ansoff=new Ansoff;
            $Ansoff->profileid=$profileid;
            $Ansoff->factor=$factor[$i];
            $Ansoff->potential=$potential[$i];
            $Ansoff->resource=$resource[$i];
            $Ansoff->control=$control[$i];
            $Ansoff->invest=$invest[$i];
            $Ansoff->risk=$risk[$i];
            $Ansoff->urgency=$urgency[$i];
            $Ansoff->time=$time[$i];
            $Ansoff->type=$type[$i];
            $Ansoff->save();
        }
      
        Session::put('ansoff_id', 1);
        return $ret;
    }
    public function ansoff_details($id)
    {
        $ansoffs=Ansoff::where("profileid",$id)->get();
       return view("ansoff_details",compact('ansoffs'));
   
    }

    public function store_action(Request $request)
    {
       
            $ret= $this->create_action($request);
            if($ret==3)
            {
                $message="You Must create Profile before";
                $background="bg-danger";
            }
            else if($ret==1)
            {
                $message="Actions Edited Succefully";
                $background="bg-success";
            }
            else
            {
                $message="New Actions Created Succefully";
                $background="bg-success";
            }
         

            return response()->json(['success'=>$message,'background'=>$background]);

    }

    public function create_action($data)
    {
        $task=$data->task;
        $owner=$data->cont;
        $date=$data->date;
        $count=count($task);

        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('action_id'))
        {
            action::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $action=new action;
            $action->profileid=$profileid;
            $action->task=$task[$i];
            $action->owner=$owner[$i];
            $action->dueDate=$date[$i];


            $action->save();
        }
      
        Session::put('action_id', 1);
        return $ret;
    }

    public function action_details($id)
    {
        $actions=action::where("profileid",$id)->get();
        return view("action_details",compact('actions'));
   
    }
    public function store_sw(Request $request)
    {
        $ret= $this->create_sw($request);
        if($ret==3)
        {
            $message="You Must create Profile before";
            $background="bg-danger";
        }
        else if($ret==1)
        {
            $message="SW Edited Succefully";
            $background="bg-success";
        }
        else
        {
            $message="New SW Created Succefully";
            $background="bg-success";
        }
     

        return response()->json(['success'=>$message,'background'=>$background]);   
    }

    public function create_sw($data)
    {
        $factor=$data->factor;
        $strengths=$data->str;
        $weaknesses=$data->weak;
        $comp=$data->comment;
        $priority=$data->prio;
        $type=$data->type;


        if($factor!=NULL)
        $count=count($factor);
        else
        $count=0;
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('sw_id'))
        {
            SW::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $sw=new SW;
            $sw->profileid=$profileid;
            $sw->factor=$factor[$i];
            $sw->strengths=$strengths[$i];
            $sw->weaknesses=$weaknesses[$i];
            $sw->comp=$comp[$i];
            $sw->type=$type[$i];
            $sw->priority=$priority[$i];

            $sw->save();
        }
      
        Session::put('sw_id', 1);
        return $ret;
    }

    public function sw_details($id)
    {
        $actions=SW::where("profileid",$id)->get();
        return view("sw_details",compact('actions'));
   
    }

    public function store_worksheet(Request $request)
    {
        $ret= $this->create_worksheet($request);
        if($ret==3)
        {
            $message="You Must create Profile before";
            $background="bg-danger";
        }
        else if($ret==1)
        {
            $message="Focus Worksheet Edited Succefully";
            $background="bg-success";
        }
        else
        {
            $message="New Focus Worksheet Created Succefully";
            $background="bg-success";
        }
     

        return response()->json(['success'=>$message,'background'=>$background]);   
    }

    public function create_worksheet($data)
    {
        $factor=$data->factor;
        $type=$data->type;
        $score=$data->score;
        $feature=$data->feature;



        if($factor!=NULL)
        $count=count($factor);
        else
        $count=0;
        if(session()->has('profileid'))
        {
            $profileid=Session::get('profileid');
        }
        else
        {
            return 3;   
        }

        if(session()->has('worksheet_id'))
        {
            sheets::where("profileid",$profileid)->delete();
            $ret=1;
        }
        else
        {
            $ret=2;
        }
        for ($i=0; $i <$count ; $i++) { 
            $worksheet=new sheets;
            $worksheet->profileid=$profileid;
            $worksheet->factor=$factor[$i];
            $worksheet->score=$score[$i];
            $worksheet->type=$type[$i];
            $worksheet->feature=$feature[$i];
            $worksheet->save();
        }
      
        Session::put('worksheet_id', 1);
        return $ret;
    }
    public function worksheet_details($id)
    {
        $product=sheets::select('factor')->where("profileid",$id)->where("type","Product")->groupBy('factor')->get()->count();
        $people=sheets::select('factor')->where("profileid",$id)->where("type","People")->groupBy('factor')->get()->count();
        $process=sheets::select('factor')->where("profileid",$id)->where("type","Process")->groupBy('factor')->get()->count();
        $operation=sheets::select('factor')->where("profileid",$id)->where("type","Operation")->groupBy('factor')->get()->count();
        $organization=sheets::select('factor')->where("profileid",$id)->where("type","Organisation")->groupBy('factor')->get()->count();
        $factors=sheets::select('factor')->where("profileid",$id)->groupBy('factor')->get();
        return view("worksheet_details",compact('factors','id','product','people','process','operation','organization'));
   
    }
    public static function get_features($type,$id)
    {
      $features=sheets::select('feature')->where("profileid",$id)->where("type",$type)->groupBy('feature')->get();   
      return $features;
    }
    public static function get_scores($factor,$id)
    {
        $scores=sheets::select('score')->where("profileid",$id)->where("factor",$factor)->get();   
        return $scores;
    }
}
