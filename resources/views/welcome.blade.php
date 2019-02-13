@extends('layout') 
@section('carousel')
<div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="https://www.essentialibiza.com/ecms/wp-content/uploads/2016/08/Km5_Catwalk_Fashion_Event_Essentialibiza_2016Km5_Catwalk_Fashion_Event_Essentialibiza_2016_001.jpg">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="http://teamorange.in/wp-content/uploads/2017/02/event-management-services-fashion-lifestyle-events.jpg">
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="http://agentluxe.com/wp-content/uploads/2013/02/IMG_2893.jpg">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

</div>
@endsection