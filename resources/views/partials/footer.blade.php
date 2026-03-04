<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Footer Content -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">

                        <!-- Hide logo on mobile -->
                        <img src="{{ asset('images/logo-4.png') }}" 
                             alt="OnTimeWebs Logo"
                             class="hidden md:block h-16 md:h-20 w-auto object-contain">

                        <!-- Brand Name -->
                        <span class="font-bold text-xl">
                            <span class="text-indigo-600">OnTimeWebs</span>
                        </span>

                    </a>
                </div>
                
                <p class="text-gray-400 mb-6">
                    Empowering Indian startups and small businesses with professional, affordable websites.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                    <li><a href="#pricing" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold mb-6">Our Services</h4>
                <ul class="space-y-3">
                    <li class="text-gray-400">Web Development</li>
                    <li class="text-gray-400">E-Commerce Solutions</li>
                    <li class="text-gray-400">SEO Optimization</li>
                    <li class="text-gray-400">Digital Marketing</li>
                    <li class="text-gray-400">Website Maintenance</li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div>
                <h4 class="text-lg font-semibold mb-6">Stay Updated</h4>
                <p class="text-gray-400 mb-4">
                    Subscribe to get the latest updates and offers.
                </p>
                
            </div>

        </div>
        
        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-gray-800 text-center text-gray-400">
            <p>&copy; 2026 OnTimeWebs. All rights reserved.</p>
        </div>

    </div>
</footer>