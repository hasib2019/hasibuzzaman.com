<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function home()
    {
        $data = [
            'skills' => $this->getSkills(),
            'featuredProjects' => $this->getFeaturedProjects(),
        ];
        
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'experience' => $this->getExperience(),
            'education' => $this->getEducation(),
            'skills' => $this->getSkillsDetailed(),
        ];
        
        return view('about', $data);
    }

    public function portfolio()
    {
        $data = [
            'projects' => $this->getAllProjects(),
        ];
        
        return view('portfolio', $data);
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Store contact message (you can save to database here)
        $contactData = $request->only(['name', 'email', 'subject', 'message']);
        
        // You can add email sending logic here
        // Mail::to('your-email@example.com')->send(new ContactMessage($contactData));

        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }

    private function getSkills()
    {
        return [
            'frontend' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Vue.js', 'Bootstrap', 'Tailwind CSS'],
            'backend' => ['PHP', 'Laravel', 'Node.js', 'Express.js', 'MySQL', 'PostgreSQL', 'MongoDB'],
            'tools' => ['Git', 'Docker', 'AWS', 'Linux', 'CI/CD', 'REST APIs', 'GraphQL'],
        ];
    }

    private function getFeaturedProjects()
    {
        return [
            [
                'title' => 'Modern E-Commerce Solution',
                'description' => 'Full-featured e-commerce platform with payment integration, inventory management, and admin dashboard.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
                'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'icon' => 'fas fa-shopping-cart',
            ],
            [
                'title' => 'Team Collaboration Platform',
                'description' => 'Comprehensive project management system with real-time collaboration, task tracking, and reporting.',
                'technologies' => ['React', 'Node.js', 'MongoDB'],
                'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
                'icon' => 'fas fa-tasks',
            ],
            [
                'title' => 'Business Intelligence Dashboard',
                'description' => 'Advanced analytics platform with interactive charts, real-time data processing, and custom reports.',
                'technologies' => ['PHP', 'Chart.js', 'PostgreSQL'],
                'gradient' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
                'icon' => 'fas fa-chart-line',
            ],
        ];
    }

    private function getExperience()
    {
        return [
            [
                'title' => 'Senior Full Stack Developer',
                'company' => 'Tech Solutions Inc.',
                'period' => '2022 - Present',
                'description' => [
                    'Led development of 5+ large-scale web applications using Laravel and React',
                    'Implemented CI/CD pipelines reducing deployment time by 60%',
                    'Mentored junior developers and established coding standards',
                    'Collaborated with cross-functional teams to deliver projects on time and budget'
                ]
            ],
            [
                'title' => 'Full Stack Developer',
                'company' => 'Digital Innovations Ltd.',
                'period' => '2020 - 2022',
                'description' => [
                    'Developed responsive web applications using PHP, Laravel, and Vue.js',
                    'Optimized database queries resulting in 40% performance improvement',
                    'Integrated third-party APIs and payment gateways',
                    'Participated in code reviews and maintained high code quality standards'
                ]
            ],
            [
                'title' => 'Junior Web Developer',
                'company' => 'StartupHub Bangladesh',
                'period' => '2019 - 2020',
                'description' => [
                    'Built dynamic websites using HTML, CSS, JavaScript, and PHP',
                    'Collaborated with designers to implement pixel-perfect UI designs',
                    'Learned and implemented best practices in web development',
                    'Contributed to multiple client projects from conception to deployment'
                ]
            ]
        ];
    }

    private function getEducation()
    {
        return [
            [
                'degree' => "Bachelor's in Computer Science",
                'institution' => 'University of Dhaka',
                'description' => 'Graduated with honors, specializing in software engineering and web development. Completed multiple projects in various programming languages and frameworks.',
            ]
        ];
    }

    private function getSkillsDetailed()
    {
        return [
            'backend' => [
                ['name' => 'PHP/Laravel', 'percentage' => 95],
                ['name' => 'Node.js', 'percentage' => 85],
                ['name' => 'Database Design', 'percentage' => 90],
            ],
            'frontend' => [
                ['name' => 'JavaScript', 'percentage' => 90],
                ['name' => 'React/Vue.js', 'percentage' => 88],
                ['name' => 'CSS/Sass', 'percentage' => 92],
            ],
            'devops' => [
                ['name' => 'Git/GitHub', 'percentage' => 95],
                ['name' => 'Docker', 'percentage' => 80],
                ['name' => 'AWS/Cloud', 'percentage' => 75],
            ],
        ];
    }

    private function getAllProjects()
    {
        return [
            [
                'title' => 'Advanced E-Commerce Solution',
                'description' => 'Full-featured online store with payment integration, inventory management, admin dashboard, and customer analytics.',
                'category' => 'ecommerce web-app',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe'],
                'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'icon' => 'fas fa-shopping-cart',
                'year' => '2024',
                'type' => 'Full Stack',
                'status' => 'Featured',
            ],
            [
                'title' => 'Team Collaboration Platform',
                'description' => 'Comprehensive project management system with real-time collaboration, task tracking, time logging, and reporting.',
                'category' => 'web-app',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Socket.io'],
                'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
                'icon' => 'fas fa-tasks',
                'year' => '2023',
                'type' => 'Full Stack',
                'status' => 'Team Project',
            ],
            [
                'title' => 'Business Intelligence Dashboard',
                'description' => 'Advanced analytics platform with interactive charts, real-time data processing, and custom reporting features.',
                'category' => 'web-app',
                'technologies' => ['PHP', 'Chart.js', 'PostgreSQL', 'D3.js'],
                'gradient' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
                'icon' => 'fas fa-chart-line',
                'year' => '2023',
                'type' => 'Full Stack',
                'status' => 'Data Viz',
            ],
            [
                'title' => 'Scalable API Platform',
                'description' => 'High-performance RESTful API with authentication, rate limiting, caching, and comprehensive documentation.',
                'category' => 'api',
                'technologies' => ['Laravel', 'Redis', 'JWT', 'Docker'],
                'gradient' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
                'icon' => 'fas fa-server',
                'year' => '2023',
                'type' => 'Backend',
                'status' => 'High Performance',
            ],
            [
                'title' => 'Custom Content Management System',
                'description' => 'Flexible CMS with drag-and-drop page builder, multi-language support, and advanced SEO features.',
                'category' => 'web-app',
                'technologies' => ['Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
                'gradient' => 'linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)',
                'icon' => 'fas fa-edit',
                'year' => '2022',
                'type' => 'Full Stack',
                'status' => 'CMS',
            ],
            [
                'title' => 'Mobile Application Backend API',
                'description' => 'Robust backend infrastructure for mobile applications featuring push notifications, real-time messaging, and offline synchronization.',
                'category' => 'api',
                'technologies' => ['Node.js', 'Express', 'MongoDB', 'Socket.io'],
                'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'icon' => 'fas fa-mobile-alt',
                'year' => '2022',
                'type' => 'Backend',
                'status' => 'Mobile',
            ],
        ];
    }
}
