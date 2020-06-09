function Toggle(obj) { 
var eye= document.getElementById("password"); 
if (eye.type === "password")
{ 
eye.type = "text"; 
$(obj).attr('src',"images/heye.png")

} 
else 
{ 
eye.type = "password";
$(obj).attr('src',"images/eye.png") 
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
function Change(obj) { 
var dp= document.getElementById("pic"); 
if (eye.type === "password")
{ 
eye.type = "text"; 
$(obj).attr('src',"images/heye.png")

} 
else 
{ 
eye.type = "password";
$(obj).attr('src',"images/eye.png") 
} 
} 