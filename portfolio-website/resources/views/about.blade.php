@extends('layouts.app')

@section('title', 'About - Hasib Uzzaman')
@section('meta_description', 'Learn more about Hasib Uzzaman - Full Stack Developer with expertise in Laravel, PHP, JavaScript, and modern web development.')

@section('content')
<!-- About Hero -->
<section class="about-hero section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 6rem 0;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">About Me</h1>
        <p style="font-size: 1.3rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            Passionate Full Stack Developer dedicated to creating exceptional digital experiences
        </p>
    </div>
</section>

<!-- Main About Content -->
<section class="about-content section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 4rem; align-items: center; margin-bottom: 5rem;">
            <!-- Profile Image -->
            <div style="text-align: center;">
                <div style="width: 300px; height: 300px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin: 0 auto; display: flex; align-items: center; justify-content: center; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);">
                    <i class="fas fa-user" style="font-size: 6rem; color: white;"></i>
                </div>
            </div>

            <!-- About Text -->
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: var(--text-primary);">Hello, I'm Hasib Uzzaman</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    I'm a passionate Full Stack Developer with over 5 years of experience in creating modern, 
                    scalable web applications. My expertise spans across both frontend and backend technologies, 
                    with a strong focus on delivering high-quality, user-centric solutions.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem;">
                    I specialize in Laravel, PHP, JavaScript, and modern frontend frameworks like React and Vue.js. 
                    My approach combines technical expertise with creative problem-solving to build applications 
                    that not only function flawlessly but also provide exceptional user experiences.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 2rem;">
                    When I'm not coding, you can find me exploring new technologies, contributing to open-source 
                    projects, or sharing knowledge with the developer community through blogs and tutorials.
                </p>
                
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch</a>
                    <a href="#" class="btn btn-outline" onclick="window.open('/resume.pdf', '_blank')">Download Resume</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="experience section" style="background: var(--bg-secondary);">
    <div class="container">
        <h2 class="section-title">Professional Experience</h2>
        
        <div class="timeline">
            <!-- Experience Item 1 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 200px 1fr; gap: 3rem; margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                <div class="timeline-date" style="text-align: right;">
                    <span style="background: var(--primary-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">2022 - Present</span>
                </div>
                <div class="timeline-content">
                    <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--text-primary);">Senior Full Stack Developer</h3>
                    <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 1rem;">Tech Solutions Inc.</p>
                    <ul style="color: var(--text-secondary); line-height: 1.8;">
                        <li>Led development of 5+ large-scale web applications using Laravel and React</li>
                        <li>Implemented CI/CD pipelines reducing deployment time by 60%</li>
                        <li>Mentored junior developers and established coding standards</li>
                        <li>Collaborated with cross-functional teams to deliver projects on time and budget</li>
                    </ul>
                </div>
            </div>

            <!-- Experience Item 2 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 200px 1fr; gap: 3rem; margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                <div class="timeline-date" style="text-align: right;">
                    <span style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">2020 - 2022</span>
                </div>
                <div class="timeline-content">
                    <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--text-primary);">Full Stack Developer</h3>
                    <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 1rem;">Digital Innovations Ltd.</p>
                    <ul style="color: var(--text-secondary); line-height: 1.8;">
                        <li>Developed responsive web applications using PHP, Laravel, and Vue.js</li>
                        <li>Optimized database queries resulting in 40% performance improvement</li>
                        <li>Integrated third-party APIs and payment gateways</li>
                        <li>Participated in code reviews and maintained high code quality standards</li>
                    </ul>
                </div>
            </div>

            <!-- Experience Item 3 -->
            <div class="timeline-item" style="display: grid; grid-template-columns: 200px 1fr; gap: 3rem; margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                <div class="timeline-date" style="text-align: right;">
                    <span style="background: var(--text-secondary); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">2019 - 2020</span>
                </div>
                <div class="timeline-content">
                    <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--text-primary);">Junior Web Developer</h3>
                    <p style="color: var(--primary-color); font-weight: 600; margin-bottom: 1rem;">StartupHub Bangladesh</p>
                    <ul style="color: var(--text-secondary); line-height: 1.8;">
                        <li>Built dynamic websites using HTML, CSS, JavaScript, and PHP</li>
                        <li>Collaborated with designers to implement pixel-perfect UI designs</li>
                        <li>Learned and implemented best practices in web development</li>
                        <li>Contributed to multiple client projects from conception to deployment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="education section">
    <div class="container">
        <h2 class="section-title">Education & Certifications</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            <!-- Education -->
            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                    <div style="background: var(--primary-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0; color: var(--text-primary);">Bachelor's in Computer Science</h3>
                        <p style="margin: 0; color: var(--text-secondary);">University of Dhaka</p>
                    </div>
                </div>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Graduated with honors, specializing in software engineering and web development. 
                    Completed multiple projects in various programming languages and frameworks.
                </p>
            </div>

            <!-- Certifications -->
            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                    <div style="background: var(--accent-color); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0; color: var(--text-primary);">Professional Certifications</h3>
                        <p style="margin: 0; color: var(--text-secondary);">Various Platforms</p>
                    </div>
                </div>
                <ul style="color: var(--text-secondary); line-height: 1.8;">
                    <li>AWS Certified Solutions Architect</li>
                    <li>Laravel Certified Developer</li>
                    <li>Google Cloud Platform Professional</li>
                    <li>Microsoft Azure Fundamentals</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Skills Breakdown -->
