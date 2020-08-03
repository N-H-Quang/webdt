@if (!empty($productSuggest))
    

<div class="our-product-area">
    <div class="container">
        <!-- area title start -->
        <div class="area-title">
            <h2>Sản phẩm Cùng Danh mục</h2>
        </div>
        <!-- area title end -->
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <!-- Nav tabs -->
                    <!-- Tab pans -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row">
                                <div class="features-curosel">
                                    @foreach ($productSuggest as $item)
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product ">
                                            
                                            <div class="product-img">
                                                @if($item->pro_number==0)
                                                <span  style="color: white;
                                                background-color: silver;
                                                position: absolute;
                                                border-radius: 5px 5px;
                                                font-size: 15px">Tạm Hết hàng</span>	
                                                @endif
                                                @if($item->pro_sale>0)
                                                <span style="
                                                right: 0;
                                                background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%); border-radius: 10px;padding: 1px 7px;padding-left: 0;padding-right: 10px;
                                            position: absolute ;">{{$item->pro_sale}} %</span>
                                                @endif
                                            <a href="{{route('get.detail.product',[$item->pro_slug,$item->id])}}">
                                                
                                                <img class="primary-image" src="{{pare_url_file($item->pro_avatar)}}" class="h-100 img-responsive" alt="" >
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="{{route('add.shopping.carts',[$item->id])}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>									
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->pro_price}}</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                            <h2 class="product-name"><a href="#">{{$item->pro_name}}</a></h2>
                                            <p>{{$item->pro_description}}</p>
                                            </div>
                                        </div>
                                        
                                    </div>	
                                    @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>				
            </div>
        </div>
        <!-- our-product area end -->	
    </div>
</div>
@endif