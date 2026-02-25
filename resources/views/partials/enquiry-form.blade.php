<!-- Business Enquiry Section -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50" id="business-enquiry">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Select Your Website Plan</h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Choose a category to begin your business registration</p>

        <!-- Plan Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Static Website -->
            <div class="category-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all cursor-pointer border-2 border-transparent hover:border-indigo-600 p-8 text-center" data-plan="Static">
                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-code text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Static Website</h3>
                <p class="text-gray-600 mb-6">Perfect for portfolios and small business brochures.</p>
                <span class="inline-block px-6 py-2 bg-indigo-100 text-indigo-700 rounded-full font-medium group-hover:bg-indigo-600 group-hover:text-white transition">
                    Select Plan
                </span>
            </div>

            <!-- Dynamic Website -->
            <div class="category-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all cursor-pointer border-2 border-transparent hover:border-indigo-600 p-8 text-center" data-plan="Dynamic">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-layer-group text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Dynamic Website</h3>
                <p class="text-gray-600 mb-6">Ideal for blogs, news portals, and business management.</p>
                <span class="inline-block px-6 py-2 bg-purple-100 text-purple-700 rounded-full font-medium group-hover:bg-indigo-600 group-hover:text-white transition">
                    Select Plan
                </span>
            </div>

            <!-- E-commerce -->
            <div class="category-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all cursor-pointer border-2 border-transparent hover:border-indigo-600 p-8 text-center" data-plan="E-commerce">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-shopping-cart text-4xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">E-commerce</h3>
                <p class="text-gray-600 mb-6">Full online store with products and payment gateway.</p>
                <span class="inline-block px-6 py-2 bg-pink-100 text-pink-700 rounded-full font-medium group-hover:bg-indigo-600 group-hover:text-white transition">
                    Select Plan
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="registrationModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto relative">
        <!-- Close Button -->
        <button class="close-modal-btn absolute top-4 right-4 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition z-10">
            <i class="fas fa-times text-gray-600"></i>
        </button>

        <div class="p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Business Registration</h2>
                <p class="text-gray-600">Please complete all steps to submit your enquiry for <span id="selectedPlanName" class="text-indigo-600 font-bold"></span></p>
            </div>

            <!-- Progress Steps -->
            <div class="flex justify-between mb-8 px-4">
                <div class="step-indicator active" data-step="0">
                    <div class="step-number">1</div>
                    <div class="step-label">Business Info</div>
                </div>
                <div class="step-indicator" data-step="1">
                    <div class="step-number">2</div>
                    <div class="step-label">Media</div>
                </div>
                <div class="step-indicator" data-step="2">
                    <div class="step-number">3</div>
                    <div class="step-label">Pages</div>
                </div>
                <div class="step-indicator" data-step="3">
                    <div class="step-number">4</div>
                    <div class="step-label">Details</div>
                </div>
                <div class="step-indicator" data-step="4">
                    <div class="step-number">5</div>
                    <div class="step-label">Strengths</div>
                </div>
            </div>

<form id="businessForm"
      action="{{ route('business.enquiry.store') }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf
                <input type="hidden" name="website_plan" id="websitePlanInput">

                <!-- Step 1: Business Information -->
                <div class="form-section active">
                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-building text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Business Information</h3>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Business Category <span class="text-red-500">*</span></label>
                            <select name="business_category" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                                <option value="">Select Category</option>
                                <option value="Retail">Retail</option>
                                <option value="Services">Services</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Brand Name <span class="text-red-500">*</span></label>
                            <input type="text" name="brand_name" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Contact Number <span class="text-red-500">*</span></label>
                            <input type="tel" name="contact_number" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email ID</label>
                            <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Facebook Link</label>
                            <input type="url" name="facebook_link" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Instagram Link</label>
                            <input type="url" name="instagram_link" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Google My Business Link</label>
                            <input type="url" name="gmb_link" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                            <textarea name="address" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Branding & Media -->
                <div class="form-section">
                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-image text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Branding & Media</h3>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Logo <span class="text-red-500">*</span></label>
                            <input type="file" name="logo" accept="image/*" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600">
                            <p class="text-xs text-gray-500 mt-1">Upload your business logo</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Photos (Max 12)</label>
                            <input type="file" name="photos[]" multiple accept="image/*" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600">
                            <p class="text-xs text-gray-500 mt-1">Please provide good quality images</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Website Pages Selection -->
                <div class="form-section">
                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Website Pages</h3>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Home" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Home</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="About" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">About</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Product" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Product</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Services" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Services</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Gallery" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Gallery</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Contact" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Contact</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Blog" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Blog</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="FAQ" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">FAQ</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl hover:bg-indigo-50 hover:border-indigo-300 cursor-pointer transition">
                            <input type="checkbox" name="pages[]" value="Testimonials" class="w-4 h-4 text-indigo-600 rounded">
                            <span class="text-gray-700">Testimonials</span>
                        </label>
                    </div>
                </div>

                <!-- Step 4: Business Details -->
                <div class="form-section">
                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-info-circle text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Business Details</h3>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">About Business</label>
                            <textarea name="about_business" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Tell us about your business..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">About Products/Services</label>
                            <textarea name="about_products" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Describe your products or services..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Highlights (if any)</label>
                            <input type="text" name="highlights" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="e.g., 24/7 Service, Free Delivery, etc.">
                        </div>
                    </div>
                </div>

                <!-- Step 5: Business Strengths -->
                <div class="form-section">
                    <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">Business Strengths</h3>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Why Choose Us</label>
                            <textarea name="why_choose_us" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="What makes your business special?"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Testimonials</label>
                            <textarea name="testimonials" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Share customer testimonials..."></textarea>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Mission</label>
                                <textarea name="mission" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Your business mission"></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Vision</label>
                                <textarea name="vision" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Your business vision"></textarea>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Our Strengths</label>
                            <textarea name="our_strengths" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="List your key strengths"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-8 pt-6 border-t border-gray-200">
                    <button type="button" class="btn btn-secondary px-8 py-3 border-2 border-gray-300 rounded-full font-medium hover:border-indigo-600 hover:text-indigo-600 transition" id="modalPrevBtn" style="display:none;">Back</button>
                    <button type="button" class="btn btn-primary px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full font-medium hover:from-indigo-700 hover:to-purple-700 transition shadow-lg" id="modalNextBtn">Next Step</button>
                    <button type="submit" class="btn btn-success px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-full font-medium hover:from-green-700 hover:to-emerald-700 transition shadow-lg" id="modalSubmitBtn" style="display:none;">Submit Registration</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
