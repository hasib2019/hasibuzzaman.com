# Laravel Portfolio Website - Windows Setup Script
# PowerShell script to automate the setup process

Write-Host "🚀 Starting Laravel Portfolio Website Setup..." -ForegroundColor Green
Write-Host "==============================================" -ForegroundColor Green

# Check if PHP is installed
try {
    $phpVersion = php -v 2>$null
    if ($LASTEXITCODE -ne 0) {
        throw "PHP not found"
    }
    Write-Host "✅ PHP is available" -ForegroundColor Green
} catch {
    Write-Host "❌ PHP is not installed. Please install PHP 8.1 or higher first." -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

# Check if Composer is installed
try {
    $composerVersion = composer --version 2>$null
    if ($LASTEXITCODE -ne 0) {
        throw "Composer not found"
    }
    Write-Host "✅ Composer is available" -ForegroundColor Green
} catch {
    Write-Host "❌ Composer is not installed. Please install Composer first." -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

# Install Laravel dependencies
Write-Host "📦 Installing Laravel dependencies..." -ForegroundColor Yellow
composer install

# Check if .env file exists, if not copy from example
if (!(Test-Path .env)) {
    Write-Host "📄 Creating .env file from example..." -ForegroundColor Yellow
    Copy-Item .env.example .env
}

# Generate application key
Write-Host "🔑 Generating application key..." -ForegroundColor Yellow
php artisan key:generate

# Run database migrations
Write-Host "🗄️  Running database migrations..." -ForegroundColor Yellow
php artisan migrate --force

# Generate sitemap
Write-Host "🗺️  Generating sitemap..." -ForegroundColor Yellow
php artisan sitemap:generate

# Cache configuration for better performance
Write-Host "⚡ Optimizing performance..." -ForegroundColor Yellow
php artisan config:cache
php artisan view:cache

Write-Host ""
Write-Host "🎉 Setup Complete!" -ForegroundColor Green
Write-Host "==================" -ForegroundColor Green
Write-Host ""
Write-Host "✅ Laravel portfolio website is ready!" -ForegroundColor Green
Write-Host "📝 To start the development server, run:" -ForegroundColor Cyan
Write-Host "   php artisan serve" -ForegroundColor White
Write-Host ""
Write-Host "🌐 Then visit: http://localhost:8000" -ForegroundColor Cyan
Write-Host ""
Write-Host "📚 For customization guide, see:" -ForegroundColor Cyan
Write-Host "   - README.md (Quick start guide)" -ForegroundColor White
Write-Host "   - DEVELOPMENT_GUIDE.md (Comprehensive guide)" -ForegroundColor White
Write-Host ""
Write-Host "🎯 Next steps:" -ForegroundColor Cyan
Write-Host "   1. Update personal information in app/Http/Controllers/PortfolioController.php" -ForegroundColor White
Write-Host "   2. Customize colors and styling in resources/views/layouts/app.blade.php" -ForegroundColor White
Write-Host "   3. Add your own projects and experience" -ForegroundColor White
Write-Host "   4. Configure email settings in .env for contact form" -ForegroundColor White
Write-Host ""
Write-Host "💡 Need help? Check the documentation or contact: hasib.uzzaman@example.com" -ForegroundColor Cyan
Write-Host ""

Read-Host "Press Enter to exit"
