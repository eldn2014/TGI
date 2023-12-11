let LoginForm = document.querySelector(".my-form");

LoginForm.addEventListener("submit",(e)=>{
    e.preventDefault();
    let email = document.getElementById("email");
    let password = document.getElementById("password");

    console.log('email: ',email.value);
    console.log('senha: ', password.value);
})