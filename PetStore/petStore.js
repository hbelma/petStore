   function showImage(smSrc, lgSrc) {
     document.getElementById('largeImg').src = smSrc;
     showLargeImagePanel();
     unselectAll();
     setTimeout(function() {
      document.getElementById('largeImg').src = lgSr
     }, 1)
    }


  function showLargeImagePanel() {
       document.getElementById('largeImgPanel').style.display = 'block';
   }

  function unselectAll() {
                if(document.selection)
                    document.selection.empty();
                if(window.getSelection)
                    window.getSelection().removeAllRanges();
            }


 document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key == "Escape" || evt.key == "Esc");
    } else {
        isEscape = (evt.keyCode == 27);
    }
    if (isEscape) {
          document.getElementById("largeImgPanel").style.display = "none";
    }
};


var nijeValidno;

function validirajPunoIme() {
    var x, text;

    x = document.getElementById("name").value;

    if (x.length < 10) {
        text = "Name too short!";
        nijeValidno = true;
    } else {
        text = "";
        nijeValidno = false;
    }

    document.getElementById("fullLabel").innerHTML = text;
      validationCheckContact();

}



function validirajEmail(){

    var re = /\S+@\S+\.\S+/;

     x = document.getElementById("email").value;

    if(!re.test(x)){
         document.getElementById("emailLabela").innerHTML = "Mail not valid!";
             nijeValidno = true;
         }

    else {
         document.getElementById("emailLabela").innerHTML =  "";
                 nijeValidno = false;

     }
       validationCheckContact();


}

function validirajSubject() {
    var x, text;

    x = document.getElementById("subject").value;

    if (x.length < 5) {
        text = "Name too short!";
        nijeValidno = true;
    } else {
        text = "";
        nijeValidno = false;
    }

    document.getElementById("subjectLabela").innerHTML = text;
      validationCheckContact();

}

function validirajFeedback() {
    var x, text;

    x = document.getElementById("feedback").value;

    if (x.length < 10) {
        text = "Write at least one sentence!";
        nijeValidno = true;
    } else {
        text = "";
        nijeValidno = false;
    }

    document.getElementById("feedbackLabela").innerHTML = text;
     validationCheckContact();

}


function validationCheckContact(){

    if(nijeValidno || document.getElementById("subject").value.length == 0
        || document.getElementById("name").value.length == 0 || document.getElementById("email").value.length == 0
        || document.getElementById("feedback").value.length < 10)
           document.getElementById("feedbackSend").disabled = "disabled";

    else
         document.getElementById("feedbackSend").disabled = "";

}



function validirajPasswordLogIn(){

    var p = document.getElementById("password").value;

    if (p.length < 8) {
        document.getElementById("passwordLabela").innerHTML = "Your password must be at least 8 characters!"; 
                nijeValidno = true;

    }
    else if (p.search(/[a-z]/i) < 0) {
        document.getElementById("passwordLabela").innerHTML = "Your password must contain at least one letter!"; 
                nijeValidno = true;

    }
    else if (p.search(/[0-9]/) < 0) {
        document.getElementById("passwordLabela").innerHTML = "Your password must contain at least one digit!"; 
                nijeValidno = true;

    }
    else {
       document.getElementById("passwordLabela").innerHTML = ""; 

            nijeValidno = false;

}
  validationCheckLogIn();


}



function validirajUsernameLogIn() {
    var x, text;

    x = document.getElementById("username").value;

    if (x.length < 8) {
        text = "Username too short!";
                nijeValidno = true;

    } else {
        text = "";
                nijeValidno = false;

    }
    document.getElementById("usernameLabela").innerHTML = text;
      validationCheckLogIn();

}




function validationCheckLogIn(){

    if(nijeValidno || document.getElementById("username").value.length == 0  || document.getElementById("password").value.length == 0)
           document.getElementById("login").disabled = "disabled";

    else
         document.getElementById("login").disabled = "";

}

function onLoad(){

    document.getElementById("username").value = "";

}


function validirajIme() {
    var x, text;

    x = document.getElementById("ime").value;

    if (x.length < 3) {
        text = "Name too short!";
        nijeValidno = true;
    } else {
        text = "";
        nijeValidno = false;
    }

    document.getElementById("imeLabela").innerHTML = text;
      validationCheck();


}

function validirajPrezime() {
    var x, text;

    x = document.getElementById("prezime").value;

    if (x.length < 4) {
        text = "Last name too short!";
                nijeValidno = true;

    } else {
        text = "";
                nijeValidno = false;

    }
    document.getElementById("prezimeLabela").innerHTML = text;
      validationCheck();

}

function validirajEmail(){

    var re = /\S+@\S+\.\S+/;

     x = document.getElementById("email").value;

    if(!re.test(x)){
         document.getElementById("emailLabela").innerHTML = "Mail not valid!";
             nijeValidno = true;
         }

    else {
         document.getElementById("emailLabela").innerHTML =  "";
                 nijeValidno = false;

     }
       validationCheck();


}

function onLoad(){

    document.getElementById("ime").value = "";
    document.getElementById("prezime").value = "";
    document.getElementById("email").value = "";

}


function validirajPassword(){

    var p = document.getElementById("password").value;

    if (p.length < 8) {
        document.getElementById("passwordLabela").innerHTML = "Your password must be at least 8 characters!"; 
                nijeValidno = true;

    }
    else if (p.search(/[a-z]/i) < 0) {
        document.getElementById("passwordLabela").innerHTML = "Your password must contain at least one letter!"; 
                nijeValidno = true;

    }
    else if (p.search(/[0-9]/) < 0) {
        document.getElementById("passwordLabela").innerHTML = "Your password must contain at least one digit!"; 
                nijeValidno = true;

    }
    else {
       document.getElementById("passwordLabela").innerHTML = ""; 

            nijeValidno = false;

}
  validationCheck();


}


function validirajConfirm(){

  var p = document.getElementById("password").value;
  var confirmp = document.getElementById("confirmPass").value;

  if(p != confirmp){
     document.getElementById("confirmLabela").innerHTML = "Passwords do not match!"; 
        nijeValidno = true;

  }

  else{
         document.getElementById("confirmLabela").innerHTML = ""; 
         nijeValidno = false;

  }

  validationCheck();
}



function validationCheck(){

    if(nijeValidno || document.getElementById("ime").value.length == 0
        || document.getElementById("prezime").value.length == 0 || document.getElementById("password").value.length == 0
        || document.getElementById("email").value.length == 0 || document.getElementById("confirmPass").value.length == 0)
           document.getElementById("register").disabled = "disabled";

    else
         document.getElementById("register").disabled = "";

}
