
<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# Sport Club Laravel

This **Sport Club Laravel** project is a web application built with Laravel to manage the operations of a sports club, including player and trainer management, match scheduling, and user authentication. Below is a detailed list of all routes used in the project.

---

## Getting Started

### Prerequisites

- **PHP** >= 8.0
- **Composer**
- **MySQL** or any preferred database
- **Node.js** and npm (optional for front-end scaffolding)

---

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/YazanM23/Sport_Club_Laravel
   cd Sport_Club_Laravel
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Set up environment variables**:
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

6. **Start the application**:
   ```bash
   php artisan serve
   ```

---

## Routes

### General Routes

- **Home**:  
  `GET /`  
  Displays the welcome page.

- **Contact Page**:  
  `GET /contact`  
  Displays the contact page.

---

### Posts Routes

- **List All Posts**:  
  `GET /posts`  
  Controller: `PostsController@index`  
  Displays a list of all posts.

- **Show Post Details**:  
  `GET /posts/{post}`  
  Controller: `PostsController@show`  
  Displays the details of a specific post.

- **Submit a Post**:  
  `POST /posts`  
  Controller: `PostsController@posts`  
  Allows submission of a new post.

---

### Matches Routes

- **View Last Match**:  
  `GET /index`  
  Controller: `ViewMatchesController@getLastMatch`  
  Displays the last match details.

- **List Matches**:  
  `GET /matches`  
  Controller: `ViewMatchesController@getMatches`  
  Displays a list of all matches.

- **Create Match Form**:  
  `GET /createMatch`  
  Controller: `MatchesController@getPlayers`  
  Displays the form to create a match.

- **Create Match**:  
  `POST /createMatch`  
  Controller: `MatchesController@createMatch`  
  Creates a new match.

---

### Players Routes

- **View Player Information**:  
  `GET /player`  
  Controller: `PlayerController@playerInformation`  
  Displays detailed information about a player.

- **Player Table Management**:
  - `GET /table`  
    Controller: `TableController@getPlayers`  
    Displays a table of all players.
  - `POST /table`  
    Controller: `TableController@insertPlayer`  
    Inserts a new player into the table.
  - `PUT /table/{username}`  
    Controller: `TableController@updatePlayer`  
    Updates a player's information.
  - `DELETE /table/{username}`  
    Controller: `TableController@deletePlayer`  
    Deletes a player from the table.

---

### Trainers Routes

- **View Trainer Information**:  
  `GET /trainer`  
  Displays trainer information.

- **Trainer Signup**:  
  `POST /signup/trainer`  
  Controller: `SignUpController@signupTrainer`  
  Allows trainers to sign up.

---

### Authentication Routes

- **Login**:  
  `POST /login`  
  Controller: `LoginController@login`  
  Handles user login.

- **Sign Out**:  
  `GET /signout`  
  Controller: `SignOutController@logout`  
  Handles user logout.

- **Player Signup**:  
  `POST /signup/player`  
  Controller: `SignUpController@signupPlayer`  
  Allows players to sign up.

---

### Views

- **Matches Page**:  
  `GET /matches`  
  Displays the matches page.

- **Players Page**:  
  `GET /players`  
  Displays the players page.

- **Blog Page**:  
  `GET /blog`  
  Displays the blog page.

- **Contact Page**:  
  `GET /contact`  
  Displays the contact page.

- **Sign-In Page**:  
  `GET /signin`  
  Displays the sign-in page.

- **Sign-Up Page**:  
  `GET /signup`  
  Displays the sign-up page.

- **Trainer Form**:  
  `GET /trainerForm`  
  Displays the trainer form page.

- **Player Form**:  
  `GET /playerForm`  
  Displays the player form page.

---

## Additional Information

These routes are designed to provide functionality for managing a sports club, including player and trainer management, match scheduling, and user authentication. Each route is tied to a specific controller and view to handle its functionality.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Contact

For queries or feedback, reach out:

- **Name**: Yazan Mansour
- **Email**: Yazan.mansour2003@gmail.com
