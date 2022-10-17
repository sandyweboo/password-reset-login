function change(){
    var login = document.getElementById("login");
    var singup = document.getElementById("singup");

    login.classList.toggle("d-none");
    singup.classList.toggle("d-none");
}

function singup(){

    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var g = document.getElementById("g");
    var m = document.getElementById("m");

//    alert(f.value);
//    alert(l.value);
//    alert(e.value);
//    alert(p.value);
//    alert(g.value);
//    alert(m.value);

   var form = new FormData();

   form.append("f",f.value);
   form.append("l",l.value);
   form.append("e",e.value);
   form.append("p",p.value);
   form.append("g",g.value);
   form.append("m",m.value);

   var r = new XMLHttpRequest();
   r.onreadystatechange = function(){
   if(r.readyState == 4){
    var t = r.responseText;
    alert(t);
   }
   }
   r.open("POST", "singinprocess.php", true);
   r.send(form);
}

function login(){
   var e2 = document.getElementById("e2");
   var p2 = document.getElementById("p2");
   var cm = document.getElementById("cm");

//    alert(e2.value);
//    alert(p2.value);
//    alert(cm.checked);

var f = new FormData();
   f.append("e2",e2.value);
   f.append("p2",p2.value);
   f.append("cm",cm.checked);

   var rq = new XMLHttpRequest();
   rq.onreadystatechange = function(){
    if(rq.readyState == 4){
        var t = rq.responseText;
        if(t == "success"){
            window.location="home.php";
        }else{
            alert(t);
        }
    }
   }
rq.open("POST", "loginprocess.php",true);
rq.send(f);
}

function logout(){
    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            if(t == "success"){
                window.location.reload();
            }else{
                alert(t);
            }
        }
    }

    r.open("GET", "logout.php", true);
    r.send();
}

function forget(){

    var e2 = document.getElementById("e2");

    // var f = new FormData();

    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            alert(t);
        }
    }
    r.open("GET", "forgetpw.php?e=" + e2.value, true);
    r.send();
    // alert("reset code has sent your email");

}

function resetpw(){
    var e2 = document.getElementById("e2");
    var pw1 = document.getElementById("pw1");
    var pw2 = document.getElementById("pw2");
    var vcode = document.getElementById("vcode");

    // alert(e2.value);
    // alert(pw1.value);
    // alert(pw2.value);
    // alert(vcode.value);

    var f = new FormData();

    f.append("e2",e2.value);
    f.append("pw1",pw1.value);
    f.append("pw2",pw2.value);
    f.append("vcode",vcode.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "resetpw.php", true);
    r.send(f);
}