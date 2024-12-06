<!-- Navbar -->
<nav class="fixed top-0 w-full z-10 bg-black">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3 text-white py-3 px-6">
                    <img src="{{ asset('images/banner-logo.png') }}" alt="Logo Winnicode" class="w-16 h-auto rounded-full border-1 border-white">
                    <p class="text-white text-xl">
                        Winnicode Career
                    </p>
                </div>

                <!-- Hamburger button for mobile -->
                <div class="md:hidden">
                    <button class="text-white focus:outline-none" onclick="toggleMenu()">
                        <!-- Icon for hamburger -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu for larger screens -->
                <ul class="hidden md:flex items-center space-x-6">
                    <li>
                        <a href="{{ route('home') }}" class="text-white hover:bg-green-600 px-3 py-2 rounded">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/home#job') }}" class="text-white hover:bg-green-600 px-3 py-2 rounded">Jobs</a>
                    </li>
                    <li>
                        <a href="{{ route('about_us') }}" class="text-white hover:bg-green-600 px-3 py-2 rounded">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('contact_us') }}" class="text-white hover:bg-green-600 px-3 py-2 rounded">Contact Us</a>
                    </li>
                    <!-- Profile Dropdown -->
                    <li class="relative ml-auto">
                        <div class="flex items-center space-x-3">
                                <span class="text-white text-sm">{{ auth()->user()->username }}</span>
                                <!-- Profile Picture -->
                                <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo" />      
                            <!-- Arrow icon that triggers dropdown -->
                            <div class="relative">
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white cursor-pointer transform transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" onclick="toggleDropdown()">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l-7-7h14l-7 7z"></path> <!-- Panah menghadap ke bawah secara default -->
                                </svg>
                                <div id="profileDropdown" class="absolute right-0 mt-6 bg-white text-black rounded shadow-md hidden w-40">
                                    <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/profile.svg') }}" alt="Profile Icon" class="w-4 h-4 mr-2" /> My Profile
                                    </a>
                                    <a href="{{ route('my_applications') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/application.svg') }}" alt="Application Icon" class="w-4 h-4 mr-2" /> My Application
                                    </a>
                                    <a href="{{ route('my_interviews') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/comment.svg') }}" alt="Comment Icon" class="w-4 h-4 mr-2" /> My Interview
                                    </a>
                                    <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/logout.svg') }}" alt="Log Out Icon" class="w-4 h-4 mr-2" /> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Mobile menu dropdown -->
            <div id="mobile-menu" class="hidden md:hidden bg-black text-white">
                <ul class="flex flex-col space-y-2 py-4">
                <li class="relative ml-auto">
                        <div class="flex items-center space-x-3">
                                <span class="text-white text-sm">{{ auth()->user()->username }}</span>
                                <!-- Profile Picture -->
                                <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo" />      
                            <!-- Arrow icon that triggers dropdown -->
                            <div class="relative">
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white cursor-pointer transform transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" onclick="toggleDropdown()">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l-7-7h14l-7 7z"></path> <!-- Panah menghadap ke bawah secara default -->
                                </svg>
                                <div id="profileDropdown" class="absolute right-0 mt-6 bg-white text-black rounded shadow-md hidden w-40">
                                    <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/profile.svg') }}" alt="Profile Icon" class="w-4 h-4 mr-2" /> My Profile
                                    </a>
                                    <a href="{{ route('my_applications') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/application.svg') }}" alt="Application Icon" class="w-4 h-4 mr-2" /> My Application
                                    </a>
                                    <a href="{{ route('my_interviews') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/comment.svg') }}" alt="Comment Icon" class="w-4 h-4 mr-2" /> My Interview
                                    </a>
                                    <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                                        <img src="{{ asset('icons/logout.svg') }}" alt="Log Out Icon" class="w-4 h-4 mr-2" /> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="block px-3 py-2 rounded hover:bg-green-600">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/home#job') }}" class="block px-3 py-2 rounded hover:bg-green-600">Jobs</a>
                    </li>
                    <li>
                        <a href="{{ route('about_us') }}" class="block px-3 py-2 rounded hover:bg-green-600">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('contact_us') }}" class="block px-3 py-2 rounded hover:bg-green-600">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>