
var img=["slide2.jpg","slide4.jpg","slide3.jpg"];
var i=0;
function slide()
{
//alert("hiii");
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",2000);
}