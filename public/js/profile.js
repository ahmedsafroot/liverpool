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
  var data=[];
   data["userName"]=$("#userName").val();
   data["userParent"]=$("#userParent").val();
   data["userAddress"]=$("#userAddress").val();
   data["userTelephone"]=$("#userTelephone").val();
   data["userFax"]=$("#userFax").val();
   data["userUrl"]=$("#userUrl").val();
   data["userNum"]=$("#userNum").val();
   data["userAppro"]=$("#userAppro").val();
   data["userYears"]=$("#userYears").val();
   data["userPortfolio"]=$("#userPortfolio").val();
      if ($('#marketCK1').is(":checked"))
      {
       data["marketCK1"]=1;
      }
      else
      {
        data["marketCK1"]=0;
      }
      if ($('#marketCK2').is(":checked"))
      {
       data["marketCK2"]=1;
      }
      else
      {
        data["marketCK2"]=0;
      }
      if ($('#marketCK3').is(":checked"))
      {
       data["marketCK3"]=1;
      }
      else
      {
        data["marketCK3"]=0;
      }
      if ($('#marketCK4').is(":checked"))
      {
       data["marketCK4"]=1;
      }
      else
      {
        data["marketCK4"]=0;
      }
      if ($('#marketCK5').is(":checked"))
      {
       data["marketCK5"]=1;
      }
      else
      {
        data["marketCK5"]=0;
      }
      if ($('#marketOther').is(":checked"))
      {
       data["marketOther"]=1;
      }
      else
      {
        data["marketOther"]=0;
      }

   data["userExport"]=$("#userExport").val();
   data["userImport"]=$("#userImport").val();
   data["userContact"]=$("#userContact").val();
   data["userContactNo"]=$("#userContactNo").val();
   data["companyStatus"]=$('input[name=customRadio]:checked').val();
   if(!data["companyStatus"])
   data["companyStatus"]=0;

   data["companyStatusOther"]=$("#companyStatusOther").val();

   data["legalStructure"]=$('input[name=structure]:checked').val();
   if(!data["legalStructure"])
   data["legalStructure"]=0;

   data["bussinessStructure"]=$('input[name=business]:checked').val();
   if(!data["bussinessStructure"])
   data["bussinessStructure"]=0;

   data["marketStructure"]=$('input[name=market]:checked').val();
   if(!data["marketStructure"])
   data["marketStructure"]=0;

   data["userLocation"]=$("#userLocation").val();
   if(!data["userLocation"])
   data["userLocation"]=0;

   data["prodLine1"]=$('input[name=prod1]:checked').val();
   if(!data["prodLine1"])
   data["prodLine1"]=0;

   data["prodLine2"]=$('input[name=prod2]:checked').val();
   if(!data["prodLine2"])
   data["prodLine2"]=0;

   data["prodLine3"]=$('input[name=prod3]:checked').val();
   if(!data["prodLine3"])
   data["prodLine3"]=0;

   data["services"]=$('input[name=services]:checked').val();
   if(!data["services"])
   data["services"]=0;

   data["companyProdOther"]=$("#companyProdOther").val();
   

   if ($('#customCheck1').is(":checked"))
   {
    data["marketing"]=1;
   }
   else
   {
     data["marketing"]=0;
   }
   if ($('#customCheck2').is(":checked"))
   {
    data["procurement"]=1;
   }
   else
   {
     data["procurement"]=0;
   }
   if ($('#customCheck3').is(":checked"))
   {
    data["development"]=1;
   }
   else
   {
     data["development"]=0;
   }
   if ($('#customCheck4').is(":checked"))
   {
    data["customerServices"]=1;
   }
   else
   {
     data["customerServices"]=0;
   }
   if ($('#customCheck5').is(":checked"))
   {
    data["finance"]=1;
   }
   else
   {
     data["finance"]=0;
   }
   if ($('#customCheck6').is(":checked"))
   {
    data["sales"]=1;
   }
   else
   {
     data["sales"]=0;
   }
   if ($('#customCheck7').is(":checked"))
   {
    data["distribution"]=1;
   }
   else
   {
     data["distribution"]=0;
   }
   if ($('#customCheck8').is(":checked"))
   {
    data["manufacturing"]=1;
   }
   else
   {
     data["manufacturing"]=0;
   }
   if ($('#customCheck9').is(":checked"))
   {
    data["hrm"]=1;
   }
   else
   {
     data["hrm"]=0;
   }
   if ($('#customCheck10').is(":checked"))
   {
    data["dedicated"]=1;
   }
   else
   {
     data["dedicated"]=0;
   }
   if ($('#customCheck11').is(":checked"))
   {
    data["engineeredToOrder"]=1;
   }
   else
   {
     data["engineeredToOrder"]=0;
   }
   if ($('#customCheck12').is(":checked"))
   {
    data["customised"]=1;
   }
   else
   {
     data["customised"]=0;
   }
   if ($('#customCheck13').is(":checked"))
   {
    data["assemblies"]=1;
   }
   else
   {
     data["assemblies"]=0;
   }
   if ($('#customCheck14').is(":checked"))
   {
    data["furtherProcessing"]=1;
   }
   else
   {
     data["furtherProcessing"]=0;
   }
   if ($('#customCheck15').is(":checked"))
   {
    data["massProduced"]=1;
   }
   else
   {
     data["massProduced"]=0;
   }
   if ($('#customCheck16').is(":checked"))
   {
    data["massCustomised"]=1;
   }
   else
   {
     data["massCustomised"]=0;
   }
   if ($('#customCheck17').is(":checked"))
   {
    data["modular"]=1;
   }
   else
   {
     data["modular"]=0;
   }
   if ($('#customCheck18').is(":checked"))
   {
    data["consumerGoods"]=1;
   }
   else
   {
     data["consumerGoods"]=0;
   }
   data["directConsumers"]=$('input[name=prod1]:checked').val();
   if(!data["directConsumers"])
   data["directConsumers"]=0;

   data["directOem"]=$('input[name=prod1]:checked').val();
   if(!data["directOem"])
   data["directOem"]=0;

   data["moreProcessing"]=$('input[name=prod1]:checked').val();
   if(!data["moreProcessing"])
   data["moreProcessing"]=0;

   data["retailers"]=$('input[name=prod1]:checked').val();
   if(!data["retailers"])
   data["retailers"]=0;

   data["distributors"]=$('input[name=prod1]:checked').val();
   if(!data["distributors"])
   data["distributors"]=0;

   if ($('#customCheck23').is(":checked"))
   {
    data["kibs"]=1;
   }
   else
   {
     data["kibs"]=0;
   }
   if ($('#customCheck24').is(":checked"))
   {
    data["traditional"]=1;
   }
   else
   {
     data["traditional"]=0;
   }
   if ($('#customCheck25').is(":checked"))
   {
    data["consumerServices"]=1;
   }
   else
   {
     data["consumerServices"]=0;
   }
   if ($('#customCheck26').is(":checked"))
   {
    data["publicServices"]=1;
   }
   else
   {
     data["publicServices"]=0;
   }
   if ($('#customCheck27').is(":checked"))
   {
    data["nonProfit"]=1;
   }
   else
   {
     data["nonProfit"]=0;
   }
   
   console.log(data);

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

   $.ajax({

    type:'POST',

    url:'{{ url("/step1") }}',

    data:{name:"moahmed"},

    success:function(data){

       alert(data.success);

    }

 });

  return false;
}