# Ticket Management App

This is a full-featured ticket management web application with implementations in multiple frontend technologies.
This repository currently contains the Twig implementation built with Symfony.

## Twig Implementation

The Twig implementation is located in this main directory and includes:

### Features

- Landing Page with wavy background and decorative elements
- User Authentication (Login/Signup) with form validation
- Dashboard with ticket statistics
- Full CRUD functionality for ticket management
- Responsive design with mobile support
- Client-side session management with localStorage
- Form validation and error handling

### Technologies Used

- PHP 8+
- Symfony 6+
- Twig templating engine
- HTML5, CSS3, JavaScript
- LocalStorage for session management

### Setup and Installation

1. Make sure you have PHP 8+ and Composer installed
2. Install dependencies:
   ```bash
   composer install
   ```
3. Start the development server:
   ```bash
   symfony server:start
   ```
   or
   ```bash
   php -S localhost:8000 -t public/
   ```

### Project Structure

```
├── assets/
│   ├── styles.css          # Shared styles for all pages
│   └── wavy-bg.svg         # Wavy background SVG
├── templates/
│   ├── base.html.twig      # Main layout template
│   ├── landing.html.twig   # Landing page
│   ├── login.html.twig     # Login page
│   ├── signup.html.twig    # Signup page
│   ├── dashboard.html.twig # Dashboard page
│   └── tickets.html.twig   # Ticket management page
└── src/
    └── Controller/
        └── TicketController.php  # Main controller
```

### UI Components

1. **Landing Page**: Hero section with wavy background, decorative circles, and CTA buttons
2. **Authentication**: Login and Signup forms with validation
3. **Dashboard**: Statistics cards and recent tickets display
4. **Ticket Management**: Full CRUD interface with modal forms

### State Management

- Authentication state stored in localStorage with `ticketapp_session` key
- User data and ticket data stored in localStorage for simulation
- Protected routes automatically redirect unauthorized users

### Security

- Session management with localStorage
- Protected routes that redirect to login if no valid session exists
- Client-side validation for all forms

### Accessibility

- Semantic HTML structure
- Proper contrast ratios
- Focus states for interactive elements
- ARIA labels where appropriate

### Example Test Credentials

You can create a test user during signup with:
- Name: John Doe
- Email: john@example.com
- Password: password123

### Known Issues

- This implementation uses localStorage for data persistence which is client-side only
- In a production environment, server-side storage would be required
- Passwords are stored in plain text in localStorage (for demo purposes only)

### Color Palette

- **Open tickets**: Green tone (#047857 background with #ecfdf5)
- **In Progress tickets**: Amber tone (#92400e background with #fefce8)
- **Closed tickets**: Gray tone (#4b5563 background with #f9fafb)
