# aakuali-care
A responsive website developed for Aakuali Care,A responsive website developed for Aakuali Care ,a home care service provider dedicated to supporting elderly people with dementia and other age-related challenges. dedicated to supporting elderly people with dementia and other age-related challenges.

# Aakuali Care

A responsive WordPress website designed and developed from scratch for **Aakuali Care**, an NGO dedicated to providing care and support for elderly people living with dementia and other age-related challenges.

> **Project status:** Archived
> The original organization and website are no longer operational.

## Overview

Aakuali Care needed a website that could clearly communicate its services, make it easy for families and visitors to enquire about care services, and provide the organization with the ability to maintain its own content.

I designed and developed the website as a complete WordPress solution, working directly with the organization to understand its requirements, structure the content, and build the site from the ground up.

The website combined informational content with content-management capabilities, allowing the Aakuali Care team to publish blog posts and maintain a photo gallery without requiring developer involvement.

## Features

* **Service information**

  * Detailed information about the services provided by Aakuali Care
  * Information on how visitors could book or enquire about services

* **Enquiry and contact forms**

  * Online enquiry forms for visitors
  * Form submissions delivered directly to the organization's administrators via email

* **Photo gallery**

  * Custom WordPress album functionality
  * Aakuali Care administrators could add and manage photographs
  * Lightbox-based image viewing

* **Blog**

  * WordPress-powered blog section
  * Administrators could publish and manage regular blog posts

* **Brochure**

  * Visitors could download the organization's brochure

* **Location**

  * Integrated Google Maps location showing the Aakuali Care facility

* **Responsive design**

  * Designed to work across desktop, tablet, and mobile devices
  * Built using Bootstrap and responsive CSS

* **SEO**

  * Structured and optimized for search engine visibility

## My Role

I was the **sole developer** on the project and was responsible for the complete website implementation.

My responsibilities included:

* Gathering requirements and content from the organization
* Designing the website UI and page structure
* Developing the website from scratch
* Building the custom WordPress theme
* Implementing responsive layouts
* Developing custom WordPress functionality
* Integrating contact forms and email notifications
* Implementing the photo gallery
* Integrating Google Maps
* Setting up the blog and content-management functionality
* Deploying the website to production

## Technology Stack

### CMS & Backend

* WordPress
* PHP
* MySQL

### Frontend

* HTML
* CSS
* JavaScript
* Bootstrap
* jQuery

### WordPress Plugins

* Contact Form 7 — enquiry and contact forms
* WP Featherlight — image lightbox/gallery functionality
* WP Migrate DB — database migration and deployment workflow

### Hosting & Deployment

* HostGator
* cPanel

## Custom WordPress Development

Rather than relying entirely on a pre-built WordPress theme, the project includes a custom Aakuali Care theme with custom PHP, CSS, and JavaScript.

The theme includes reusable components for page banners, navigation, content sections, galleries, and other site elements.

A custom **Album** post type was also implemented to allow the organization to manage gallery content through the WordPress administration interface.

The project also includes custom frontend functionality for elements such as:

* Google Maps
* Hero sections/sliders
* Mobile navigation
* Search
* Responsive layouts
* Image galleries
* Content presentation

## Content Management

One of the goals of the project was to allow Aakuali Care to maintain the website without needing a developer for routine content updates.

Through the WordPress administration interface, the organization could:

* Publish blog posts
* Add and manage gallery albums
* Upload photographs
* Update website content
* Receive and respond to enquiries submitted through the website

This allowed the website to function as an ongoing communication platform rather than a static brochure site.

## Project Architecture

At a high level, the application followed a traditional WordPress architecture:

```text
                         ┌──────────────────┐
                         │      Visitors    │
                         └────────┬─────────┘
                                  │
                                  ▼
                         ┌──────────────────┐
                         │   WordPress UI   │
                         │ HTML/CSS/JS      │
                         │ Bootstrap        │
                         └────────┬─────────┘
                                  │
                    ┌─────────────┼─────────────┐
                    │             │             │
                    ▼             ▼             ▼
              ┌──────────┐ ┌───────────┐ ┌────────────┐
              │ WordPress│ │ Contact   │ │   Google   │
              │ Content  │ │ Form 7    │ │    Maps    │
              └────┬─────┘ └─────┬─────┘ └────────────┘
                   │             │
                   ▼             ▼
              ┌──────────┐  ┌────────────┐
              │  MySQL   │  │ Admin Email│
              └──────────┘  └────────────┘
```

## Deployment

The website was hosted on **HostGator** and deployed using **cPanel**.

The WordPress database was backed by MySQL, with WP Migrate DB used as part of the database migration workflow during development and deployment.


## Project Context

This was a freelance project completed for Aakuali Care.

The project is preserved here as a portfolio example of a complete website that I designed, developed, and deployed independently.

The original website is no longer live because the organization is no longer operational.

## Note

This repository contains an archived version of the project and is not intended to represent a currently maintained production website.

Sensitive configuration such as database credentials, authentication keys, API keys, and production environment configuration should **not** be committed to the repository.
