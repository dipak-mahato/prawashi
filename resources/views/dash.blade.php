 @extends('main')
 @section('content')
  <div class="nav2 row " id="wrap" style="width: 100%; ">
     <div class="second">Explore</div>
@foreach($items as $item)
    <a href="#" ><div class="third">{{$item->itemName}}</div></a>
@endforeach
 </div>

   <div class="row" style="width: 100%;margin-top: 100px"><div class="col-md-8"><div id="demo" class="carousel slide" data-ride="carousel">
  
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/image/a.jpg') }}" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('/image/a.jpg') }}" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('/image/a.jpg') }}" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div></div></div>
 <div style="width: 100%; margin-top: 20px;background-color: #22226d;  padding-top: 10px" class="row">
   <div class="col-md-4"> <h3 style="color:white; margin-left: 50px;font-size: 20px;font-weight: 600;float: left">NEW PRODUCTS</h3></div>
<div class="col-md-8">
   <ul class="list">
 <li class="ll"><a class= "lb" href="#tab1">WOMEN</a></li>
 <li class="ll"><a class= "lb"  href="#tab2">MEN</a></li>
 <li class="ll"><a class= "lb"  href="#tab3">ELECTRONICS</a></li>
 <li class="ll"><a class= "lb"  href="#tab4">KIDS</a></li>

   </ul>
</div>
 </div>
 <div class="numw row">
  <ul id="tab1"   >
<div class="row">
    <div class="col-md-4 myclass" style="position: relative;"><div style="position: absolute; top:45%;border: 1px solid blue;width: 90px">Add to Cart</div><li style="width:100%;"><img src="{{asset('/image/logo.jpg')}}" width="400px" height="400px" class="iii"  ></li></div>
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/a.jpg')}}" width="400px" height="400px"  ></li></div>
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/logo.jpg')}}" width="400px" height="400px"  ></li></div>
    
    </div>
  </ul>
  <ul id="tab2">
  <div class="row">
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/di.jpg')}}" width="400px" height="400px"  ></li></div>
    <div class="col-md-4 myclass" ><li><img src="{{asset('/image/a.jpg')}}" width="400px" height="400px"  ></li></div>
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/di.jpg')}}" width="400px" height="400px"  ></li></div>
    
    </div>
  </ul>
  <ul id="tab3"  >
   <div class="row">
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/logo.jpg')}}" width="400px" height="400px"  ></li></div>
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/logo.jpg')}}" width="400px" height="400px"  ></li></div>
    <div class="col-md-4 myclass"><li><img src="{{asset('/image/logo.jpg')}}" width="400px" height="400px"  ></li></div>
    
    </div>
  </ul>

  </div>
  @endsection