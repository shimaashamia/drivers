
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
<script src="assets{{Aptyp.js}}"></script>
<!-- <script src="../public/js/Aptyp.js"></script>   -->

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
  padding: 10px 24px;
    }
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

    <div class="container" id="add_new_task">
    <div class="panel-body">
    <div class="row">
         <!-- <div class="col-lg-4"> -->
         <div ng-app="storeList" ng-controller="myCtrl">
         <a href="#!driver">driver</a>
        
            <!-- <form action="/driver" method="POST" ng-submit="addItem()"> -->
            <form name="frm" ng-submit="addItem()">
            {{ csrf_field() }}
           
                <div ng-app="myApp"  class="col-lg-4 form-group">
                    <label for="name">الصنف</label>
                    <select class="form-control input-lg dynamic" ng-model="products_id" id="product" name="products_id">
                        <option value="">الصنف</option>
                        <option ng-repeat="x in product" value="{{x.model}}">{{x.model}}</option>

                        <!-- @foreach($product as $products)
                        <option value="{{$products->id}}">{{$products->product}}</option>
                        @endforeach -->
                    </select>
                    <!-- <input type="text" name="name" value="{{old ('name') }}" class="form-control"> -->
                    <!-- <div>{{ $errors->first('name') }}</div> -->
                </div>
                <div class="form-group col-lg-4">
                <div class="radio">
                    <label class="radio-inline"><input type="radio" ng-model="price" name="price"  value="لتر"> لترات</label>
                </div>

                <div class="radio">
                    <label class="radio-inline"><input type="radio" ng-model="price" name="price" value="شيكل"> مبلغ </label>
                </div>
                </div>

                <div class="form-group col-lg-4">
                    <label for="quantity">الكميه</label>
                    <input type="number" name="quantity" ng-model="quantity" class="form-control"
                    value="{{app('request')->get('quantity')}}">
                    <!-- <div>{{ $errors->first('email') }}</div> -->
                </div>
          

                <div class="form-group col-lg-4">
                    <label for="drive"> سائق</label>
                    <!-- <input type="text" name="email" value="{{old ('email') }}" class="form-control"> -->
                    <select class="form-control input-lg dynamic" ng-model="drivers_id" id="driver_list" name="drivers_id">
                        <option value="">سائق</option>
                        <option ng-repeat="x in driver_list" value="{{x.model}}">{{x.model}}</option>

                        <!-- @foreach($driver_list as $list)
                        <option value="{{$list->id}}">{{$list->name_driver}}</option>
                        @endforeach -->
                    </select>
                    <!-- <div>{{ $errors->first('email') }}</div> -->
                </div>
             
                <div class="form-group col-sm-4">
                    <!-- <a href="submit" class="btn btn-success">اعتماد</a> -->
                    <button ng-disabled="frm.$invalid" type="submit" class="btn btn-success succ" id="btnShow"> اعتماد</button> 
                </div>
               

            </form>
         <div>
    </div>
    </div>
    </div>

    <hr class="new1">
    <div class="container">
            <div class="panel-heading">
                <h5 class="panel-title">الطلبات السابقه</h5>
            </div>

        <table class=table table-hover table-bordered>
            <thead>
                <tr>
                    <th scope="col"> رقم الطلب</th>
                    <th scope="col"> التاريخ</th>  
                    <th scope="col"> الصنف</th>
                    <th scope="col">الكميه</th>
                    <th scope="col">الساق</th>
                    <th scope="col"> الحاله</th>
                </tr>
            </thead>
            <tbody>
                <!-- @foreach($info_driver as $post) -->
                <tr ng-repeat="post in info_driver">
                    <td>@{{post.id}}</td>
                    <td>@{{ date('F d, Y', strtotime(post.created_at)) }}</td>
                    <td>@{{post.Product.product}}</td>
                    <td>@{{post.price}} {{post.quantity}}</td>
                    <td>@{{post.Driver.name_driver}}</td>
                    <!-- <td>{{$post->stauts}}</td>  -->
                    <td>
                        @if($post->stauts==1)
                       
                        <!-- <input type="hidden" name="_method" value="PUT" />    -->
                      
                       
                        {{ csrf_field() }}   
                                تم الاستلام
                                <button type="button" class="btn btn-default stauts_update" name="stauts"> 
                                الايقاف
                                </button>
                                </form>
                                <input type="hidden" class="utd" value="{{$post->id}}"/>
                               
                        
                        @else
                               <span>
                                تم الايقاف
                                </span> 
                        @endif
                    </td>
                </tr>
                <!-- @endforeach -->
            </tbody>
        </table>
    </div>
   
    <div ng-view></div>
</html>

<script>
$(document).ready(function(){
    $(".stauts_update").click(function() {
        var val = $(this).parent().find('.utd').val();
        $.ajax ({
            url: "/driver/" + val,
            method:"PUT",
            data:{body:'', _token:'{{csrf_token()}}'},
            success: function( result ) {
                alert("  تم الايقاف بنجاح");
                window.location.reload()
                //fetch_data();
               // $("#result").load(url);
                // url: "/driver/" + val;
                // window.location ="/driver/" + val
                // alert( result );
            }
        });
    });
});

$("#btnShow").click(function(){
    alert("done add");
 // $(".alert").hide().show('medium');
});

</script>
