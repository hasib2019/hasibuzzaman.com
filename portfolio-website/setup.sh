#!/bin/bash

# Laravel Portfolio Website - Quick Setup Script
# This script automates the setup process for the portfolio website

echo "🚀 Starting Laravel Portfolio Website Setup..."
echo "=============================================="

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed. Please install PHP 8.1 or higher first."
    exit 1
fi

# Check if Composer is installed  
if ! command -v composer &> /dev/null; then
    echo "❌ Composer is not installed. Please install Composer first."
    exit 1
fi

echo "✅ PHP and Composer are available"

# Install Laravel dependencies
echo "📦 Installing Laravel dependencies..."
composer install

# Check if .env file exists, if not copy from example
if [ ! -f .env ]; then
    echo "📄 Creating .env file from example..."
    cp .env.example .env
fi

# Generate application key
echo "🔑 Generating application key..."
php artisan key:generate

# Run database migrations
echo "🗄️  Running database migrations..."
php artisan migrate --force

# Generate sitemap
echo "🗺️  Generating sitemap..."
php artisan sitemap:generate

# Cache configuration for better performance
echo "⚡ Optimizing performance..."
php artisan config:cache
php artisan view:cache

# Set proper permissions (for Linux/Mac)
if [[ "$OSTYPE" != "msys" && "$OSTYPE" != "cygwin" ]]; then
    echo "🔒 Setting proper file permissions..."
    chmod -R 755 storage bootstrap/cache
fi

echo ""
echo "🎉 Setup Complete!"
echo "=================="
echo ""
echo "✅ Laravel portfolio website is ready!"
echo "📝 To start the development server, run:"
echo "   php artisan serve"
echo ""
echo "🌐 Then visit: http://localhost:8000"
echo ""
echo "📚 For customization guide, see:"
echo "   - README.md (Quick start guide)"  
echo "   - DEVELOPMENT_GUIDE.md (Comprehensive guide)"
echo ""
echo "🎯 Next steps:"
echo "   1. Update personal information in app/Http/Controllers/PortfolioController.php"
echo "   2. Customize colors and styling in resources/views/layouts/app.blade.php" 
echo "   3. Add your own projects and experience"
echo "   4. Configure email settings in .env for contact form"
echo ""
echo "💡 Need help? Check the documentation or contact: hasib.uzzaman@example.com"
echo ""
