changetab = topic => {
  document.querySelectorAll(".button-icon-wrapper").forEach(function(el) {
    // console.log(el);
    el.classList.remove("is-active");
  });
  document
    .querySelectorAll(".block-options-switcher-state")
    .forEach(function(el) {
      // console.log(el);
      el.classList.remove("is-active");
    });
  console.log(topic);
  document.querySelectorAll(topic).forEach(function(el) {
    // console.log(el);
    el.classList.add("is-active");
  });
};

showField = field => {
  document.querySelectorAll(".fieldbody").forEach(function(el) {
    // console.log(el);
    el.style.display = "none";
  });
  document.querySelectorAll(".listbtn").forEach(function(el) {
    // console.log(el);
    el.classList.remove("is-active");
  });
  var fieldelement = document.getElementById(field);
  fieldelement.style.display = "block";
  document.getElementById("field-title").innerText = field;
  document.getElementById(field + "-BTN").classList.add("is-active");
};
