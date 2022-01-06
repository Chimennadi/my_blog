let inputAlert = document.getElementById("inputAlert");
let alertMe = document.querySelector(".alertMe");

inputAlert.addEventListener("click", () => {
alertMe.remove("alertMe");
})