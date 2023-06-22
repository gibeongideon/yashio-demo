

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/gibeongideon/yashio-demo">
    <img src="images/logo1.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">yashio-demo</h3>

  <p align="center"> 
    Just A simplified Practice Blog Build with Laravel
    <br />
    <a href="https://github.com/gibeongideon/yashio-demo"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://darispin.ga">View Demo</a>
    ·
    <a href="https://github.com/gibeongideon/yashio-demo/issues">Report Bug</a>
    ·
    <a href="https://github.com/gibeongideon/yashio-demo/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>

    <li><a href="#usage">Usage</a></li>

  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project
Simple demo Blog

[![Product Name Screen Shot][product-screenshot]](https://example.com)

Here's a blank template to get started:


### Built With PHP & Laravel

## Usage

Routes:

GET|HEAD api/user .................................................................................................................... GET|HEAD authors/{author} ............................................................................................... postbyauthor GET|HEAD categories/{category} ....................................................................................... postsbycategory GET|HEAD confirm-password ................................................. password.confirm › Auth\ConfirmablePasswordController@show POST confirm-password ................................................................... Auth\ConfirmablePasswordController@store GET|HEAD dashboard ......................................................................................................... dashboard GET|HEAD dashboard/post/create .................................................................... createpost › PostController@create
POST dashboard/post/store ....................................................................... storepost › PostController@store POST email/verification-notification ...................... verification.send › Auth\EmailVerificationNotificationController@store GET|HEAD forgot-password .................................................. password.request › Auth\PasswordResetLinkController@create
POST forgot-password ..................................................... password.email › Auth\PasswordResetLinkController@store GET|HEAD latestposts/{category_id?} ..................................................................... index › HomeController@index GET|HEAD login .................................................................... login › Auth\AuthenticatedSessionController@create
POST login ............................................................................. Auth\AuthenticatedSessionController@store POST logout ................................................................. logout › Auth\AuthenticatedSessionController@destroy PUT password ................................................................... password.update › Auth\PasswordController@update GET|HEAD posts ....................................................................................... allposts › PostController@index GET|HEAD posts/{post} .............................................................................. postdetails › PostController@show GET|HEAD profile ............................................................................... profile.edit › ProfileController@edit PATCH profile ........................................................................... profile.update › ProfileController@update DELETE profile ......................................................................... profile.destroy › ProfileController@destroy GET|HEAD register .................................................................... register › Auth\RegisteredUserController@create POST register ................................................................................ Auth\RegisteredUserController@store POST reset-password ............................................................ password.store › Auth\NewPasswordController@store GET|HEAD reset-password/{token} ................................................... password.reset › Auth\NewPasswordController@create GET|HEAD sanctum/csrf-cookie ....................................... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show GET|HEAD tags ....................................................................................... tags.index › TagController@index POST tags ....................................................................................... tags.store › TagController@store GET|HEAD tags/create .............................................................................. tags.create › TagController@create PUT|PATCH tags/{tag} ............................................................................... tags.update › TagController@update DELETE tags/{tag} ............................................................................. tags.destroy › TagController@destroy GET|HEAD tags/{tag}/edit .............................................................................. tags.edit › TagController@edit GET|HEAD verify-email ................................................... verification.notice › Auth\EmailVerificationPromptController GET|HEAD verify-email/{id}/{hash} ................................................... verification.verify › Auth\VerifyEmailController


<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/gibeongideon/yashio-demo/issues) for a list of proposed features (and known issues).


<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License



<!-- CONTACT -->
## Contact

Your Name - [@twitter_handle](https://twitter.com/twitter_handle) - email

Project Link: [https://github.com/gibeongideon/yashio-demo](https://github.com/gibeongideon/yashio-demo)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements

* []()
* []()
* []()





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/gibeongideon/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/gibeongideon/repo/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/gibeongideon/repo.svg?style=for-the-badge
[forks-url]: https://github.com/gibeongideon/repo/network/members
[stars-shield]: https://img.shields.io/github/stars/gibeongideon/repo.svg?style=for-the-badge
[stars-url]: https://github.com/gibeongideon/repo/stargazers
[issues-shield]: https://img.shields.io/github/issues/gibeongideon/repo.svg?style=for-the-badge
[issues-url]: https://github.com/gibeongideon/repo/issues
[license-shield]: https://img.shields.io/github/license/gibeongideon/repo.svg?style=for-the-badge
[license-url]: https://github.com/gibeongideon/repo/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/gibeongideon
