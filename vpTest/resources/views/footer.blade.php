<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<footer class="flex items-center justify-between flex-wrap bg-gray-800 p-6 text-white">
    <div>
        <!-- Made a custom css that turns the brightness down and inverts the color for the text to be white  -->
        <img src="{{asset('assets/images/Meridian.jpg')}}" class="object-contain hover:object-scale-down" width="10%"
            height="10%" style="filter: brightness(0) invert(1);">
        <div class="text-xs mt-6 flex justify-center ">
            <!-- set up the space for the footer info  -->
            <div class="flex space-x-6 ...">
            <div>Meridian Brands LLC</div>
                <div>250 W 39th St 11th floor,
                    New York, NY 10018</div>
                <div>info@meridianbrandsllc.com</div>
                <div>(212) 719-9190</div>
            </div>
        </div>
        <div class="text-xs mt-6 flex justify-center">
            <p>Copyright &copy; 2023 Meridian Brands.
                All rights reserved.</p>
        </div>
    </div>
</footer>