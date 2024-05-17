function empty(check_obj){
    if(check_obj==""){
        return true;
    }else{
        return false;
    }
}
function hasSpace(check_obj){
    if(check_obj.indexOf(" ")!=-1){
        return true;
    }else{
        return false;
    }
}
function hasCapp(check_obj){
    // check it least one character is uppercase
    if(!/[A-Z]/.test(check_obj)){
        return false;
    }else{
        return true;
    }
}
function hasLower(check_obj){
    // check it least one character is uppercase
    if(!/[a-z]/.test(check_obj)){
        return false;
    }else{
        return true;
    }
}
function hasNumber(check_obj){
    // check it least one character is uppercase
    if(!/[0-9]/.test(check_obj)){
        return false;
    }else{
        return true;
    }
}
function hasSpecial(check_obj){
    if(/[^A-Za-z0-9]/.test(check_obj)){
        return true;
    }else{
        return false;
    }
}

