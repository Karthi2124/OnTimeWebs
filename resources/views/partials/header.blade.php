<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

<!-- Logo -->
<a href="{{ url('/') }}" class="flex items-center">
    
    <img src="{{ asset('images/logo-5.png') }}" 
         alt="OnTimeWebs Logo"
         class="h-24 md:h-26 w-auto object-contain">
                <!-- <span class="font-bold text-xl text-gray-800 -ml-4">OnTime<span class="text-indigo-600">Webs</span></span> -->
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="#home" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Home</a>
                <a href="#about" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">About</a>
                <a href="#services" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Services</a>
                <a href="#features" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Features</a>
                <a href="#pricing" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Pricing</a>
                <a href="#contact" class="nav-link px-4 py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Contact</a>
            </nav>
            
            <!-- Contact Info & CTA -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="flex items-center space-x-2 text-gray-700">
                    <i class="fas fa-phone-alt text-indigo-600"></i>
                    <span class="font-medium">+91 6369916608</span>
                </div>
                <a href="#contact" class="gradient-primary text-white px-6 py-2.5 rounded-full font-medium hover:shadow-lg transition">
                    Get Started
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                <i class="fas fa-bars text-2xl text-gray-700"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-white border-t border-gray-200 md:hidden">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex flex-col space-y-3">
                <a href="#home" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Home</a>
                <a href="#about" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">About</a>
                <a href="#services" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Services</a>
                <a href="#features" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Features</a>
                <a href="#pricing" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Pricing</a>
                <a href="#contact" class="py-2 text-gray-700 hover:text-indigo-600 font-medium transition">Contact</a>
                
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center space-x-2 text-gray-700 mb-3">
                        <i class="fas fa-phone-alt text-indigo-600"></i>
                        <span>+91 6369916608</span>
                    </div>
                    <a href="#contact" class="gradient-primary text-white px-6 py-3 rounded-lg font-medium text-center block">
                        Get Started
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>