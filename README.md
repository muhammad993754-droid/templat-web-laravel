# AdminKit Laravel

A full **Laravel** admin dashboard application based on the [AdminKit](https://adminkit.io/) Bootstrap 5 template, with **Laravel Breeze** authentication.

## Stack

- **Laravel 11** (PHP 8.x)
- **Laravel Breeze** (Blade stack) for authentication
- **AdminKit** Bootstrap 5 Admin Template for UI
- **Chart.js**, **Feather Icons**, **Flatpickr**, **jsVectorMap**, **SimpleBar**

## Features

- ✅ Full Laravel project structure
- ✅ Laravel Breeze authentication (login, register, logout, password reset, email verification)
- ✅ AdminKit Bootstrap 5 UI (sidebar, navbar, cards, charts, maps)
- ✅ Dashboard with charts and analytics widgets
- ✅ Profile page
- ✅ UI component pages (Buttons, Forms, Cards, Typography, Icons)
- ✅ Charts (Chart.js)
- ✅ Maps (jsVectorMap)

## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm

## Installation

```bash
# Clone the repo
git clone https://github.com/muhammad993754-droid/templat-web.git
cd templat-web

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Build assets
npm run build
# Or for development with hot reload:
npm run dev

# Start the dev server
php artisan serve
```

Then open [http://localhost:8000](http://localhost:8000).

## Routes

| URL | Name | Description |
|-----|------|-------------|
| `/` | — | Redirects to dashboard |
| `/dashboard` | `dashboard` | Main analytics dashboard (auth required) |
| `/pages/profile` | `pages.profile` | User profile page |
| `/pages/blank` | `pages.blank` | Blank page template |
| `/ui/buttons` | `ui.buttons` | Button components |
| `/ui/forms` | `ui.forms` | Form components |
| `/ui/cards` | `ui.cards` | Card components |
| `/ui/typography` | `ui.typography` | Typography |
| `/icons/feather` | `icons.feather` | Feather icons |
| `/charts/chartjs` | `charts.chartjs` | Chart.js charts |
| `/maps/google` | `maps.google` | Vector maps |
| `/login` | `login` | Sign in |
| `/register` | `register` | Sign up |
| `/forgot-password` | `password.request` | Forgot password |

## Project Structure

```
app/
  Http/Controllers/
    DashboardController.php   # Dashboard page
    PageController.php        # All UI/content pages
    ProfileController.php     # Breeze profile management
resources/
  views/
    layouts/
      adminkit.blade.php      # Main AdminKit layout with sidebar/navbar
    auth/                     # Breeze auth views (AdminKit styled)
    dashboard.blade.php       # Dashboard with charts
    pages/                    # Profile, Blank pages
    ui/                       # Buttons, Forms, Cards, Typography, Icons
    charts/                   # Chart.js page
    maps/                     # Map page
    profile/                  # Breeze profile edit page
public/
  css/app.css                 # AdminKit compiled CSS
  js/app.js                   # AdminKit compiled JS
  img/                        # Images (avatars, icons, photos)
routes/
  web.php                     # Application routes
  auth.php                    # Breeze auth routes
```

## Credits

- [AdminKit](https://adminkit.io/) — Bootstrap 5 Admin Template by Paul Laros (MIT License)
- [Laravel](https://laravel.com/)
- [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze)
