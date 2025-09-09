@extends('layouts.app')

@section('title', 'Hasib Uzzaman - Full Stack Developer')
@section('meta_description', 'Full Stack Developer specializing in Laravel, PHP, JavaScript, and modern web technologies. Creating innovative web solutions.')

@section('content')
<!-- Hero Section -->
<section class="hero section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 8rem 0;">
    <div class="container">
        <div class="hero-content fade-in">
            <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 1rem; line-height: 1.2;">
                Hi, I'm <span style="color: #fbbf24;">Hasib Uzzaman</span>
            </h1>
            <p style="font-size: 1.5rem; margin-bottom: 2rem; opacity: 0.9;">
                Full Stack Developer & Software Engineer
            </p>
            <p style="font-size: 1.1rem; margin-bottom: 3rem; opacity: 0.8; max-width: 600px; margin-left: auto; margin-right: auto;">
                I create modern, scalable web applications using cutting-edge technologies. 
                Passionate about clean code, user experience, and innovative solutions.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('portfolio') }}" class="btn btn-primary" style="background: #fbbf24; color: #1f2937;">
                    View My Work
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline" style="border-color: white; color: white;">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills section" style="background: var(--bg-secondary);">
    <div class="container">
        <h2 class="section-title">Technical Skills</h2>
        <p class="section-subtitle">Technologies and tools I work with</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
            <!-- Frontend -->
            <div class="skill-category" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-primary);">Frontend Development</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Bootstrap</span>
                    <span class="skill-tag">Tailwind CSS</span>
                </div>
            </div>

            <!-- Backend -->
            <div class="skill-category" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;">
                    <i class="fas fa-server"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-primary);">Backend Development</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Express.js</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">PostgreSQL</span>
                    <span class="skill-tag">MongoDB</span>
                </div>
            </div>

            <!-- Tools & Others -->
            <div class="skill-category" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-primary);">Tools & DevOps</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">AWS</span>
                    <span class="skill-tag">Linux</span>
                    <span class="skill-tag">CI/CD</span>
                    <span class="skill-tag">REST APIs</span>
                    <span class="skill-tag">GraphQL</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Projects -->
<section class="recent-projects section">
    <div class="container">
        <h2 class="section-title">Featured Projects</h2>
        <p class="section-subtitle">A showcase of my recent work and achievements</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            <!-- Project 1 -->
            <div class="project-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease;">
                <div style="height: 200px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-shopping-cart" style="font-size: 3rem;"></i>
                        <p style="margin-top: 1rem; font-weight: 600;">E-Commerce Platform</p>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--text-primary);">Modern E-Commerce Solution</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem; line-height: 1.6;">
                        Full-featured e-commerce platform with payment integration, inventory management, and admin dashboard.
                    </p>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline" style="width: 100%;">View Details</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease;">
                <div style="height: 200px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); position: relative;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-tasks" style="font-size: 3rem;"></i>
                        <p style="margin-top: 1rem; font-weight: 600;">Project Management Tool</p>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--text-primary);">Team Collaboration Platform</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem; line-height: 1.6;">
                        Comprehensive project management system with real-time collaboration, task tracking, and reporting.
                    </p>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline" style="width: 100%;">View Details</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease;">
                <div style="height: 200px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); position: relative;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-chart-line" style="font-size: 3rem;"></i>
                        <p style="margin-top: 1rem; font-weight: 600;">Analytics Dashboard</p>
                    </div>
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 0.5rem; color: var(--text-primary);">Business Intelligence Dashboard</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem; line-height: 1.6;">
                        Advanced analytics platform with interactive charts, real-time data processing, and custom reports.
                    </p>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">PostgreSQL</span>
                    </div>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline" style="width: 100%;">View Details</a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('portfolio') }}" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta section" style="background: var(--secondary-color); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Ready to Start Your Project?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">
            Let's collaborate to bring your ideas to life with modern web technologies.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary" style="background: var(--accent-color);">
            Let's Work Together
        </a>
    </div>
</section>

@push('styles')
<style>
    .skill-tag, .tech-tag {
        background: var(--bg-secondary);
        color: var(--text-primary);
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .tech-tag {
        background: var(--primary-color);
        color: white;
        font-size: 0.8rem;
        padding: 0.3rem 0.8rem;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem !important;
        }
        
        .hero p {
            font-size: 1.2rem !important;
        }
    }
</style>
@endpush
@endsection
