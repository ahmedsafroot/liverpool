<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;

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
}
