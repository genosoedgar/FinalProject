


<style>

table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 24px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 25px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}

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
  background-color: lightblue;
  width: 90%;
  border: 15px solid Black;
  padding: 50px;
  margin: 20px;
</style>

<div>
    

<h1>Simple Inventory System</h1>
<table class='blueTable'font >
<thead>
        <tr>                  
            <th>Product</th>
            <th>Quantity</th>  
            <th >Operation</th>   
        </tr>
        </thead>
        @foreach($InventoryProducts as $InventoryProduct)
        <tbody>  
        <tr>                      
            <td >{{$InventoryProduct['name']}}</td>
            <td>{{$InventoryProduct['quantity']}}</td>  
            <td>
                <a style=float:right class='myButton'  href={{"delete/".$InventoryProduct['id']}}>Delete</a>
                <a style=float:right class='myButton' href={{"edit/".$InventoryProduct['id']}}>Edit</a>
            </td>  
        </tr>
        @endforeach
        </tbody>
</table>
<form method="get" action="/addNew">
<button style=float:right class='button' type="submit">Add Product</button>
</form>
</div>