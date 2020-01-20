const trickBtn = document.getElementById('trick');
const btnContainer = document.querySelector('.btn-container');
const btnOK = document.querySelector('#btnOK');
const overlay = document.querySelector('.overlay');
const cookiebox = document.querySelector('.popup');

btnContainer.style.flexDirection = 'row';

trickBtn.addEventListener('mouseover', (e) => {
    const currentDir = btnContainer.style.flexDirection;
    if (currentDir === 'row') {
        btnContainer.style.flexDirection = 'row-reverse';
    } else {
        btnContainer.style.flexDirection = 'row';
    }
});

function createCookie(cookieName,cookieValue,daysToExpire){
    let date = new Date();
    date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
    console.log(document.cookie);
}

function testCookieExist() {
    let myCookie = document.cookie;
    console.log(myCookie);
    if (!(myCookie == "")) {
        console.log("cookie bestaat");
        cookiebox.style.visibility = "hidden";
        overlay.style.visibility = "hidden";
    }
    else {
        console.log("cookie bestaat nog niet");
        cookiebox.style.visibility = "visible";
        overlay.style.visibility = "visible";
    }
}

function placeCookie(){
        createCookie("policyCookie", "anonymous", 365);
        overlay.style.visibility = "hidden";
        cookiebox.style.visibility = "hidden";
}

window.addEventListener("load",testCookieExist);
btnOK.addEventListener("click",placeCookie);
