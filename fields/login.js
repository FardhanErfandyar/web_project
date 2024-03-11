let LoginButton = document.getElementById("LoginButton");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");


LoginButton.onclick = function() {
    nameField.style.maxHeight = "0";
    title.innerHTML = "Login"
    

}
