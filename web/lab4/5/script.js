let orders = document.getElementById("order");
function addOrder(value) {
  let food = document.createElement("p");
  food.className = "list-group-item d-flex justify-content-between]";
  let order = document.createElement("span");
  let x1 = document.createTextNode("\tx1");
  order.appendChild(x1);
  let values = document.createTextNode(value);
  food.appendChild(values);
  food.appendChild(order);
  orders.appendChild(food);
}
