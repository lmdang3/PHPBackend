
<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6">
    <img src="{{asset('assets/images/Meridian.jpg')}}" class="object-contain hover:object-scale-down" width="10%"
        height="10%" style="filter: brightness(0) invert(1);">
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="ml-12 block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
                Home
            </a>
            <a href="/label" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-white mr-4">
                Store Label
            </a>
        </div>
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" id="logoutButton"
                    class="inline-flex text-white border-0 py-2 px-6 focus:outline-nonetext-lg rounded-full">
                    Logout</button>
            </form>
        </div>
    </div>
</nav>