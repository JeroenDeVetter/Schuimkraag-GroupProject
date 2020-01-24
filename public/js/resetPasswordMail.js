let emailResetPassword = document.querySelector('#email');

let foutboodschap = document.querySelector('#error_message_resetpw');

function emailVerify() {
    console.log("checkmail");

    if (emailResetPassword.value !== "") {
        if (regmailCheck(email.value)) {
            console.log("check");
            emptyMessage(foutboodschap);
            email.value = cleanemail(emailResetPassword.value);
        } else {
            foutboodschap.innerHTML = "<div>Email heeft ongeldig formaat&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Email is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }

}

function cleanemail(string) {
    return string.toLowerCase();
}

function regmailCheck(mailCheck) {

    let emailRegex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,6}$/;
    return (emailRegex.test(mailCheck));

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

emailResetPassword.addEventListener('blur', emailVerify);

foutboodschap.addEventListener("click", removeErrorMessage);

form.addEventListener('submit', CheckAllContact);

function CheckAllContact(event) {

    emailVerify();
    if (foutboodschap.innerHTML !== "") {
      event.preventDefault();
    }
    

}