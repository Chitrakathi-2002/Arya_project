# Arya Enterprises - Custom PHP MVC Web Platform

Production-ready, MVC-based web application and Content Management System (CMS) designed for high-performance deployment on **Hostinger (`public_html`)**.

---

## 1. Project Overview

- **Client / Brand**: Arya Enterprises
- **Architecture Pattern**: Model-View-Controller (MVC) + Front Controller
- **Hosting Environment**: Hostinger Shared / Cloud Hosting (`public_html`)
- **Backend Technology**: Vanilla PHP 8.x (OOP, PDO, Prepared Statements)
- **Frontend Layer**: Semantic HTML5, Vanilla CSS3 (Custom Design System), Modular JavaScript
- **Database**: MySQL / MariaDB (Structured Migrations & Seeds)

---

## 2. Directory Structure

```text
Arya/ (public_html root)
│
├── index.php                         # Front Controller (Central entry point)
├── .htaccess                         # Clean URL rewriting + Dotfile & Security guards
├── .env                              # Environment secrets (Blocked from web access)
├── .env.example                      # Sample configuration template
├── robots.txt                        # Search engine crawling rules
├── sitemap.xml                       # SEO Sitemap
├── README.md                         # Project documentation
│
├── assets/                           # [PUBLIC] Static web assets
│   ├── css/                          # CSS stylesheets (style.css, admin.css)
│   ├── js/                           # JavaScript files (main.js, admin.js)
│   ├── images/                       # UI icons, logos, banners
│   └── fonts/                        # Web fonts
│
├── uploads/                          # [PUBLIC FILES ONLY] User uploads (PHP execution blocked)
│   ├── .htaccess                     # Script execution prevention
│   ├── services/                     # Service imagery
│   ├── products/                     # Product catalog imagery
│   └── testimonials/                 # Client profile pictures
│
├── app/                              # [PROTECTED] Core application code
│   ├── .htaccess                     # Direct access blocker ("Deny from all")
│   ├── Config/                       # Application configurations
│   │   ├── app.php                   # General app settings & environment
│   │   ├── database.php              # PDO Database connection parameters
│   │   └── constants.php             # Global filesystem and URL constants
│   │
│   ├── Core/                         # MVC Framework & Utilities
│   │   ├── Autoloader.php            # PSR-4 compatible class autoloader
│   │   ├── Router.php                # RESTful URI dispatcher & parameter parser
│   │   ├── Controller.php            # Base controller (view rendering, JSON responses)
│   │   ├── Model.php                 # Base model with PDO database singleton
│   │   ├── View.php                  # Template rendering & layout engine
│   │   ├── Auth.php                  # Session authentication & identity provider
│   │   ├── Csrf.php                  # CSRF token generator & validator
│   │   ├── RateLimiter.php           # Spam and brute-force mitigation
│   │   ├── Validator.php             # Input validation & sanitization
│   │   └── Upload.php                # MIME-validated secure file uploader
│   │
│   ├── Controllers/                  # Public & Admin HTTP Controllers
│   │   ├── HomeController.php        # Home, About, Contact actions
│   │   ├── ServiceController.php     # Services listing and detail actions
│   │   ├── ProductController.php     # Products catalog and detail actions
│   │   ├── ReviewController.php      # Customer review submissions (POST)
│   │   ├── EnquiryController.php     # WhatsApp enquiry logging and redirect (POST)
│   │   └── Admin/                    # CMS Administration Controllers
│   │       ├── AuthController.php    # Admin login, session check & logout
│   │       ├── DashboardController.php # Admin overview metrics & status
│   │       ├── ServiceAdminController.php # Services CRUD management
│   │       ├── ProductAdminController.php # Products CRUD management
│   │       ├── ReviewModerationController.php # Review approval / rejection
│   │       └── EnquiryLogController.php # Customer enquiry tracking logs
│   │
│   ├── Models/                       # Active Record / Query Models
│   │   ├── Service.php               # Services data operations
│   │   ├── Product.php               # Products catalog operations
│   │   ├── Review.php                # Reviews & moderation queries
│   │   ├── Testimonial.php           # Client testimonial queries
│   │   ├── Enquiry.php               # WhatsApp enquiry log storage
│   │   └── Admin.php                 # Admin credentials & authentication
│   │
│   └── Views/                        # Presentation Layer (PHP Views)
│       ├── layouts/                  # Shared page layouts
│       │   ├── header.php            # HTML <head> & meta tags
│       │   ├── navbar.php            # Main navigation header
│       │   ├── footer.php            # Global footer & scripts
│       │   └── admin-layout.php      # Admin control panel layout wrapper
│       ├── home.php                  # Landing page
│       ├── about.php                 # About company page
│       ├── contact.php               # Contact page with location & forms
│       ├── services/                 # Services views
│       │   ├── list.php              # Service catalog listing
│       │   └── detail.php            # Dynamic reusable service detail page
│       ├── products/                 # Products views
│       │   ├── list.php              # Product catalog listing
│       │   └── detail.php            # Dynamic reusable product detail page
│       ├── partials/                 # Reusable UI component partials
│       │   ├── review-form.php       # Review submission form
│       │   ├── review-list.php       # Approved reviews display
│       │   └── enquiry-modal.php     # Interactive WhatsApp enquiry popup
│       └── admin/                    # CMS Backoffice Views
│           ├── login.php             # Admin authentication portal
│           ├── dashboard.php         # Analytics & quick actions overview
│           ├── services/             # Admin services management UI
│           ├── products/             # Admin products management UI
│           ├── reviews/              # Admin review moderation UI
│           └── enquiries/            # Admin customer enquiry log table
│
├── database/                         # [PROTECTED] Database Schema & Migrations
│   ├── .htaccess                     # Direct access blocker
│   ├── schema.sql                    # Full consolidated database schema
│   ├── seed.sql                      # Demo seed data
│   └── migrations/                   # Individual SQL migrations
│       ├── 001_create_services.sql
│       ├── 002_create_products.sql
│       ├── 003_create_reviews.sql
│       ├── 004_create_testimonials.sql
│       ├── 005_create_enquiries.sql
│       └── 006_create_admins.sql
│
├── storage/                          # [PROTECTED] Ephemeral file storage
│   ├── .htaccess                     # Direct access blocker
│   ├── logs/                         # Application & error logs
│   └── cache/                        # Cached template fragments
│
└── documentation/                    # Technical & SOW Documentation
    ├── README.md                     # System architecture document
    ├── API.md                        # AJAX & future client API contracts
    ├── DATABASE.md                   # Data dictionary and ERD documentation
    ├── CMS-GUIDE.md                  # Admin user manual
    ├── DEPLOYMENT.md                 # Hostinger release & deployment guide
    └── TESTING.md                    # QA & test matrix
```

