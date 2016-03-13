@extends('usermain')



@section('content')
<h1>Shop</h1>
<h5>Shop a package to Active your Account</h5>

                   <div class="bs-example" data-example-id="thumbnails-with-custom-content">
    <div class="row">
    @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img data-holder-rendered="true" src="{{$product->img}}" style="height: 200px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
          <div class="caption">
              <p>
                  <a type="button" href="/shop/product?id={{$product->id}}" style=" width:100%;" class="btn btn-primary btn-lg pull-right">Purchase</a>
                <br><br>
           
            
              
              
              
              
              
              <h3 id="thumbnail-label">{{$product->title}}<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
            
                 {{$product->details}}<br>
            Package Price:3000 PKR ($30)
            </p>
         
          </div>
        </div>
      </div>
      @endforeach
  </div>
                        
                        
                        
                    </div>
                  


@stop