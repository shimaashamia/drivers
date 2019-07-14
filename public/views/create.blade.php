<body ng-controller="myCtrl" >
    <div class="container">
    <div class="panel-body">
    <div class="row">
         <!-- <div class="col-lg-4"> -->
         
        
            <!-- <form action="/driver" method="POST" ng-submit="addItem()"> -->
            <form name="frm" ng-submit="addItem()">
            <!-- {{ csrf_field() }} -->
           
                <div  class="col-lg-4 form-group">
                    <label for="name">الصنف</label>
                    <select class="form-control input-lg dynamic" 
                    ng-model="products_id" id="product" name="products_id">            
                    <option value="">الصنف</option>
                        <option ng-repeat="x in product" value="{{x.id}}">{{x.product}}</option>

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
                    <input type="number" name="quantity" ng-model="quantity" class="form-control"/>
                    <!-- <div>{{ $errors->first('email') }}</div> -->
                </div>
          

                <div class="form-group col-lg-4">
                    <label for="drive"> سائق</label>
                    <!-- <input type="text" name="email" value="{{old ('email') }}" class="form-control"> -->
                    <select class="form-control input-lg dynamic" ng-model="drivers_id" id="driver_list" name="drivers_id">
                        <option value="">سائق</option>
                        <option ng-repeat="x in driver_list" value="{{x.id}}">{{x.name_driver}}</option>

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
        
    </div>
    </div>
    </div>

    <hr class="new1"/>
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
                    <th scope="col">سائق</th>
                    <th scope="col"> الحاله</th>
                </tr>
            </thead>
            <tbody>
          
                <!-- @foreach($info_driver as $post) -->
                <tr ng-repeat="post in info_driver">
                
                    <td>{{post.id}}</td>
                    <td>{{ today | date }} </td>
                   <!-- <td>{{today | date:'h:mm a z'}} </td> -->
                    <!-- <td>{{date('F d, Y', strtotime(post.created_at)) }}</td> -->
                    <td>{{post.product.product}}</td>
                    <td>{{post.price}} {{post.quantity}}</td>
                    <td>{{post.driver.name_driver}}</td>
                    <!-- <td>{{$post->stauts}}</td>  -->
                    <!-- <div ng-if="post.stauts == 1 "> -->
                    <td ng-if="post.stauts == 1 ">
                        <!-- @if($post->stauts==1)      -->
                        <!-- <input type="hidden" name="_method" value="PUT" />    -->
                        {{ csrf_field() }}   
                                تم الاستلام
                                <button type="button" class="btn btn-default stauts_update" name="stauts" ng-click="updateTask(post.id)" id="edit_task"> 
                                الايقاف
                                </button>
                                </form>
                                <input type="hidden" class="utd" value="{{post. id}}"/>
                       </td>
                        <!-- <div ng-if="post.stauts == 0 ">        -->
                        <td ng-if="post.stauts == 0 ">
                        <!-- @else -->
                               <span>
                                تم الايقاف
                                </span> 
                        <!-- @endif -->
                       </div>
                    </td>
                    
                </tr>
                <!-- @endforeach -->
            </tbody>
        </table>
    </div>
   
</body>

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
