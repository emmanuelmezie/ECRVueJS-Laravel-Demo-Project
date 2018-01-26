<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="node_modules/open-sans-all/css/open-sans.css">
  <script src="sample/data.js"></script>
  <!-- <link rel="stylesheet" href="node_modules/open-sans-all/css/opensans.css">
 <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">-->
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="toolbars">
  <img style="height: 34px;
  padding: 24px;
  display: inline-block;" src="{{ asset('images/logo.png') }}">
  <h1>vuebnb</h1>
</div>

  <div class="container">
    <div class="panel panel-primary">
                    
      <div class="panel-body">

                        <form method="post" action="{{ route('hotels.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                             <div class="form-group">
                              <label for="class-name">Accomodation Title<span class="required">*</span></label>
                              <input placeholder="Title" id="class-name" required name="name" spellcheck="false" class="form-control" >

                            </div>
                           
                             <div class="form-group">
                              <label for="dob">Address<span class="address">*</span></label>
                              <input type="text"  id="address" required name="address" spellcheck="false" class="form-control">

                            </div>

                            <div class="form-group">
                              <label for="ad_date">About<span class="ad_date">*</span></label>
                              <textarea id="ad_date" required name="ad_date" spellcheck="false" class="form-control">
                                
                              </textarea> 

                            </div>
                              
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Create">
                            </div>
                        </form>            
      </div>
  </div>
</div>



<script src="node_modules/vue/dist/vue.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



