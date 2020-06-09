

function checkNameField(obj) {
    debugger;
    var ch = /^([a-zA-Z. ])+$/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(ch) == -1) {
            alert("Please Enter characters only")
            obj.value = "";
            obj.focus();
            return false;
        }
    }

}
function checkEmail(obj) {
    debugger;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = obj.value;

    if (obj.value != "") {
        if (reg.test(address) == false) {
            alert("Invalid email address");
            obj.value = "";
            obj.focus();
            return false;
        }
    }
}
function checkMobileNumber(obj) {
    debugger;
    CheckLength(obj)
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (isNaN($(obj).val())) {
            alert("Please Enter Numeric (non negative) Input");
            $(obj).val('');
            obj.focus();
            return false;
        }
        else if ($(obj).val().length != 10) {
            alert("Please Enter Proper Mobile Number");
            $(obj).val('');
            obj.focus();
            return false;
        }
        else if (parseInt($(obj).val()[0]) != 6 && parseInt($(obj).val()[0]) != 7 && parseInt($(obj).val()[0]) != 8 && parseInt($(obj).val()[0]) != 9) {
            alert("Please Enter Valid Mobile Number");
            $(obj).val('');
            obj.focus();
            return false;
        }
    }
}