/* Multi-step form styling */
.form-section {
    display: none;
}
.form-section.active {
    display: block;
}

/* Progress steps styling */
.step-indicator {
    flex: 1;
    text-align: center;
    position: relative;
}

.step-indicator:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 20px;
    right: -50%;
    width: 100%;
    height: 2px;
    background: #e5e7eb;
    z-index: 1;
}

.step-indicator.active:not(:last-child)::after {
    background: linear-gradient(to right, #4f46e5, #9333ea);
}

.step-number {
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border: 2px solid #e5e7eb;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 8px;
    font-weight: 600;
    color: #6b7280;
    position: relative;
    z-index: 2;
    background: white;
    transition: all 0.3s ease;
}

.step-indicator.active .step-number {
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    border-color: transparent;
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3);
}

.step-indicator.completed .step-number {
    background: #10b981;
    border-color: transparent;
    color: white;
}

.step-label {
    font-size: 0.75rem;
    font-weight: 500;
    color: #6b7280;
}

.step-indicator.active .step-label {
    color: #4f46e5;
    font-weight: 600;
}

/* Custom styles for checkboxes */
input[type="checkbox"] {
    accent-color: #4f46e5;
}

/* Hover effects */
.category-card:hover {
    transform: translateY(-5px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('registrationModal');
    const planCards = document.querySelectorAll('.category-card');
    const closeBtn = document.querySelector('.close-modal-btn');
    const websitePlanInput = document.getElementById('websitePlanInput');
    const selectedPlanText = document.getElementById('selectedPlanName');
    
    const sections = document.querySelectorAll('.form-section');
    const stepIndicators = document.querySelectorAll('.step-indicator');
    const nextBtn = document.getElementById('modalNextBtn');
    const prevBtn = document.getElementById('modalPrevBtn');
    const submitBtn = document.getElementById('modalSubmitBtn');

    submitBtn.addEventListener('click', function () {
    document.getElementById('businessForm').submit();
});
    let currentStep = 0;

    // Open Modal
    planCards.forEach(card => {
        card.addEventListener('click', function() {
            const plan = this.getAttribute('data-plan');
            websitePlanInput.value = plan;
            selectedPlanText.innerText = plan + " Plan";
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            showStep(0);
        });
    });

    // Close Modal
    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    });

    // Close on outside click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }
    });

    // Multi-step Logic
    function showStep(n) {
        // Update sections
        sections.forEach((sec, index) => {
            if (index === n) {
                sec.classList.add('active');
                sec.style.display = 'block';
            } else {
                sec.classList.remove('active');
                sec.style.display = 'none';
            }
        });

        // Update step indicators
        stepIndicators.forEach((indicator, index) => {
            if (index === n) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
            
            if (index < n) {
                indicator.classList.add('completed');
            } else {
                indicator.classList.remove('completed');
            }
        });

        // Update buttons
        prevBtn.style.display = n === 0 ? 'none' : 'inline-block';
        
        if (n === sections.length - 1) {
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'inline-block';
        } else {
            nextBtn.style.display = 'inline-block';
            submitBtn.style.display = 'none';
        }
        currentStep = n;
    }

    nextBtn.addEventListener('click', () => {
        // Optional: Add validation for current step
        if (currentStep < sections.length - 1) {
            showStep(currentStep + 1);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentStep > 0) {
            showStep(currentStep - 1);
        }
    });
    submitBtn.addEventListener('click', function () {
    document.getElementById('businessForm').submit();
});
});
</script>