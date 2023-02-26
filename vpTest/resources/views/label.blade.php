<!-- @extends('layouts.app') -->

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex justify-center items-center mx-auto">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Hey
                    this
                    is the home page</h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">View
                    report
                </p>
                <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="pdf_file">
                    <button type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
</body>