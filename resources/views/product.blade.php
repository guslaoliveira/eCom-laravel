    @extends('master')
    @section('content')


 <body>


 <p class="aligncenter">  
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
       

        <?php

            $srcDefaultAddr = "http://127.0.0.1/img/LgSmartPhone.jpg" ;
            $srcDefaultname= "Generic Lg SmartFone";
            $srcDefaultDescription= "Generic LgSmartFone no data";

  
                foreach ($produtos as $value) {
                  
                    if($value['id'] ==1) {

                      $srcDefaultAddr = $value['gallery'];
                      $srcDefaultname =   $value['name'];
                      $srcDefaultDescription =  $value['description'];
                      break;


                    }
                }

           
      ?>



  <div class="carousel-item active">
      <div class="containerCarousel">
     
        <img   src="{{$srcDefaultAddr}}" alt="..." class="w-100 p-3" style="background-color: #eee;"  alt="Max-width 100%">
    
      </div>
             <div id="grad1" style="text-align:center;">
             <h3>{{$srcDefaultname}}</h3>
             <p>{{$srcDefaultDescription}}</p>
             </div>
    </div>
    
    
    
    
    @foreach($produtos as $item)
        
        @if($item['id'] !=1)  
           <div class="carousel-item">
            <div class="containerCarousel">
           
             <img  src="{{$item['gallery']}}" alt= "..."  class="w-100 p-3" style="background-color: #eee; alt="Max-width 100%">
            
            
            </div>

            <div id="grad1" style="text-align:center;">
             <h3>{{$item['name']}}</h3>
             <p>{{$item['description']}}</p>
             </div>
           
          </div>
        @endif
      
    @endforeach 
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</p>   

</body>


  
  
    @endsection
