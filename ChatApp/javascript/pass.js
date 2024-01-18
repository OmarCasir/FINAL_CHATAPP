const pswrdField = document.querySelector(".form .field input[type='password']"),
toggleBtn = document.querySelector(".form form .field .fas");

toggleBtn.onclick = () => {
    if(pswrdField.type == "password") {
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    } else {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}