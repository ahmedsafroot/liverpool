<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AGILITY MODEL</title>
        <link rel="stylesheet" href="{{ asset('public/css/profile.css') }}">
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        
        <meta name="csrf-token" content="{{ csrf_token() }}" />



    <body>
        <!--Container for top page (logo and title)-->
        <!-- This is a row for logo and company name-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1 col-md-1"></div>
                <div class="col-10 col-sm-10 col-md-4">
                    <img src="{{ asset('public/images/logo.png')}}"
                        class="rounded float-left mt-4" alt="logo" width="70%">
                </div>
                <div class="col"></div>
            </div>
            <!-- This is a row for page title-->
            <div class="row title">
                <div class="col-12 col-sm-12">
                    <h2>Agility Model</h2>
                    <p>Liverpool Agility Center</p>
                </div>
            </div>
        </div>


        <!--Container for questions and ADs-->
        <div class="container">
            <div class="row questionsRow">
                <div class="col-12 col-md-6 col-sm-12">
                    <p class="sectionTitle">Company Profile</p>
                    <hr>
                    <form>
                        <!--first contacts-->
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userName" placeholder="Company Name"
                                maxlength="20">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userParent"
                                placeholder="Parent company (if any)"
                                maxlength="20">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userAddress" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                minlength="3" maxlength="11"
                                id="userTelephone" placeholder="Telephone">
                        </div>
                        <p class="errorMsg" id="telephoneValid"></p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userFax"
                                placeholder="Fax">
                        </div>
                        <p class="errorMsg" id="faxValid"></p>
                        <div class="form-group">
                            <input type="url" class="form-control" id="userUrl"
                                placeholder="URL">
                        </div>
                        <p class="errorMsg" id="urlValid"></p>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                id="userNum" placeholder="Number of Employees"
                                min="0">
                        </div>
                        <p class="errorMsg" id="empNumValid"></p>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userAppro"
                                placeholder="Approximate turnover">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                id="userYears" placeholder="Years in Business"
                                min="0" max="100">
                        </div>
                        <p class="errorMsg" id="expNumValid"></p>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="Product Portfolio"
                                id="userPortfolio">
                        </div>

                        <!--Market checkboxes-->
                        <div class="checkboxParent">
                            <label class="mainLabel">Market Sector(s)</label>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input"
                                    type="checkbox" value="marketCK1"
                                    id="marketCK1">
                                <label class="custom-control-label"
                                    for="marketCK1">
                                    Foofstuffs, beverages & tobacco
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input"
                                    type="checkbox" value="marketCK2"
                                    id="marketCK2">
                                <label class="custom-control-label"
                                    for="marketCK2">
                                    Textiles, footwear & wearing apparel
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input"
                                    type="checkbox" value="marketCK3"
                                    id="marketCK3">
                                <label class="custom-control-label"
                                    for="marketCK3">
                                    General Engineering
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input"
                                    type="checkbox" value="marketCK4"
                                    id="marketCK4">
                                <label class="custom-control-label"
                                    for="marketCK4">
                                    Paper products, printing & publishing
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input"
                                    type="checkbox" value="marketCK5"
                                    id="marketCK5" onclick="getChecked()">
                                <label class="custom-control-label"
                                    for="marketCK5">
                                    Other:
                                </label>
                                <input type="text" class="form-control
                                    marketOtherStyle" id="marketOther"
                                    onclick="getFocus()">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userExport" placeholder="Direct Export">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userImport" placeholder="Imports">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userContact" placeholder="Contact Person">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userContactNo"
                                placeholder="Contact Person Telephone No">
                        </div>

                        <!--company status radio buttons-->
                        <div class="companyStatusParent">
                            <label class="mainLabel">Company Status</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1"
                                    name="customRadio"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label"
                                    for="customRadio1">Startup</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2"
                                    name="customRadio"
                                    class="custom-control-input" value="2">
                                <label class="custom-control-label"
                                    for="customRadio2">Established</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3"
                                    name="customRadio"
                                    class="custom-control-input" value="3">
                                <label class="custom-control-label"
                                    for="customRadio3">Competitive</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4"
                                    name="customRadio"
                                    class="custom-control-input" value="4">
                                <label class="custom-control-label"
                                    for="customRadio4">Market leader</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio5"
                                    name="customRadio"
                                    class="custom-control-input" value="5"
                                    onclick="getCompanyStatus()">
                                <label class="custom-control-label"
                                    for="customRadio5">Other:</label>
                                <input type="text" class="form-control
                                    marketOtherStyle" id="companyStatusOther"
                                    onclick="getCompanyStatusFocus()">
                            </div>

                        </div>

                        <!--Legal Structure Radio buttons-->
                        <div class="LegalStructureParent">
                            <label class="mainLabel">Legal Structure</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio6"
                                    name="structure"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label"
                                    for="customRadio6">Limited</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio7"
                                    name="structure"
                                    class="custom-control-input" value="2">
                                <label class="custom-control-label"
                                    for="customRadio7">Sole trader</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio8"
                                    name="structure"
                                    class="custom-control-input" value="3">
                                <label class="custom-control-label"
                                    for="customRadio8">Limited Liability
                                    Partnership</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio9"
                                    name="structure"
                                    class="custom-control-input" value="4">
                                <label class="custom-control-label"
                                    for="customRadio9">Corporation</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio10"
                                    name="structure"
                                    class="custom-control-input" value="5">
                                <label class="custom-control-label"
                                    for="customRadio10">Non-profit</label>
                            </div>

                        </div>

                        <!--Business Structure Radio buttons-->
                        <div class="LegalStructureParent">
                            <label class="mainLabel">Business Structure</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio11"
                                    name="business"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label"
                                    for="customRadio11">Functional</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio12"
                                    name="business"
                                    class="custom-control-input" value="2">
                                <label class="custom-control-label"
                                    for="customRadio12">Divisional</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio12"
                                    name="business"
                                    class="custom-control-input" value="3">
                                <label class="custom-control-label"
                                    for="customRadio12">Matrix</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio13"
                                    name="business"
                                    class="custom-control-input" value="4">
                                <label class="custom-control-label"
                                    for="customRadio13">Hybrid</label>
                            </div>
                        </div>

                        <!--Market Structure Radio buttons-->
                        <div class="LegalStructureParent">
                            <label class="mainLabel">Market Structure</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio14"
                                    name="market"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label"
                                    for="customRadio14">Monopoly</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio15"
                                    name="market"
                                    class="custom-control-input" value="2">
                                <label class="custom-control-label"
                                    for="customRadio15">Oligopoly</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio16"
                                    name="market"
                                    class="custom-control-input" value="3">
                                <label class="custom-control-label"
                                    for="customRadio16">Competitive</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio17"
                                    name="market"
                                    class="custom-control-input" value="4">
                                <label class="custom-control-label"
                                    for="customRadio17">Contestable</label>
                            </div>
                        </div>

                        <!--Locations-->
                        <div class="form-group">
                            <input type="text" class="form-control"
                                id="userLocation" placeholder="Location(s)">
                        </div>

                        <!--company's main product lines table of radio buttons-->
                        <div class="ProductLines">
                            <label class="mainLabel">What are the company's main
                                product lines?</label>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tableH"></th>
                                        <th scope="col" class="tableH">Growing
                                            demand
                                        </th>
                                        <th scope="col" class="tableH">Stable
                                            demand
                                        </th>
                                        <th scope="col" class="tableH">Declining
                                            demand
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="firstRow">
                                        <th scope="row" class="tableH">Product
                                            Line 1
                                        </th>
                                        <td><input type="radio"
                                                name="prod1"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod1"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod1"
                                                value="3"></td>
                                    </tr>
                                    <tr id="secondRow">
                                        <th scope="row" class="tableH">Product
                                            Line 2 </th>
                                        <td><input type="radio"
                                                name="prod2"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod2"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod2"
                                                value="3"></td>
                                    </tr>
                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">Product
                                            Line 3 </th>
                                        <td><input type="radio"
                                                name="prod3"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod3"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod3"
                                                value="3"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--describe technology of products question-->
                        <div class="LegalStructureParent">
                            <label class="mainLabel">How would you describe the
                                technology used in producing your main
                                products/services?</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio18"
                                    name="services"
                                    class="custom-control-input" value="1">
                                <label class="custom-control-label"
                                    for="customRadio18">Conventional</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio19"
                                    name="services"
                                    class="custom-control-input" value="2">
                                <label class="custom-control-label"
                                    for="customRadio19">Specialised</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio20"
                                    name="services"
                                    class="custom-control-input" value="3">
                                <label class="custom-control-label"
                                    for="customRadio20">Advanced</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio21"
                                    name="services"
                                    class="custom-control-input" value="4"
                                    onclick="getCompanyProd()">
                                <label class="custom-control-label"
                                    for="customRadio21">Other:</label>
                                <input type="text" class="form-control
                                    marketOtherStyle" id="companyProdOther"
                                    onclick="getCompanyProdFocus()">
                            </div>
                        </div>

                        <!--main busines functions conducted on site-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">What are the main busines
                                functions conducted on site?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck1">
                                <label class="custom-control-label"
                                    for="customCheck1">Marketing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck2">
                                <label class="custom-control-label"
                                    for="customCheck2">Procurement</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck3">
                                <label class="custom-control-label"
                                    for="customCheck3">Product Development</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck4">
                                <label class="custom-control-label"
                                    for="customCheck4">Customer Services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck5">
                                <label class="custom-control-label"
                                    for="customCheck5">Accounting/Finance
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck6">
                                <label class="custom-control-label"
                                    for="customCheck6">Sales</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck7">
                                <label class="custom-control-label"
                                    for="customCheck7">Distribution</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck8">
                                <label class="custom-control-label"
                                    for="customCheck8">Manufacturing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck9">
                                <label class="custom-control-label"
                                    for="customCheck9">HRM</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck10">
                                <label class="custom-control-label"
                                    for="customCheck10">Dedicated IT
                                </label>
                            </div>
                        </div>

                        <!--describe the main products-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">How would you describe your
                                main products?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck11">
                                <label class="custom-control-label"
                                    for="customCheck11">Engineered-to-order</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck12">
                                <label class="custom-control-label"
                                    for="customCheck12">Customised</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck13">
                                <label class="custom-control-label"
                                    for="customCheck13">Standard
                                    compenents/assemblies</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck14">
                                <label class="custom-control-label"
                                    for="customCheck14">Requires further
                                    processing</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck15">
                                <label class="custom-control-label"
                                    for="customCheck15">mass produced
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck16">
                                <label class="custom-control-label"
                                    for="customCheck16">Mass customised</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck17">
                                <label class="custom-control-label"
                                    for="customCheck17">Modular</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck18">
                                <label class="custom-control-label"
                                    for="customCheck18">Consumer goods</label>
                            </div>
                        </div>

                        <!--company's main product lines table of radio buttons-->
                        <div class="ProductLines">
                            <label class="mainLabel">What percentage of
                                your
                                products/Services are sold?</label>
                            <table class="table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tableH">%</th>
                                        <th scope="col" class="tableH"><10</th>
                                        <th scope="col" class="tableH">10-30</th>
                                        <th scope="col" class="tableH">30-50</th>
                                        <th scope="col" class="tableH">50-70</th>
                                        <th scope="col" class="tableH">70-90</th>
                                        <th scope="col" class="tableH">>90</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="firstRow">
                                        <th scope="row" class="tableH">Direct to
                                            consumers
                                        </th>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="3"></td>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="4"></td>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="5"></td>
                                        <td><input type="radio"
                                                name="prod11"
                                                value="6"></td>
                                    </tr>

                                    <tr id="secondRow">
                                        <th scope="row" class="tableH">Direct to
                                            OEM’s
                                        </th>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="3"></td>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="4"></td>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="5"></td>
                                        <td><input type="radio"
                                                name="prod22"
                                                value="6"></td>
                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To
                                            companies for more processing
                                        </th>
                                        <td><input type="radio"
                                                name="prod33"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod3_per1"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod33"
                                                value="3"></td>
                                        <td><input type="radio"
                                                name="prod33"
                                                value="4"></td>
                                        <td><input type="radio"
                                                name="prod33"
                                                value="5"></td>
                                        <td><input type="radio"
                                                name="prod33"
                                                value="6"></td>
                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To
                                            retailers
                                        </th>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="3"></td>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="4"></td>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="5"></td>
                                        <td><input type="radio"
                                                name="prod44"
                                                value="6"></td>
                                    </tr>

                                    <tr id="thirdRow">
                                        <th scope="row" class="tableH">To
                                            distributors
                                        </th>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="1"></td>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="2"></td>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="3"></td>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="4"></td>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="5"></td>
                                        <td><input type="radio"
                                                name="prod55"
                                                value="6"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--What is your company’s main types of Service?-->
                        <div class="mainBusinesParent">
                            <label class="mainLabel">What is your company’s main
                                types of Service?
                            </label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck23">
                                <label class="custom-control-label"
                                    for="customCheck23">B2B (traditional)
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck24">
                                <label class="custom-control-label"
                                    for="customCheck24">B2B (KIBS)
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck25">
                                <label class="custom-control-label"
                                    for="customCheck25">Consumer services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck26">
                                <label class="custom-control-label"
                                    for="customCheck26">Public services</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck27">
                                <label class="custom-control-label"
                                    for="customCheck27">Non-for-Profit
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary mb-4" onclick="return profileForm()">Save</button>
                    </form>
                </div>
                <div class="col-md-1"></div>

                <!--ADs section-->
                <div class="col-md-4 col-xs-12">
                    <img width="100%" src="{{ asset('public/images/ad1')}}" alt="ADs"
                        class="mb-3">
                    <img width="100%" src="{{ asset('public/images/ad2.jpg') }}" alt="ADs">
                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card-footer">
                        @Liverpool.com
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var APP_URL = {!! json_encode(url('/')) !!};
        </script>
        <script src="{{asset('public/js/profile.js')}}"></script>

    </body>


</html>