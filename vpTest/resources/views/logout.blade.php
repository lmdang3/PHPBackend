<!DOCTYPE html>
<html>

<head>
    <title>Logout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<section id="backgroundcolor" class="text-gray-700 body-font h-90vh lg:h-screen">
    <!-- This sets the height to 90% of the 
    viewport height for screens smaller than lg, and to 100% of the viewport height for screens lg and larger. -->
    <div class="container mx-auto flex px-6 py-24 md:flex-row flex-col items-center container-narrow">

        <div
            class="lg:flex-grow md:w-2/3 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">You Have Successfully Logged Out
            </h1>
            </h1>
            <p class="mb-8 leading-relaxed">
                <!-- Insert some text here if you want -->
                Please log in to access the portal
            </p>
            <div class="flex justify-center">
            <form action='/login' method="get">
                    <button type="submit" id="logoutButton"
                    class="inline-flex text-white border-0 py-2 px-6 focus:outline-nonetext-lg rounded-full">
                    Login</button>
                </form>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 ">

            <img class="w-30 md:w-50 lg:w-100" src="{{asset('assets/images/PersonShoppingLogo.jpg')}}" />
        </div>
    </div>
</section>
@include('footer')

</html>