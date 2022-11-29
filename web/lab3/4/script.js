function myFunction() {
  var container = document.getElementById("container");
  var math = document.getElementById("Math");
  var thai = document.getElementById("Thai");
  var english = document.getElementById("English");
  var science = document.getElementById("Science");
  var social = document.getElementById("Social");
  var button = document.getElementById("button");
  if (!container.classList.contains("active")) {
    math.classList.add("active");
    thai.classList.add("active");
    english.classList.add("active");
    science.classList.add("active");
    social.classList.add("active");
    container.classList.add("active");
    button.innerHTML = "HideChart";
  } else {
    math.classList.remove("active");
    thai.classList.remove("active");
    english.classList.remove("active");
    science.classList.remove("active");
    social.classList.remove("active");
    container.classList.remove("active");
    button.innerHTML = "ViewChart";
  }
}
