function validateForm() {
    let IDNums = document.forms.myForm.IDNums.value;
    let Prefix = document.forms.myForm.Prefix.value;
    let Name = document.forms.myForm.Name.value;
    let Surname = document.forms.myForm.Surname.value;
    let Address = document.forms.myForm.Address.value;
    let District = document.forms.myForm.District.value;
    let Zone = document.forms.myForm.Zone.value;
    let Province = document.forms.myForm.Province.value;
    let Postnum = document.forms.myForm.Postnum.value;
    if (IDNums.length != 13) {
        alert("Please enter a valid ID");
        return false;
    }
    if (Prefix == "00") {
        alert("Please select a prefix");
        return false;
    }
    if (Name.length < 2 || Name.length > 20) {
        alert("Please enter valid Name");
        return false;
    }
    if (Surname.length < 2 || Surname.length > 20) {
        alert("Please enter valid Surname");
        return false;
    }
    if (Address.length < 5) {
        alert("Please enter valid Address");
        return false;
    }
    if (District.length < 2) {
        alert("Please enter valid District");
        return false;
    }
    if (Zone.length < 2) {
        alert("Please enter valid Zone");
        return false;
    }
    if (Province == "00") {
        alert("Please enter select Province");
        return false;
    }
    if (Postnum.length != 5) {
        alert("Please enter valid PostID");
        return false;
    }
}