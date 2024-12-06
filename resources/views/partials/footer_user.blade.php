<!-- Footer -->
<footer class="bg-black text-white py-8 mt-0">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                <!-- Link -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Link</h3>
                    <ul class="space-y-2">
                        <li><a href="https://winnicode.com/" class="hover:underline" target="_blank">@Winnicode</a></li>
                        <li><a href="https://www.instagram.com/winnicodeofficial/" class="hover:underline" target="_blank">@Instagram</a></li>
                    </ul>
                </div>
                
                <!-- Sitemap -->
                <div>
                    <h3 class="font-bold text-lg mb-4">SITEMAP</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('contact_us') }}" class="hover:underline">Contact Us</a></li>
                        <li><a href="{{ route('about_us') }}" class="hover:underline">About Us</a></li>
                    </ul>
                </div>
                
                <!-- Contact Us -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li>Email: winnicodegarudateknologi@gmail.com</li>
                        <li>Alamat: Pusat Bandung, Bandung</li>
                        <li>Alamat Cabang: Bantul, Yogyakarta</li>
                        <li>Call Center: 087858599051 (24 Jam)</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-between mt-8">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/banner-logo.png') }}" alt="Logo Winnicode" class="w-20 h-auto">
                </div>
                <p class="text-sm mt-4 sm:mt-0 max-w-md text-center sm:text-left">
                    Jurnalis: Program winnicode adalah program pengembangan sumber daya manusia yang ditujukan bagi pemuda-pemudi yang berkarya di dunia report.
                </p>
            </div>
            <hr>
            <!-- Copyright -->
            <div class="text-center mt-6 text-sm">
                Copyright © 2024 Winnicode Career
            </div>
        </div>
    </footer>