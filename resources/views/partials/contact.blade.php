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
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <h3 class="font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-indigo-600 font-semibold">+91 6369916608</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl">
                    <h3 class="font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-indigo-600 font-semibold">ontimewebs@gmail.com</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2 bg-gray-50 p-8 rounded-3xl">

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-xl">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" name="name" required
                                   class="w-full px-4 py-3 bg-white border rounded-xl">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required
                                   class="w-full px-4 py-3 bg-white border rounded-xl">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone *</label>
                        <input type="text" name="phone" required
                               class="w-full px-4 py-3 bg-white border rounded-xl">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Plan</label>
                        <select name="plan"
                                class="w-full px-4 py-3 bg-white border rounded-xl">
                            <option value="">Choose Plan</option>
                            <option value="Basic">Basic Plan</option>
                            <option value="Professional">Professional Plan</option>
                            <option value="Business">Business Plan</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea name="message" rows="4" required
                                  class="w-full px-4 py-3 bg-white border rounded-xl"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-indigo-600 text-white px-8 py-4 rounded-xl font-semibold">
                        Send Message
                    </button>
                </form>

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