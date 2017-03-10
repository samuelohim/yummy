@extends ('layouts.main')

@section('content')
 
<form class="form-horizontal" action = '/home' method = 'POST'>

  {!! csrf_field() !!}
  <fieldset>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" style = 'height: 88px;' name="name" placeholder="Restaurant Name" data-form-un="1489121552466.3135">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input type="email" class="form-control"  style = 'height: 88px;'  name="address" placeholder="Address" data-form-un="1489121552466.3135">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Phone:</label>
      <div class="col-lg-10">
        <input type="phone" class="form-control" style = 'height: 88px;'  name="phone" placeholder="Phone" data-form-pw="1489121552466.3135">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" style = 'height: 88px;'  name="textArea"></textarea>
        <span class="help-block">Restaurant description</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2"> 
        <button type="submit" class="btn btn-primary" data-form-sbm="1489121552466.3135">Submit</button>
      </div>
    </div>
  </fieldset>
</form> 

@endsection