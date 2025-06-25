# Installation Guide for NanoGym CodeIgniter Application on MAMP (Mac)

This guide will help you set up and run the NanoGym CodeIgniter 4 application using MAMP on a Mac.

---

## Prerequisites

- MAMP installed on your Mac. Download from: https://www.mamp.info/en/downloads/
- PHP 7.4 or higher (MAMP includes PHP)
- MySQL (included with MAMP)
- Composer installed (https://getcomposer.org/download/)

---

## Step 1: Download the Project

You can download the project as a ZIP file from the provided link or clone the repository if available.

Example to clone (replace with your repo URL):

```bash
git clone https://github.com/yourusername/nanogym.git
```

Or download and unzip the ZIP file.

---

## Step 2: Place the Project in MAMP's `htdocs` Directory

Move the project folder to MAMP's `htdocs` directory, typically located at:

```
/Applications/MAMP/htdocs/
```

Example:

```bash
mv nanogym /Applications/MAMP/htdocs/
```

---

## Step 3: Create the Database

1. Open MAMP and start the servers (Apache and MySQL).
2. Open phpMyAdmin by clicking on "Open WebStart page" in MAMP and then selecting phpMyAdmin.
3. Create a new database, e.g., `nanogym_db`.
4. Import the database schema by running the migrations or importing a SQL file if provided.

---

## Step 4: Configure the Application

1. Navigate to the project directory:

```bash
cd /Applications/MAMP/htdocs/nanogym
```

2. Copy the environment file:

```bash
cp env .env
```

3. Edit the `.env` file to set your database connection details:

```
database.default.hostname = localhost
database.default.database = nanogym_db
database.default.username = root
database.default.password = root
database.default.DBDriver = MySQLi
```

Adjust username and password if different.

---

## Step 5: Install Dependencies

Run Composer to install dependencies:

```bash
composer install
```

---

## Step 6: Run Database Migrations

Run the migrations to create tables:

```bash
php spark migrate
```

---

## Step 7: Access the Application

Open your browser and go to:

```
http://localhost:8888/nanogym/public/
```

You should see the login page or home page of the NanoGym app.

---

## Additional Notes

- To create an initial user, you can manually insert into the `users` table or create a registration feature.
- Make sure MAMP's Apache port is set to 8888 (default) or adjust the URL accordingly.
- For any issues, check MAMP logs and PHP error logs.

---

## Download Link

[Download NanoGym CodeIgniter Project ZIP](#)  
*(Replace # with actual download URL)*

---

If you need further assistance, feel free to ask.
