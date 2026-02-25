<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-indigo-600 font-semibold text-sm uppercase tracking-wider">Get In Touch</span>
            <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-4">Let's Discuss Your Project</h2>
            <p class="text-xl text-gray-600">Have a question or ready to start? We're here to help you build your dream website.</p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Contact Info Cards -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- Phone Card -->
                <div class="bg-gray-50 p-6 rounded-2xl hover-card">
                    <div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-phone-alt text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-3">Mon-Fri 9:00 AM - 6:00 PM</p>
                    <p class="text-indigo-600 font-semibold">+91 6369916608</p>
                </div>
                
                <!-- Email Card -->
                <div class="bg-gray-50 p-6 rounded-2xl hover-card">
                    <div class="w-12 h-12 gradient-secondary rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-3">24/7 Support</p>
                    <p class="text-indigo-600 font-semibold">Ontimewebs@gmail.com</p>
                </div>
                
                <!-- Address Card -->
                <div class="bg-gray-50 p-6 rounded-2xl hover-card">
                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600">123 Business Park, Andheri East,</p>
                    <p class="text-gray-600">Mumbai - 400093, Maharashtra</p>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-2 bg-gray-50 p-8 rounded-3xl">
                <form id="contactForm" class="space-y-6">
                    @csrf
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" name="name" required 
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required 
                                   class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required 
                               class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Plan</label>
                        <select name="plan" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                            <option value="">Choose a plan</option>
                            <option value="basic">Basic Plan (₹5,999)</option>
                            <option value="professional">Professional Plan (₹9,999)</option>
                            <option value="business">Business Plan (₹14,999)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea name="message" rows="4" required 
                                  class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent"></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full gradient-primary text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg transition">
                        Send Message
                        <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
                
                <!-- Success Message -->
                <div id="formSuccess" class="hidden mt-4 p-4 bg-green-100 text-green-700 rounded-xl">
                    <i class="fas fa-check-circle mr-2"></i>
                    Thank you! We'll get back to you shortly.
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simulate form submission
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Sending...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        document.getElementById('formSuccess').classList.remove('hidden');
        this.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        setTimeout(() => {
            document.getElementById('formSuccess').classList.add('hidden');
        }, 5000);
    }, 1500);
});
</script>
@endpush