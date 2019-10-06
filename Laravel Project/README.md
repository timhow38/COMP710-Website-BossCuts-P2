<!--
BossCuts Documentation
By: Timothy. H | 14405064
-->

<div align="center">

<!-- Quick Links -->
[![img-version-badge]][git-repo]
[![img-server-badge]][git-server]

</div>

<!-- SectionStart: Body -->

 ## BossCuts - About
 
 - Project created by <u>@Timothy.H | 14405064</u>
  
 ## Project Setup
- Clone the repository.
  - Command:__git clone__

- Copy __.env.example__ file to __.env__ and edit database credentials there. 
  - Command: __cp .env.example .env__

- Download & Install Libraries.
  - Command: __composer install__

- Generate .env Key
 - Run __php artisan key:generate__

- Setup Database from Migrations
 - Run __php artisan migrate --seed__ (it has some seeded data for testing)

- Configure __httpd-vhosts.conf__.
- Path: __C:\xampp\apache\conf\extra\httpd-vhosts.conf__
- <VirtualHost *:80>
    - DocumentRoot "C:/xampp/htdocs/BossCuts/public"
    - ServerName bosscuts.localhost
- </VirtualHost>
Launch the main URL and login with admin credentials
credentials
__admin@admin.com__ - __password__



<!--SectionEnd: Body -->

<!--
Repo References
-->
[git-repo]:https://github.com/timhow38/COMP710-S2
[git-server]:https://laravel.com/
<!--
Link References
-->
[img-version-badge]:https://img.shields.io/badge/RELEASE-V1.0.4-blue?logo=github&style=for-the-badge
[img-server-badge]:https://img.shields.io/badge/FRAMEWORK-LARAVEL-brightgreen?logo=github&style=for-the-badge
