    @extends('master')
    @section('content')


 <body background-color='#FFFFFF'>


 <p class="aligncenter">  
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    
       

        <?php

            $srcDefaultAddr = "./img/iphone-12.jpg" ;
            $srcDefaultname= "iPhone 12 Pro Max Grafite";
            $srcDefaultDescription= "iPhone 12 Pro Max Grafite, 256GB - MGDC3BZ/A";

  
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
     
        <img   src="{{$srcDefaultAddr}}" alt="..." class="w-100 p-3"   alt="...">
    
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
           
             <img  src="{{$item['gallery']}}"  class="w-100 p-3" alt=".....">
            
            
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


    <div class="treding-wrapper">
    <h3>Treding Products</h3>
    @foreach($produtos as $item)                 
            
            <div class="treding-itens">           
             <img  class="treding-images" src="{{$item['gallery']}}" alt= "..." >              
                       <div  class="">
                       <o>{{$item['name']}}</p>            
                      </div> 
            </div> 
            
       
    @endforeach 
    </div>




</p>   

</body>


  
  
    @endsection
