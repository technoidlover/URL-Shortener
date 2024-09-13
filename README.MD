# URL Shortener

This project is a URL shortener application.

## Running Locally with XAMPP

Follow these steps to set up and run the project locally using XAMPP.

### Prerequisites

- XAMPP installed on your machine.
- MySQL and Apache modules running in XAMPP.

### Step-by-Step Guide

1. **Start XAMPP:**
   - Open XAMPP Control Panel.
   - Start the Apache and MySQL modules.

2. **Set Up the Database:**
   - Open your web browser and go to `http://localhost/phpmyadmin`.
   - Create a new database (e.g., `url_shortener`).
   - Import the `db.sql` file into the newly created database:
     - Click on the database you just created.
     - Go to the "Import" tab.
     - Click "Choose File" and select the `db.sql` file.
     - Click "Go" to import the database schema and data.

3. **Project Directory:**
   - Place your project files in the following directory: `C:\xampp\htdocs\url_short`.

4. **Configure the Project:**
   - Ensure your project is configured to connect to the MySQL database you set up.
   - Update any configuration files (e.g., `config.php`) with the correct database credentials.

5. **Access the Project:**
   - Open your web browser and go to `http://localhost/url_short`.

You should now be able to see and use the URL shortener application.

## Troubleshooting

- If you encounter any issues, ensure that the Apache and MySQL modules are running in XAMPP.
- Check the database connection settings in your project configuration files.

Feel free to reach out if you have any questions or need further assistance.