# SurgeAds_Media
E-commerce Site for Pet Store

I’m currently working on developing an e-commerce site for a pet store. My efforts are concentrated on enhancing its features and functionality. Stay tuned for updates on this ongoing project!
Table of Contents

    Overview
    Features
    Technologies Used
    Setup
    How to Run
    Usage
    Contributing
    License

Overview

This project is an ongoing effort to create a fully functional e-commerce website for a pet store. The primary goal is to provide a seamless online shopping experience for customers looking to purchase pet products. The site will feature a variety of functionalities including product listings, a shopping cart, user authentication, and secure checkout.
Features

    Product Listings: Display a variety of pet products with detailed descriptions, images, and prices.
    Shopping Cart: Allows customers to add products to their cart and manage their selections.
    User Authentication: Enables users to create accounts, log in, and manage their profiles.
    Secure Checkout: Provides a secure and seamless checkout process for purchasing products.
    Responsive Design: Ensures the site is accessible and user-friendly on all devices.

Technologies Used

    HTML, CSS, JavaScript: Core technologies for front-end development.
    Bootstrap & Tailwind CSS: CSS frameworks for responsive design and styling.
    Django: Python-based web framework for back-end development.
    SQLite: Lightweight database for storing user and product information.
    Paystack: Payment gateway for handling secure transactions.

Setup

To set up and run this project on your local machine, follow these steps:

    Clone the Repository:

    bash

git clone https://github.com/your-username/pet-store-ecommerce-site.git
cd pet-store-ecommerce-site

Create and Activate Virtual Environment:

bash

python -m venv venv
source venv/bin/activate  # On Windows, use `venv\Scripts\activate`

Install Dependencies:

bash

pip install -r requirements.txt

Set Up Environment Variables:
Create a .env file in the project root directory and add any necessary environment variables.

makefile

SECRET_KEY=your_secret_key
DEBUG=True
PAYSTACK_SECRET_KEY=your_paystack_secret_key

Apply Migrations:

bash

    python manage.py migrate

How to Run

    Start the Development Server:

    bash

    python manage.py runserver

    Access the Website:
    Open your web browser and go to http://127.0.0.1:8000/ to view the site.

Usage

    Browse Products:
        Navigate to the home page to see a list of available pet products.
        Click on a product to view its details.

    Add to Cart:
        On the product detail page, click "Add to Cart" to add the product to your shopping cart.
        View your cart to see selected items.

    User Authentication:
        Register for a new account or log in to an existing account.
        Manage your profile and view order history.

    Checkout:
        Go to your cart and click "Checkout" to start the purchase process.
        Enter your payment information and complete the purchase.

Contributing

Contributions are welcome! If you have suggestions or improvements, feel free to create an issue or submit a pull request.
License

This project is licensed under the MIT License - see the LICENSE file for details.
