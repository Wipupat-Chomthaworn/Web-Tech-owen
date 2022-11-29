function THtoENG() {
    let parent = document.getElementById("all")
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }

    let la1 = document.createElement("label");
    la1.innerHTML = "First Name : "
    document.body.appendChild(la1);
    
    let inpn = document.createElement("input");
    let inattn = document.createAttribute("id");
    inattn.value = "fname";
    let br = document.createElement("br");
    document.body.appendChild(inpn);
    document.body.appendChild(br);

    let la2 = document.createElement("label");
    la2.innerHTML = "Last Name : "
    document.body.appendChild(la2);
    
    let inps = document.createElement("input");
    let inatts = document.createAttribute("id");
    inatts.value = "lname";
    document.body.appendChild(inps);
    let br1 = document.createElement("br");
    document.body.appendChild(br1);
   
    let la3 = document.createElement("label");
    la3.innerHTML = "Country : "
    document.body.appendChild(la3);

    var array = ["Select your country","Thailand","Lao","Brunei","Vietnam"]

    var selectList = document.createElement("select"); 
    selectList.id = "country";
    document.body.appendChild(selectList);
    for (var i = 0; i < array.length; i++) {
        var option = document.createElement("option");
        option.value = array[i];
        option.text = array[i];
        selectList.appendChild(option);
    }
    let br2 = document.createElement("br");
    document.body.appendChild(br2);


    let btn = document.createElement("button");
    btn.id = "change";
    btn.innerHTML = "Change to Thai";
    btn.onclick = ENGtoTH;
    document.body.appendChild(btn);
}

function ENGtoTH() {
    location.reload();
    
    // let la1 = document.createElement("label");
    // la1.innerHTML = "ชื่อ: "
    // document.body.appendChild(la1);
    
    // let inpn = document.createElement("input");
    // let inattn = document.createAttribute("id");
    // inattn.value = "fname";
    // let br = document.createElement("br");
    // document.body.appendChild(inpn);
    // document.body.appendChild(br);

    // let la2 = document.createElement("label");
    // la2.innerHTML = "นามสกุล: "
    // document.body.appendChild(la2);
    
    // let inps = document.createElement("input");
    // let inatts = document.createAttribute("id");
    // inatts.value = "lname";
    // document.body.appendChild(inps);
    // let br1 = document.createElement("br");
    // document.body.appendChild(br1);
   
    // let la3 = document.createElement("label");
    // la3.innerHTML = "ประเทศ: "
    // document.body.appendChild(la3);

    // var array = ["เลือกประเทศ","ไทย","ลาว","บรูไน","เวียดนาม"]

    // var selectList = document.createElement("select"); 
    // selectList.id = "country";
    // document.body.appendChild(selectList);
    // for (var i = 0; i < array.length; i++) {
    //     var option = document.createElement("option");
    //     option.value = array[i];
    //     option.text = array[i];
    //     selectList.appendChild(option);
    // }
    // let br2 = document.createElement("br");
    // document.body.appendChild(br2);


    // let btn = document.createElement("button");
    // btn.id = "change";
    // btn.innerHTML = "เปลี่ยนเป็นภาษาอังกฤษ";
    // btn.onclick = THtoENG;
    // document.body.appendChild(btn);
}