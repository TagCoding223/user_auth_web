let fname = document.getElementsByName('fname')[0]
let fname_vali_mess = document.getElementById('fname_vali')

let lname = document.getElementsByName('lname')[0]
let lname_vali_mess = document.getElementById('lname_vali')

let c_username = document.getElementsByName('username')[0]
let c_username_vali_mess = document.getElementById('c_username_vali')

let mpassword = document.getElementsByName('password')[0]
let mpassword_vali_mess = document.getElementById('password_vali')

let mcpassword = document.getElementsByName('cpassword')[0]
let mcpassword_vali_mess = document.getElementById('cpassword_vali')

let checkbox = document.getElementById('checkbox')

let btn_verification = [false, false, false, false, false, false];

function focusin_fun(obj) {
    obj.style.visibility = 'visible';
    obj.style.display = 'block';
}

function focusout_fun(obj) {
    obj.style.visibility = 'hidden';
    obj.style.display = 'none';
}
function fname_lname_vali(obj, obj_vali_mess, btn_index) {
    if (hasNumber(obj.value) == false) {
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.add("fa");
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.add("fa-check");
    } else {
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.add("fa");
        obj_vali_mess.lastElementChild.firstElementChild.firstElementChild.classList.add("fa-close");
    }
    if (hasSpecial(obj.value) == false) {
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (obj.value.length >= 2) {
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.firstElementChild.firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (hasNumber(obj.value) == false && hasSpecial(obj.value) == false && obj.value.length >= 2) {
        btn_verification[btn_index] = true;
    } else {
        btn_verification[btn_index] = false;
    }
    submit_btn_operation();
}

fname.addEventListener('focusin', () => {
    focusin_fun(fname_vali_mess)
    fname.addEventListener('keyup', () => {
        fname_lname_vali(fname, fname_vali_mess, 0)
    })
})
fname.addEventListener('focusout', () => {
    focusout_fun(fname_vali_mess)
})

lname.addEventListener('focusin', () => {
    focusin_fun(lname_vali_mess)
    lname.addEventListener('keyup', () => {
        fname_lname_vali(lname, lname_vali_mess, 1);
    })
})
lname.addEventListener('focusout', () => {
    focusout_fun(lname_vali_mess)
})

function username_password_cpassword_vali_fun(obj, obj_vali_mess, btn_index, len) {
    if (obj.value.length >= len) {
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[0].firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (hasSpecial(obj.value) == true) {
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[1].firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (hasNumber(obj.value) == true) {
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[2].firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (hasCapp(obj.value) == true) {
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[3].firstElementChild.firstElementChild.classList.add('fa-close');
    }
    if (hasLower(obj.value) == true) {
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.add('fa-check');
    } else {
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.remove();
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.add('fa');
        obj_vali_mess.children[4].firstElementChild.firstElementChild.classList.add('fa-close');
    }

    if (hasLower(obj.value) == true && hasCapp(obj.value) == true && hasNumber(obj.value) == true && hasSpecial(obj.value) == true && obj.value.length >= len) {
        btn_verification[btn_index] = true;
    } else {
        btn_verification[btn_index] = false;
    }
    submit_btn_operation();
}

c_username.addEventListener('focusin', () => {
    focusin_fun(c_username_vali_mess)
    c_username.addEventListener('keyup', () => {
        username_password_cpassword_vali_fun(c_username, c_username_vali_mess, 2, 6);
    })
})
c_username.addEventListener('focusout', () => {
    focusout_fun(c_username_vali_mess)
})

mpassword.addEventListener('focusin', () => {
    focusin_fun(mpassword_vali_mess)
    mpassword.addEventListener('keyup', () => {
        username_password_cpassword_vali_fun(mpassword, mpassword_vali_mess, 3, 8);
    })
})
mpassword.addEventListener('focusout', () => {
    focusout_fun(mpassword_vali_mess)
})

mcpassword.addEventListener('focusin', () => {
    focusin_fun(mcpassword_vali_mess)
    mcpassword.addEventListener('keyup', () => {
        username_password_cpassword_vali_fun(mcpassword, mcpassword_vali_mess, 4, 8);
        if (mpassword.value == mcpassword.value) {
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.remove();
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa');
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa-check');
            btn_verification[4] = true;
        } else {
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.remove();
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa');
            mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa-close');
            btn_verification[4] = false;
        }
        submit_btn_operation();
    })

})
mcpassword.addEventListener('focusout', () => {
    focusout_fun(mcpassword_vali_mess)
})

function checkbox_vali() {
    if (checkbox.checked) {//without eventlistener checked propety not work
        btn_verification[5] = true;
    } else {
        btn_verification[5] = false;
    }
    submit_btn_operation();
}

// fifty btn_verification belong to checkbox
checkbox.addEventListener('change', () => {
    checkbox_vali();
})


   