@extends('layouts.app')

@section('title', 'Contact - Hasib Uzzaman')
@section('meta_description', 'Get in touch with Hasib Uzzaman for web development projects, collaborations, or any inquiries. Available for freelance and full-time opportunities.')

@section('content')
<!-- Contact Hero -->
<section class="contact-hero section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 6rem 0;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Get In Touch</h1>
        <p style="font-size: 1.3rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Ready to start your next project? Let's discuss how I can help bring your ideas to life.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
            <!-- Contact Form -->
            <div class="contact-form">
                <h2 style="font-size: 2rem; margin-bottom: 1rem; color: var(--text-primary);">Send Me a Message</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem; line-height: 1.6;">
                    Have a project in mind or just want to say hello? Fill out the form below and I'll get back to you as soon as possible.
                </p>

                @if(session('success'))
                    <div style="background: #d1fae5; border: 1px solid #10b981; color: #065f46; padding: 1rem; border-radius: 8px; margin-bottom: 2rem;">
                        <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div style="background: #fee2e2; border: 1px solid #ef4444; color: #991b1b; padding: 1rem; border-radius: 8px; margin-bottom: 2rem;">
                        <ul style="margin: 0; padding-left: 1.5rem;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="contact-form-element">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                        <div class="form-group">
                            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                   style="width: 100%; padding: 1rem; border: 2px solid var(--border-color); border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;"
                                   placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   style="width: 100%; padding: 1rem; border: 2px solid var(--border-color); border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;"
                                   placeholder="your.email@example.com">
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="subject" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">Subject *</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                               style="width: 100%; padding: 1rem; border: 2px solid var(--border-color); border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease;"
                               placeholder="What is this about?">
                    </div>

                    <div class="form-group" style="margin-bottom: 2rem;">
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">Message *</label>
                        <textarea id="message" name="message" rows="6" required
                                  style="width: 100%; padding: 1rem; border: 2px solid var(--border-color); border-radius: 8px; font-size: 1rem; resize: vertical; transition: border-color 0.3s ease;"
                                  placeholder="Tell me about your project or inquiry...">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem 2rem; font-size: 1.1rem;">
                        <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h2 style="font-size: 2rem; margin-bottom: 2rem; color: var(--text-primary);">Let's Connect</h2>
                
                <!-- Contact Methods -->
                <div class="contact-methods" style="margin-bottom: 3rem;">
                    <div class="contact-method" style="display: flex; align-items: center; margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
                        <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0 0 0.5rem 0; color: var(--text-primary);">Email</h3>
                            <p style="margin: 0; color: var(--text-secondary);">hasib.uzzaman@example.com</p>
                        </div>
                    </div>

                    <div class="contact-method" style="display: flex; align-items: center; margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
                        <div style="background: var(--accent-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0 0 0.5rem 0; color: var(--text-primary);">Phone</h3>
                            <p style="margin: 0; color: var(--text-secondary);">+880 123 456 7890</p>
                        </div>
                    </div>

                    <div class="contact-method" style="display: flex; align-items: center; margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
                        <div style="background: var(--secondary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0 0 0.5rem 0; color: var(--text-primary);">Location</h3>
                            <p style="margin: 0; color: var(--text-secondary);">Dhaka, Bangladesh</p>
                        </div>
                    </div>

                    <div class="contact-method" style="display: flex; align-items: center; margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-secondary); border-radius: 12px;">
                        <div style="background: #1877f2; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 style="margin: 0 0 0.5rem 0; color: var(--text-primary);">Response Time</h3>
                            <p style="margin: 0; color: var(--text-secondary);">Within 24 hours</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="social-section">
                    <h3 style="margin-bottom: 1.5rem; color: var(--text-primary);">Follow Me</h3>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#" class="social-link" style="display: flex; align-items: center; padding: 0.8rem 1.5rem; background: #333; color: white; text-decoration: none; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fab fa-github" style="margin-right: 0.5rem;"></i>
                            GitHub
                        </a>
                        <a href="#" class="social-link" style="display: flex; align-items: center; padding: 0.8rem 1.5rem; background: #0077b5; color: white; text-decoration: none; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fab fa-linkedin" style="margin-right: 0.5rem;"></i>
                            LinkedIn
                        </a>
                        <a href="#" class="social-link" style="display: flex; align-items: center; padding: 0.8rem 1.5rem; background: #1da1f2; color: white; text-decoration: none; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fab fa-twitter" style="margin-right: 0.5rem;"></i>
                            Twitter
                        </a>
                        <a href="#" class="social-link" style="display: flex; align-items: center; padding: 0.8rem 1.5rem; background: #25d366; color: white; text-decoration: none; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fab fa-whatsapp" style="margin-right: 0.5rem;"></i>
                            WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Availability Status -->
                <div style="margin-top: 3rem; padding: 2rem; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border-radius: 12px; text-align: center;">
                    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <div style="width: 12px; height: 12px; background: #34d399; border-radius: 50%; margin-right: 0.5rem; animation: pulse 2s infinite;"></div>
                        <span style="font-weight: 600;">Available for New Projects</span>
                    </div>
                    <p style="margin: 0; opacity: 0.9; font-size: 0.9rem;">
                        Currently accepting new freelance projects and collaboration opportunities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section" style="background: var(--bg-secondary);">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item" style="background: white; margin-bottom: 1rem; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
                <div class="faq-question" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: white;" onclick="toggleFaq(this)">
                    <h3 style="margin: 0; color: var(--text-primary);">What is your typical project timeline?</h3>
                    <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding-bottom: 1.5rem;">
                        <p style="color: var(--text-secondary); line-height: 1.6; margin: 0;">
                            Project timelines vary depending on complexity and scope. A simple website might take 2-3 weeks, 
                            while a complex web application could take 2-3 months. I always provide detailed timelines during 
                            the project planning phase and keep you updated throughout the development process.
                        </p>
                    </div>
                </div>
            </div>

            <div class="faq-item" style="background: white; margin-bottom: 1rem; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
                <div class="faq-question" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: white;" onclick="toggleFaq(this)">
                    <h3 style="margin: 0; color: var(--text-primary);">What technologies do you specialize in?</h3>
                    <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding-bottom: 1.5rem;">
                        <p style="color: var(--text-secondary); line-height: 1.6; margin: 0;">
                            I specialize in full-stack development with expertise in Laravel, PHP, JavaScript, React, Vue.js, 
                            Node.js, and various databases including MySQL, PostgreSQL, and MongoDB. I also work with modern 
                            tools like Docker, AWS, and various APIs for complete end-to-end solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="faq-item" style="background: white; margin-bottom: 1rem; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
                <div class="faq-question" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: white;" onclick="toggleFaq(this)">
                    <h3 style="margin: 0; color: var(--text-primary);">Do you provide ongoing maintenance and support?</h3>
                    <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding-bottom: 1.5rem;">
                        <p style="color: var(--text-secondary); line-height: 1.6; margin: 0;">
                            Yes, I offer ongoing maintenance and support packages for all projects. This includes bug fixes, 
                            updates, security patches, and feature enhancements. I believe in building long-term relationships 
                            with my clients and ensuring their projects continue to perform optimally.
                        </p>
                    </div>
                </div>
            </div>

            <div class="faq-item" style="background: white; margin-bottom: 1rem; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
                <div class="faq-question" style="padding: 1.5rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: white;" onclick="toggleFaq(this)">
                    <h3 style="margin: 0; color: var(--text-primary);">What is your pricing structure?</h3>
                    <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="padding: 0 1.5rem; max-height: 0; overflow: hidden; transition: all 0.3s ease;">
                    <div style="padding-bottom: 1.5rem;">
                        <p style="color: var(--text-secondary); line-height: 1.6; margin: 0;">
                            I offer flexible pricing options including hourly rates for short-term projects and fixed-price 
                            contracts for larger projects. Each project is unique, so I provide detailed quotes based on 
                            requirements, complexity, and timeline. I'm always transparent about costs upfront with no hidden fees.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .contact-form-element input:focus,
    .contact-form-element textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .social-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(52, 211, 153, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(52, 211, 153, 0);
        }
    }

    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    .faq-item.active .faq-answer {
        max-height: 200px;
    }

    @media (max-width: 768px) {
        .contact-section > div:first-child > div:first-child {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }
        
        .contact-form-element > div:first-child {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    function toggleFaq(element) {
        const faqItem = element.parentElement;
        const answer = faqItem.querySelector('.faq-answer');
        const isActive = faqItem.classList.contains('active');
        
        // Close all other FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
        
        // Toggle current item
        if (!isActive) {
            faqItem.classList.add('active');
        }
    }

    // Form validation and enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.contact-form-element');
        const inputs = form.querySelectorAll('input, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.style.borderColor = 'var(--accent-color)';
                } else {
                    this.style.borderColor = 'var(--border-color)';
                }
            });
        });
        
        // Form submission enhancement
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 0.5rem;"></i>Sending...';
            submitBtn.disabled = true;
        });
    });
</script>
@endpush
@endsection
