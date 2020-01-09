window.onload=function() {
  // declarations
  let voornaamInput = document.querySelector('#first-name');
  let achternaamInput = document.querySelector('#last-name');
  let firmanaamInput = document.querySelector('#company-name');
  let btwnrInput = document.querySelector('#vat-nr');
  let emailInput = document.querySelector('#email');
  let telefoonInput = document.querySelector('#phone');
  let straatInput = document.querySelector('#street');
  let huisnummerInput = document.querySelector('#streetnumber');
  let postnummerInput = document.querySelector('#postcode');
  let paswoordInput = document.querySelector('#password');
  let paswoord2Input = document.querySelector('#password-control');
  let foutboodschap = document.querySelector ('error-message');


  let htmlyear = document.querySelector("#htmlYear");
  let year = new Date().getFullYear();
  htmlyear.textContent = year;

  function firstNameInputVerify() {
    if (this.value !== ""){
      if (regfirstandlastnameCheck(this.value)) {
        firstNameInput.value = cleanFirstName(firstNameInput.value);
        emptyMessage(foutboodschap);
      } else {
        foutboodschap.innerHTML = "Voornaam is niet correct. Min 2 letters, no numerals or symbols &nbsp;&#x274C";
        toggleErrorMessage(foutboodschap);
      }
    }
    else {
      foutboodschap.innerHTML = "voornaam is vereist &nbsp;&nbsp;&#x274C;";
      toggleErrorMessage(foutboodschap);
    }
  }

  function regfirstandlastnameCheck(nameCheck) {
    let nameRegex = /^[a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
    return (nameRegex.test(nameCheck));
  }

  function cleanFirstName(string){
    string = string.trim();
    string = string.replace(/\s+/g,' ');
    string = string.replace(/\s-\s/g,'-');
    let newSentence ="";
    let x = string.split(" ").length;
    var words= string.split(" ");
    var firstSubPart;

    for (let i=0; i<x; i++){
      if ((words[i].split("-")).length > 1){
        let subWords = words[i].split("-");
        let newSubSentence2 ="";
        let k = subWords.length;
        for (j=0; j < (k-1); j++){
          if (j===0) {
            let firstSubPart1 = subWords[j].substring(0,1).toUpperCase();
            let firstSubPart2 = (subWords[j].substring(1)).toLowerCase();
            firstSubPart = firstSubPart1 + firstSubPart2;
          }
          else {
            firstSubPart = "";
          }
          let lastSubPart1 = (subWords[j+1].substring(0,1)).toUpperCase();
          let lastSubPart2 = (subWords[j+1].substring(1)).toLowerCase();
          let newSubWord = firstSubPart + "-" + lastSubPart1 + lastSubPart2;
          newSubSentence2 = newSubSentence2 + newSubWord;
        }
        newSentence= newSentence + newSubSentence2 + " ";
        string = newSentence;
      }
      else{
        var firstPart = words[i].substring(0,1);
        var lastPart = words[i].substring(1);
        firstPart = (words[i].substring(0,1)).toUpperCase();
        lastPart = (words[i].substring(1)).toLowerCase();
        newWord = firstPart + lastPart;
        newSentence = newSentence + newWord + " ";
        string = newSentence}
    }
    string = string.trimEnd();
    return string;
  }

  function emptyMessage(foutboodschap){
    foutboodschap.innerHTML = "";
    foutBoodschapBox.classList.remove("show");
    foutBoodschapBox.classList.add('hide');
  }

  function toggleErrorMessage(foutboodschap){
    foutBoodschapBox.classList.remove("hide");
    foutBoodschapBox.classList.add("show");
  }

  function removeErrorMessage() {
    this.classList.remove("show");
    this.classList.add("hide");
  }


  voornaamInput.addEventListener('blur',firstNameInputVerify);
  foutboodschap.addEventListener("click", removeErrorMessage);
  achternaamInput.addEventListener('blur',firstNameInputVerify);
  firmanaamInput.addEventListener('blur',firstNameInputVerify);
  btwnrInput.addEventListener('blur',firstNameInputVerify);
  emailInput.addEventListener('blur',firstNameInputVerify);
  telefoonInput.addEventListener('blur',firstNameInputVerify);
  straatInput.addEventListener('blur',firstNameInputVerify);
  huisnummerInput.addEventListener('blur',firstNameInputVerify);
  postnummerInput.addEventListener('blur',firstNameInputVerify);
  paswoordInput.addEventListener('blur',firstNameInputVerify);
  paswoord2Input.addEventListener('blur',firstNameInputVerify);








  
  
  lastNameInput.addEventListener('blur',lastNameInputVerify );
  lastNameErrorMessage.addEventListener('click', removeErrorMessage);
  addressInput.addEventListener('blur',addressInputVerify);
  addressErrorMessage.addEventListener('click',removeErrorMessage); */


}