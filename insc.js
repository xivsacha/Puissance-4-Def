const password_checker = document.querySelector('.password-checker');
const password = document.querySelector('#password');
const progress_bar = document.querySelector('.barre');
let strengthP = document.createElement("p");
let recep = document.getElementById("forceMdp");


password.onkeyup = () =>{
    //console.log(password.value)
    checkPasswordStrength(password.value);
}

function checkPasswordStrength(password) {
    let strength = 0;

    if (password.match(/(?=.{1})/)) strength++; //Mot de passe faible : moins de 8 caractères, pas de caractère spécial, pas de majuscule, pas de chiffre

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/)) strength++; // Mot de passe moyen : Plus de 8 caractères, une majuscule au minimum, un chiffre au minimum, pas de caractère spécial

    if (password.match(/(?=.*[A-Z])/ && /(?=.*[0-9])/ && /(?=.{8})/ && /(?=.*[!@#$%&])/)) strength++; //Mot de passe fort : Plus de 8 caractères, au moins une majuscule, un chiffre et un caractère spécial 

    console.log(strength);


    switch(strength){
        case 0:
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: unset;`;
            strengthP.textContent = "";
            write("resultat");
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
            progress_bar.style.cssText = `width  : ${(strength / 3)*100}%; background-color: green;`;
           
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