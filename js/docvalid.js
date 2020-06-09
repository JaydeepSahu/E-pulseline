function checkSession(obj) {
    debugger;
    var num = /^([0-9]+$)/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(num) == -1) {
            alert("Please Enter Numeric Value")
            obj.value = "";
            obj.focus();
            return false;
        }
        if ($(obj).val().length != 4) {
            alert("Please Enter 4 Digit");
            obj.value = "";
            obj.focus();
            return false;
        }
    }
}

function checkCharacters(obj) {
    debugger;
    var ch = /^([a-zA-Z ])+$/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(ch) == -1) {
            alert("Please Enter characters only")
            obj.value = "";
            obj.focus();
            return false;
        }
    }

}

function checkDescription(obj) {
    debugger;
    var ch = /^([a-zA-Z0-9.() ])+$/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(ch) == -1) {
            alert("Please Enter valid description only")
            obj.value = "";
            obj.focus();
            return false;
        }
    }

}
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
function checkAgeField(obj) {
    debugger;
    var num = /^([0-9]+$)/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(num) == -1) {
            alert("Please Enter Valid Value of Age.")
            obj.value = "";
            obj.focus();
            return false;
        }
    }
}
function checkDateField(obj) {
    debugger;
    
    var reqdmy = /^(0[1-9]|[12][0-9]|3[01])[-/.](0[1-9]|1[012])[-/.](19|20)\d\d+$/;//dmy
    var reqdym = /^(0[1-9]|1[012])[-/.](19|20)\d\d[-/.](0[1-9]|[12][0-9]|3[01])+$/;//dym

    var reqmdy = /^(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\d\d+$/;//mdy
    var reqmyd = /^(0[1-9]|1[012])[-/.](19|20)\d\d[-/.](0[1-9]|[12][0-9]|3[01])+$/;//myd
   
    
    var reqydm = /^(19|20)\d\d[-/.](0[1-9]|[12][0-9]|3[01])[-/.](0[1-9]|1[012])+$/;//ydm
    var reqymd = /^(19|20)\d\d[-/.](0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])+$/;//ymd
    
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(ch) == -1) {
            alert("Please Enter Correct Date")
            obj.value = "";
            obj.focus();
            return false;
        }
    }

}
function checkNumeric(obj) {
    debugger;
    var num = /^([0-9]+$)/;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (($(obj).val()).search(num) == -1) {
            alert("Please Enter Numeric Value")
            obj.value = "";
            obj.focus();
            return false;
        }
    }
}
function CheckDate(obj) {
    debugger
    var month;
    $('.ui-datepicker-month').find('option').each(function() { if ($(this).text() == new Date().toString().split(' ')[1]) { month = parseInt($(this).val()) + 1 } });
    var CurrentDate = new Date().toString().split(' ')[2] + '/' + month + '/' + new Date().toString().split(' ')[3];
    var SelectedDate = $(obj).val();
    if (CurrentDate < SelectedDate) {
        alert("Selected Date Should  Be Smaller Than Current Date");
        obj.value = "";
        obj.focus();
        return;
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
function checkPinCode(obj) {
    debugger;
    if ($(obj).val() != "" && $(obj).val() != null) {
        if (isNaN($(obj).val())) {
            alert("Please Enter Numeric (non negative) Input");
            $(obj).val('');
            obj.focus();
            return false;
        }
        else if ($(obj).val().length != 6) {
            alert("Please Enter Proper Pin Code");
            $(obj).val('');
            obj.focus();
            return false;
        }
    }
}
function checkPercentage(obj) {
    debugger;
    var num = /^([0-9.]+$)/;
    if ($('#ddlTypeDisability').val() != "0") {
        if ($(obj).val() > 100) {
            alert("Value not be grater than 100");
            $(obj).val('');
            obj.focus();
            return false;
        }
        else if (($(obj).val()).search(num) == -1) {
            alert("Enter only Numeric Value");
            $(obj).val('');
            obj.focus();
            return false;
        }
        else if ($(obj).val().split('.')[1].length > 2) {
            alert("After decimal enter 2 digits only");
            $(obj).val('');
            obj.focus();
            return false;
        }
    }
}
function CheckLength(obj) {
    debugger;
    if ($(obj).val() != "") {
        if ($(obj).val().length < 10 || $(obj).val().length > 10) {
            alert('Enter 10 digits Mobile Number');
            $(obj).val('');
            $(obj).focus();
            return;
        }
    }
}

function getResponse(data) {
    return data = data.split('@')[0];
}

function checkMobileNumber_editCase(obj) {
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
        else if (parseInt($(obj).val()[0]) != 6&&parseInt($(obj).val()[0]) != 7 && parseInt($(obj).val()[0]) != 8 && parseInt($(obj).val()[0]) != 9) {
            alert("Please Enter Valid Mobile Number");
            $(obj).val('');
            obj.focus();
            return false;
        }
    }
}

function checkNameFieldEng(obj) {
    debugger;
    var ch = /^([a-zA-Z. ])+$/;

    if ($(obj).val() != "" && $(obj).val() != null && $('#hdfMode').val() == '3') {
        if (($(obj).val()).search(ch) == -1) {
            alert("Please Enter characters only")
            obj.value = "";
            obj.focus();
            return false;
        }
    }

}





          function FileUpload(obj) {
            debugger;
                if ($(obj)[0].files.length > 0) {
                    var inputEleFiles = $(obj)[0].files;
                    for (var i = 0; i < inputEleFiles.length; i++) {
                        var strArr = inputEleFiles[i].name.split('.');
                        var extension = strArr[strArr.length - 1].toLowerCase();
                        if (extension == "jpg" || extension == "png" || extension == "gif" || extension == "jpeg" ) {
                           
                       
                         if (inputEleFiles[i].size > 1 * 1024 * 1024) {
                            alert('Upload Limit is only 1 MB.');
                            return;
                        }
                        else if (inputEleFiles[i].name.length > 100) {
                            alert('FileName is too Long.');
                            return;
                        }
						}
						else
						{
							alert("Please Upload only jpg/jpeg, png and gif files")
							$(obj).val('')
						}
                       
                }
				}
        }
       function Validate() {
        var c1 = document.getElementById("txtc1").value;
        var c2 = document.getElementById("txtc2").value;
        if (c1 != c2) {
            alert("Please fill a valid captcha.");
            return false;
        }
        return true;
    }
	    function Validate() {
        var c1 = document.getElementById("txtc1").value;
        var c2 = document.getElementById("txtc2").value;
        if (c1 != c2) {
            alert("Please fill a valid captcha.");
            return false;
        }
        return true;
    }