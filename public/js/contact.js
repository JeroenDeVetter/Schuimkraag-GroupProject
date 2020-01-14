let emailContact = document.querySelector('#email_contact');
let naamContact = document.querySelector('#naam');
let messageContact = document.querySelector('#message');

let foutboodschapLogin = document.querySelector('#error_message_login');

function emailVerifyContact() {

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

function naamVerifyContact() {
  if (this.value !== "") {
      if (regnameCheck(this.value)) {
          naamContact.value = cleanName(naamContact.value);
          emptyMessage(foutboodschap);
      } else {
          foutboodschap.innerHTML = "<div>Achternaam is niet correct. Min 2 letters, geen getallen of symbolen &nbsp;</div><div>&#x274C</div>";
          toggleErrorMessage(foutboodschap);
      }
  } else {
      foutboodschap.innerHTML = "<div>Achternaam is vereist &nbsp;</div><div>&#x274C;</div>";
      toggleErrorMessage(foutboodschap);
  }
}


function regmailCheck(mailCheck) {

  let emailRegex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,6}$/;
  return (emailRegex.test(mailCheck));

}

function regnameCheck(nameCheck) {
  
  let nameRegex = /^[a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
  return (nameRegex.test(nameCheck));
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

naamContact.addEventListener('blur', naamVerifyContact)
emailContact.addEventListener('blur', emailVerifyContact);
messageContact.addEventListener('blur', messageVerifyContact);

foutboodschapLogin.addEventListener("click", removeErrorMessage);

form.addEventListener('submit', CheckAllLogin);

function CheckAllLogin(event){
  
  naamVerifyContact();
  emailVerifyContact();
  console.log(foutboodschapLogin.innerHTML)
  if (foutboodschapLogin.innerHTML !== "") {
    
    event.preventDefault();
  }

}