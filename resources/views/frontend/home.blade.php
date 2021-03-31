@extends('frontend.base')
@section('main_content')

<div class="product-area pt-70 pb-30">
    <div class="container-fluid">
        <div class="section-title text-center mb-50">
            <h2>Must Have</h2>
            <p>Sed vitae eros a quam malesuada porttitor nec nec</p>
        </div>
        <div class="product-area-wrap">
            <div class="row">
                @foreach($products as $product)
                <div class="custom-col-5">
                    <div class="product-wrap mb-45">
                        <div class="product-img default-overlay item-overlay-1">
                            <a href="{{ URL::to('/single/product/'.$product->id) }}">
                                <img class="default-img" src="{{ $product->image_one }}" alt="">
                                <img class="hover-img" src="{{ $product->image_two }}" alt="">
                            </a>
                            <div class="product-action">
                                <div class="pro-same-action pro-wishlist-icon">
                                    <a title="Add To Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i><i class="heart-hover fa fa-heart"></i></a>
                                </div>
                                <div class="pro-same-action pro-switch-icon">
                                    <a title="Add To Compare" href="#"><i class="negan-icon-switch"></i></a>
                                </div>
                            </div>
                            <div class="product-quickview">
                                <a title="Quick Shop" data-toggle="modal" class="quickShop" data-id="{{ $product->id }}" data-target="#ShowProductByID">Quick Shop</a>
                                <a class="addtocart-hm2 addCart" data-id="{{ $product->id }}">Add to cart</a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h3><a href="{{ URL::to('/single/product/'.$product->id) }}">{{ $product->product_name }}</a></h3>
                            <div class="product-price-2">
                                <span>৳{{ $product->selling_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<!-- ShowProductByID Modal -->
<div class="modal fade" id="ShowProductByID" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lightcase-icon-close"></i></button>
    </div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="quickview-img-wrap">
                            <div class="quickview-small-img-slider text-center">
                                <div class="single-small-img image_one">
                                    
                                </div>
                                <div class="single-small-img image_two">
                                    
                                </div>
                                <div class="single-small-img image_three">
                                    
                                </div>
                            </div>
                            <div class="quickview-big-img-slider text-center">
                                <div class="single-big-img image_one">
                                    
                                </div>
                                <div class="single-big-img image_two">
                                    
                                </div>
                                <div class="single-big-img image_three">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2 id="product_name"></h2>
                            <div class="product-details-price">
                                <span>৳ <span id="selling_price"></span> </span>
                            </div>
                            <div class="pro-details-sku">
                                <span id="product_code"></span>
                            </div>
                            <p id="product_details"></p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="fa fa-heart-o"></i><span>Add To Wilhlist</span></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="negan-icon-switch"></i> <span>Add To Compare</span></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Category :</span>
                                <ul>
                                    <li><a href="#" id="category_name"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
       $('.quickShop').on('click', function(){
           let id = $(this).data('id');
           if(id) {
               $.ajax({
                   type:"GET",
                   url: "{{  url('/quick/product/') }}/"+id,
                   dataType:"json",
                   success:function(productbyid) {
                    $(".image_one").html('<img src="' + productbyid.image_one + '" />');
                    $(".image_two").html('<img src="' + productbyid.image_two + '" />');
                    $(".image_three").html('<img src="' + productbyid.image_three + '" />');
                    $("#selling_price").html(productbyid.selling_price);
                    $("#product_code").html(productbyid.product_code);
                    $("#category_id").html(productbyid.category_id);
                   },
                  
               });
           } else {
               alert('danger');
           }

       });
   });

</script>

@endsection