# Project Requirements

## Technology Stack

### Backend Framework
- **Laravel**: Latest version
  - Use the most recent stable release of Laravel
  - Follow Laravel best practices and conventions
  - Implement proper MVC architecture

### Database & Backend Services
- **Supabase**: 
  - Use Supabase as the primary backend-as-a-service platform
  - Leverage Supabase for:
    - Database management (PostgreSQL)
    - Authentication and user management
    - Real-time subscriptions
    - API endpoints
    - File storage
  - Integrate Supabase with Laravel application

### Deployment Platform
- **Vercel**: 
  - Project should match Vercel deployment requirements
  - Ensure compatibility with Vercel's serverless architecture
  - Follow Vercel's best practices for PHP/Laravel deployment
  - Optimize for Vercel's edge network and global distribution

## Development Guidelines

### Code Standards
- Follow PSR-12 coding standards
- Use Laravel's built-in features and conventions
- Implement proper error handling and validation
- Write clean, maintainable, and well-documented code
- **Use Laravel Open Source Packages**: When possible, utilize existing Laravel open source packages from Packagist and Laravel ecosystem to avoid reinventing the wheel and leverage community-tested solutions

### SOLID Principles
- **Single Responsibility Principle (SRP)**: Each class should have only one reason to change
- **Open/Closed Principle (OCP)**: Software entities should be open for extension but closed for modification
- **Liskov Substitution Principle (LSP)**: Objects of a superclass should be replaceable with objects of its subclasses
- **Interface Segregation Principle (ISP)**: Clients should not be forced to depend on interfaces they don't use
- **Dependency Inversion Principle (DIP)**: High-level modules should not depend on low-level modules; both should depend on abstractions

### Security
- Implement proper authentication and authorization
- Use Laravel's built-in security features
- Follow OWASP security guidelines
- Secure API endpoints and data transmission

### Performance
- Optimize database queries
- Implement caching strategies
- Use Laravel's performance optimization features
- Monitor and optimize application performance

## Project Structure
- Follow Laravel's standard directory structure
- Organize code logically and maintainably
- Use proper namespacing and autoloading
- Implement proper separation of concerns
