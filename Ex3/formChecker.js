function check()
{
    let psw=document.forms["submitform"]["password"].value;
    let cn=document.forms["submitform"]["Cokenum"].value;
    let pn=document.forms["submitform"]["Pokernum"].value;
    let mn=document.forms["submitform"]["mp3num"].value;

    if(psw=="")
    {
        alert("Password can not be blank");
        return false;
    }

    if(cn==""||pn==""||mn=="")
    {
        alert("Quantities can not be blank");
        return false;
    }
    else if (cn<0||pn<0||mn<0)
    {
        alert("Quantities can not be negative");
        return false;
    }
    if(document.forms["submitform"]["op"].value=="")
    {
        alert("Please choose one shipping option");
        return false;
    }
    return true;
}
