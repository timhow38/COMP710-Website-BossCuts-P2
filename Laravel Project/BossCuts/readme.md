# LaraAppointments: Laravel 5.5 based system for various small businesses to manage their appointment calendar.

It is a demo project for demonstrating what can be generated with [QuickAdminPanel](https://quickadminpanel.com) tool.
LaraAppointments is all generated with __QuickAdmin__ except for custom code for __Calendar__ functionality.

## Clickable live-demo

[demo-appointments.quickadminpanel.com](http://demo-appointments.quickadminpanel.com)

- __Admin Email__: admin@admin.com
- __Admin Pass__: password

![Laravel appointments screenshot](https://quickadminpanel.com/assets/pages/demos/demo-appointments-01.png)

## Install & Run
- Copy .env.example file to .env and edit database credentials there __cp .env.example .env__
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL and login with default credentials __admin@admin.com__ - __password__
