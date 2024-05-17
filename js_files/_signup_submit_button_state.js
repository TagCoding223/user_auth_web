let btn_final_verifi = false;
let btn = document.getElementsByTagName('button')[0];
// btn title
let btn_lock_tMess = new Array("Complete First Name Validation", "Complete Last Name Validation", "Complete Username Validation", "Complete Password validation", "Complete Confirm Password validation", "Please Accept are T&C");
// console.log(btn_lock_tMess);
function submit_btn_operation() {
    for (let i = 0; i < btn_verification.length; i++) {
        if (btn_verification[i] == true) {
            btn_final_verifi = true;
            btn.title = null;
        } else {
            btn_final_verifi = false;
            // console.log("hello  ", btn_lock_tMess[i])
            btn.title = btn_lock_tMess[i];
            break;
        }
    }

    if (btn_final_verifi) {
        btn.style.opacity = 1;
        btn.disabled = false;
        btn.firstElementChild.classList.remove();
        btn.firstElementChild.classList.add('fa');
        btn.firstElementChild.classList.add('fa-unlock-alt');
    } else {
        btn.style.opacity = 0.5;
        btn.disabled = true;
        btn.firstElementChild.classList.remove();
        btn.firstElementChild.classList.add('fa');
        btn.firstElementChild.classList.add('fa-lock');
    }
}