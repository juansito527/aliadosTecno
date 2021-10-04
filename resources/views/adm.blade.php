
<!--This template is based on: https://dribbble.com/shots/6531694-Marketing-Dashboard by Gregoire Vella -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Minimal Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }
        
        .border-b-1 {
            border-bottom-width: 1px;
        }
        
        .border-l-1 {
            border-left-width: 1px;
        }
        
        hover\:border-none:hover {
            border-style: none;
        }
        
        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }
        
        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }
        
        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }
        
        #sidebar:hover span {
            opacity: 1;
        }
    </style>

</head>

<body class="flex h-screen bg-gray-100 font-sans">

    <!-- Side bar-->
    <div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">

        <ul class="list-reset ">
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-home fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            <li class="my-2 md:my-0 ">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-tasks fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Tasks</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-envelope fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Messages</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-chart-area fa-fw mr-3 text-indigo-400"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Analytics</span>
                </a>
            </li>
           
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-wallet fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
                </a>
            </li>
          </ul>
        

    </div>

    <div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">

        <div class="h-40 lg:h-20 w-full flex flex-wrap">
            
            <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">

                <div class="flex h-full justify-between items-center">

                    <!--Search-->
                    <div class="relative w-full max-w-3xl px-6">
                        <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                            <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                            </svg>
                        </div>

                        <input id="search-toggle" type="search" placeholder="search" class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">

                    </div>
                    <!-- / Search-->

                    <!--Menu-->

                    <div class="flex relative inline-block pr-6">

                        <div class="relative text-sm">
                            <button id="userButton" class="flex items-center focus:outline-none mr-3">
                                <img class="w-8 h-8 rounded-full mr-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUncw5PB5syw9BIoymTrwyOjAqRlTZC1Rkew&usqp=CAU" alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
                            </button>
                            <div id="userMenu" class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                <ul class="list-reset">
                                    <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My account</a></li>
                                    <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a></li>
                                    <li>
                                        <hr class="border-t mx-2 border-gray-400">
                                    </li>
                                    <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Logout</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- / Menu -->

                </div>

            </nav>
        </div>

        <!--Dash Content -->
        <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">


            <div class="w-1/2 lg:w-full">
                <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-users fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">249 <span class="text-orange-500"><i class="fas fa-exchange-alt"></i></span></h3>
                            <h5 class="font-bold text-gray-500">Total Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-user-plus fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                            <h5 class="font-bold text-gray-500">New Users</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/2 lg:w-full">
                <div class="border-2 border-gray-400 border-dashed hover:border-transparent hover:bg-white hover:shadow-xl rounded p-6 m-2 md:mx-10 md:my-6">
                    <div class="flex flex-col items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-3 bg-gray-300"><i class="fas fa-server fa-fw fa-inverse text-indigo-500"></i></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-3xl">152 days</h3>
                            <h5 class="font-bold text-gray-500">Server Uptime</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Graph Content -->
        <div id="main-content" class="w-full flex-1">

            <div class="flex flex-1 flex-wrap">

                <div class="w-auto p-6 ">

                    <!--"Container" for the graphs"-->
                    <div class="max-w-full  lg:max-w-5xl xl:max-w-6xl">

                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                  </th>
                                  <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                      <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="data:image/png;base64,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" alt="">
                                      </div>
                                      <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                          Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                          jane.cooper@example.com
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      Active
                                    </span>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Admin
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                  </td>
                                </tr>
                  
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                      <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="data:image/png;base64,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" alt="">
                                      </div>
                                      <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                          Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                          jane.cooper@example.com
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      Active
                                    </span>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Admin
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                  </td>
                                </tr>
                  
                  
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                      <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO0AAADVCAMAAACMuod9AAABgFBMVEX////l5eXk5OSssrjm5uYAhs0AK0Hj4+P3xp/09PTx8fH5+fn29vbs7Ow0NDL7+/thVEMAJjuwucAAIzwAACdgbXcAf8sWGSA+TVoAFi65wccAfcoAJT3U2dx0e4EAFzSwsbMAAABEVmNpdHwAIDYAACQADi8aHSIAHDeiq7M0o9sAABwADS+UweQSFh738u7K0NQAVpEAAAqpuMKw0euHttxhodLL3/CNk5kAABu4lnonKCoAWpA1MCnn7/a61es8lNF1r9zc5e4wj85URTDqvJdWTD4LIDABebugwN3L1uBPmM18styZutbL3vBRX2srPU0WLj8vOUE9Pz9TUEt8fHlzb2nNycWfmpROPyhpXE2OdmBVSzyujnO6ubfRq42BbFdyYlC2p53/59T817p/ZUz4zazWuqViWlahiHbp1cbLoYD3wZVMUFYgHhpniagnLTU3cJ53qcYzKh2CjpdAZ4IfEggeYoyNo7QAba0AMVUISnJ+mLBwh5lHYXYgQVX9KQWUAAAem0lEQVR4nO2diXcTR5rAW62WZR1NY1mWjQ5f4EMYuwU+EBB8yOHwATZJSGY2DGSGbCa7ATIMMCQ7M5l/fevsrrurJdnse7P13kwHlbu6fl3Hd1TV144DkutlfHApZ7xMAVz9jOcG4OqBBC4ByC6CawFkl2G257n4Lg/eVcrg7CK4lvBdrl2hvn2hQrZtoRmhUOf/aUkZGQ1thsMpuVHFXESb6YvWXKg/aKEeKhT+I/DIGwPXAn6RHikDPRlcES24luXsMskugitpBk9RaPGMC6XZhkJLnuO6LvrDvOui4vNuHrWQ6+bhmwA/o+LBz6h48HOAs10muwCyUfHxXapCfb7QEvi5yBcqPnPYhZLXYjlQYDZ5WxnzQBELVQzOMpOtKLTMFMoOrL4KJWMgkyF9OkP+KEMGSgaXkcFPBtcCyUZlgNtQxXB2wc24Zf4uj2QnFFrkCxWykwotpy3UBykolcrgUgxKQRFcy6VSAH8ugYR/RtkFIZu5q8Bkl+RsRaG67CB65lkU6qA+nSEDJeOiWcrNoC4PxiZqQJINGpCMo0ye3IV6BbjigZIhIz7KVhWa+ZSFOnGf/reRt/FAKZCRgN5YNFBcYXCSN0ZEY9QMRN5y2fpCxRFP7/L6KlQzjfCFOmWQiiCBSwFcCvE/2Z8tsov67IKc/WkKjd51nn+ZvjBQyMsskoFCZ7q80Owu9zItCi3qCy0LhbpWhZbkQpnsf0t5GwgDxc+cRdvKo28IbaudRhRtWwAJdX98Ff4pXtP9/H+uUEc107lnMSe74vSpKzTNnJyyUCfu09YWX3/yFhfmhCDBq4ev5dhcOS95KwzOSJfKuHSgDKb2wLvCzOHGxure1n4uV6Npf2vv+GDjcBvhDKRLkbZN1KWImonUS3Al6mWpyOjJ4IJ0ViZbuMuQXQicoLezuZWrNQBfTkyIOnd0fNArO2HRtlBDTcVs7i7JBnJ15orbhw3khf7hwVauocAUoRu53c0dLxSeabKB5GxuGlHaQGcpb7cRaQIo185HB9twvjgzeSv6LlylRyCt7yLjhdsHRylII+LG/uqh752V7yIAyQOdGvwHHmaBA7q8VwJXH/9cAtlFcIXjqIx/9oS7iuCfxTjbd0obuxrUGpt0wAfboVSo5/RbUye6y4lbGQwUUQJlBAnk2vgcvfDmsQwC2BqN3NHe8erBBkkHm1ugp6smr1pjaycsMIWKPkc3SQKJNT0reRvuiM0KOY82N3rbjioVehurWzVpIqvlDpKnkf7kLT846UiIfBdu3uBYjAZKHg2UjZyA2tg/3lFzsmn78eauQFyrrQZl1+gC9fEzoe/CtampvRfORgKFqxwr6KNbFqQ0BTvH/BReq20GfUgggxeOSiBXJ4EyggRy9RJoh2fN7d20JqWpt8oBg/aNnikMrGQJRGvKgMi0pqUIPa0X9Pa5am7tpEYlwNwcV8tt+LgqOlq5pkZadqWiGGvpGfKIhKUIROv5va0GU8X9g3KfrCgB+cUUtnvoM8+0qCm7puJFOomHBVDyLGVa/iihuw6Y5mjsPh4EFaWbW0yHbmyCBlLOUq44S5lriooe1MPq95i2aBylH62qtL0X89ZyO+HQVzRdz+XkbcZKu8iEj1jW3lBYCW9c7p7P15SnjWtq1i6AZlUiuh9eisDqGtDH8KICn12Of46uvd2oDRr7w2nXiPeoETdvzwlK5Jll+5oy2UBztLYKXKVVkAl32OlzqKww3Ywn+sZqaFHTEpM97BXNTHgcvf3GcTB0WJDi+a+25Ttn62E161KOF/Xi2v7wBiyf4u5cy20rdSmlU1CpS9HVAz9aivDJooLP/MysNfjxWkPQY4TEGbHCtBE3746jqxLzc5GvaZzt4Nei8cJF7mqli9zfiRo2d1YNi9N21IUaB6GiprIXTnDmDy5v/Q3awxpbZ8oK02b0rD1zTfv2sCZ4zyMp2zg4c1gwOUf9aM++bSXveaG/VAziyfhsezFN21QW1baCPitdSF714udkshThhXv02bv2BuyAaSt6ZNlJnpNdfk4eZEUzhj06L1aHGby7Tt/yNlr+YJciElarj2vnIHjkdNCgnVlbU3ZNRV7RZEWVz8vaWBT7XLYf0qc2Vs8V1nEeU9y9EFfFXFNeFFMPa7oNIf4ng2VxA6amCQs1ViuaGnlb3Pl0sEAS0YcfqGs6BA8rkWLYI9D7NGOWJtq6jR3Od2HlZXEYi5FZihCNWMagLJ6HZmyF29PVVAFCdv551K43+xxdKoHCXTJwjj8RbDwz53xNTTmfY0blYbWUtz6RPecqZ8W0WovFbr8rmtH6hmk3Np2h9s8dkU1Eq6rBaVK3oplXbvGOfa3MTvsMO9Nl4v3rPtWNz01dVCcynBqPfbGmvsPttGddzWlPUfhH5CnDdbalT9v0rfPtkrA1L92Kpk98RLXzMPHMiYjd2p6fWt7qVqsFf7LXa0Ra6idPZKZqIDentT85zSxFRkvuU9BJiVYm1SxlL4HKxBnWOB/rPSmVa9Q+SCGBrLULzyfFW+pQnVZ/FM+Lln9I3GKNwxTaha/dGSNsnAn30vTj1slCtuKlZ60/Oc3WLVdDt4joD33NFh9muw3WINFtVlYBmaKshI83sTA+Vsm2K3461tZ8tTkF7uuUbP66RDrbhr1VgLBsLL5dMkySa1F8Xx0fGQG02Wy7XrBn9SeqzRFIC+7r2NxAJpLakM+MgGxiedQS33rQrS6PjBDarG07gbqgd0RowX02w36fKJC+rTVvuWmUFpy4ite+glgjWshrsxrWnsH3UVqQ8ok3UR3DS9z9ire3WnrhSkSLSjIGsmMzIyMCrU07PR+h9zG07Wwm6b6t2PrUeeHc9GdGHKqFG59dP10cG1HQgmTk7Zxei+5jaLPJ09w2adzCsM6MoJFAZNuu6cmtKTDJjGhoDf0yc8Lex9HCac4sfrG5DXWARO85XdFMPG4R7CdKnzxXZwVtWy1+i9ML4+xtAi3kNYnfMm1cq+MkuKbmVa+8R2x4vb/Cu8zXWUGrbicygRtoE6a5Tdy4j4xrr6k8rOGRuWkLWHgk0crid/bSsnibgtYofovEmYI2KQx2ZoQMaaJGaSbkoLsg1VlDy4tfMKnJtylpTdM6XpGqwX2GSW2bpzsRTIcig824QDm1l2XWcS1t3C+hliihNnW0We00R6blo9B4fBNfrebkHFHQFGk2FrBxnRcuP8G0lXpbVW/QTv7lBYl1ZHHqpIlpVfdppjmi0jZannFOtj4z8hg3rWIdpPyEEbCU9dpUy7mEaeuOV1HxVtor8kCfGZt1Lo8j2nZQUPOqaHeIEPKHsqIZYoWloRB8/oI0Whef1EFGRAtKULXuhAS7vNgGf0xpwagrKt5TWzk5E+9yaKFLxYEPuCAEcTiBoKDXLPyq2D4jsyiDoQUjVKp2RaRdXumiP2VoHUW/UNPiaaVxMzCHaAisVjRJT1HZAwLt8qU2yeBogWrYNtKOV6eJZOJo5X6hpsXzFNCnEo6eWclb0pFVz+Fol6vdSLoItE7A83K0zYWJaPoRaEG/sKClDrmhrGjijqz0qjK04wvTzMAWaUHh7LTD0DarJ4wolWj5fqGhxd7WRi8hbA6Qt/qd9ngrPdnwpha2EW2zOsGJB5kWFB3zRrRj1045NUlBy/YLDS3tyvRArz56UZLP0d8z+CwIbbM6Jag6Klrw53TaobR4Ak+gBW1F35OGlrgadvGmQJszIzp5G+YMBgGiFdtHTwuKqzC0M9GklkAb9QsdLZmVIchgK5pYR9as/EDacaAUSElHS6YdRFvtyrnThFbuSX7FQIs9NkhsJK5oqs6LodcBZ6kdOgNoaMcn5J8789TnWFf4HiqY9orsjcy8XyZ6ckWhFHf0tAFx2PjGk21BsoeVbHpTPwXSTos/1k+Ruo+tAoVyS2nF31sn0JYiVkFb9u209LQONkn3/UGj4O3r5Y+SNvtkEav71AZqV4R6U1q+5vUpbCMzNlCL/wsTLZFBXh9R8NiAdSXTsJVoC93lGWomsBYfx6uizZ5eIyYRa/G1O+xsZaLF+3lrj/3+ouDRLk+krcZrwdN604uMqcvZt6wRL/XkUntsMTL/ePuWde6YaPEiCWyUgaLgPcJdROPvZ2nzE7wLQ7DmYyeN0LZ+d5E1kUVrvl2nA99ESwbc3oBR8LZMPhqGtjMvuqYk30WbTNAcbX5acPPIvos2maCNtHvUTjOfvyVR4oSgGDS2HFG4dUtdlHb2VPa6KDw17YrrcD25cyK5KtWemlYS7QHpg0oQyyh4GbxjSOW2YGjZYWekxYKF0I5BUSV7MHReuI6ZlvhXWtTi6ysKnounZN2CCNSlTi9Jninkq9J54WCCtE+iaThOywYvXLtioiWGwY43wIqmZ56SZd8FTOPV0+wY0RxbWaUbDmmOokdrfHG5O0G8cC2lO8tAGxBJ6ZnPjBhjyxV2jFOygrY5MzPdYvVkT+VOkzw1oDssnNRjq6DkFDqKF6WnxZMyMPoGiYKHB7/St6qiXV6Yz6IKsVZBIDeUSDtefdJGEzZnA7nSizLQoum0tjdQFDyske1a0Y5fu9KlyrxgAxU7BtrmzKXL1GQULL6SMBIMtFvEMB1kRXPTlrY5U51g7DvZ4nM1nprl6lQ2HiiyfetbeGqcqKb7g0TBKx0ZTHmGdrl62uYMOJV9yzQUpR1fvNTlbDulNR+PBAMt7oX74QBR8PBGc/02c0TbXFyYFs0zjTXvkwZGtM3llRPR6aHxXRQ6baPvwokOJSfMyTBpLT5Cq939BmmXpxQeCoPvokJom0J3MNHCysAXZaAlstJC3upWNF1Cqz0Jo7TmzbROrEspkp42QXOkypRn1qWMseXwDoSzoZV8F4PRYgu3UUgXBY+3gc6SVlXzCUKr2kFn07bALBggCl4/tIX6ZWjEYT257mpppYzO+yfjdOdfvSXpb5a0A0TBS03rzZ5UF5F4oTv/pIor27Zcn7iEPB+RVdCutPg1VKueXLKPggeuBYeNLRemo211TxdmqGHD7oXjKi7T+tn5hRmib3B+qWyH8dBa0cIoeE4BAKii4GEviE4CZdLMyZ3pseoyY8PxFh9TcaEnc69I3h3W7mQCG1rSk6kE6icKnoW8RbSFykR1UdhsIntq2vW8SNuZvsS9IvV+qXqrnEibQt7q1gpCalmYaP32/MqM3X4pWPGgTnQpMFRvia9I57sAY6Fgpl1ldSmLKHgqq4BaFnrakbHFGYWfxrCDiOhSI4uL8ivSemrwfcl68kB7aqxtIHvabFZlzSfTZs201AYaJAoeLeP8aMen6n3RKuzbVFHw4EtI6bsgFV5epLRK75KOtjnyxZdfffXV06fdtq43J/kujpO+LOQY9l14af1SY+Mz1SsT7fwVojkWW/W2lV+q2Rz58v5Fmj7/j25d5YdL9kslzFJxK6s8rGl8js3lxeqT6VlUJKsnF1uSQ4331CzPVJ9MfHWRT58/d9xORXhVtj7H/qLgUX+yLhBlRDs+c21lqhsvUYlWQTnfqag8NaDTr5xOV4qdi1L6/OtvAITPdQ57f3JfUfCKiWsFkLS6MCHsqFXaQHHNES18QyddtGj5u9/LtLA/47cXd46ktYJGPiEKXsI+R7wOpDuCitYKpmdlO0dr8RVaHUo7MUvf0O8+V8GCdD+ig53DRLtKp1N5n6Nr7WElGxGS1/hsaR2FxZdXtixq3afMfXZrfAOdGVm1Xr9NTRvV/Ecd7MWLv7e1gaL1W7soeOq956XHKdbm+6T9RtePYeP+zo6WrM2vBtwm+rK09xwm07mCVPsuUtHSfz8lZM/u338m4f5oR/uYrEV6A0bBS7unxp6W1hwj3v/2Nkjf3n92n6P9feyPG2RPjW0UvPT7peBLJLpURXVQS6Bt4Y48StK9P1xkW/jzWLIl75fa9ZOi4AmrIuKVHJY37IXjaPOd9vTJ4q1rkZ7cztY7LZ9zIQq0zyHts3ujcXrxLerSCBqoVBa0ZC/cZlkG4PgSI5OSfY5q/SKmLbay3csjt6qLM+NNyQZqt9uVeitP9j1w47bswWF7/w+jfLr93cWLt1Gf7rZaxVIS7c14V/FgUfCwI06/h3X8cmd2ev7SwrWZ5XFutV1xsq3dhg1NaEc6s+8nmgtVqCA/ezGqSN9B2qf4vnrLM9CSPayDnxlJ3J88HjfniJmWMFNdahG8H2ATwBa8r4Idvf0M0yZbBTk8bOH+ZIsoeD4JHueTMHe+H/1MJa5573kKWsEGQrTfKmlH71vSEpNgtWQCsYyCZ3euYBBabo5i0reWtNG5giFEwSNnRlQPGhLtd2rY0RfP7Gjx1DKcMyP254H6ov1KM0fB9Ecr2l50HmgYUfBSnPXqi1bXtGie6ibTbuLOdziUKHj0HJ8iXBhHO9YcH1+emVm8dm3l1kikXajcUhztl/qmHR21oqXn+IYTBe9mdBJfRdtcBoDVlZXl05OTy9129hugDsR6cqnou61Wp1OvV9oxOqIF9y1eW/niD2rxg9N3z/5UYV6ZkpaMtFWbM5o28aXwu1P4WQFtc6o922m1hMV0tVUQFPxMq0Vpu+1vOq3iy9v6jgy78j14X9n3Wq26hpaElOnReBcDRsHzN3Xz1BAsvu9faIQtSvfuvorUGo0u1YsjGDBR8Giw4fRR8DI9XSCTIVh839+7aKB98cdX0X0aWqLroXPzQ4mCR+YpWZ8aQtu+HDWN29vf/pBAu506JkJizL9DjRAahjU/elGjSSHa2y8TaEkwk0dmWnKk3jIKHjmJL7qnhkH78j9NtC/i+5S0NFBNMMwoeDvqiBdD8dS8NPTkUeY+Je1xFMFgiFHwaHgpYeQOx8P6Sg/7fQItbdpSiih4yfGTSzTa7BBpox9+0NO+ZO5T0R7lqIqsip9MV0XSR8Ejjcu7WqF2cTIrp+fUC9eSU57uc6R/nP2zFvYVe6PijGYUOywz5Ch4NC4cpzQhzXFGkWysAvq3137U0v4gKNkiLW0C3xtyFDzaaTirfjg7Eca1tH8W7hNo6YeS7GPa2346OVDFcxwO7fJ/6WhnjbQk7EhjI+BqOngUvHI+E31sY+i0IzNqm+/Vn8T7eNoj6nwzfouijyh4ZRgfm4Z5HTrtSFOlYLwS+7FAK8VhHVoUPPTF7B2pL2tom82UtMrWfS7fx9JSUXscWn5DxjoKHv45IF0n9i0zJ2Sa48vIcbGwUr0yNTFGowRUlO6LmBbdtzxzbUVcLRidVdzH0tL4yWVrAMsoeGQtiVp+8cIBkkAA8NqTqfmJbrf9vNPCu2I57aLge3nsvqDo2HsO7rsyNX8y3W1nO63Wf3OsyIgv+nnk96igG3laGhsbaXeJ3/Xq5zsj9HMq0aoQ1C4mWr5smWh1qaBcpNpFtBUXp5c/MYP3xU/ijaUCp11Q8b8XCjXt/8yI9M22kMa0fxzRDu0UxcvRnyjvvdsvXsn3sZrjNv3KVxSh3aZtraLgsaceyUNq24PTCj0ifDX64vZP9+7de3H79r3RH+T7WFriL2/0Stqa9h0Fj/n20yH9xkcwbFrn5avRez/BBXrYxAqXDEN7RAbtgVzTgaPgOex3RlbZ74wMsSeD0r9HvRj25lehI5+RiWk3a4wWexbf9crT73qFR8yjhta2xadz4P8jvQIYet2l58J9Ee0q/daJZ/NdLyEKXsBHwaOmYYm3GEtkP12Jjhl4lnFItPmnczfmQM1LxK6HNvzlG3Nrs0pa+onH2jZvjZci25aLgsdmo3Isv+uVwTMd8+2nodDmv55bmpycg9tJQoSLZqjXa5NrN+6wvIQ2+hjSzbimnlDTAaLgSd/RpDNVYzUc/NRi68c3Fy6sAVr0ty8hLnoN4A0sTV548ybeHoZpo+96bahrOuiKpuQR8KK+dAyoTufldBJpjopEdakT+IevAeuFycm1pRsY63s4Q0W0SxcAb5fcB3d1UndgrrYZkJqiXmgbwd+8055ms+GJSvHQefgAqbpysrEKmuOnX1yA6c4kALtB+ghxReXnJuGvd2D2hfe0qEr0nvdMNe0/Ch7fyaknj3wf9eHag74tvuYTzIr68dLk2mtMSzZmdeaWwGCenMSv48suKqzycwyLqqJwkQ8WBU/6jiYqg3yu+uGNB1rcJFrKegF22cmltb8gyu2r+Nj67BzsyEtrd/DfvHmdrQDY67lY+vX1HU3rb5LnuW+SE9y/r2lxTbTZiSdfUtg7gBTyzmHYqxi3e2MJJDhRkfRmuvL2+mdEswn1NTV/k1w1S+XFWUoVWw7bQx/j1o1M3OrKSgJtfeJClFA/Bv+by2PYq1fhsviPNyZxmy/Rv7v7xWef0W7M1pTMUq6+pv18Z0T6kjPGffjg1q0FbMOfTLzvtmdbLVCBS8bzQPWv70SwS2tLGGvuG6fYRrR/7UBxu4Rfwlr0l+/mozE70Jecrb9ixk0L5LvVD98DG178aASVt9AeR3Z8hXFhVBhY2JPX4HQ0OTdbaq8/grTZ9Y4zB0HBuF2KYT9QnaYPWssoeE4snKTYcv4hiT3nSEkZ3aPoZwB6J9t9c4FLgBc0443p9fX1ytbVq4/W19stOCWzrBfevSVmT+hIAhFWyVhT2yh4ulkKDxT8LemGHP3DpEvVv7ogpjuAbe0LSLuHaNe7UJlkesDd12RZ4GZSTQeKgqf5kjOd13301cPavri7yESbfSPRXrizBhoS0sJhC67vb4CmjWlJL0bPCZia9vElZ2MUPMFgYE5i4KWIEH9LWvwIu4n26R2JdRJNyoT2uLK+Pn0DTlHkD+9+SXrxFl6Aj2sqqP6+ACJb8+ooeHRVJF5U4NYagviukOxx5ZvXRCs17NIa0hLn2ut0llqfACIY8K4xDQvsgFBV06JcUxGERsHDnmFdFDy6Thj5tlTxUAIX2/fc93ANtPk5sRNPYol7oxvTvsYqB+je716T/VDo052amkZWgbGmA8nbSIqRj3bXmJV7A+2sOCOvQaUJ2gXv19f/CmlBj/4C6hXgt7+9eUsa9thnnjmQvBUjLknWvO4kBhkofu8Ij979w2TarxUdGRkANy6jKfnq1V/W1+cQ7dzfPhLFOHcYqpyCTE01K5ppouBxzldtbDm4aHKQw9356JcuTGN6WtUchYDXJpC4RSJoDrF+oI7UzbKVGzWxptooeBneC0fn5Hi3PnMSA7xMP7NHvPe//s/crZUHY3gnApTvfGrJ8gf1Y0A7tb6ONUcgbifnlj5S1qMe7sXGeH2RF26AKHgJ8pYdKAHpzkCXhJbRgyv/UOrIXaltoRU0iSZgQntc6c79hfRhMNnvhMJGxMHl7aBtiwbK4326YPFxbO3B9etvFcDTEiz01KC0hqfkq1ef//MtZc1toGea2lbrPTdEwYuPSZWLzLWszWZ/LpLc0k6O8v76988++wwC8/ENKrLaiKZlZBdkMe0ufWm13GqxbFEV62zHPNPZzcnsu97Zp2snuYe/IuDPfv7HL5XIsyR3ZDxywRw81z4GrPu5qF0PnJCodp56oSaO10fn5IRzfHGftrD41PKWH/HhzlGjxgED4utvf/75l3a2XmnLkxRp3Lm5v/1zK0IF0mwneRrpU97qdClhRVOtofBrKqDk1mbUoSNiiHz9+sff7sqsd+++m3vzr49vY9RaY+8wLLCFqhdqmHV1O13KGAUv0j6Nm4uk7CAMN7ZqDHDu4cNfMfPUXS69e/fu7tRvHxhQiLp7UHSCpGem0JNto+Al2kCapQjPCwMBGFO//fDh48fffpufn//44cOHtxwmRe2R8xDq9Y3IBpKzuWmkjyh4KeStYmt7YWMv15CItanWyG1tbMP5IppGaKHDkrcD+S4SPsgTZHy/h4iTkGuQ9NEhDpzDPFP5/YwBfBdxFDyn7PkeHwUPbXYteT6OLQeyy44ithz8JAK+i4aec9jvSIfh9uODvf0aYJao4U+g9bdWN3p+CCojFeqpCu27pk7cygoJlBEkkGopQlxT8eSVClho6PcONw6O96CQqWHu/a2949WDnR7fH5WFKpY/zBKonyh4/chbfuGFLRS9WtDUaBEPXOBfl2P3oKnQocrbftYKYg+88XCV6NZ3Ld36xkMdfa8VpNxTozx7L21Qcq0L1R/ojyWQvtAERVYuNFECKVc07SRQ4Cb2x6K+UJ0Ecm0lUOooeEOj1RVqSesYaFOu37KLCnZr89G04EXHBNVLEYmFGgLWFbzoEOXwCnVS77vob5Zyo1kqZaGmWcoVZ6khnRkZggQyCovzk0DaKHiZBJltp12cSaE8rVCo218UPPb0lDa2nOFY/hkUSrMVhSY+M/U+xwxvFRB5mxfMZ9e2UH3AOpjdR6EDRcEbyOJjC7U3zpLk7TA8rJa6lKU1n06XUhreKax5+/3JKfee8z9bZp9JoYaFmv6j4Jl266u9cK7S7653mJ1joU7cp/9d5K3leSAr77mwFGHdDKKjW1eo6D23a1tFFLyks166E1SDZJ9vof8LA5aXTiLCDokAAAAASUVORK5CYII=" alt="">
                                      </div>
                                      <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                          Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                          jane.cooper@example.com
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      Active
                                    </span>
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Admin
                                  </td>
                                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                  </td>
                                </tr>
                    
                                <!-- More people... -->
                              </tbody>
                            </table>
                          </div>
                        </div>
                        

                    </div>

                </div>

               

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        /* Refer to https://gionkunz.github.io/chartist-js/examples.html for setting up the graphs */

        var mainChart = new Chartist.Line('#chart1', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            series: [
                [1, 5, 2, 5, 4, 3],
                [2, 3, 4, 8, 1, 2],
                [5, 4, 3, 2, 1, 0.5]
            ]
        }, {
            low: 0,
            showArea: true,
            showPoint: false,
            fullWidth: true
        });

        mainChart.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 1000 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartScatter = new Chartist.Line('#chart2', {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            series: [
                [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
            ]
        }, {
            low: 0
        });

        chartScatter.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 500 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartBar = new Chartist.Bar('#chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            }
        })

        chartBar.on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                        style: 'stroke-width: 30px'
                    }),
                    data.element.animate({
                        y2: {
                            dur: '0.5s',
                            from: data.y1,
                            to: data.y2
                        }
                    });
            }
        });

        var chartPie = new Chartist.Pie('#chart4', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: true
        });

        chartPie.on('draw', function(data) {
            if (data.type === 'slice') {
                var pathLength = data.element._node.getTotalLength();
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 200,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: 'freeze'
                    }
                };

                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                data.element.animate(animationDefinition, false);
            }
        });
    </script>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

</body>

</html>