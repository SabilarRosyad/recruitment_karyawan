<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <div class="flex items-center">
                <!-- Breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm capitalize leading-normal text-slate-700" aria-current="page">Dashboard</li>
                </ol>
            </div>

            <div class="flex items-center ml-auto">
                <ul class="flex flex-row pl-0 mb-0 list-none items-center space-x-6">
                    <!-- Divider -->
                    <div class="hidden sm:block h-5 border-l border-gray-300"></div>

                    <!-- User Info -->
                    <li class="flex items-center space-x-4">
                        <span class="text-sm text-gray-600 mr-4">
                            <small class="text-gray-500">{{ auth()->user()->username }}</small>
                        </span>
                        <img class="w-8 h-8 rounded-full mr-4" src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo"/>
                        &nbsp;&nbsp;&nbsp;
                        <div class="flex items-center space-x-6">
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 hover:text-gray-900">
                                <img src="{{ asset('icons/logout.svg') }}" alt="Log Out Icon" class="w-4 h-4 inline-block" /> 
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->
</main>