---

## 3. Public Routes & Request Handling

| HTTP Method | Route | Controller & Action | View Template |
|---|---|---|---|
| `GET` | `/` | `HomeController@index` | `app/Views/home.php` |
| `GET` | `/about` | `HomeController@about` | `app/Views/about.php` |
| `GET` | `/services` | `ServiceController@index` | `app/Views/services/list.php` |
| `GET` | `/service/{slug}` | `ServiceController@show` | `app/Views/services/detail.php` |
| `GET` | `/products` | `ProductController@index` | `app/Views/products/list.php` |
| `GET` | `/product/{slug}` | `ProductController@show` | `app/Views/products/detail.php` |
| `GET` | `/contact` | `HomeController@contact` | `app/Views/contact.php` |
| `POST` | `/review` | `ReviewController@store` | Redirect with status message |
| `POST` | `/enquiry` | `EnquiryController@store` | Redirect to WhatsApp URL (`wa.me`) |

---

## 4. Admin Portal Routes (CMS)

| HTTP Method | Route | Controller & Action | Purpose |
|---|---|---|---|
| `GET` / `POST` | `/admin/login` | `AuthController@login` | Admin authentication |
| `POST` | `/admin/logout` | `AuthController@logout` | Secure session termination |
| `GET` | `/admin` | `DashboardController@index` | Dashboard metrics & summary |
| `GET` / `POST` | `/admin/services` | `ServiceAdminController@*` | Manage service entries & media |
| `GET` / `POST` | `/admin/products` | `ProductAdminController@*` | Manage product catalog & pricing |
| `GET` / `POST` | `/admin/reviews` | `ReviewModerationController@*` | Approve / reject customer reviews |
| `GET` | `/admin/enquiries` | `EnquiryLogController@index` | View customer WhatsApp inquiries |

---

## 5. Security & Protection Standard

1. **Direct Web Access Blocking**: `app/`, `database/`, and `storage/` are blocked via Apache `.htaccess` rules (`Order Deny,Allow` / `Deny from all`).
2. **Uploads Directory Lockdown**: Direct execution of `.php`, `.phtml`, `.cgi`, `.exe` inside `uploads/` is disabled to prevent reverse shells.
3. **Database Security**: 100% prepared SQL statements with PDO to eliminate SQL Injection.
4. **Form Protection**: CSRF tokens validated on all `POST` operations (`/review`, `/enquiry`, `/admin/*`).
5. **Rate Limiting**: Rate limiting applied to public submissions to prevent spam bots.
6. **Password Security**: `password_hash()` (Bcrypt/Argon2ID) with `password_verify()`.
