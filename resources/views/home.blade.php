<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Header Section --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- TailwindCss Style --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- flowbite Style --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    {{-- heroicons --}}
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    {{-- style css --}}
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    {{-- jQuery CDN --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- Script EXL --}}
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

    <title>home</title>

    <style>
        /* Add custom CSS here */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6; /* Add your desired background color */
        }

        /* Add custom CSS for button background color */
        .btn-blue {
            background-color: #4a90e2; /* Change this to your desired blue color */
        }
    </style>
</head>
<body>
    <div class="flex w-full flex-col items-center justify-center gap-12">

        <h1 class="dark:hover:text-primary hover:text-primary text-3xl font-bold text-gray-800 transition-colors duration-150 dark:text-white">
            ONEP
        </h1>
        <div class="grid-col-1 grid w-full place-items-center gap-10 text-gray-600 transition-all duration-300 ease-in-out dark:text-gray-600 md:grid-cols-2 md:px-8">


            <section class="dark:hover:border-primary/40 hover:border-primary/40 group flex w-full max-w-lg items-center justify-between rounded border-2 border-gray-100 bg-white p-4 shadow-sm hover:animate-pulse dark:border-gray-700 dark:bg-gray-800 dark:shadow-none md:p-6">
                <div class="dark:group-hover:text-primary group-hover:text-primary flex flex-col justify-center pr-4 md:pr-10">
                    <span class="text-9xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M6 3a3 3 0 0 0-3 3v2.25a3 3 0 0 0 3 3h2.25a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H6ZM15.75 3a3 3 0 0 0-3 3v2.25a3 3 0 0 0 3 3H18a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3h-2.25ZM6 12.75a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h2.25a3 3 0 0 0 3-3v-2.25a3 3 0 0 0-3-3H6ZM17.625 13.5a.75.75 0 0 0-1.5 0v2.625H13.5a.75.75 0 0 0 0 1.5h2.625v2.625a.75.75 0 0 0 1.5 0v-2.625h2.625a.75.75 0 0 0 0-1.5h-2.625V13.5Z" />
                          </svg>
                          
                    </span>

                    <span class="mt-1 text-4xl font-bold capitalize">
                        Nouveau branchment
                    </span>

                </div>
            </section>

            <section class="dark:hover:border-primary/40 hover:border-primary/40 group flex w-full max-w-lg items-center justify-between rounded border-2 border-gray-100 bg-white p-4 shadow-sm hover:animate-pulse dark:border-gray-700 dark:bg-gray-800 dark:shadow-none md:p-6">
                <div class="dark:group-hover:text-primary group-hover:text-primary flex flex-col justify-center">
                    <span class="text-9xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                          </svg>
                          
                    </span>

                    <span class="font-boldRegister mt-1 text-4xl capitalize">
                        Réclamation
                    </span>

                </div>
            </section>

        </div>

    </div>
</body>
</html>
