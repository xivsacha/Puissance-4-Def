const form = document.querySelector("#form");
const inputText = document.getElementById("text");
const chatBox = document.querySelector("#chatBox");
const msgBox = document.querySelector("#msgBox")

let who = 0;

form.addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("message sent")
    message = inputText.value;
    const newMessage = document.createElement("p");
    const msgText = document.createTextNode(message);
    newMessage.appendChild(msgText);
    if(who == 1){    
        newMessage.classList.remove("userMessage");
        newMessage.classList.add("message");
        who = 0;
    } else {
        newMessage.classList.remove("message");
        newMessage.classList.add("userMessage");
        who = 1;
    }
    chatBox.insertBefore(newMessage, msgBox);
});