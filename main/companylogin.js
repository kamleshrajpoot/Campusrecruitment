function idd(field_id,field1)
{
    var id1=document.getElementById(field_id).value;
    var f1=document.getElementById(field1);
    id1=id1.trim();
    if(id1.length<6)
        {
        f1.innerHTML="<font color=red>please Enter compnay/Hr Id  number</font> ";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else{
        f1.innerHTML="";
    }
   
}
function pass(field_id,field2)
{
      var pass1=document.getElementById(field_id).value;
    var f2=document.getElementById(field2);
    pass1=pass1.trim();
   if(pass1.length<4)
        {
            f2.innerHTML="<font color=red>please insert at-least 4 character</font>";
             document.getElementById(field_id).style.borderColor="yellow";
        }
    else{
        f2.innerHTML="";
    }
}