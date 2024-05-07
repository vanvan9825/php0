// xu li phan quyen
var user = document.getElementById("user");
var action = document.getElementsByClassName("action")[0];

if (user) {
  user.onclick = function () {
    action.classList.toggle("hidden");
  };
}

// form tìm kiếm
// var btn_add_product = document.getElementById("add_product");

// btn_add_product.onclick = function (event) {
//   event.preventDefault();
//   var form = document.getElementsByTagName("form")[0];
//   form.submit();
//   // console.log($_GET);

//   form.onsubmit = function (event) {
//     event.preventDefault();
//     console.log("ok");
//   };
// };

// var form = document.getElementsByTagName("form")[0];
// form.onsubmit = function (event) {
//   event.preventDefault();
//   console.log("ok");
// };