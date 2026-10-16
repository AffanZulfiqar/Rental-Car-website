<div align="center">

# 🚗 Rental Car Website

**A full-stack car rental platform built with PHP & MySQL — browse, book, pay, and manage fleets from one place.**

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

[Features](#-features) · [Tech Stack](#-tech-stack) · [Getting Started](#-getting-started) · [Database](#-database) · [Project Structure](#-project-structure) · [Roadmap](#-roadmap)

</div>

---

## 📖 About

**Rental Car Website** is a web application that lets customers search for available cars, reserve them, pay online, and return them — while giving administrators a dashboard to manage the entire fleet, bookings, users, and customer feedback.

It runs locally on a standard **XAMPP** (Apache + MySQL + PHP) stack, so there is nothing exotic to install.

---

## ✨ Features

### 👤 For Customers
| | Feature | Description |
|---|---|---|
| 🔐 | **Register & Login** | Create an account and sign in securely |
| 🔎 | **Search Cars** | Search the catalogue; only available cars are shown |
| 📋 | **Car Details** | View full details and images for each vehicle |
| 📅 | **Book a Car** | Reserve a vehicle and track booking status |
| ❌ | **Cancel Booking** | Cancel a reservation you no longer need |
| 💳 | **Payment** | Pay for your rental with a confirmation page |
| ↩️ | **Return a Car** | Return your rented vehicle |
| 💬 | **Feedback** | Send feedback to the rental company |

### 🛠️ For Admins
| | Feature | Description |
|---|---|---|
| 📊 | **Dashboard** | Central hub for all management tasks |
| ➕ | **Add Cars** | Add new vehicles with an image upload |
| 🗑️ | **Delete Cars** | Remove vehicles from the fleet |
| ✅ | **Approve / Reject** | Accept or reject booking requests |
| 📦 | **Manage Returns** | View and process returned cars |
| 👥 | **Manage Users** | View and delete registered users |
| 📝 | **View Feedback** | Read customer feedback |

---

## 🧰 Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML5, CSS3
- **Server:** Apache via [XAMPP](https://www.apachefriends.org/)

---

## 🚀 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Git (optional, for cloning)

### Installation

**1. Clone the repository into XAMPP's web root**

```bash
cd C:/xampp/htdocs        # macOS/Linux: /opt/lampp/htdocs
git clone https://github.com/AffanZulfiqar/Rental-Car-website.git
```

**2. Start the servers**

Open the XAMPP Control Panel and start **Apache** and **MySQL**.

**3. Create the database**

1. Go to [`http://localhost/phpmyadmin`](http://localhost/phpmyadmin)
2. Create a new database (e.g. `carproject`)
3. Open the **Import** tab and choose [`carproject.sql`](carproject.sql) from the project root
4. Click **Go**

**4. Configure the connection**

Open [`connection.php`](connection.php) and make sure the host, username, password, and database name match your local setup. XAMPP defaults are usually:

```php
Host:     localhost
Username: root
Password: (empty)
Database: carproject   // use the name you created in step 3
```

**5. Run it**

Visit 👉 **http://localhost/Rental-Car-website/**

> If Apache is running on a custom port (e.g. 8080), use `http://localhost:8080/Rental-Car-website/` instead.

---

## 🗄️ Database

The schema is provided in [`carproject.sql`](carproject.sql). The main **car** table looks like this:

| Column | Type | Notes |
|---|---|---|
| `car_id` | INT | Primary key, auto-increment |
| `car_make` | VARCHAR(255) | e.g. Toyota |
| `car_model` | VARCHAR(255) | e.g. Corolla |
| `car_year` | INT | Model year |
| `car_color` | VARCHAR(255) | |
| `car_price` | INT | Rental price |
| `car_available` | BOOLEAN | Only available cars appear in listings |
| `car_image` | VARCHAR(255) | Uploaded image path |
| `car_description` | VARCHAR(255) | Short description |

---

## 📁 Project Structure

```
Rental-Car-website/
├── index.php            # Landing / car listing
├── register.php         # User registration
├── cardetails.php       # Single car view
├── booking.php          # Create a booking
├── bookinstatus.php     # Track booking status
├── cancelbooking.php    # Cancel a booking
├── payment.php          # Payment page
├── process.php          # Payment processing
├── psucess.php          # Payment success page
├── Feedback.php         # Customer feedback
│
├── adminlogin.php       # Admin sign-in
├── admindash.php        # Admin dashboard
├── addcar.php           # Add a car
├── upload.php           # Image upload handler
├── deletecar.php        # Delete a car
├── adminvehicle.php     # Manage vehicles
├── adminbook.php        # Manage bookings
├── approve.php          # Approve / reject bookings
├── adminreturn.php      # Manage returns
├── adminusers.php       # Manage users
├── deleteuser.php       # Delete a user
│
├── connection.php       # Database connection
└── carproject.sql       # Database schema & data
```

---

## 🗺️ Roadmap

- [ ] Hash passwords and move DB credentials out of source control
- [ ] Use prepared statements throughout to prevent SQL injection
- [ ] Add date-range availability checks
- [ ] Integrate a real payment gateway
- [ ] Responsive / mobile-first redesign
- [ ] Email notifications for booking updates

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the project
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m "Add amazing feature"`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request



<div align="center">

### ⭐ Show your support

If this project helped you, please give it a star!

</div>
