const ax = axios.create({
    baseURL: 'http://becode.local/Schuimkraag-GroupProject/public/js'
});

let voornaamInput = document.querySelector('#first_name');
let achternaamInput = document.querySelector('#last_name');
let firmanaamInput = document.querySelector('#company_name');
let btwnrInput = document.querySelector('#vat_nr');
let emailInput = document.querySelector('#email');
let telefoonInput = document.querySelector('#phone');
let straatInput = document.querySelector('#street');
let huisnummerInput = document.querySelector('#streetnumber');
let postnummerInput = document.querySelector('#postcode');
let target = document.getElementById('target');
let paswoordInput = document.querySelector('#password');
let paswoord2Input = document.querySelector('#password_control');

let foutboodschap = document.querySelector('#error_message');
const template = document.querySelector("#gemeenteTemplate");

function firstNameInputVerify() {
    if (voornaamInput.value !== "") {
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
    if (achternaamInput.value !== "") {
        if (regfirstandlastnameCheck(this.value)) {
            achternaamInput.value = cleanLastName(achternaamInput.value);
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

function cleanLastName(string) {
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

function firmaNameInputVerify() {
    if (firmanaamInput.value !== "") {
        firmanaamInput.value = cleanfirmName(this.value);
    }
}

function emailVerify() {

    if (emailInput.value !== "") {
        if (regmailCheck(emailInput.value)) {
            emptyMessage(foutboodschap);
            emailInput.value = cleanemail(emailInput.value);
        } else {
            foutboodschap.innerHTML = "<div>Email heeft verkeerd formaat&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Email is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }

}


function BTWnrInputVerify() {
    if (btwnrInput.value.match(/^\d+$/)) {
        if (btwnrInput.value.length === 10) {

            let deel1 = parseInt(btwnrInput.value.substr(0, 8));
            let deel2 = parseInt(btwnrInput.value.substr(8));
            let modulus = deel1 % 97;
            if (deel2 + modulus === 97) {
                emptyMessage(foutboodschap);
            } else {
                foutboodschap.innerHTML = "<div>BTW-nr is niet correct.&nbsp;</div><div>&#x274C</div>";
                toggleErrorMessage(foutboodschap);
            }
        } else {
            foutboodschap.innerHTML = "<div>BTW-nr dient 10 cijfers te bevatten en begint steeds met O  &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>BTW-nr dient uitsluitend cijfers te bevatten en begint steeds met O.  &nbsp;</div><div>&#x274C</div>";
        toggleErrorMessage(foutboodschap);
    }
}


function phoneVerify() {
    if (telefoonInput.value !== "") {
        if (regphoneCheck(telefoonInput.value)) {
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Geen geldige opbouw van telefoonnummer(9 of 10 cijfers).Geen spaties, start altijd met 0.&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Telefoonnummer is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }
}

function streetInputVerify() {
    if (straatInput.value !== "") {
        if (regadresCheck(this.value)) {
            straatInput.value = cleanAddress(straatInput.value);
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Minimaal 2 karakters. Gebruik geen ongeldige karakters.&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Straat is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }
}

function streetNumberInputVerify() {
    if (huisnummerInput.value !== "") {
        if (regstreetnumberCheck(this.value)) {
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Gebruik geen ongeldige karakters.&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    }
}

function postalnumberVerify() {
    if (postnummerInput.value !== "") {
        if (regpostalnumberCheck(postnummerInput.value)) {
            connect_with_json_file(ax, postnummerInput.value);
            if (foutboodschap.className === "warning hide") {
                var arrayGemeente = [];

                find_cities_with_same_postnr(ax, postnummerInput.value, arrayGemeente);
                target.innerHTML = "";

                setTimeout(() => {

                    arrayGemeente.forEach(buildtemplate(arrayGemeente));

                }, 450);
            } else {
                target.innerHTML = "";
                console.log("fout");
            }
        } else {
            target.innerHTML = "";
            foutboodschap.innerHTML = "<div>Dit is geen Belgisch postnummer.&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        target.innerHTML = "";
        foutboodschap.innerHTML = "<div>Postnummer is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }

}

function get_gemeentes() {
    return new Promise(find_cities_with_same_postnr(ax, postnummerInput.value, arrayGemeente));
}

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
    if (paswoord2Input.value !== "") {
        if (regpasswordCheck(paswoord2Input.value)) { // Second Change
            emptyMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Herhaalpaswoord voldoet niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    } else {
        foutboodschap.innerHTML = "<div>Paswoord is vereist&nbsp;</div><div>&#x274C;</div>";
        toggleErrorMessage(foutboodschap);
    }
    if ((paswoordInput.value === paswoord2Input.value) && (paswoordInput.value.length > 7)) {
        emptyMessage(foutboodschap);
    } else {
        if (paswoordInput.value !== paswoord2Input.value) {
            foutboodschap.innerHTML = "<div>Wachtwoorden zijn niet gelijk&nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        } else {
            foutboodschap.innerHTML = "<div>Paswoorden voldoen niet aan de regels. Minimaal 8 karakters. Min 1 hoofdletter, 1 kleine letter en 1 getal &nbsp;</div><div>&#x274C</div>";
            toggleErrorMessage(foutboodschap);
        }
    }
}

function regfirstandlastnameCheck(nameCheck) {
    let nameRegex = /^[a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
    return (nameRegex.test(nameCheck));
}

function cleanfirmName(string) {
    string = string.trim();
    string = string.toUpperCase();
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

function cleanemail(string) {
    return string.toLowerCase();
}

function regphoneCheck(phoneCheck) {
    let phoneRegex = /^0{1}[0-9]{8,9}$/;
    return (phoneRegex.test(phoneCheck));

}

function regadresCheck(nameCheck) {
    let nameRegex = /^[0-9a-zA-Zàâçéèêëîïôûùüÿñæœ /'-]{2,}$/;
    return (nameRegex.test(nameCheck));
}

function cleanAddress(string) {
    var splitStr = string.toLowerCase().split(' ');
    for (var i = 0; i < splitStr.length; i++) {
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
    }
    return splitStr.join(' ');
}

function regmailCheck(mailCheck) {
    let emailRegex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,6}$/;
    return (emailRegex.test(mailCheck));
}

function regstreetnumberCheck(streetnumberCheck) {
    let streetnumberRegex = /^([0-9a-zA-Zéè\(\)]{1,8})$/;
    return (streetnumberRegex.test(streetnumberCheck));
}

function regpostalnumberCheck(postalnumberCheck) {
    let postalnumberRegex = /^(?:(?:[0-9])(?:\d{3}))$/;
    return (postalnumberRegex.test(postalnumberCheck));
}

function regpasswordCheck(passwordCheck) {
    let passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]).{8,13}$/;
    return (passwordRegex.test(passwordCheck));
}

function connect_with_json_file(ax, postnr) {
    ax.get("schuimkraag_gemeente.json")
        .then((response) => {
            let result = response.data;
            for (let i = 0; i < result.length; i++) {
                if (result[i].postnummer == postnr) {
                    emptyMessage(foutboodschap);
                    return;
                } else {
                    foutboodschap.innerHTML = "<div>Dit is geen Belgisch postnummer.&nbsp;</div><div>&#x274C</div>";
                    toggleErrorMessage(foutboodschap);
                }
            }
            //build template one

        })
        .catch((error) => {
            //catch error
            console.log("This path is not found , please try again <span class='stop'>&times;</span>");

        });
}

function buildtemplate(item) {


    console.log(item);
    item.forEach(data => {
        var tmpl = document.createElement('option');
        tmpl.setAttribute("value", data[1]);
        tmpl.innerHTML = data[0];
        target.appendChild(tmpl);
    })
}


function find_cities_with_same_postnr(ax, postnr, arrayGemeente) {
    ax.get("schuimkraag_gemeente.json")
        .then((response) => {
            let result = response.data;
            for (let i = 0; i < result.length; i++) {
                if (result[i].postnummer == postnr) {
                    console.log(result[i].gemeente);
                    console.log(typeof(result[i].gemeente));
                    let gemeente = result[i].gemeente.toLowerCase();
                    let gemeenteId = result[i].gemeente_ID;
                    let gemeenteFirstLetterCapitalize = gemeente.charAt(0).toUpperCase() + gemeente.slice(1);

                    arrayGemeente.push([gemeenteFirstLetterCapitalize, gemeenteId]);

                    console.log(arrayGemeente);
                }
            }
            return arrayGemeente;
        })
        .catch((error) => {
            //catch error
            console.log("This path is not found , please try again <span class='stop'>×</span>");
        });
}

function buildtemplate(item) {

    item.forEach(data => {
        var tmpl = document.createElement('option');
        tmpl.setAttribute("value", data[1]);
        tmpl.innerHTML = data[0];
        target.appendChild(tmpl);
    })

}

function CheckAll(event) {

    let teller = 0;
    firstNameInputVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    lastNameInputVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    emailVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    phoneVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    streetInputVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    passwordVerify();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    passwordVerify2();
    if (foutboodschap.innerHTML !== "") {
        teller += 1
    }
    if (teller > 0 || (foutboodschap.innerHTML !== "")) {
        console.log(teller);
        console.log(foutboodschap.innerHTML);
        foutboodschap.innerHTML = "<div>De input-waarden zijn niet correct &nbsp;</div><div>&#x274C</div>";
        event.preventDefault();
    }
}

voornaamInput.addEventListener('blur', firstNameInputVerify);
achternaamInput.addEventListener('blur', lastNameInputVerify);
firmanaamInput.addEventListener('blur', firmaNameInputVerify);
btwnrInput.addEventListener('blur', BTWnrInputVerify);
emailInput.addEventListener('blur', emailVerify);
telefoonInput.addEventListener('blur', phoneVerify);
straatInput.addEventListener('blur', streetInputVerify);
huisnummerInput.addEventListener('blur', streetNumberInputVerify);
postnummerInput.addEventListener('blur', postalnumberVerify);
paswoordInput.addEventListener('blur', passwordVerify);
paswoord2Input.addEventListener('blur', passwordVerify2);

form.addEventListener('submit', CheckAll);

foutboodschap.addEventListener("click", removeErrorMessage);