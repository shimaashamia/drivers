
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

<style>
.container{
    display:;
    

}
</style>
        <title>Laravel</title>
        </head>



<div class="container">
<div class="panel-body">
<div class="row">
    <div class="col-md-4">
       <form action="{{route('drive.store')}}" method="POST"  enctype="multipart/form-data">
       @csrf
            <div class="col-sm-6 form-group">
                <label for="name">الصنف</label>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="{{app('request')->get('title')}}">One</option>
                </select>
                <!-- <input type="text" name="name" value="{{old ('name') }}" class="form-control"> -->
                <div>{{ $errors->first('name') }}</div>
            </div>
          
            <div class="radio">
                <label><input type="radio" name="optradio" checked> لترات</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio"> مبلغ </label>
            </div>

            <div class="form-group col-sm-6">
                <label for="email">الكميه</label>
                <input type="text" name="email" value="{{old ('email') }}" class="form-control">
                <div>{{ $errors->first('email') }}</div>
            </div>
          

            <div class="form-group col-sm-6">
                <label for="email"> الساق</label>
                <!-- <input type="text" name="email" value="{{old ('email') }}" class="form-control"> -->
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                </select>
                <div>{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group col-sm-4">
            <button type="submit" class="btn btn-success"> اعتماد</button>
            </div>



        </div>
    </div>
</div>
</div>



</html>