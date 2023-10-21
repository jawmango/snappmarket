@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5 ">
        <h1 class="mb-4">Shop in a Snap!</h1> 
        <p class="mb-5">Shop the sneakers and apparel that you want fast. Create an account now and buy and shell sneakers and apparel with ease!</p>
        <a href="/discover">
        <button class="btn" >Shop Now</button>
        </a>
    </div>
</div>

<div class="why-section">
        <div class="inner-container">
            <h1>Why SnappMarket?</h1>
            <p class="text">
            The purpose of this software is to provide a dynamic and user-centric online
marketplace that not only facilitates transactions but also fosters a sense of community
and discovery. By enabling users to create accounts, buy and sell shoes and
merchandise, track orders, and interact with fellow enthusiasts, this platform aims to
become the go-to hub for those seeking authenticity, quality, and connections within the
realm of sneakers and merchandise. This project seeks to bridge the gap between
online shopping and the tangible excitement of discovering unique, collectible items.
            </p>
            <div class="skills">
                <span><i class="fas fa-shopping-cart"></i> Buy</span>
                <span><i class="fas fa-coins"></i> Sell</span>
                <span><i class="fas fa-handshake"></i> Community</span>
            </div>
        </div>
    </div>
<br>
    <section class="services-section">
      <div class="inner-width">
        <h1>Our <strong>Services</strong></h1>
        <div class="services owl-carousel">

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="service-name">Account Creation</div>
            <div class="service-desc">Create an account for free to unlock features!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="service-name">Buy Products</div>
            <div class="service-desc">Buy the sneakers and apparel that you have your eye on!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-coins"></i>
            </div>
            <div class="service-name">Sell Products</div>
            <div class="service-desc">Sell your priced possessions and earn money!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-name">Manage Transactions</div>
            <div class="service-desc">View your transaction history!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <div class="service-name">Support</div>
            <div class="service-desc">Contact us through email and quickly recieve customer support!</div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(".services").owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });
    </script>
@endsection
