<style>

.myButton  {
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	background-color:#7892c2;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	padding:12px 37px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.myButton:hover {
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	background-color:#476e9e;
}
.myButton:active  {
	position:relative;
	top:1px;
}
.button {
    box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	background-color:#007dc1;
	border-radius:10px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}

.button:hover 
{
    background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	background-color:#0061a7;
}

.button:active {
    position:relative;
	top:1px;

}
.h1 
{
    border: 1px;
    border-radius:10px;
    text-align: center;
}
div {
    
  
  text-align:center;
  background-color: lightblue;
  width: 60%;
  border: 15px solid Black;
  padding: 50px;
  margin: 150px 300px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-transform: capitalize;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}

</style>

<div >
<h1>Add New Product</h1>
<form action="addNew" method="POST">
    @csrf
    <input type="text" name ="name" placeholder="Enter Product"> <br> <br>
    <input type="number" name ="quantity" placeholder="Enter Quantity"> <br> <br>
    <button class='button' type="submit">Add Product </button>
    
</form>
</div>