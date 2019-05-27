function getChecked() {
  var checkedValue = document.getElementById("marketCK5").checked;
  if (checkedValue == true) {
    document.getElementById("marketOther").focus();
  } else {
    document.getElementById("marketOther").blur();
  }
}

function getFocus() {
  var focusedValue = document.hasFocus();
  if (focusedValue == true) {
    document.getElementById("marketCK5").checked = true;
  } else {
    document.getElementById("marketCK5").checked = false;
  }
}

function getCompanyStatus() {
  var checkedValue = document.getElementById("customRadio5").checked;
  if (checkedValue == true) {
    document.getElementById("companyStatusOther").focus();
  } else {
    document.getElementById("companyStatusOther").blur();
  }
}

function getCompanyStatusFocus() {
  var focusedValue = document.hasFocus();
  if (focusedValue == true) {
    document.getElementById("customRadio5").checked = true;
  } else {
    document.getElementById("customRadio5").checked = false;
  }
}

function getCompanyProd() {
  var checkedValue = document.getElementById("customRadio21").checked;
  if (checkedValue == true) {
    document.getElementById("companyProdOther").focus();
  } else {
    document.getElementById("companyProdOther").blur();
  }
}

function getCompanyProdFocus() {
  var focusedValue = document.hasFocus();
  if (focusedValue == true) {
    document.getElementById("customRadio21").checked = true;
  } else {
    document.getElementById("customRadio21").checked = false;
  }
}

function formValidation() {
    var userTelephone=document.getElementById("userTelephone").value;
    var userTelephoneLen=document.getElementById("userTelephone").value.length;
  if (isNaN(userTelephone)) {
    document.getElementById("telephoneValid").innerHTML = "Telephone must contain numbers only";
  }
  else if(isNaN(userTelephone)==false &&(userTelephoneLen <3)){
    document.getElementById("telephoneValid").innerHTML = "Telephone must not be less than 3 numbers";
  }
  else if(isNaN(userTelephone)==false &&(userTelephoneLen >11)){
    document.getElementById("telephoneValid").innerHTML = "Telephone must not be more than 11 numbers";
  }
}

