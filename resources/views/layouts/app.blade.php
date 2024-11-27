<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<title>Document</title>
<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                </div>

                <div class="flex lg:hidden">
                    <button type="button" class="m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 24 24">
                            <path stroke-width="1.5" stroke="currentColor" aria-hidden="true" d="M3.75 5.75h16.5M3.75 12h16.5M3.75 18.25h16.5"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{ route('user.index') }}" class="text-sm font-semibold text-gray-900">User</a>
                    <a href="{{ route('suplier.index') }}" class="text-sm font-semibold text-gray-900">Suplier</a>
                    <a href="{{ route('stok.index')  }}" class="text-sm font-semibold text-gray-900">Stok</a>
                    <a href="{{ route('barang.index')  }}" class="text-sm font-semibold text-gray-900">Barang</a>
                    <a href="{{ route('barangmasuk.index')  }}" class="text-sm font-semibold text-gray-900">Barang Masuk</a>
                    <a href="{{ route('barangkeluar.index')  }}" class="text-sm font-semibold text-gray-900">Barang Keluar</a>
                    <a href="{{ route('pinjam_barang.index')  }}" class="text-sm font-semibold text-gray-900">Pinjam Barang</a>
                    <a href="#" class="text-sm font-semibold text-gray-900">Log in</a>
                </div>
            </nav>

            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 24 24">
                                <path stroke-width="1.5" stroke="currentColor" aria-hidden="true" d="M3.75 5.75h16.5M3.75 12h16.5M3.75 18.25h16.5"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{ route('user.index') }}" class="text-base font-semibold text-gray-900 hover:bg-gray-50">User</a>
                                <a href="{{ route('suplier.index') }}" class="text-base font-semibold text-gray-900 hover:bg-gray-50">Suplier</a>
                                <a href="{{ route('stok.index')  }}"class="text-base font-semibold text-gray-900 hover:bg-gray-50">Stok</a>
                                <a href="{{ route('barang.index')}}')" class="text-sm font-semibold text-gray-900 hover:bg-gray-50">Barang</a>
                                <a href="{{ route('barangmasuk.index')  }}" class="text-base font-semibold text-gray-900 hover:bg-gray-50">Barang Masuk</a>
                                <a href="{{ route('barangkeluar.index')  }}"  class="text-base font-semibold text-gray-900 hover:bg-gray-50">Barang Keluar</a>
                                <a href="{{ route('pinjam_barang.index')  }}" class="text-base font-semibold text-gray-900 hover:bg-gray-50">Pinjam Barang</a>
                                <a href="#" class="text-base font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 58.8%, 97.6% 94.7%, 75.3% 82.8%, 67.2% 60.9%, 45.3% 90.3%, 24.5% 94.4%, 0 50.8%, 26.5% 24.1%, 64.9% 9.1%, 70.9% 41.9%, 78.8% 24.1%, 93.7% 27.6%, 86.6% 57.3%, 88.9% 73.5%, 91.4% 36.2%, 74.5% 44.1%);"></div>
            </div>

            @yield('content')
            
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-6rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 58.8%, 97.6% 94.7%, 75.3% 82.8%, 67.2% 60.9%, 45.3% 90.3%, 24.5% 94.4%, 0 50.8%, 26.5% 24.1%, 64.9% 9.1%, 70.9% 41.9%, 78.8% 24.1%, 93.7% 27.6%, 86.6% 57.3%, 88.9% 73.5%, 91.4% 36.2%, 74.5% 44.1%);"></div>
            </div>
        </div>
    </div>
</body>
</html>
  