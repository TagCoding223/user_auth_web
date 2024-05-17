<?php
    session_start();
    // if ((isset($_SESSION['username']))){
    if ((isset($_SESSION['username'])) || $_SESSION['loggedin']==true) {
        
    }else{
        echo 'helllo2';
        header("Location: ./_login_page.html");
    } 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password | Image Picker</title>
    <link rel="stylesheet" href="..\User_WebProject\php_code_t\web_addons\fontawesome\css\all.css">
    <link rel="stylesheet" href="css_files/_signup_css.css">
</head>

<body>
    <div class="container">
        <div class="icon">
            <i class="user-icon fa fa-user"></i>
        </div>
        <h3>Set Password</h3>
        <form class="form_con" action="./php_files/_set_password_hander.php" method="post">
            <div class="inform_container forget_reset">
                <label for="password">Password : </label>
                <input type="password" name="password" required style="width: 34%; text-transform: none;" maxlength="20"
                    minlength="8">
                <span id="password_message">Show Password</span>
                <span id="password_eye"
                    style="position: relative;width: 6%;background: transparent;height: 0%;top: 5px;border-bottom: 2px solid;">
                    <i class="fas fa-eye-slash" style="cursor: pointer; background: white;color: black;"></i></span>
            </div>

            <div id="password_vali" class="floating_validation_box">
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>Minimum 8 & maximum 20 characters.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one special symbol.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one number.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one Uppercase letter.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one Lowercase letter.</p>
            </div>
            <div class="inform_container forget_reset">
                <label for="password">Confirm Password : </label>
                <input type="password" name="cpassword" required style="width: 34%;text-transform: none;" maxlength="20"
                    minlength="8">
                <span id="cpassword_message">Show Password</span>
                <span id="cpassword_eye"
                    style="position: relative;width: 6%;background: transparent;height: 0%;top: 5px;border-bottom: 2px solid;"><i
                        class="fas fa-eye-slash" style="cursor: pointer; background: white;color: black;"></i></span>
            </div>
            <div id="cpassword_vali" class="floating_validation_box">
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>Minimum 8 & maximum 20 characters.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one special symbol.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one number.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one Uppercase letter.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>At least one Lowercase letter.</p>
                <p><span class="validation_mark" style="background: transparent;"><i class="fa fa-close"
                            style="background: transparent;"></i></span>Password match.</p>

            </div>

            <button type="submit" disabled style="opacity: 0.5;"> <i class="fa fa-lock" style="background: transparent; padding-right: 9px;"
                    title="hello"></i>Change Password</button>
        </form>
    </div>

    <script src="..\User_WebProject\php_code_t\web_addons\fontawesome\js\all.js"></script>
    <script src="js_files/_form_validation_functions.js"></script>
    <script src="js_files/_password_hide_unhide.js"></script>
    <script>
        let btn_verification = [false, false];

        function focusin_fun(obj) {
            obj.style.visibility = 'visible';
            obj.style.display = 'block';
        }

        function focusout_fun(obj) {
            obj.style.visibility = 'hidden';
            obj.style.display = 'none';
        }
        let mpassword = document.getElementsByName('password')[0]
        let mpassword_vali_mess = document.getElementById('password_vali')

        let mcpassword = document.getElementsByName('cpassword')[0]
        let mcpassword_vali_mess = document.getElementById('cpassword_vali')
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

            if (hasLower(obj.value) == true && hasCapp(obj.value) == true && hasNumber(obj.value) == true && hasSpecial(obj.value) == true && obj.value.length >= len && mpassword.value==mcpassword.value){
                btn_verification[btn_index] = true;
            } else {
                btn_verification[btn_index] = false;
            }
            submit_btn_operation();
        }

        mpassword.addEventListener('focusin', () => {
            submit_btn_operation();
            focusin_fun(mpassword_vali_mess)
            mpassword.addEventListener('keyup', () => {
                username_password_cpassword_vali_fun(mpassword, mpassword_vali_mess, 0, 8);
                username_password_cpassword_vali_fun(mcpassword, mcpassword_vali_mess, 1, 8);
                submit_btn_operation();
            })
        })
        mpassword.addEventListener('focusout', () => {
            focusout_fun(mpassword_vali_mess)
            submit_btn_operation();
        })

        mcpassword.addEventListener('focusin', () => {
            submit_btn_operation();
            focusin_fun(mcpassword_vali_mess)
            mcpassword.addEventListener('keyup', () => {
                submit_btn_operation();
                username_password_cpassword_vali_fun(mcpassword, mcpassword_vali_mess, 1, 8);
                username_password_cpassword_vali_fun(mpassword, mpassword_vali_mess, 0, 8);
                if (mpassword.value == mcpassword.value) {
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.remove();
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa');
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa-check');
                    btn_verification[1] = true;
                } else {
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.remove();
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa');
                    mcpassword_vali_mess.children[5].firstElementChild.firstElementChild.classList.add('fa-close');
                    btn_verification[1] = false;
                }
                submit_btn_operation();
            })

        })
        mcpassword.addEventListener('focusout', () => {
            submit_btn_operation();
            focusout_fun(mcpassword_vali_mess)
        })

        let btn_final_verifi = false;
        let btn = document.getElementsByTagName('button')[0];
        // btn title
        let btn_lock_tMess = new Array("Complete Password validation", "Complete Confirm Password validation");
        // console.log(btn_lock_tMess);
        function submit_btn_operation() {
            for (let i = 0; i < btn_verification.length; i++) {
                if (btn_verification[i] == true) {
                    btn_final_verifi = true;
                    btn.title = '';
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
    </script>

    <script src="js_files/_message_heander.js"></script>
</body>

</html>