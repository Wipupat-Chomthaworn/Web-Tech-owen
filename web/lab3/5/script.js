function createcard() {
    let name = document.getElementById("fullname").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let company = document.getElementById("company").value;

    let name2 = document.forms.myform.fullname.value;
    let phone2 = document.forms.myform.phone.value;
    let email2 = document.forms.myform.email.value;
    let company2 = document.forms.myform.company.value;
    if (name2.length < 1) {
        alert("Invalid Full Name!");
    } else if (phone2.length < 1) {
        alert("Invalid Phone Number!");
    } else if (email2.length < 1) {
        alert("Invalid E-mail!");
    } else if (company2.length < 1) {
        alert("Invalid Company!");
    } else {
        document.getElementById("fullname2").innerHTML = name;
        document.getElementById("phone2").innerHTML = phone;
        document.getElementById("email2").innerHTML = email;
        document.getElementById("company2").innerHTML = company;
    }
}
