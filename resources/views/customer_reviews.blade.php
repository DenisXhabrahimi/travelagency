@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * > * {
        font-family: 'Poppins', sans-serif;
    }

    :root{
        --color-dark: #464C70;
        --color-secodary-dark: #464C70;
        --color-primary: #EE709D;
        --color-text: #8297E2;
        --color-light: #EBEBFB;
    }

    .container{
        height: 98vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .board{
        max-width: 900px;
        width: 100%;
        background-color: var(--color-dark);
        text-align: center;
        border-radius: 8px;
        padding: 4em 0;
        
    }

    .text-light{
        color: var(--color-light);
    }

    .swiper {
        width: 800px;
        height: auto;
    }

    .swiper .swiper-slide .flex{
        margin: 3em 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swiper .swiper-slide .comments{
        background-color: var(--color-light);
        padding: 1.5em 2em;
        width: 50%;
        border-radius: 5px;
        font-size: .9em;
        position: relative;
    }

    .swiper .swiper-slide .comments::after{
        content: '';
        position: absolute;
        bottom: -19px;
        left: 45%;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid var(--color-light);
        z-index: -99;
    }


    .swiper .profile{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 1em;
    }

    .swiper .profile img{
        width: 30%;
        border-radius: 50%;
        border: 5px solid var(--color-primary);
        margin: 10px 0;
    }   

    .swiper .profile > a{
        text-decoration: none;
        color: var(--color-light);
    }

    .swiper .profile > span{
        color: var(--color-text);
        font-size: .8em;
    }

    .swiper .swiper-button-prev, .swiper-button-next{
        color: var(--color-text);
        display: none;
    } 

    @media (min-width: 320px) {
        .board{
            width: auto;
        }

        .swiper {
            width: 320px;
        }

        .board > h1, p{
            padding: 0 2em;
        }
    }

    @media (min-width: 768px) {
        .board{
            width: 100%;
        }

        .swiper {
            width: 600px;
        }

        .swiper .swiper-button-prev, .swiper-button-next{
            display: initial;
        }
    }

    @media only screen and (max-width: 600px) { 
        .board{
            margin-top:200px;
        }
    }
</style>
<div class="container">
    <div class="board">
        <h2 class="text-light">Word form our customers</h2>
        <p class="text-light">Some of the fullfilled costomers reviews</p>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="flex">
                    <div class="comments">
                        Our trip with Albania Wonders was absolutely fantastic! 
                        Booking process, incredible accommodations and knowledgeable guides, every aspect exceeded our expectations. 
                        We can't wait to book our next adventure with them!
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/family.png') }}" style="height: 100px; width: 100px;">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex">
                    <div class="comments">
                        Our trip with Albania Wonders was absolutely fantastic! 
                        Booking process, incredible accommodations and knowledgeable guides, every aspect exceeded our expectations. 
                        We can't wait to book our next adventure with them!
                     </div>
                    <div class="profile">
                        <img src="{{ asset('img/family2.png') }}" style="height: 100px; width: 100px;">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex">
                    <div class="comments">
                        My trip with Albania Wonders was absolutely fantastic! 
                        Booking process, incredible accommodations and knowledgeable guides, every aspect exceeded our expectations. 
                        I can't wait to book my next adventure with them!
                    </div>
                    <div class="profile">
                        <img src="{{ asset('img/family3.png') }}" style="height: 100px; width: 100px;">
                    </div>
                </div>
            </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    
        </div>

    </div>
</div>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
        // initialize swiper js

    const swiper = new Swiper('.swiper', {
        loop: true,

        // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


    })
</script>
@endsection
