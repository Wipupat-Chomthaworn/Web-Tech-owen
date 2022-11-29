// js
const val = 1;
const val2 = 1;
let value = 1;
let body = document.querySelector(".body");
function changetheme() {
  let value2 = value * -1;
  console.log(value2);
  value = value2;
  body.dataset.color = value2;
}
let ele = document.getElementById("siz");
function changesize() {
  body.style.setProperty("--fs", ele.value + "px");
  console.log("fs");
}