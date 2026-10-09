# 🍽️ FlavorHub — Recipe Sharing Platform

## 📖 Project Overview

**FlavorHub** is a web application designed to help users discover cooking recipes and explore new culinary ideas through a simple, modern, and user-friendly interface.

The platform allows users to browse recipes, search for specific dishes, filter recipes by category, view detailed cooking instructions, and manage their favorite recipes through a personal account.

FlavorHub was developed as part of the **Projet fédéré – Méthode Agile** course by a team of four members, following an Agile approach to collaborative software development.

## 🎯 Project Objectives

The main objectives of FlavorHub are to:

- Provide an accessible platform for discovering cooking recipes.
- Make it easy to search for recipes and filter them by category.
- Display detailed information about ingredients and preparation steps.
- Allow users to create accounts and authenticate themselves.
- Enable authenticated users to manage their favorite recipes.
- Apply software development concepts within an academic team project.
- Encourage collaboration, iterative development, and continuous improvement through the Agile methodology.

## ✨ Main Features

### 🍲 Recipe Discovery
- Browse a collection of cooking recipes.
- Explore recipes organized by category.
- Discover popular or trending recipes.

### 🔎 Search and Filtering
- Search for recipes using keywords.
- Filter recipes by category, such as starters, main courses, and desserts.

### 📋 Recipe Details
- View recipe descriptions.
- Explore ingredient lists and preparation instructions.
- View cooking time, serving information, and difficulty when available.

### 👤 User Authentication
- Create a user account.
- Log in and log out.
- Access personalized functionality when authenticated.

### ❤️ Favorites Management
- Add recipes to favorites.
- Remove recipes from favorites.
- Store favorite recipes in the database for registered users.

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Structure of the web pages |
| CSS3 | Styling and user interface design |
| JavaScript | Interactive features, search, filtering, and recipe display |
| PHP | Server-side logic and user authentication |
| MySQL | Database management |
| XAMPP | Local development environment |
| Git | Version control |
| GitHub | Source code hosting and collaboration |

## 🗂️ Project Structure

```text
FlavorHub/
├── css/                  # Stylesheets
├── data/                 # Recipe data
├── js/                   # JavaScript functionality
├── libs/                 # Supporting libraries
├── pages/                # Authentication and related pages
├── php/                  # Backend scripts and configuration
├── index.php             # Main recipe discovery page
├── recipe.php            # Recipe details page
├── database.sql          # Database creation script
└── README.md             # Project documentation
```

## ⚙️ Installation and Setup

### Prerequisites

Before running the application, make sure you have:

- A computer running Windows or another compatible operating system.
- [XAMPP](https://www.apachefriends.org/) installed.
- PHP and MySQL/MariaDB available through XAMPP.
- A modern web browser.

### Step 1: Download the Project

Clone the repository:

```bash
git clone https://github.com/YOUR-USERNAME/FlavorHub.git
```

Alternatively, download the repository as a ZIP file and extract it.

Replace `YOUR-USERNAME` with your GitHub username.

### Step 2: Configure XAMPP

1. Copy the project folder into the XAMPP `htdocs` directory.
2. Make sure the folder is named `FlavorHub`.
3. Start Apache and MySQL from the XAMPP Control Panel.

The project should be located at:

```text
C:\xampp\htdocs\FlavorHub
```

### Step 3: Configure the Database

1. Open phpMyAdmin at `http://localhost/phpmyadmin`.
2. Import the `database.sql` file.
3. Configure the database connection in `php/config.php`.
4. Make sure the database name and credentials match your local MySQL configuration.

Do not publish real passwords or other sensitive configuration details in a public repository.

### Step 4: Run the Application

Open your browser and visit:

```text
http://localhost/FlavorHub/
```

The application should load through the local Apache server.

## 🔄 Development Methodology

FlavorHub was developed as part of the **Projet fédéré – Méthode Agile** academic course.

The project was carried out collaboratively by a team of four members, with the objective of applying Agile principles to software development.

The Agile approach supports:

- Collaborative teamwork.
- Incremental development.
- Adaptation to changing requirements.
- Continuous improvement.
- Communication and coordination between team members.

The specific activities, iterations, and deliverables depend on the work carried out by the project team.

## 👨‍💻 My Role and Contribution

**Role: Frontend and Backend Developer**

My responsibilities in the FlavorHub project included working on both the frontend and backend aspects of the application.

### Frontend Development
- Working on the structure of web pages using HTML.
- Styling the interface using CSS.
- Implementing interactive functionality using JavaScript.
- Contributing to recipe discovery, search, filtering, and recipe detail presentation.

### Backend Development
- Working with PHP for server-side functionality.
- Contributing to user authentication.
- Integrating the application with a MySQL database.
- Working on the management of users and favorite recipes.

## 👥 Project Team

- **Team size:** 4 members.
- **Project type:** Academic web development project.
- **Course:** Projet fédéré – Méthode Agile.
- **My role:** Frontend and Backend Developer.

Team members and their respective responsibilities can be added here.

## 🚀 Future Improvements

Possible future improvements include:

- Allowing users to submit and publish their own recipes.
- Adding recipe ratings and reviews.
- Improving recipe recommendations.
- Enhancing mobile responsiveness and accessibility.
- Adding more advanced search options.
- Deploying the application to a hosting service that supports PHP and MySQL.

These improvements are potential extensions and are not necessarily implemented in the current version.

## 🎓 Academic Context

FlavorHub was created as part of an academic project in web development and Agile software engineering.

The project provides practical experience with frontend development, backend programming, database integration, and collaborative software development.

## 📄 License

This project was developed for educational purposes.

A specific open-source license can be added if the project is intended to be distributed or reused under defined terms.
