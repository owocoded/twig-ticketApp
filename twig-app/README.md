# Twig Implementation - Ticket Management App

This is the Twig implementation of the ticket management application built with Symfony.

## Overview

This implementation uses Symfony framework with Twig templating engine to create a full-featured ticket management application. It includes all the required features with a consistent design across all pages.

## Features Implemented

1. **Landing Page**
   - Wavy background using SVG
   - Decorative circles in the hero section
   - Responsive layout with max-width of 1440px
   - Call-to-action buttons

2. **Authentication System**
   - Login page with form validation
   - Signup page with form validation
   - Session management using localStorage
   - Error handling and notifications

3. **Dashboard**
   - Summary statistics (Total, Open, Resolved tickets)
   - Navigation menu
   - Recent tickets display
   - Logout functionality

4. **Ticket Management**
   - Create new tickets with validation
   - View existing tickets in card format
   - Edit ticket details
   - Delete tickets with confirmation
   - Status badges with appropriate colors

## Design Elements

- Consistent color scheme across all pages
- Responsive layout that works on mobile, tablet, and desktop
- Card-based UI for content sections
- Status badges with color coding:
  - Open: Green
  - In Progress: Amber
  - Closed: Gray
- Decorative elements as specified

## Security Features

- Protected routes that check for valid session
- Automatic redirection for unauthorized users
- Session token stored in localStorage with key `ticketapp_session`

## Technologies Used

- Symfony 6+
- Twig templating engine
- PHP 8+
- HTML5, CSS3, JavaScript
- LocalStorage for client-side data management

## Setup Instructions

1. Ensure you have PHP 8+ and Composer installed
2. Navigate to the project root directory
3. Run `composer install` to install dependencies
4. Start the Symfony development server:
   ```
   symfony server:start
   ```
   or use PHP's built-in server:
   ```
   php -S localhost:8000 -t public/
   ```

## Usage

1. Visit the homepage to see the landing page
2. Click "Get Started" to create an account or "Login" if you already have one
3. Once logged in, you can access the dashboard and ticket management features
4. Use the navigation to move between different sections of the app

## Code Structure

- Templates are located in the `templates/` directory
- Controller is in `src/Controller/TicketController.php`
- Assets (CSS, SVG) are in the `assets/` directory
- Shared styles are in `assets/styles.css`

## Validation

All forms include client-side validation:
- Title and status fields are mandatory for tickets
- Status field only accepts "open", "in_progress", or "closed" values
- Email validation for authentication forms
- Password length validation

## Error Handling

- Form validation errors displayed inline
- Toast notifications for user feedback
- Invalid credentials handled with error messages
- Session expiration redirects to login