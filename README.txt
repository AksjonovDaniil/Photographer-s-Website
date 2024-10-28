# Photographer's Website

A simple photographer's portfolio website that allows users to browse the gallery and submit requests for different types of photoshoots.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)

## Features

- **Home Section**: Introduction to the photographer's website.
- **Gallery Section**: Displays sample photos from the portfolio.
- **Contact Section**: Users can submit their contact details and request a photoshoot. Information is saved in a MySQL database.
- **Popup Window**: Displays a thank you message after the form submission with the user's details.

## Installation

### Prerequisites
- **XAMPP** (or any LAMP/WAMP stack that includes Apache, MySQL, and PHP).
- **Git** (optional for cloning the repository).

### Steps

1. Clone the repository (or download the files manually):
   ```bash
   git clone https://github.com/your-repo/photographer-website.git
2. Move the project folder to your XAMPP's htdocs folder (or the root folder of your web server):
   C:\xampp\htdocs\Photographer
3. Start Apache and MySQL from XAMPP control panel.
4. Import the photographer_site.sql file (or create the necessary tables):

   Open phpMyAdmin at http://localhost/phpmyadmin/
   Create a database named photographer_site.
   Import the provided SQL file or run the necessary commands to create the table.
5. Access the website at:
   http://localhost/Photographer/index.html


### Usage
   Browse the homepage and gallery sections.
   Navigate to the "Contact" section, fill in the form with your details, and submit a request.
   The request details will be saved to the database, and you will see a confirmation popup with the information you entered.

### Technologies Used
   HTML: Structure of the website.
   CSS: Styling of the website, including the popup window.
   JavaScript: Form validation and handling the popup.
   PHP: Backend processing of form submissions.
   MySQL: Storing form submissions in the database.
