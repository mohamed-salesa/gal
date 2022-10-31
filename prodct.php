<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">shopping Cart</h2>
<form action="low.php#">
<div class="Shopping card">
<p>your cart is empty</p>
<div class="indicator">
 <i class='bx bx-up-arrow-alt'></i>
  <p><button><a href="">Shop now</a></button></p>
</div>
</div>
</form>
</body>
</html>
