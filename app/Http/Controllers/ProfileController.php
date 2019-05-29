<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;
use App\auditTool;
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
         }
         else{
            $ret= $this->create_profile($request);
            if($ret==1)
            {
                $message="profile Edited Succefully";
            }
            else
            {
                $message="new profile created Succefully";
            }
         }

        return response()->json(['success'=>$message]);

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
            if($ret==1)
            {
                $message="Audit Tool Edited Succefully";
            }
            else
            {
                $message="new Audit Tool created Succefully";
            }
         

        return response()->json(['success'=>$message]);

    }

    public function create_audit_tool($data)
    {
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
        if(session()->has('profileid'))
        {
            $audit->profileid=Session::get('profileid');
        }
        else
        {
            $audit->profileid=0;   
        }
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
}
