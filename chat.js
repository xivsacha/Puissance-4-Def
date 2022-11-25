const form = document.querySelector("#form");
const inputText = document.getElementById("text");
const chatBox = document.querySelector("#chatBox");
const msgBox = document.querySelector("#msgBox")


form.addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("message sent")
    let message = inputText.value;
    if(message != ""){
        const newMessage = document.createElement("p");
        const msgText = document.createTextNode(message);
        newMessage.appendChild(msgText);
        newMessage.classList.add("userMessage");
        chatBox.insertBefore(newMessage, msgBox);
        inputText.value = "";
    }

});