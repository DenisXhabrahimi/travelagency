<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albania Wonders</title>

    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: transparent;
        }
        @media only screen and (max-width: 600px) {
            .phone-background {
                display: none; /* Hide phone background on larger screens */
            }
            #maintext {
                text-align: center;
                font-size: 2em;
                position: relative; /* Add this line */
                z-index: 1; /* Add this line */
            }
            #travelwithus { 
                margin-bottom: 300px;
                margin-right: 200px;
                text-align: center;
                white-space: nowrap;
            }
        }
    </style>

</head>
    <body>
        {{-- <nav class="mt-8">
            <a href="second-page.html" class="text-white text-lg mr-4 hover:text-gray-300">Second Page</a>
            <a href="third-page.html" class="text-white text-lg hover:text-gray-300">Third Page</a>
        </nav> --}}
        <!-- First Page (Home Page) -->
        <div class="bg-cover bg-center bg-fixed h-screen visible md:visible" style="background-image: url('{{ asset('img/albania2.jpeg') }}')">
            <div class="flex flex-col justify-center items-center h-screen">
                <div class="bg-cover bg-center bg-fixed h-24 sm:h-auto">
                    <img src="{{ asset('img/inshallah4.jpg') }}" class="block sm:hidden" alt="Phone Image">
                </div>
                <h1 class="text-4xl md:text-8xl font-bold mb-8 text-black" style="font-family: 'Nunito', cursive; margin-bottom: 300px; color:black;">Albania Wonders</h1>
                <p class="text-2xl md:text-5xl font-bold text-black" id="travelwithus" style="font-family: 'Nunito', cursive; margin-left: 400px;">Travel with us</p> 
            </div>
        </div>

        <!-- Second Page For the Customers -->
        @include('customer_reviews')

        <!-- Third Page (Contact Us Page) -->
        <div class="">
            <div class="container mx-auto py-12">
                <h1 class="text-3xl md:text-4xl font-bold mb-8">Contact Us</h1>
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <img src="{{ asset('img/instagram.png') }}" alt="Instagram Icon" class="w-6 h-6 md:w-8 md:h-8 mr-2">
                    <p class="text-gray-600">Instagram: @albania.wonders</p>
                </div>
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <img src="{{ asset('img/gmail.png') }}" alt="Email Icon" class="w-6 h-6 md:w-8 md:h-8 mr-2">
                    <p class="text-gray-600">Email: albaniawonders2024@gmail.com </p>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <img src="{{ asset('img/phone.png') }}" alt="Phone Icon" class="w-6 h-6 md:w-8 md:h-8 mr-2">
                    <p class="text-gray-600">Phone: +355 69 96 36 736</p>
                </div>
            </div>
        </div>
        <!-- Fourth Page (Submission Page) -->
        <div class="">
            <div class="container mx-auto py-12">
                <h1 class="text-3xl md:text-4xl font-bold mb-8">Submit Your Request</h1>
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="max-w-lg mx-auto" method="POST" action="/submit">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_number">Phone Number</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_number" name="phone_number" type="tel" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>


</body>
</html>
