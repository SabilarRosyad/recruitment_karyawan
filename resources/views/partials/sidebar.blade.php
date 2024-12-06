<aside id="sidebar" class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full flex-wrap items-center justify-between overflow-hidden rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent min-h-screen -translate-x-full">
    <div class="h-19.5 flex items-center justify-between">
        <!-- Brand -->
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Winnicode Career</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto grow basis-full h-full overflow-hidden"> <!-- Ganti overflow-auto ke overflow-hidden -->
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('dashboard') }}">
                <img src="{{ asset('icons/dashboard.svg') }}" alt="Dashboard Icon" class="w-4 h-4 mr-2" /> <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('admin') }}">
                    <img src="{{ asset('icons/admin.svg') }}" alt="Admin Icon" class="w-4 h-4 mr-2" /> <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Admin</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('user') }}">
                    <img src="{{ asset('icons/user.svg') }}" alt="User Icon" class="w-4 h-4 mr-2" /> <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">User</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('job') }}">
                    <img src="{{ asset('icons/job.svg') }}" alt="Jobs Icon" class="w-4 h-4 mr-2" /> <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Jobs</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('application') }}">
                    <img src="{{ asset('icons/application.svg') }}" alt="Application Icon" class="w-4 h-4 mr-2" />  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Application</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('interviews') }}">
                    <img src="{{ asset('icons/comment.svg') }}" alt="Comment Icon" class="w-4 h-4 mr-2" /> <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Interviews</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
