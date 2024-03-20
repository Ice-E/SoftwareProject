@extends('layouts.main')

@section('content')
<!-- Header Start-->
<div id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <h2><span> The best</span> Appartement<span> for a better future</span></h2>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Appartements</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Best Views</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Best Market Prices</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>The Best Of The Best</li>
                    </ul>
                    <a class="btn" href="{{route('products')}}">Get Your Appartement Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-img">
                    <img src="{{asset('img/main.webp')}}" alt="Product Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End-->

<!-- Feature Start-->
<div id="feature">
    <div class="container">
        <div class="section-header">
            <h2>Why Us?</h2>
            <p>
                We prioritize your comfort and happiness, and we have the capability to transform all your ideas into reality with professionalism and flair.
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="product-feature">
                    <div class="product-content">
                        <h2>Innovative technology</h2>
                        <p>Connected Homes</p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-content">
                        <h2>Secure</h2>
                        <p>We Make Sure That Your Home Is Secure</p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-content">
                        <h2>After Sell Services</h2>
                        <p>We Help You After Getting Your Home To </p>
                    </div>
                    <div class="product-icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-img">
                    <img src="{{asset('img/main2.webp')}}" alt="Product Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="product-content">
                        <h2>Best Locations in The Town </h2>
                        <p>Sunny And Good Located Appartements</p>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <div class="product-content">
                        <h2>Proximity</h2>
                        <p>Close To Everything You Need </p>
                    </div>
                </div>
                <div class="product-feature">
                    <div class="product-icon">
                        <i class="fa fa-crown"></i>
                    </div>
                    <div class="product-content">
                        <h2>latest Design</h2>
                        <p>Good Looking Appartements </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

<!-- Process Start-->

<!-- Process End-->


<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Home</h2>
            <p>
                Why wait? Get your home quickly. Experience our professional service today
            </p>
        </div>
        <div class="row align-items-center">
            @foreach ($products as $product)

            <div class="col-md-3">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{asset('img/'.$product->image)}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2><a href="{{route('single_product',['id'=>$product->id])}}">{{$product->name}}</a></h2>
                        @if ($product->sale_price != null)
                        <h3>{{$product->sale_price}}</h3>
                        <h4 style="text-decoration: line-through; color:red; font-weight:bold; font-size:15px;">${{$product->price}}</h4>
                        @else
                        <h3>{{$product->price}}</h3>
                        @endif
                        <a class="btn" href="{{route('single_product',['id'=>$product->id])}}">Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

       

    </div>
</div>
<!-- Products End -->





<!-- FAQ Start -->
<div id="faqs">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>
                Need answers fast ? Contact Us!!!
            </p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-7">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <span>1</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Can you do a quick visit ?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                We are here, a dedicated team ready to assist you. Let us show you our range of apartments and provide all the information you need. Count on us for a professional and seamless experience. Your perfect apartment awaits, and we're here to help you find it.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>2</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                Do you offer furnished apartments?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Yes, we do offer furnished apartments.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <span>3</span>
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                How quickly can I move in after submitting my application?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                You can move in on the same day you complete the necessary paperwork.
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <div class="col-md-5">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>
                        Get details product information in our help center
                    </p>
                    <h3><i class="fa fa-map-marker"></i>Lazaret, Oujda, Morocco</h3>
                    <h3><i class="fa fa-envelope"></i>zaidiabderahmane02@gmail.com</h3>
                    <h3><i class="fa fa-phone"></i>+33-619928445</h3>
                    <a class="btn" href="#">Contact Us</a>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Start -->


<!-- Footer Start -->
<div id="footer">
    <div class="container">
        <div class="row align-items-center">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


@endsection
