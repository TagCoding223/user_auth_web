let password = document.getElementsByName('password')[0]
let cpassword = document.getElementsByName('cpassword')[0]
let password_eye = document.getElementById('password_eye')
let cpassword_eye = document.getElementById('cpassword_eye')
let password_message=document.getElementById('password_message')
let cpassword_message=document.getElementById('cpassword_message')

// password text hide/show
function password_eye_fun(obj,obj_eye,obj_message) {
    // console.log(obj)
    // console.log(obj_eye)
    if (obj.type === "password") {
        obj.type = "text"
        obj_eye.firstElementChild.classList.remove("fa-eye-slash")
        obj_eye.firstElementChild.classList.add("fa-eye")
        obj_message.innerHTML='Hide Password'
    } else {
        obj.type = "password"
        obj_eye.firstElementChild.classList.remove("fa-eye")
        obj_eye.firstElementChild.classList.add("fa-eye-slash")
        obj_message.innerHTML='Show Password'
    }
}

// event listener not work on i tag

password_eye.addEventListener('click',()=>{
    password_eye_fun(password,password_eye,password_message)
})
cpassword_eye.addEventListener('click',()=>{
    password_eye_fun(cpassword,cpassword_eye,cpassword_message)
})

// eye icon hover action

password_eye.addEventListener('pointerenter',()=>{
    password_message.style.visibility='visible';
})
password_eye.addEventListener('pointerleave',()=>{
    password_message.style.visibility='hidden';
})
cpassword_eye.addEventListener('pointerenter',()=>{
    cpassword_message.style.visibility='visible';
})
cpassword_eye.addEventListener('pointerleave',()=>{
    cpassword_message.style.visibility='hidden';
})
