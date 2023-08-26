# Vuln Web Lab
## Description 
A simple lab that has been designed intentionally with vulnerabilities for training purposes.

## Installation
Follow these steps to install and set up the lab:
1. Install software server(PHP,MYSQL).
2. Install composer from https://getcomposer.org/download/
3. Go to phpmyadmin and create database by name 'lab'
```sh
git clone https://github.com/0xx01/Vuln-Web-Lab.git
cd Vuln-Web-Lab/
composer install # Install dependencies using Composer.
php artisan migrate  # Run database migrations.
cp .env.example .env
```
4. Open this file and add you database name

## Usage
To run the project, follow these steps:
1. Start the development server.
```sh
php artisan serve
```
2. Finally, Open a web browser and visit http://localhost:8000 to access the application.

3. Explore the various features and functionalities of the lab. Take note of the intentional vulnerabilities and use them for training purposes.
![Screenshot (349)](https://github.com/0xx01/Vuln-Web-Lab/assets/130947610/f5b28a9c-8003-4e7d-b2e8-43b70ec88829)
## Contribute
If you have any problem or new idea, feel free to create an issue, or pull a request.
