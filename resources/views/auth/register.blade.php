<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Register</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
      <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg')">
          <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
          <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
              <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
            <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
              <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                  <h5>Register with</h5>
                <div class="flex-auto p-6">
                  <form action="{{ route('register.simpan') }}" method="POST" class="user" enctype="multipart/form-data">
                    @csrf
                    <!-- Username -->
                    <div class="mb-4">
                        <input type="text" name="username" 
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none focus:transition-shadow @error('username') border-red-500 @enderror" 
                            placeholder="Username" 
                            value="{{ old('username') }}" />
                        @error('username')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <input type="email" name="email" 
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none focus:transition-shadow @error('email') border-red-500 @enderror" 
                            placeholder="Email" 
                            value="{{ old('email') }}" />
                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="password-container relative mb-4">
                      <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 pr-10 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none focus:transition-shadow @error('password') border-red-500 @enderror" 
                        placeholder="Password"
                      />
                      <span 
                        class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePasswordVisibility('password', 'eye-icon-password')"
                      >
                        <img 
                          id="eye-icon-password" 
                          src="{{ asset('icons/eye.svg') }}" 
                          alt="Eye Icon" 
                          class="w-5 h-5"
                        />
                      </span>
                      @error('password')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="password-container relative mb-4">
                      <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 pr-10 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none focus:transition-shadow @error('password_confirmation') border-red-500 @enderror" 
                        placeholder="Confirm Password"
                      />
                      <span 
                        class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePasswordVisibility('password_confirmation', 'eye-icon-confirmation')"
                      >
                        <img 
                          id="eye-icon-confirmation" 
                          src="{{ asset('icons/eye.svg') }}" 
                          alt="Eye Icon" 
                          class="w-5 h-5"
                        />
                      </span>
                      @error('password_confirmation')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" 
                            class="inline-block w-full px-6 py-3 mt-6 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-to-tl from-blue-600 to-cyan-400 rounded-lg shadow-md hover:scale-102 hover:shadow-lg active:opacity-85">
                            Register
                        </button>
                    </div>

                    <!-- Redirect to Login -->
                    <p class="mt-4 mb-0 text-sm text-center leading-normal">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-bold text-blue-600">Login</a>
                    </p>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="{{ asset('js/eye.js') }}" defer></script>
  </body>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
