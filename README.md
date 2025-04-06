## Project Title: "SkillShare Platform"

Project Description: SSP is an online platform that connects service providers and people who seek help in their personal tech issues. Users can offer services in different skills they share on the platform and apply to posts created by other users who search help. The platform facilitates connection between this two parts, search , payments, reviews, and real-time interactions, providing a comprehensive environment for skill services selling.

## (Business + Functional)

## Core features

#### 1. User Authentication and Authorization:

    * Implement user registration and login functionalities.
    * Differentiate access levels for instructors and students.

#### 2. User Profiles:

    * Allow users to create and manage their profiles, including personal information, skills, and fees.
    * Service providers can showcase their expertise and skill offering.

#### 3. post Management:

    * help seekers can manage their posts, view and manage appliants, also can ask help directly from a sp profile.
    * sp can browse, search, and apply in posts to provide services.

#### 4. Payment Integration:

    * Integrate a payment gateway (e.g., Stripe or PayPal) to handle service payments securely.

#### 5. Reviews and Ratings:

    * Enable both parts to leave reviews and ratings for each other after work is done.
    * Display aggregated ratings to inform users about the quality of provided service.

#### 6. Real-Time Communication:

    * Implement a messaging system for communication between parts after accepting to work with each other.
    * real-time chat functionality.

#### 7. Admin Dashboard:

    * Create an admin panel to manage users, posts, and site content.
    * Monitor platform analytics and user activities.

#### 8. follow progress of commands

    * both parts should be able to follow their commands(request help or applied tasks).
    * the ability to cancel command at any time of the process.

#### 9. Responsive Design:

    * Ensure the platform is mobile-friendly and accessible on various devices.

#### 10. Advanced filters and search :

    * Optimize user experience  with an innovative customizable search and filter that allows him to find what he's searching quickly.

#### 11. Notifications:

    * Implement email and in-app notifications for accepting requests , post updates, new messages, and payments.

## Technologies and Tools

#### \* Frontend:

    * Vue.js 3 for building interactive user interfaces.
    * Vue Router for client-side routing.
    * Vuex or Pinia for state management.
    * Tailwind CSS for styling and responsive design.

#### \* Backend:

    * Laravel 11 for handling server-side logic and API development.
    * Laravel Sanctum for API authentication.
    * Eloquent ORM for database interactions.

#### \* Database:

    * MySQL or PostgreSQL for relational data management.

#### \* Real-Time Functionality:

    * Laravel Echo and Pusher for implementing WebSocket communications.

#### \* Payment Processing:

    * Stripe or PayPal SDKs for secure payment transactions.

Development Approach:

## Sketching User stories

<img src="sketched-user-stories.png" alt="user stories">

## User Stories

👤 User (Help Seeker & Service Provider)

### Authentication & Profile Management

    * As a user, I want to register an account, so that I can access the platform’s features.

    * As a user, I want to log into my account, so that I can manage my services and requests.

    * As a user, I want to edit my profile, so that I can keep my information up to date.

    * As a user, I want to add my skills and set prices, so that people know what services I offer.

### Service & Request Management

    * As a user, I want to see my current service requests, so that I can follow up on their progress.

    * As a user, I want to follow the status of each request (pending, accepted, done), so that I stay informed.

    * As a user, I want to cancel a request or application, so that I can manage my engagements.

    * As a user, I want to receive notifications when someone applies to my post, so that I can respond quickly.

    * As a user, I want to accept an application to my post, so that I can choose who helps me.

    * As a user, I want to deliver a solution after completing a task, so that the request can be marked as complete.

### Discovery & Posting

    * As a user, I want to view other users’ profiles with their skills and prices, so that I can choose the right person to help.

    * As a user, I want to search for specific help based on skill or category, so that I can find the right service fast.

    * As a user, I want to create a post asking for help, so that service providers can apply to help me.

    * As a user, I want to create a post offering help, so that help seekers can reach out to me.

    * As a user, I want to apply to posts as a service provider, so that I can offer my services.

    * As a user, I want to see applications to my post, so that I can manage and choose the best one.

### Payments & Reviews

    * As a user, I want to pay for a service once it's completed, so that the provider gets rewarded.

    * As a user, I want to leave a review and rating after a service, so that I can share my experience.

    * As a user, I want to see reviews and testimonials on profiles, so that I can trust the service quality.

### Admin

    * As an admin, I want to view and manage all users, so that I can maintain a safe platform.

    * As an admin, I want to manage all posts and skills, so that inappropriate content is removed.

    * As an admin, I want to see platform-wide analytics, so that I can monitor activity and performance.

    * As an admin, I want to resolve disputes or issues between users, so that trust is maintained.

    * As an admin, I want to send announcements or notifications, so that all users are updated on platform changes.

    * As an admin, I want to check all history logs, so that trust is maintained.