<section class="skills-detailed section" style="background: var(--bg-secondary);">
    <div class="container">
        <h2 class="section-title">Technical Proficiency</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
            <!-- Backend -->
            <div class="skill-group">
                <h3 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--text-primary); text-align: center;">Backend Development</h3>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">PHP/Laravel</span>
                        <span>95%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--primary-color); height: 100%; width: 95%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Node.js</span>
                        <span>85%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--primary-color); height: 100%; width: 85%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Database Design</span>
                        <span>90%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--primary-color); height: 100%; width: 90%; border-radius: 4px;"></div>
                    </div>
                </div>
            </div>

            <!-- Frontend -->
            <div class="skill-group">
                <h3 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--text-primary); text-align: center;">Frontend Development</h3>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">JavaScript</span>
                        <span>90%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--accent-color); height: 100%; width: 90%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">React/Vue.js</span>
                        <span>88%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--accent-color); height: 100%; width: 88%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">CSS/Sass</span>
                        <span>92%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--accent-color); height: 100%; width: 92%; border-radius: 4px;"></div>
                    </div>
                </div>
            </div>

            <!-- DevOps -->
            <div class="skill-group">
                <h3 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--text-primary); text-align: center;">DevOps & Tools</h3>
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Git/GitHub</span>
                        <span>95%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--secondary-color); height: 100%; width: 95%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Docker</span>
                        <span>80%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--secondary-color); height: 100%; width: 80%; border-radius: 4px;"></div>
                    </div>
                </div>
                
                <div class="skill-item" style="margin-bottom: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">AWS/Cloud</span>
                        <span>75%</span>
                    </div>
                    <div style="background: #e5e7eb; height: 8px; border-radius: 4px; overflow: hidden;">
                        <div style="background: var(--secondary-color); height: 100%; width: 75%; border-radius: 4px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    @media (max-width: 768px) {
        .about-content > div:first-child {
            grid-template-columns: 1fr !important;
            text-align: center;
        }
        
        .timeline-item {
            grid-template-columns: 1fr !important;
            text-align: center;
        }
        
        .timeline-date {
            text-align: center !important;
        }
    }
    
    .timeline-item:hover {
        transform: translateY(-2px);
        transition: transform 0.3s ease;
    }
</style>
@endpush
@endsection
