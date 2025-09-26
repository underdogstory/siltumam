# Siltumam - B2B Heating Equipment Catalog Platform

A comprehensive Laravel-based catalog platform designed to connect companies in the heating equipment and fuel materials industry.

## 🚀 Project Overview

**Siltumam** is a B2B catalog platform that serves as a centralized marketplace where companies can showcase their products and services through individual company profiles containing all their advertisements.

### Key Features

- **Company Management**: Complete company profiles with verification system
- **Advertisement System**: Product and service listings with specifications
- **Category Management**: Hierarchical organization of equipment types
- **User Roles**: Role-based access control for different user types
- **Search & Discovery**: Advanced search functionality with filters
- **File Storage**: Integration with Supabase for media management
- **API-First**: RESTful API for frontend integration

## 🛠 Technology Stack

- **Backend**: Laravel 12 (Latest stable version)
- **Database**: SQLite (Development) / PostgreSQL via Supabase (Production)
- **Authentication**: Supabase Auth + Laravel Sanctum
- **File Storage**: Supabase Storage
- **Deployment**: Vercel
- **Additional Packages**:
  - Spatie Laravel Permission (Role-based access control)
  - Spatie Laravel Media Library (File management)
  - Intervention Image (Image processing)
  - Prahsys Laravel Supabase (Supabase integration)

## 📋 Prerequisites

- PHP 8.3+
- Composer
- Node.js & NPM
- Supabase Account
- Vercel Account (for deployment)

## 🔧 Installation & Setup

### 1. Clone and Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 2. Environment Configuration

Copy the `.env.example` file and configure your environment variables:

```bash
cp .env.example .env
```

Update the following variables in your `.env` file:

```env
APP_NAME=Siltumam
APP_URL=http://localhost:8000

# Supabase Configuration
SUPABASE_URL=your_supabase_project_url
SUPABASE_ANON_KEY=your_supabase_anon_key
SUPABASE_SERVICE_ROLE_KEY=your_supabase_service_role_key
SUPABASE_BUCKET=siltumam-files

# Database (for local development)
DB_CONNECTION=sqlite
```

### 3. Generate Application Key

```bash
php artisan key:generate
```

### 4. Run Database Migrations

```bash
php artisan migrate
```

### 5. Publish Package Assets

```bash
# Publish permission package assets
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

# Publish media library assets
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"
```

### 6. Create Storage Link

```bash
php artisan storage:link
```

### 7. Start Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## 🗄 Database Schema

### Core Entities

#### Companies
- Company profiles with contact information
- Verification status and business details
- Service areas and certifications
- Logo and branding

#### Advertisements
- Product and service listings
- Technical specifications
- Pricing and availability
- Media attachments

#### Categories
- Hierarchical product categorization
- Equipment types and fuel categories
- Service categories

#### Users
- Role-based access control
- Company associations
- Authentication via Supabase

## 🔐 User Roles & Permissions

### 1. Platform Admin
- Full system access
- Manage all companies and advertisements
- Category management
- System configuration

### 2. Company Admin
- Full company profile management
- Create/edit/delete advertisements
- Manage company users
- View analytics

### 3. Company Manager
- Limited company profile editing
- Advertisement management
- Basic analytics access

### 4. Company Employee
- Create advertisements (pending approval)
- Edit own advertisements
- View company profile

### 5. Guest Users
- Browse companies and advertisements
- Search and filter content
- Contact companies

## 🚀 Deployment to Vercel

### 1. Prepare for Production

Update your `.env` file for production:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app

# Supabase Production Configuration
SUPABASE_URL=your_production_supabase_url
SUPABASE_ANON_KEY=your_production_anon_key
SUPABASE_SERVICE_ROLE_KEY=your_production_service_role_key
```

### 2. Deploy to Vercel

The project includes a `vercel.json` configuration file for seamless deployment:

```bash
# Install Vercel CLI
npm i -g vercel

# Deploy
vercel --prod
```

### 3. Environment Variables in Vercel

Set the following environment variables in your Vercel dashboard:

- `APP_KEY`
- `SUPABASE_URL`
- `SUPABASE_ANON_KEY`
- `SUPABASE_SERVICE_ROLE_KEY`
- `SUPABASE_BUCKET`

## 📚 API Documentation

### Base URL
```
https://your-domain.vercel.app/api/v1
```

### Authentication
Include the Bearer token in the Authorization header:
```
Authorization: Bearer your_token_here
```

### Endpoints

#### Companies
- `GET /companies` - List all companies
- `GET /companies/{id}` - Get company details
- `POST /companies` - Create company (authenticated)
- `PUT /companies/{id}` - Update company (authenticated)
- `DELETE /companies/{id}` - Delete company (authenticated)

#### Advertisements
- `GET /advertisements` - List all advertisements
- `GET /advertisements/{id}` - Get advertisement details
- `GET /companies/{id}/advertisements` - Get company advertisements
- `GET /categories/{id}/advertisements` - Get category advertisements
- `POST /advertisements` - Create advertisement (authenticated)
- `PUT /advertisements/{id}` - Update advertisement (authenticated)
- `DELETE /advertisements/{id}` - Delete advertisement (authenticated)

#### Categories
- `GET /categories` - List all categories
- `GET /categories/{id}` - Get category details
- `POST /categories` - Create category (admin only)
- `PUT /categories/{id}` - Update category (admin only)
- `DELETE /categories/{id}` - Delete category (admin only)

## 🧪 Testing

```bash
# Run tests
php artisan test

# Run tests with coverage
php artisan test --coverage
```

## 📝 Development Guidelines

### Code Standards
- Follow PSR-12 coding standards
- Use Laravel's built-in features and conventions
- Implement proper error handling and validation
- Write clean, maintainable, and well-documented code

### SOLID Principles
- Single Responsibility Principle (SRP)
- Open/Closed Principle (OCP)
- Liskov Substitution Principle (LSP)
- Interface Segregation Principle (ISP)
- Dependency Inversion Principle (DIP)

### Security
- Implement proper authentication and authorization
- Use Laravel's built-in security features
- Follow OWASP security guidelines
- Secure API endpoints and data transmission

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests for new functionality
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License.

## 🆘 Support

For support and questions, please contact the development team or create an issue in the repository.

---

**Siltumam** - Connecting the heating industry through technology.