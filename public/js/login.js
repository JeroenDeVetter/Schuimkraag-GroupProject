
let emailInputLogin = document.querySelector('#email_login');
let paswoordInputLogin = document.querySelector('#password_login');

let foutboodschapLogin = document.querySelector('#error_message_login');

function emailVerifyLogin() {

  if (emailInputLogin.value !== "") {
      if (regmailCheck(emailInputLogin.value)) {
      emptyMessage(foutboodschapLogin);
      emailInputLogin.value = cleanemail(emailinput.value);
      } else {
      foutboodschapLogin.innerHTML = "<div>Email heeft verkeerd formaat&nbsp;</div><div>&#x274C</div>";
      toggleErrorMessage(foutboodschapLogin);
      }
  }
  else {
      foutboodschapLogin.innerHTML = "<div>Email is vereist&nbsp;</div><div>&#x274C;</div>";
      toggleErrorMessage(foutboodschapLogin);
  }

}

function passwordVerifyLogin() { 

  if (paswoordInputLogin.value !== "") {
      if (regpasswordCheck(paswoordInputLogin.value)) { // Second Change
        emptyMessage(foutboodschapLogin);
      } else {
          foutboodschapLogin.innerHTML = "<div>Paswoord voldoet niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
          toggleErrorMessage(foutboodschapLogin);
      }
  }
  else {
      foutboodschapLogin.innerHTML = "<div>Paswoord is vereist&nbsp;</div><div>&#x274C;</div>";
      toggleErrorMessage(foutboodschapLogin);
  }

}

function regpasswordCheck(passwordCheck) {

  let passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]).{8,13}$/;
  return (passwordRegex.test(passwordCheck));

}

function regmailCheck(mailCheck) {

  let emailRegex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,6}$/;
  return (emailRegex.test(mailCheck));

}

function emptyMessage(foutboodschapLogin) {

  foutboodschapLogin.innerHTML = "";
  foutboodschapLogin.classList.remove("show");
  foutboodschapLogin.classList.add('hide');

}

function toggleErrorMessage(foutboodschapLogin) {

  foutboodschapLogin.classList.remove("hide");
  foutboodschapLogin.classList.add("show");

}

function removeErrorMessage() {

  this.classList.remove("show");
  this.classList.add("hide");

}

emailInputLogin.addEventListener('blur', emailVerifyLogin);
paswoordInputLogin.addEventListener('blur', passwordVerifyLogin);

foutboodschapLogin.addEventListener("click", removeErrorMessage);

//form.addEventListener('submit', CheckAllLogin);

function CheckAllLogin(event){
  
  passwordVerifyLogin();
  emailVerifyLogin();é

}