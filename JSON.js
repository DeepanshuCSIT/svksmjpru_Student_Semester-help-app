function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails
    var name = document.forms['myForm']["sname"].value;
    if (name.length<3){
        seterror("name", "*Length of name is too short");
        returnval = false;
    }

    if (name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }

    var phone = document.forms['myForm']["smob"].value;
    if (phone.length != 10){
        seterror("mobile", "*Phone number should be of 10 digits!");
        returnval = false;
    }
    var address = document.forms['myForm']["saddress"].value;
    if (address.length>10){
        seterror("address", "*Address should be at least 7 character");
        returnval = false;
    }


    var email = document.forms['myForm']["semail"].value;
    if (email.length>40){
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    var password = document.forms['myForm']["spass"].value;
    if (password.length < 15){
        seterror("pass", "*Password should be atleast 8 characters long!");
        returnval = false;
    }
    var cpassword = document.forms['myForm']["scpass"].value;
    if (cpassword != password){
        seterror("cpass", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}