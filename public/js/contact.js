let emailContact = document.querySelector('#email_contact');
let voornaamContact = document.querySelector('#first_name');
let achternaamContact = document.querySelector('#last_name');
let onderwerpContact = document.querySelector('#subject_contact');
let messageContact = document.querySelector('#message');

let foutboodschapContact = document.querySelector('#error_message_contact');

function emailVerifyContact() {
    console.log("checkmail");

    if (emailContact.value !== "") {
        if (regmailCheck(emailContact.value)) {
            console.log("check");
            emptyMessage(foutboodschapContact);
            emailContact.value = cleanemail(emailContact.value);
        } else {
            foutboodschapContact.innerHTML = "<div>Email heeft ongeldig formaat&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschapContact);
        }
    } else {
        foutboodschapContact.innerHTML = "<div>Email is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschapContact);
    }

}

function voornaamVerifyContact(){
    console.log("voornaam");
    if (voornaamContact.value !== "") {
        if (regfirstandlastnameCheck(voornaamContact.value)) {
            voornaamContact.value = cleanFirstName(voornaamContact.value);
            emptyMessage(foutboodschapContact);
        } else {
            foutboodschapContact.innerHTML = "<div>Voornaam is niet correct. Min 2 letters, geen getallen of symbolen &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschapContact);
        }
    } else {
        foutboodschapContact.innerHTML = "<div>Voornaam is vereist &nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschapContact);
    }
}

function achternaamVerifyContact() {
    console.log("achternaam");
    if (achternaamContact.value !== "") {
        console.log(foutboodschapContact.innerHTML);
        if (regfirstandlastnameCheck(achternaamContact.value)) {
            achternaamContact.value = cleanName(achternaamContact.value);
            emptyMessage(foutboodschapContact);
        } else {
            foutboodschapContact.innerHTML = "<div>Naam is niet correct. Min 2 letters, geen getallen of symbolen &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschapContact);
        }
    } else {
        foutboodschapContact.innerHTML = "<div>Naam is vereist &nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschapContact);
    }
}


function subjectVerifyContact() {
    console.log("checkonderwerpe");
    if (onderwerpContact.value !== "") {
        if (onderwerpContact.value.length >= 2) {
            emptyMessage(foutboodschapContact);
        } else {
            foutboodschapContact.innerHTML = "<div>Onderwerp dient minstens 2 karakters te bevatten. &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschapContact);
        }
    } else {
        foutboodschapContact.innerHTML = "<div>Onderwerp is vereist. &nbsp;</div><div>&#x274C</div>";
        toggleErrorMessage(foutboodschapContact);
    }
}

function messageVerifyContact() {
    console.log("message");
    if (messageContact.value !== "") {
        if (messageContact.value.length >= 2) {
            emptyMessage(foutboodschapContact);
        } else {
            foutboodschapContact.innerHTML = "<div>Boodschap dient minstens 2 karakters te bevatten. &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschapContact);
        }
    } else {
        foutboodschapContact.innerHTML = "<div>Boodschap is vereist. &nbsp;</div><div>&#x274C</div>";
        toggleErrorMessage(foutboodschapContact);
    }
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
            string = newSentence;
        }
    }
    string = string.trimEnd();
    return string;
}

function cleanName(string) {
    string = string.trim();
    string = string.replace(/\s+/g, ' ');
    let newSentence = "";
    let x = string.split(" ").length;
    var words = string.split(" ");
    var firstSubPart;
    if (string.valueOf() === string.valueOf().toUpperCase()) {
        for (let i = 0; i < x; i++) {
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
                string = newSentence;
            }
        }
    }
    return string;
}

function cleanemail(string) {
    return string.toLowerCase();
}

function regmailCheck(mailCheck) {

    let emailRegex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,6}$/;
    return (emailRegex.test(mailCheck));

}

function regfirstandlastnameCheck(nameCheck) {

    let nameRegex = /^[a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
    return (nameRegex.test(nameCheck));
}

function emptyMessage(foutboodschapContact) {

    foutboodschapContact.innerHTML = "";
    foutboodschapContact.classList.remove("show");
    foutboodschapContact.classList.add('hide');

}

function toggleErrorMessage(foutboodschapContact) {

    foutboodschapContact.classList.remove("hide");
    foutboodschapContact.classList.add("show");

}

function removeErrorMessage() {
    this.classList.remove("show");
    this.classList.add("hide");

}

voornaamContact.addEventListener('blur', voornaamVerifyContact)
achternaamContact.addEventListener('blur', achternaamVerifyContact)
emailContact.addEventListener('blur', emailVerifyContact);
onderwerpContact.addEventListener('blur', subjectVerifyContact);
messageContact.addEventListener('blur', messageVerifyContact);

foutboodschapContact.addEventListener("click", removeErrorMessage);

form.addEventListener('submit', CheckAllContact);

function CheckAllContact(event) {
    let teller = 0;
    messageVerifyContact();
    if (foutboodschapContact.innerHTML !== "") {
        teller += 1
    }
    subjectVerifyContact();
    if (foutboodschapContact.innerHTML !== "") {
        teller += 1
    }
    emailVerifyContact();
    if (foutboodschapContact.innerHTML !== "") {
        teller += 1
    }
    achternaamVerifyContact();
    if (foutboodschapContact.innerHTML !== "") {
        teller += 1
    }
    voornaamVerifyContact();
    if (foutboodschapContact.innerHTML !== "") {
        teller += 1
    }
    console.log(teller);
    if (teller > 0 || (foutboodschapContact.innerHTML !== "")) {
        console.log("in foutboodschap div");
        foutboodschapContact.innerHTML = "<div>De input-waarden zijn niet correct &nbsp;</div><div>&#x274C</div>";
        console.log(foutboodschapContact);
        toggleErrorMessage(foutboodschapContact);
        event.preventDefault();
    }

}