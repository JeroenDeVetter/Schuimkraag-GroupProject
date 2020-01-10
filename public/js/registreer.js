/* window.onload = function() { */

    let voornaamInput = document.querySelector('#first_name');
    let achternaamInput = document.querySelector('#last_name');
    let firmanaamInput = document.querySelector('#company_name');
    let btwnrInput = document.querySelector('#vat_nr');
    let emailInput = document.querySelector('#email');
    let telefoonInput = document.querySelector('#phone');
    let straatInput = document.querySelector('#street');
    let huisnummerInput = document.querySelector('#streetnumber');
    let postnummerInput = document.querySelector('#postcode');
    let paswoordInput = document.querySelector('#password');
    let paswoord2Input = document.querySelector('#password_control');
    let foutboodschap = document.querySelector('#error_message');


    function firstNameInputVerify() {
        if (this.value !== "") {
            if (regfirstandlastnameCheck(this.value)) {
                voornaamInput.value = cleanFirstName(voornaamInput.value);
                emptyMessage(foutboodschap);
            } else {
                foutboodschap.innerHTML = "<div>Voornaam is niet correct. Min 2 letters, geen getallen of symbolen &nbsp;</div><div>&#x274C</div>";
                toggleErrorMessage(foutboodschap);
            }
        } else {
            foutboodschap.innerHTML = "<div>Voornaam is vereist &nbsp;</div><div>&#x274C;</div>";
            toggleErrorMessage(foutboodschap);
        }
    }

    function lastNameInputVerify() {
        if (this.value !== ""){
          if (regfirstandlastnameCheck(this.value)) {
            achternaamInput.value = cleanLastName(achternaamInput.value);
            emptyMessage(foutboodschap);
          } else {
            foutboodschap.innerHTML = "<div>Achternaam is niet correct. Min 2 letters, geen getallen of symbolen &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
          }
        }
        else {
          foutboodschap.innerHTML = "<div>Achternaam is vereist &nbsp;</div><div>&#x274C;</div>";
          toggleErrorMessage(foutboodschap);
        }
      }

    function regfirstandlastnameCheck(nameCheck) {
        let nameRegex = /^[a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
        return (nameRegex.test(nameCheck));
    }

    function cleanFirstName(string) {
        string = string.trim();
        string = string.replace(/\s+/g, ' ');
        string = string.replace(/\s-\s/g, '-');
        let newSentence = "";
        let x = string.split(" ").length;
        var words = string.split(" ");
        var firstSubPart;

        for (let i = 0; i < x; i++) {
            if ((words[i].split("-")).length > 1) {
                let subWords = words[i].split("-");
                let newSubSentence2 = "";
                let k = subWords.length;
                for (j = 0; j < (k - 1); j++) {
                    if (j === 0) {
                        let firstSubPart1 = subWords[j].substring(0, 1).toUpperCase();
                        let firstSubPart2 = (subWords[j].substring(1)).toLowerCase();
                        firstSubPart = firstSubPart1 + firstSubPart2;
                    } else {
                        firstSubPart = "";
                    }
                    let lastSubPart1 = (subWords[j + 1].substring(0, 1)).toUpperCase();
                    let lastSubPart2 = (subWords[j + 1].substring(1)).toLowerCase();
                    let newSubWord = firstSubPart + "-" + lastSubPart1 + lastSubPart2;
                    newSubSentence2 = newSubSentence2 + newSubWord;
                }
                newSentence = newSentence + newSubSentence2 + " ";
                string = newSentence;
            } else {
                var firstPart = words[i].substring(0, 1);
                var lastPart = words[i].substring(1);
                firstPart = (words[i].substring(0, 1)).toUpperCase();
                lastPart = (words[i].substring(1)).toLowerCase();
                newWord = firstPart + lastPart;
                newSentence = newSentence + newWord + " ";
                string = newSentence
            }
        }
        string = string.trimEnd();
        return string;
    }

    function cleanLastName(string){
        string = string.trim();
        string = string.replace(/\s+/g,' ');
        let newSentence ="";
        let x = string.split(" ").length;
        var words= string.split(" ");
        var firstSubPart;
        if (string.valueOf() === string.valueOf().toUpperCase()) {
          for (let i = 0; i < x; i++){
            if ((words[i].split("-")).length > 1) {
              let subWords = words[i].split("-");
              let newSubSentence2 = "";
              let k = subWords.length;
              for (j = 0; j < (k - 1); j++) {
                let counter = subWords[j].length;
                if (j === 0) {
                  let firstSubPart1 = subWords[j].substring(0, 1).toUpperCase();
                  let firstSubPart2 = (subWords[j].substring(1)).toLowerCase();
                  firstSubPart = firstSubPart1 + firstSubPart2;
                } else {
                  firstSubPart = "";
                }
                let lastSubPart1 = (subWords[j + 1].substring(0, 1)).toUpperCase();
                let lastSubPart2 = (subWords[j + 1].substring(1)).toLowerCase();
                let newSubWord = firstSubPart + "-" + lastSubPart1 + lastSubPart2;
                newSubSentence2 = newSubSentence2 + newSubWord;
              }
              newSentence = newSentence + newSubSentence2 + " ";
              string = newSentence;
            } else {
              var firstPart = words[i].substring(0, 1);
              var lastPart = words[i].substring(1);
              firstPart = (words[i].substring(0, 1)).toUpperCase();
              lastPart = (words[i].substring(1)).toLowerCase();
              newWord = firstPart + lastPart;
              newSentence = newSentence + newWord + " ";
              string = newSentence
            }
          }
        }
        return string;
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

    function addressInputVerify() {
      if (addressInput.value !== "") {
        if (regaddressCheck(this.value)) {
          addressInput.value = cleanAddress(addressInput.value);
          emptyMessage(addressErrorMessage);
        } else {
          addressErrorMessage.innerHTML = "No valid address building. No separated by space&nbsp;&#x274C";
          toggleErrorMessage(addressErrorMessage);
        }
      }
    }

    function regaddressCheck(addressCheck) {
      let addressRegex = /^([1-9][e][\s])*([a-zA-Zàâçéèêëîïôûùüÿñ\- /']+(([.][\s])?|([\s]))?)+[1-9][0-9]*(([-]|[\/][1-9][[0-9]*)|([\s]?[a-zA-Z 1-9]+))?$/;
      return (addressRegex.test(addressCheck));
    }

    
    voornaamInput.addEventListener('blur', firstNameInputVerify);
    achternaamInput.addEventListener('blur', lastNameInputVerify);
    /* firmanaamInput.addEventListener('blur', firstNameInputVerify);
    btwnrInput.addEventListener('blur', firstNameInputVerify);
    emailInput.addEventListener('blur', firstNameInputVerify);
    telefoonInput.addEventListener('blur', firstNameInputVerify);
    straatInput.addEventListener('blur', firstNameInputVerify);
    huisnummerInput.addEventListener('blur', firstNameInputVerify);
    postnummerInput.addEventListener('blur', firstNameInputVerify);
    paswoordInput.addEventListener('blur', firstNameInputVerify);
    paswoord2Input.addEventListener('blur', firstNameInputVerify);
 */
    foutboodschap.addEventListener("click", removeErrorMessage);


 /* } */