function profileForm(){
  var mydata=[];
   mydata["userName"]=$("#userName").val();
   mydata["userParent"]=$("#userParent").val();
   mydata["userAddress"]=$("#userAddress").val();
   mydata["userTelephone"]=$("#userTelephone").val();
   mydata["userFax"]=$("#userFax").val();
   mydata["userUrl"]=$("#userUrl").val();
   mydata["userNum"]=$("#userNum").val();
   mydata["userAppro"]=$("#userAppro").val();
   mydata["userYears"]=$("#userYears").val();
   mydata["userPortfolio"]=$("#userPortfolio").val();
      if ($('#marketCK1').is(":checked"))
      {
       mydata["marketCK1"]=1;
      }
      else
      {
        mydata["marketCK1"]=0;
      }
      if ($('#marketCK2').is(":checked"))
      {
       mydata["marketCK2"]=1;
      }
      else
      {
        mydata["marketCK2"]=0;
      }
      if ($('#marketCK3').is(":checked"))
      {
       mydata["marketCK3"]=1;
      }
      else
      {
        mydata["marketCK3"]=0;
      }
      if ($('#marketCK4').is(":checked"))
      {
       mydata["marketCK4"]=1;
      }
      else
      {
        mydata["marketCK4"]=0;
      }
      if ($('#marketCK5').is(":checked"))
      {
       mydata["marketCK5"]=1;
      }
      else
      {
        mydata["marketCK5"]=0;
      }
     
       mydata["marketOther"]=$("#marketOther").val();
     

   mydata["userExport"]=$("#userExport").val();
   mydata["userImport"]=$("#userImport").val();
   mydata["userContact"]=$("#userContact").val();
   mydata["userContactNo"]=$("#userContactNo").val();
   mydata["companyStatus"]=$('input[name=customRadio]:checked').val();
   if(!mydata["companyStatus"])
   mydata["companyStatus"]=0;

   mydata["companyStatusOther"]=$("#companyStatusOther").val();

   mydata["legalStructure"]=$('input[name=structure]:checked').val();
   if(!mydata["legalStructure"])
   mydata["legalStructure"]=0;

   mydata["bussinessStructure"]=$('input[name=business]:checked').val();
   if(!mydata["bussinessStructure"])
   mydata["bussinessStructure"]=0;

   mydata["marketStructure"]=$('input[name=market]:checked').val();
   if(!mydata["marketStructure"])
   mydata["marketStructure"]=0;

   mydata["userLocation"]=$("#userLocation").val();
 

   mydata["prodLine1"]=$('input[name=prod1]:checked').val();
   if(!mydata["prodLine1"])
   mydata["prodLine1"]=0;

   mydata["prodLine2"]=$('input[name=prod2]:checked').val();
   if(!mydata["prodLine2"])
   mydata["prodLine2"]=0;

   mydata["prodLine3"]=$('input[name=prod3]:checked').val();
   if(!mydata["prodLine3"])
   mydata["prodLine3"]=0;

   mydata["services"]=$('input[name=services]:checked').val();
   if(!mydata["services"])
   mydata["services"]=0;

   mydata["companyProdOther"]=$("#companyProdOther").val();
   

   if ($('#customCheck1').is(":checked"))
   {
    mydata["marketing"]=1;
   }
   else
   {
     mydata["marketing"]=0;
   }
   if ($('#customCheck2').is(":checked"))
   {
    mydata["procurement"]=1;
   }
   else
   {
     mydata["procurement"]=0;
   }
   if ($('#customCheck3').is(":checked"))
   {
    mydata["development"]=1;
   }
   else
   {
     mydata["development"]=0;
   }
   if ($('#customCheck4').is(":checked"))
   {
    mydata["customerServices"]=1;
   }
   else
   {
     mydata["customerServices"]=0;
   }
   if ($('#customCheck5').is(":checked"))
   {
    mydata["finance"]=1;
   }
   else
   {
     mydata["finance"]=0;
   }
   if ($('#customCheck6').is(":checked"))
   {
    mydata["sales"]=1;
   }
   else
   {
     mydata["sales"]=0;
   }
   if ($('#customCheck7').is(":checked"))
   {
    mydata["distribution"]=1;
   }
   else
   {
     mydata["distribution"]=0;
   }
   if ($('#customCheck8').is(":checked"))
   {
    mydata["manufacturing"]=1;
   }
   else
   {
     mydata["manufacturing"]=0;
   }
   if ($('#customCheck9').is(":checked"))
   {
    mydata["hrm"]=1;
   }
   else
   {
     mydata["hrm"]=0;
   }
   if ($('#customCheck10').is(":checked"))
   {
    mydata["dedicated"]=1;
   }
   else
   {
     mydata["dedicated"]=0;
   }
   if ($('#customCheck11').is(":checked"))
   {
    mydata["engineeredToOrder"]=1;
   }
   else
   {
     mydata["engineeredToOrder"]=0;
   }
   if ($('#customCheck12').is(":checked"))
   {
    mydata["customised"]=1;
   }
   else
   {
     mydata["customised"]=0;
   }
   if ($('#customCheck13').is(":checked"))
   {
    mydata["assemblies"]=1;
   }
   else
   {
     mydata["assemblies"]=0;
   }
   if ($('#customCheck14').is(":checked"))
   {
    mydata["furtherProcessing"]=1;
   }
   else
   {
     mydata["furtherProcessing"]=0;
   }
   if ($('#customCheck15').is(":checked"))
   {
    mydata["massProduced"]=1;
   }
   else
   {
     mydata["massProduced"]=0;
   }
   if ($('#customCheck16').is(":checked"))
   {
    mydata["massCustomised"]=1;
   }
   else
   {
     mydata["massCustomised"]=0;
   }
   if ($('#customCheck17').is(":checked"))
   {
    mydata["modular"]=1;
   }
   else
   {
     mydata["modular"]=0;
   }
   if ($('#customCheck18').is(":checked"))
   {
    mydata["consumerGoods"]=1;
   }
   else
   {
     mydata["consumerGoods"]=0;
   }
   mydata["directConsumers"]=$('input[name=prod11]:checked').val();
   if(!mydata["directConsumers"])
   mydata["directConsumers"]=0;

   mydata["directOem"]=$('input[name=prod22]:checked').val();
   if(!mydata["directOem"])
   mydata["directOem"]=0;

   mydata["moreProcessing"]=$('input[name=prod33]:checked').val();
   if(!mydata["moreProcessing"])
   mydata["moreProcessing"]=0;

   mydata["retailers"]=$('input[name=prod44]:checked').val();
   if(!mydata["retailers"])
   mydata["retailers"]=0;

   mydata["distributors"]=$('input[name=prod55]:checked').val();
   if(!mydata["distributors"])
   mydata["distributors"]=0;

   if ($('#customCheck23').is(":checked"))
   {
    mydata["kibs"]=1;
   }
   else
   {
     mydata["kibs"]=0;
   }
   if ($('#customCheck24').is(":checked"))
   {
    mydata["traditional"]=1;
   }
   else
   {
     mydata["traditional"]=0;
   }
   if ($('#customCheck25').is(":checked"))
   {
    mydata["consumerServices"]=1;
   }
   else
   {
     mydata["consumerServices"]=0;
   }
   if ($('#customCheck26').is(":checked"))
   {
    mydata["publicServices"]=1;
   }
   else
   {
     mydata["publicServices"]=0;
   }
   if ($('#customCheck27').is(":checked"))
   {
    mydata["nonProfit"]=1;
   }
   else
   {
     mydata["nonProfit"]=0;
   }

   //console.log(mydata);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   var url=APP_URL+"/step1";
  
   $.ajax({

    type:'POST',

    url:url,

    data:{
      userName:mydata["userName"],
      userParent:mydata["userParent"],
      userAddress:mydata["userAddress"],
      userTelephone:mydata["userTelephone"],
      userFax:mydata["userFax"],
      userUrl:mydata["userUrl"],
      userNum:mydata["userNum"],
      userAppro:mydata["userAppro"],
      userYears:mydata["userYears"],
      userPortfolio:mydata["userPortfolio"],
      marketCK1:mydata["marketCK1"],
      marketCK2:mydata["marketCK2"],
      marketCK3:mydata["marketCK3"],
      marketCK4:mydata["marketCK4"],
      marketCK5:mydata["marketCK5"],
      marketOther:mydata["marketOther"],
      userExport:mydata["userExport"],
      userImport:mydata["userImport"],
      userContact:mydata["userContact"],
      userContactNo:mydata["userContactNo"],
      companyStatus:mydata["companyStatus"],
      companyStatusOther:mydata["companyStatusOther"],
      legalStructure:mydata["legalStructure"],
      bussinessStructure:mydata["bussinessStructure"],
      marketStructure:mydata["marketStructure"],
      userLocation:mydata["userLocation"],
      prodLine1:mydata["prodLine1"],
      prodLine2:mydata["prodLine2"],
      prodLine3:mydata["prodLine3"],
      services:mydata["services"],
      companyProdOther:mydata["companyProdOther"],
      marketing:mydata["marketing"],
      procurement:mydata["procurement"],
      development:mydata["development"],
      customerServices:mydata["customerServices"],
      finance:mydata["finance"],
      sales:mydata["sales"],
      distribution:mydata["distribution"],
      manufacturing:mydata["manufacturing"],
      hrm:mydata["hrm"],
      dedicated:mydata["dedicated"],
      engineeredToOrder:mydata["engineeredToOrder"],
      customised:mydata["customised"],
      assemblies:mydata["assemblies"],
      furtherProcessing:mydata["furtherProcessing"],
      massProduced:mydata["massProduced"],
      massCustomised:mydata["massCustomised"],
      modular:mydata["modular"],
      consumerGoods:mydata["consumerGoods"],
      directConsumers:mydata["directConsumers"],
      directOem:mydata["directOem"],
      moreProcessing:mydata["moreProcessing"],
      retailers:mydata["retailers"],
      distributors:mydata["distributors"],
      kibs:mydata["kibs"],
      traditional:mydata["traditional"],
      consumerServices:mydata["consumerServices"],
      publicServices:mydata["publicServices"],
      nonProfit:mydata["nonProfit"],
     
      },

    success:function(mymessage){

       alert(mymessage.success);
    }

 });

  return false;
}