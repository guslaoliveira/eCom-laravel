@extends('master')
@section('content')


 <body background-color='#FFFFFF'>

     <div class="container"> 
             <div class="row">
                 <div class="col-sm">
                 <img  class="detail-images" src="{{$produto['gallery']}}" alt= "..." >              
                 <br>
                 <br>
                 <a href="/"><br> Go Back</br></a>      
                 </div>

                 <div class="col-sm">
                    
                     <h2>{{$produto['name']}}</h2>        
                     <h3>Price: {{$produto['price']}}</h3> 
                     <h4>Details:</h4> 
                     <p>{{$produto['description']}}</p> 
                     <h4>Category:</h4> 
                     <p>{{$produto['category']}}</h4> 
                     <br>
                     <br> 
                     <form action="/add_to_cart" method="POST">
                     @csrf
                        <input type="hidden" name="product_id" value={{ $produto['id']}}>
                        <button  class="btn btn-primary">Add to Cart</button>

                     </form>
                     
                     <br>
                     <br>
                     <button class="btn btn-success">By Now</button>
                    
                 </div>

             </div>
     </div> 
 
 </body> 
 @endsection
