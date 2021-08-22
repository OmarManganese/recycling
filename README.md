[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]


<br />

  <h3 align="center">Recycling</h3>

  <p align="center">
    A RESTful API for to annotate recycling days
    <br />
    



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

A simple RESTful API, developed with Laravel, to annotate the days and hours in which the separate waste collection is made.

### Built With

* [Laravel](https://laravel.com/)

<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these steps:

### Prerequisites

* [composer](https://getcomposer.org/)
### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/OmarManganese/recycling.git
   ```
2. Install all the dependencies using composer
   ```sh
   composer install
   ```
3. Copy the example env file and make the required configuration changes in the .env file
   ```sh
   cp .env.example .env
   ```

4. Run the database migrations (Set the database connection in .env before migrating).
In the "days" and "recycling_materials" tables will also be inserted the data automatically.
   ```sh
   php artisan migrate
   ```
   
5. (Optional) You can seed the "annotations" table with some data for testing purposes with
   ```sh
   php artisan migrate --seed
   ```
   or, if you already ran the migrate command, with
   ```sh
   php artisan db:seed
   ```
6. Start the local development server
   ```sh
   php artisan migrate --seed
   ```
   You can now access the server at http://localhost:8000


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->
## Contact

Omar Manganese - [Facebook](https://www.facebook.com/omar.manganese) - omarmanganese@gmail.com

Project Link: [https://github.com/OmarManganese/recycling](https://github.com/OmarManganese/recycling)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [Best-README-Template](https://github.com/othneildrew/Best-README-Template)



[contributors-shield]: https://img.shields.io/github/contributors/OmarManganese/recycling?style=for-the-badge
[contributors-url]: https://github.com/OmarManganese/recycling/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/OmarManganese/recycling?style=for-the-badge
[forks-url]: https://github.com/OmarManganese/recycling/network/members
[stars-shield]: https://img.shields.io/github/stars/OmarManganese/recycling?style=for-the-badge
[stars-url]: https://github.com/OmarManganese/recycling/stargazers
[issues-shield]: https://img.shields.io/github/issues/OmarManganese/recycling?style=for-the-badge
[issues-url]: https://github.com/OmarManganese/recycling/issues
[license-shield]: https://img.shields.io/github/license/OmarManganese/recycling?style=for-the-badge
[license-url]: https://github.com/OmarManganese/recycling/blob/main/LICENSE.txt