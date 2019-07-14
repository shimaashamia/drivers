<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="js/Aptyp.js"></script> 


<style>
form{
    display: flex;
}
body{
    background-color: #fbf9f8;
    direction: rtl;
    padding-top: 40px;
    text-align: right;
}
hr.new1 {
  border: 2px solid;
  margin-left: 11%;
  margin-right: 11%;
 
}
.form-group .btn{
 border-left:40px;
  box-shadow: 5px 5px 5px grey;
  font-size: 20px;
  padding: 10px 24px; }
table.table thead th {
	padding: 8px;
	background-color: #ccccc6;
	font-size: large;
}
table.table {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  /* border-collapse: collapse; */
  width: 100%;
}
.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}


</style>
        <title>Laravel</title>
        </head>
<div ng-app="storeList">
        <div ng-view></div>
</div>
     