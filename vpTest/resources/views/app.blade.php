<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

  <div class="flex justify-center items-center mx-auto" id="backgroundcolor">
  <section class="h-full gradient-form md:h-screen">

  <div class="container py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="xl:w-10/12">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-6/12 px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                <!-- <img src="https://images.squarespace-cdn.com/content/605cc118eecb642a7e9e2cfa/1617046226791-KLDDBCH39KZ0UULHHGBO/Meridian_Logo_Burnet-Blue.png?format=1500w&content-type=image%2Fpng"> -->
                <img src="{{asset('assets/images/Meridian.jpg')}}" class="object-contain hover:object-scale-down">
     
                </div>
                <form action="{{ route('login') }}" method="post">             
                     @csrf
                  <p class="mt-12 mb-4">Please login to your account</p>
                  <div class="mb-4">
                    <input
                      type="text"
                      name="username"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleFormControlInput1"
                      placeholder="Username"
                    />
                  </div>
                  <div class="mb-4">
                    <input
                      type="text"
                      name="password"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      id="exampleFormControlInput1"
                      placeholder="Password"
                    />
                  </div>
                  <div class="text-center pt-1 mb-12 pb-1">


                    <button
                      class="bg-gradient-to-r  from-teal-200 to-lime-200 inline-block px-6 py-2.5 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="button"
                      data-mdb-ripple="true"
                      data-mdb-ripple-color="light"
                      onclick = ""
            
                    >
                      Log in
                    </button>
                    <a class="text-gray-500" href="#!">Forgot password?</a>
                  </div>
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2">Don't have an account?</p>
                    <button
                      type="submit"
                   
                    >
                   
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div
              class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none bg-gradient-to-r from-teal-200 to-lime-200"
           
            >
              <div class="text-black px-4 py-6 md:p-12 md:mx-6">
                <h4 class="text-xl font-semibold mb-6">About Meridian Brands</h4>
                <p class="text-sm">
                Meridian Brands was formed in 2021 when it assumed ownership of HMS Productions LLC, a longtime industry leader in the design, sourcing, manufacturing, and distribution of branded and private label women's apparel.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>