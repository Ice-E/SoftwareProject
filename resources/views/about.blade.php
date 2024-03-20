@extends('layouts.main')

@section('content')
<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
            <h1 class="display-4">Serving Since 2000</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Story</h1>
                <p>Step into the world of premier real estate with our captivating online platform. As you enter our virtual realm, you're greeted by a seamless blend of sophistication and functionality, beckoning you to explore the possibilities of your dream home. From quaint cottages to sprawling estates, each property listing is presented with meticulous attention to detail, accompanied by stunning visuals and immersive virtual tours. Our intuitive interface ensures that your search is not just efficient, but also an enjoyable journey of discovery. Backed by a team of seasoned professionals, we're dedicated to turning your aspirations into reality. Embark on your quest for the perfect abode with us today, and let your story of home begin.</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{asset('img/main.webp')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Our Vision</h1>
                <p>At Abdou's Real Estate Company, our vision extends far beyond just buying and selling properties. We aspire to redefine the real estate experience, fostering meaningful connections between people and the places they call home. With innovation as our compass and integrity as our foundation, we aim to empower individuals and families on their journey to find not just a house, but a sanctuary where memories are made and dreams flourish. Guided by a commitment to excellence and a passion for service, we strive to be the catalyst for transformative moments in the lives of our clients, leaving a lasting imprint of trust, satisfaction, and joy. Together, let's envision a future where every door opens to endless possibilities and every key unlocks a world of opportunities."</p>
                <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
