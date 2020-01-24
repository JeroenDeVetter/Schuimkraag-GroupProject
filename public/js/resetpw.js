let paswoordInputControl = document.querySelector('#password_control');
let paswoordInput = document.querySelector('#password');

let foutboodschap = document.querySelector('#error_message_password_reset');


function passwordVerify() {

    if (paswoordInput.value !== "") {
        if (regpasswordCheck(paswoordInput.value)) { // Second Change
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Paswoord voldoet niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Paswoord is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }

}

function passwordVerify2() {
    if (paswoordInputControl.value !== "") {
        if (regpasswordCheck(paswoordInputControl.value)) { // Second Change
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Herhaalpaswoord voldoet niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Paswoord is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }
    if ((paswoordInput.value === paswoordInputControl.value) && (paswoordInput.value.length > 7)) {
        emptyMessage(foutboodschap);
    } else {
        if (paswoordInput.value !== paswoordInputControl.value) {
            foutboodschap.innerHTML = "<div>Wachtwoorden zijn niet gelijk&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Paswoorden voldoen niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    }
}

function regpasswordCheck(passwordCheck) {

    let passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]).{8,13}$/;
    return (passwordRegex.test(passwordCheck));

}


function emptyMessage(foutboodschap) {

    foutboodschap.innerHTML = "";
    foutboodschap.classList.remove("show");
    foutboodschap.classList.add('hide');

}

function toggleErrorMessage(foutboodschap) {

    foutboodschap.classList.remove("hide");
    foutboodschap.classList.add("show");

}

function removeErrorMessage() {

    this.classList.remove("show");
    this.classList.add("hide");

}

paswoordInputControl.addEventListener('blur', passwordVerify2);
paswoordInput.addEventListener('blur', passwordVerify);

foutboodschap.addEventListener("click", removeErrorMessage);

form.addEventListener('submit', CheckAllLogin);

function CheckAllLogin(event) {
    let teller = 0;
    passwordVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1;
    }
    passwordVerify2();
    if (foutboodschap.innerHTML !== "") {
        teller += 1;
    }
    if (teller > 0 || (foutboodschap.innerHTML !== "")) {
        console.log("in foutboodschap div");
        foutboodschapContact.innerHTML = "<div>De input-waarden zijn niet correct &nbsp;</div><div>&#x274C</div>";
        console.log(foutboodschapContact);
        toggleErrorMessage(foutboodschapContact);
        event.preventDefault();
    }
}