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
