function formValidation() {
    var passid = document.registration.password;
    var repassid = document.registration.repassword;
    var fname = document.registration.fname;
    var lname = document.registration.lname;
    var uemail = document.registration.email;
    var phonen = document.registration.pnumber;

    if (FirstName(fname)) {
        if (LastName(lname)) {
            if (ValidateEmail(uemail)) {
                if (validphonenumber(phonen)) {
                    if (passid_validation(passid, 7, 12)) {
                        if (matchPassword(passid, repassid)) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;
}


function FirstName(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.length == 0) {
        alert("First Name should not be empty!!");
    } else if (uname.value.match(letters)) {
        return true;
    } else {
        alert('First Name must have alphabet characters only!!');
        uname.focus();
        return false;
    }
}

function LastName(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value.length == 0) {
        alert("Last Name should not be empty!!");
    } else if (uname.value.match(letters)) {
        return true;
    } else {
        alert('Last Name must have alphabet characters only');
        uname.focus();
        return false;
    }
}

function ValidateEmail(uemail) {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (uemail.value.length == 0) {
        alert("Email address should not be empty !!")
    } else if (uemail.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}

function validphonenumber(phonen) {

    var phonenumberformat = /^(\+91-|\+91|0)?\d{10}$/;

    if (phonen.value.length == 0) {
        alert("Phone Number should not be empty!!")
    } else if (phonen.value.match(phonenumberformat)) {
        return true;
    } else {
        alert("please enter valid number");
        uemail.focus();
        return false;
    }
}

function passid_validation(passid, mx, my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 || passid_len >= my || passid_len < mx) {
        alert("Password should not be empty / length be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    return true;
}

function matchPassword(passid, repassid) {
    if (repassid.value.length == 0) {
        alert("Confirm Password should not be empty")
    } else if (passid.value != repassid.value) {
        alert("Password did not match!")
    } else {
        return true;
    }
}