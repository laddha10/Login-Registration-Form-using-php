
function yourid() {

    var x = document.getElementById('a').value;

    if (x == null || x == "") {
        alert("UserID must be filled out");
        this.focus();
        return false;
    }
    else if (x.length < 5) {
        alert('please enter at least 5 characters');
        document.getElementById('a').focus();
        return false;
    }

    else if (x.length > 12) {
        alert('please enter less than 13 characters');
        this.focus();
        return false;
    }
}

function personname() {
    var x = document.getElementById("c");
    x.value = x.value.toUpperCase();
    var alphaExp = /^[a-zA-Z]+$/;
    if(x.value.match(alphaExp)){
        return true;
    }
    else if(x == null || x == "") {
        alert("Username must be filled out");
        this.focus();
        return false;

    }
    else{
        alert('Please fill only the alphabets');
        x.focus();
        return false;
    }

}

function pass() {
    var y = document.getElementById('b').value;

    if (y == null || y == "") {
        alert("Password must be filled out");
        return y.focus() ;
    }
    else if (y.length < 5) {
        alert('please enter at least 7 characters');
        return y.focus();
    }
    else if (y.length > 12) {
        alert('please enter less than 13 characters');
        //this.focus();
        return y.focus() ;
    }
}
function buttonused(){
    var genderM=form.male;
    var genderF=form.female;

    if(genderM.checked==false && genderF.checked==false ) {
        alert("You must select a gender");
        return false;
    }
}
