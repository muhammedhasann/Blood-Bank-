<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Blood Bank Website. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT LOGO -->
<div align="center">
  <h3>Blood Bank Website</h3>

  <p>
    The Blood Bank Website is a Laravel-based web application that allows users to donate blood, search for blood donors, and manage their profiles. The website provides an easy and efficient platform for blood donation and helps connect donors with recipients in need of blood.
    <br />
    <a href="http://yourwebsite.com">View Demo</a>
    ·
    <a href="https://github.com/yourusername/blood-bank/issues">Report Bug</a>
    ·
    <a href="https://github.com/yourusername/blood-bank/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#features">Features</a>
    </li>
    <li>
      <a href="#installation">Installation</a>
      <ul>
        <li><a href="#clone-the-repository">Clone the repository</a></li>
        <li><a href="#install-dependencies">Install dependencies</a></li>
        <li><a href="#create-env-file">Create a new .env file</a></li>
        <li><a href="#generate-app-key">Generate the application key</a></li>
        <li><a href="#setup-database">Set up your database</a></li>
        <li><a href="#run-migrations-and-seeders">Run the database migrations and seeders</a></li>
        <li><a href="#start-development-server">Start the development server</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#credits">Credits</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- FEATURES -->
## Features

- **User Registration and Login:** Users can register and log in to the website to access personalized features.
- **Blood Donation:** Users can register as blood donors and provide their blood type, contact details, and location.
- **Search for Blood Donors:** Registered users can search for blood donors based on blood type and location.
- **User Profile Management:** Users can view and edit their profiles, including blood type, contact details, and location.
- **Admin Dashboard:** Blood bank staff can access an admin dashboard to manage user data and donor information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- ABOUT THE PROJECT -->
## About The Blood Bank Website

[![Product Name Screen Shot][product-screenshot]](https://example.com)

The Blood Bank Website is a Laravel-based web application that allows users to donate blood, search for blood donors, and manage their profiles. The website provides an easy and efficient platform for blood donation and helps connect donors with recipients in need of blood.

### Features

- **User Registration and Login:** Users can register and log in to the website to access personalized features.
- **Blood Donation:** Users can register as blood donors and provide their blood type, contact details, and location.
- **Search for Blood Donors:** Registered users can search for blood donors based on blood type and location.
- **User Profile Management:** Users can view and edit their profiles, including blood type, contact details, and location.

Use the `BLANK_README.md` to get started.

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- INSTALLATION -->
## Installation

### Clone the repository:
```bash
git clone https://github.com/yourusername/blood-bank.git
```

## Install dependencies:
```bash
cd blood-bank
composer install
npm install
```
## Create a new .env file:
```bash
cp .env.example .env
```
## Generate the application key:

```bash
php artisan key:generate
```
## Run the database migrations and seeders:


```bash
php artisan migrate --seed
```

## Start the development server:


```bash
php artisan serve
```
Access the website at http://127.0.0.1:8000/

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTRIBUTING -->
## Contributing

Contributions to the Blood Bank Website are welcome! If you find any bugs, have feature suggestions, or want to improve the code, feel free to open an issue or submit a pull request.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

This project is open-source and available under the MIT License.

<p align="right">(<a href="#readme-top">back to top</a>)</p>





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 