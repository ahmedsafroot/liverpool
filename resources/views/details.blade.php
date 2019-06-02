<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

   

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.56/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.56/vfs_fonts.js"></script>

   <style>
     body{
         margin: 20px;
         
     }
     .dt-buttons
     {
        margin-top: 38px;
     }
    </style>
</head>
<body>
   
        <table id="profile" class="display">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Company Name</td>
                      <td>{{$profile->userName}}</td>

                    </tr>
                   <tr>
                      <td>Company Parent</td>
                      <td>{{$profile->userParent}}</td>

                    </tr>

                    <tr>
                            <td>Address</td>
                            <td>{{$profile->userAddress}}</td>
      
                    </tr>
                    <tr>
                            <td>Telephone</td>
                            <td>{{$profile->userTelephone}}</td>
      
                    </tr>

                    <tr>
                            <td>Fax</td>
                            <td>{{$profile->userFax}}</td>
      
                    </tr>

                    <tr>
                            <td>Url</td>
                            <td>{{$profile->userUrl}}</td>
        
                    </tr>
                    <tr>
                            <td>Number Of Employees</td>
                            <td>{{$profile->userNum}}</td>
        
                    </tr>
        
                    <tr>
                             <td>Approxiamte Turnover</td>
                             <td>{{$profile->userAppro}}</td>
            
                    </tr>
                    <tr>
                             <td>Years In Business</td>
                             <td>{{$profile->userYears}}</td>
            
                    </tr>
        
                    <tr>
                              <td>Product Portofilo</td>
                              <td>{{$profile->userPortfolio}}</td>
            
                    </tr>
                    <tr>
                               <td>Market Sector(S)</td>
                               <td>{{$profile->market_sector}}</td>
                    </tr>
                    <tr>
                            <td>Direct Export</td>
                            <td>{{$profile->userExport}}</td>
                    </tr>
                    <tr>
                        <td>Imports</td>
                        <td>{{$profile->userImport}}</td>
                    </tr>
                    <tr>
                            <td>Contact Person</td>
                            <td>{{$profile->userContact}}</td>
                     </tr>
                     <tr>
                        <td>Contact Person Telephone No</td>
                        <td>{{$profile->userContactNo}}</td>
                     </tr>
                               
                    <tr>
                            <td>Company Status</td>
                            <td>{{$profile->status}}</td>
                    </tr>
                    <tr>
                        <td>Legal Structure</td>
                        <td>{{$profile->legal_structure}}</td>
                 </tr>
                 <tr>
                        <td>Business Structure</td>
                        <td>{{$profile->business_structure}}</td>
                 </tr>

                 <tr>
                        <td>Market Structure</td>
                        <td>{{$profile->market_structure}}</td>
                 </tr>
                 <tr>
                        <td>Location(s)</td>
                        <td>{{$profile->userLocation}}</td>
                 </tr>
                 <tr>
                        <td>Product Line 1</td>
                        <td>{{$profile->line1}}</td>
                 </tr>
                 <tr>
                        <td>Product Line 2</td>
                        <td>{{$profile->line2}}</td>
                 </tr>
                 <tr>
                        <td>Product Line 3</td>
                        <td>{{$profile->line3}}</td>
                 </tr>
                 <tr>
                        <td>How would you describe the technology used in producing your main products/services?</td>
                        <td>{{$profile->services}}</td>
                 </tr>
                 <tr>
                        <td>What are the main busines functions conducted on site?</td>
                        <td>{{$profile->conducted}}</td>
                 </tr>
                 <tr>
                        <td>How would you describe your main products?</td> 
                        <td>{{$profile->main_products}}</td>
                 </tr>

                 <tr>
                        <td>Direct to consumers</td>                           
                        <td>{{$profile->consumer}}</td>
                 </tr>

                 <tr>
                        <td>Direct to OEM’s	</td>                           
                        <td>{{$profile->oem}}</td>
                 </tr>

                 <tr>
                        <td>To companies for more processing</td>
                        <td>{{$profile->processing}}</td>
                 </tr>

                 <tr>
                        <td>To retailers	</td>
                        <td>{{$profile->retailers}}</td>
                 </tr>

                 <tr>
                        <td>To distributors	</td>
                        <td>{{$profile->distributors}}</td>
                 </tr>
                 <tr>
                        <td>What is your company’s main types of Service?</td>
                        <td>{{$profile->types_services}}</td>
                 </tr>
                </tbody>
            </table>

    <script>

        $(document).ready( function () {
            $('#profile').DataTable( {
                aLengthMenu: [
                    [5,10,25, 50, 100, 200, -1],
                    [5,10,25, 50, 100, 200, "All"]
                ],
                iDisplayLength: -1,
                "ordering": false,
                dom: 'lBfrtip',

                buttons: [
                    'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
                ]
            } );
        } );
    </script>
</body>
</html>