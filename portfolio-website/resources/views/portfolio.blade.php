@extends('layouts.app')

@section('title', 'Portfolio - Hasib Uzzaman')
@section('meta_description', 'Explore my portfolio of web development projects including e-commerce platforms, management systems, and custom web applications built with Laravel, React, and modern technologies.')

@section('content')
<!-- Portfolio Hero -->
<section class="portfolio-hero section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; padding: 6rem 0;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">My Portfolio</h1>
        <p style="font-size: 1.3rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            A collection of projects showcasing my expertise in full-stack development
        </p>
    </div>
</section>

<!-- Filter Tabs -->
<section style="background: var(--bg-secondary); padding: 2rem 0;">
    <div class="container">
        <div class="filter-tabs" style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <button class="filter-btn active" data-filter="all" style="padding: 0.8rem 2rem; border: none; background: var(--primary-color); color: white; border-radius: 25px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">
                All Projects
            </button>
            <button class="filter-btn" data-filter="web-app" style="padding: 0.8rem 2rem; border: 2px solid var(--primary-color); background: transparent; color: var(--primary-color); border-radius: 25px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">
                Web Applications
            </button>
            <button class="filter-btn" data-filter="ecommerce" style="padding: 0.8rem 2rem; border: 2px solid var(--primary-color); background: transparent; color: var(--primary-color); border-radius: 25px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">
                E-Commerce
            </button>
            <button class="filter-btn" data-filter="api" style="padding: 0.8rem 2rem; border: 2px solid var(--primary-color); background: transparent; color: var(--primary-color); border-radius: 25px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">
                APIs & Backend
            </button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="portfolio-grid section">
    <div class="container">
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
            
            <!-- Project 1: E-Commerce Platform -->
            <div class="project-item" data-category="ecommerce web-app" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('ecommerce')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-shopping-cart" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">E-Commerce Platform</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Advanced E-Commerce Solution</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        Full-featured online store with payment integration, inventory management, admin dashboard, and customer analytics.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #ef4444; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Laravel</span>
                        <span class="tech-tag" style="background: #06b6d4; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Vue.js</span>
                        <span class="tech-tag" style="background: #f59e0b; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">MySQL</span>
                        <span class="tech-tag" style="background: #8b5cf6; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Stripe</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2024</span>
                        <span><i class="fas fa-code"></i> Full Stack</span>
                        <span><i class="fas fa-star"></i> Featured</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Project Management Tool -->
            <div class="project-item" data-category="web-app" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('project-management')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-tasks" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">Project Management</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Team Collaboration Platform</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        Comprehensive project management system with real-time collaboration, task tracking, time logging, and reporting.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #3b82f6; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">React</span>
                        <span class="tech-tag" style="background: #10b981; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Node.js</span>
                        <span class="tech-tag" style="background: #059669; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">MongoDB</span>
                        <span class="tech-tag" style="background: #dc2626; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Socket.io</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2023</span>
                        <span><i class="fas fa-code"></i> Full Stack</span>
                        <span><i class="fas fa-users"></i> Team Project</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Analytics Dashboard -->
            <div class="project-item" data-category="web-app" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('analytics')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-chart-line" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">Analytics Dashboard</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Business Intelligence Dashboard</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        Advanced analytics platform with interactive charts, real-time data processing, and custom reporting features.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #7c3aed; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">PHP</span>
                        <span class="tech-tag" style="background: #ef4444; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Chart.js</span>
                        <span class="tech-tag" style="background: #1f2937; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">PostgreSQL</span>
                        <span class="tech-tag" style="background: #f59e0b; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">D3.js</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2023</span>
                        <span><i class="fas fa-code"></i> Full Stack</span>
                        <span><i class="fas fa-chart-bar"></i> Data Viz</span>
                    </div>
                </div>
            </div>

            <!-- Project 4: REST API Service -->
            <div class="project-item" data-category="api" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('api')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-code"></i> Documentation
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-server" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">REST API Service</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Scalable API Platform</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        High-performance RESTful API with authentication, rate limiting, caching, and comprehensive documentation.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #ef4444; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Laravel</span>
                        <span class="tech-tag" style="background: #dc2626; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Redis</span>
                        <span class="tech-tag" style="background: #1f2937; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">JWT</span>
                        <span class="tech-tag" style="background: #059669; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Docker</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2023</span>
                        <span><i class="fas fa-code"></i> Backend</span>
                        <span><i class="fas fa-tachometer-alt"></i> High Performance</span>
                    </div>
                </div>
            </div>

            <!-- Project 5: CMS Platform -->
            <div class="project-item" data-category="web-app" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('cms')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-edit" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">CMS Platform</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Custom Content Management System</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        Flexible CMS with drag-and-drop page builder, multi-language support, and advanced SEO features.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #ef4444; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Laravel</span>
                        <span class="tech-tag" style="background: #f59e0b; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">MySQL</span>
                        <span class="tech-tag" style="background: #eab308; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">JavaScript</span>
                        <span class="tech-tag" style="background: #06b6d4; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Bootstrap</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2022</span>
                        <span><i class="fas fa-code"></i> Full Stack</span>
                        <span><i class="fas fa-cog"></i> CMS</span>
                    </div>
                </div>
            </div>

            <!-- Project 6: Mobile App Backend -->
            <div class="project-item" data-category="api" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <div class="project-image" style="height: 250px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
                    <div class="project-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                        <div style="text-align: center; color: white;">
                            <a href="#" class="btn btn-outline" style="margin: 0.5rem; border-color: white; color: white;" onclick="openProjectModal('mobile-backend')">
                                <i class="fas fa-eye"></i> View Details
                            </a>
                            <a href="#" class="btn btn-primary" style="margin: 0.5rem; background: var(--accent-color);">
                                <i class="fas fa-code"></i> API Docs
                            </a>
                        </div>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                        <i class="fas fa-mobile-alt" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem;">Mobile App Backend</h3>
                    </div>
                </div>
                <div class="project-content" style="padding: 2rem;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--text-primary);">Mobile Application API</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
                        Robust backend API for mobile applications with push notifications, real-time messaging, and offline sync.
                    </p>
                    <div class="tech-stack" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1.5rem;">
                        <span class="tech-tag" style="background: #10b981; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Node.js</span>
                        <span class="tech-tag" style="background: #059669; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Express</span>
                        <span class="tech-tag" style="background: #059669; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">MongoDB</span>
                        <span class="tech-tag" style="background: #dc2626; color: white; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.8rem;">Socket.io</span>
                    </div>
                    <div class="project-stats" style="display: flex; justify-content: space-between; font-size: 0.9rem; color: var(--text-secondary);">
                        <span><i class="fas fa-calendar"></i> 2022</span>
                        <span><i class="fas fa-code"></i> Backend</span>
                        <span><i class="fas fa-mobile-alt"></i> Mobile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal (Hidden by default) -->
