const password_checker = document.querySelector(".password-checker");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2")
const progress_bar = document.querySelector(".barre");
let strengthP = document.createElement("p");
let recep = document.getElementById("forceMdp");
let errMsg = document.createElement("p");
const button = document.querySelector("#btn");
const errMsgBox = document.querySelector("#errMsgBox");



password.onkeyup = function(){
    checkPasswordStrength(password.value);
}

password2.onkeyup = function(){
    checkPasswordMatch(password.value, password2.value);
}

function checkPasswordStrength(password) {
    let strength = 0;

    if (password.match(/(?=.{1})/)) strength++;

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/)) strength++; 

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/ && /(?=.*[!@#$%&])/)) strength++;

    console.log(strength);


    switch(strength){
        case 0:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: unset;`;
            strengthP.textContent = "";
            break;
        case 1:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: red;`;

            check = document.getElementById("p1");

            if(check == undefined){

                
                strengthP.textContent = "Weak";
                strengthP.removeAttribute("id","p1");
                strengthP.removeAttribute("id","p2");
                strengthP.setAttribute("id","p1");                
                recep.append(strengthP);

            }
            break;
        case 2:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: yellow;`;

            check = document.getElementById("p2");

            if(check == undefined){

                strengthP.textContent = "Medium";
                strengthP.removeAttribute("id","p1");
                strengthP.removeAttribute("id","p3");
                strengthP.setAttribute("id","p2");
                recep.append(strengthP);
            }

            break;
        case 3:
            progress_bar.style.cssText = `width  : ${(strength / 3)*98}%; background-color: green;`;
           
            check = document.getElementById("p3");
           
            if(check == undefined){

                strengthP.textContent = "Strong";
                strengthP.removeAttribute("id","p1");
                strengthP.removeAttribute("id","p2");
                strengthP.setAttribute("id","p3");                
                recep.append(strengthP);

            }

            break; 
    }
}

passwordMatch = 0;

function checkPasswordMatch(password, password2){

    if(password == password2){
        passwordMatch = 1;
        button.classList.remove("disabledButton");
        button.classList.add("orangeButton");
        errMsg.textContent = ""
    } else if(password == "" || password2 == ""){
        passwordMatch = 0;
        button.classList.remove("disabledButton");
        button.classList.add("orangeButton");
        errMsg.textContent = ""
    } else {
        passwordMatch = 0;
        button.classList.remove("orangeButton");
        button.classList.add("disabledButton");
        errMsg.textContent = "Passwords don't match!"
        errMsg.classList.add("errMsg");
        errMsgBox.append(errMsg);
    }
}