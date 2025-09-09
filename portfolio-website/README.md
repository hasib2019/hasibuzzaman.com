# Laravel Portfolio Website - Hasib Uzzaman

A modern, fast-loading Laravel portfolio website with advanced features and optimized performance.

## 🚀 Features

### Core Features
- **Responsive Design**: Mobile-first approach with modern CSS Grid and Flexbox
- **Fast Loading**: Optimized for speed with minified assets, caching headers, and performance middleware
- **SEO Optimized**: Meta tags, sitemap generation, structured data, and robots.txt
- **Modern UI/UX**: Clean, professional design with smooth animations and transitions
- **Contact Form**: Functional contact form with validation and email notifications

### Technical Features
- **Laravel 12**: Latest Laravel framework with modern PHP 8+ features
- **Performance Optimization**: HTML minification, Gzip compression, and caching headers
- **Security Headers**: XSS protection, content type options, and frame options
- **Sitemap Generation**: Automated XML sitemap generation for SEO
- **Image Optimization**: Intervention Image package for image processing
- **Clean Code**: Well-structured, commented, and maintainable codebase

### Pages
1. **Home**: Hero section, skills showcase, featured projects, and call-to-action
2. **About**: Professional experience, education, detailed skills with progress bars
3. **Portfolio**: Project gallery with filtering, detailed modals, and technology stacks
4. **Contact**: Contact form, social links, FAQ section, and availability status

## 🛠️ Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js & NPM (optional, for asset compilation)
- MySQL/SQLite database
- Web server (Apache/Nginx) or use built-in PHP server

### Quick Start

1. **Navigate to the project folder**
   ```bash
   cd portfolio-website
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Environment Setup**
   ```bash
   # Copy environment file (if needed)
   cp .env.example .env
   
   # Generate application key (if needed)
   php artisan key:generate
   ```

4. **Database Setup**
   ```bash
   # Create database tables
   php artisan migrate
   
   # Generate sitemap
   php artisan sitemap:generate
   ```

5. **Start Development Server**
   ```bash
   php artisan serve
   ```

   Visit: `http://localhost:8000`

## 🎨 Customization Guide

### Personal Information
Update the following in `app/Http/Controllers/PortfolioController.php`:

1. **Personal Details**: Name, title, contact information, social media links
2. **Experience & Education**: Job positions, educational background, certifications
3. **Skills & Technologies**: Technical skills with proficiency levels
4. **Projects**: Project descriptions, features, technologies used

### Styling & Branding
Update in `resources/views/layouts/app.blade.php`:

```css
:root {
  --primary-color: #3b82f6;    /* Your brand color */
  --secondary-color: #1f2937;
  --accent-color: #10b981;
}
```

## ⚡ Performance Features

- **HTML Minification**: Removes unnecessary whitespace and comments
- **Gzip Compression**: Compresses responses for faster delivery
- **Caching Headers**: Implements proper browser caching
- **Security Headers**: Adds security-focused HTTP headers
- **SEO Optimization**: Meta tags, sitemap, robots.txt

## 📱 Responsive Design

Fully responsive with mobile-first approach:
- Mobile: 320px - 768px
- Tablet: 768px - 1024px  
- Desktop: 1024px and above

## 🔍 SEO Features

- Semantic HTML structure
- Meta descriptions and keywords
- XML sitemap generation
- Robots.txt configuration
- Fast loading times

## 🚀 Deployment

### Production Optimization
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
composer install --optimize-autoloader --no-dev
```

## 📞 Support

For questions or customization help, contact: hasib.uzzaman@example.com

---

**Built with Laravel 12 and modern web technologies**

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