<div id="projectModal" class="modal" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8);">
    <div class="modal-content" style="background-color: white; margin: 5% auto; padding: 2rem; width: 90%; max-width: 800px; border-radius: 15px; max-height: 80vh; overflow-y: auto;">
        <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <div id="modalContent">
            <!-- Modal content will be inserted here -->
        </div>
    </div>
</div>

@push('styles')
<style>
    .project-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .project-item:hover .project-overlay {
        opacity: 1;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: var(--primary-color) !important;
        color: white !important;
    }

    .project-item.hidden {
        display: none;
    }

    @media (max-width: 768px) {
        .projects-grid {
            grid-template-columns: 1fr !important;
        }
        
        .filter-tabs {
            flex-direction: column !important;
            align-items: center;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Filter functionality
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            const projects = document.querySelectorAll('.project-item');
            
            projects.forEach(project => {
                if (filter === 'all' || project.getAttribute('data-category').includes(filter)) {
                    project.style.display = 'block';
                    project.style.animation = 'fadeIn 0.5s ease';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    });

    // Modal functionality
    const modal = document.getElementById('projectModal');
    const modalContent = document.getElementById('modalContent');
    const closeBtn = document.querySelector('.close');

    function openProjectModal(projectType) {
        const projectData = {
            'ecommerce': {
                title: 'Advanced E-Commerce Solution',
                description: 'A comprehensive e-commerce platform built with Laravel and Vue.js, featuring advanced inventory management, multiple payment gateways, and comprehensive analytics.',
                features: [
                    'User authentication and authorization',
                    'Product catalog with categories and filters',
                    'Shopping cart and wishlist functionality',
                    'Multiple payment gateway integration (Stripe, PayPal)',
                    'Order management and tracking',
                    'Inventory management system',
                    'Admin dashboard with analytics',
                    'Customer reviews and ratings',
                    'Responsive design for all devices'
                ],
                technologies: ['Laravel 9', 'Vue.js 3', 'MySQL', 'Stripe API', 'PayPal API', 'Bootstrap 5', 'Chart.js'],
                challenges: 'Implementing real-time inventory updates, optimizing database queries for large product catalogs, and ensuring secure payment processing.',
                outcome: 'Successfully deployed platform serving 10,000+ users with 99.9% uptime and processing $500K+ in transactions monthly.'
            },
            'project-management': {
                title: 'Team Collaboration Platform',
                description: 'A comprehensive project management system built with React and Node.js, enabling teams to collaborate effectively with real-time updates and advanced tracking features.',
                features: [
                    'Real-time collaboration with Socket.io',
                    'Project and task management',
                    'Time tracking and reporting',
                    'File sharing and version control',
                    'Team communication tools',
                    'Gantt charts and project timelines',
                    'Advanced reporting and analytics',
                    'Mobile-responsive interface',
                    'Integration with popular tools (Slack, GitHub)'
                ],
                technologies: ['React 18', 'Node.js', 'Express.js', 'MongoDB', 'Socket.io', 'JWT Authentication', 'Chart.js'],
                challenges: 'Implementing real-time synchronization across multiple users, managing complex state in React, and optimizing performance for large datasets.',
                outcome: 'Platform adopted by 50+ teams, resulting in 30% improvement in project delivery times and enhanced team collaboration.'
            },
            'analytics': {
                title: 'Business Intelligence Dashboard',
                description: 'An advanced analytics platform providing comprehensive business insights through interactive visualizations and real-time data processing.',
                features: [
                    'Interactive data visualizations',
                    'Real-time data processing',
                    'Custom report generation',
                    'Data export in multiple formats',
                    'User role-based access control',
                    'Automated report scheduling',
                    'API integration for external data sources',
                    'Mobile-optimized dashboard',
                    'Advanced filtering and search'
                ],
                technologies: ['PHP 8', 'Laravel', 'Chart.js', 'D3.js', 'PostgreSQL', 'Redis', 'REST APIs'],
                challenges: 'Processing large datasets efficiently, creating responsive visualizations, and implementing complex filtering mechanisms.',
                outcome: 'Enabled data-driven decision making for clients, resulting in average 25% improvement in business metrics.'
            },
            'api': {
                title: 'Scalable REST API Platform',
                description: 'A high-performance RESTful API service built with Laravel, featuring comprehensive authentication, rate limiting, and extensive documentation.',
                features: [
                    'RESTful API architecture',
                    'JWT-based authentication',
                    'Rate limiting and throttling',
                    'Comprehensive API documentation',
                    'Caching with Redis',
                    'Database query optimization',
                    'Error handling and logging',
                    'API versioning',
                    'Docker containerization'
                ],
                technologies: ['Laravel 9', 'JWT', 'Redis', 'MySQL', 'Docker', 'Swagger/OpenAPI', 'PHPUnit'],
                challenges: 'Ensuring high performance under load, implementing robust security measures, and maintaining backward compatibility.',
                outcome: 'API serves 1M+ requests daily with 99.9% uptime and sub-100ms response times for most endpoints.'
            },
            'cms': {
                title: 'Custom Content Management System',
                description: 'A flexible CMS platform with drag-and-drop page builder, multi-language support, and advanced SEO optimization features.',
                features: [
                    'Drag-and-drop page builder',
                    'Multi-language content support',
                    'SEO optimization tools',
                    'Media management system',
                    'User roles and permissions',
                    'Content scheduling',
                    'Template management',
                    'Plugin architecture',
                    'Performance optimization'
                ],
                technologies: ['Laravel 8', 'MySQL', 'JavaScript ES6', 'Bootstrap 5', 'TinyMCE', 'jQuery'],
                challenges: 'Creating an intuitive drag-and-drop interface, implementing flexible content structures, and ensuring SEO best practices.',
                outcome: 'CMS adopted by 100+ websites, reducing content management time by 60% and improving SEO rankings.'
            },
            'mobile-backend': {
                title: 'Mobile Application Backend API',
                description: 'Robust backend infrastructure for mobile applications featuring push notifications, real-time messaging, and offline synchronization.',
                features: [
                    'RESTful API endpoints',
                    'Push notification system',
                    'Real-time messaging',
                    'Offline data synchronization',
                    'File upload and storage',
                    'User authentication',
                    'Data caching strategies',
                    'Background job processing',
                    'API rate limiting'
                ],
                technologies: ['Node.js', 'Express.js', 'MongoDB', 'Socket.io', 'Firebase FCM', 'AWS S3', 'Redis'],
                challenges: 'Handling offline data sync conflicts, implementing efficient push notification delivery, and managing real-time connections at scale.',
                outcome: 'Backend supports 50,000+ active mobile users with real-time features and 99.8% message delivery rate.'
            }
        };

        const project = projectData[projectType];
        if (project) {
            modalContent.innerHTML = `
                <h2 style="color: var(--primary-color); margin-bottom: 1rem;">${project.title}</h2>
                <p style="font-size: 1.1rem; line-height: 1.6; margin-bottom: 2rem; color: var(--text-secondary);">${project.description}</p>
                
                <h3 style="color: var(--text-primary); margin-bottom: 1rem;">Key Features</h3>
                <ul style="margin-bottom: 2rem; line-height: 1.8;">
                    ${project.features.map(feature => `<li>${feature}</li>`).join('')}
                </ul>
                
                <h3 style="color: var(--text-primary); margin-bottom: 1rem;">Technologies Used</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 2rem;">
                    ${project.technologies.map(tech => `<span style="background: var(--primary-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem;">${tech}</span>`).join('')}
                </div>
                
                <h3 style="color: var(--text-primary); margin-bottom: 1rem;">Challenges & Solutions</h3>
                <p style="line-height: 1.6; margin-bottom: 2rem; color: var(--text-secondary);">${project.challenges}</p>
                
                <h3 style="color: var(--text-primary); margin-bottom: 1rem;">Outcome & Impact</h3>
                <p style="line-height: 1.6; color: var(--text-secondary);">${project.outcome}</p>
            `;
            modal.style.display = 'block';
        }
    }

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>
@endpush
@endsection
