<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Absence

### Completed tests

#### Frontend och design

HTML - [absence.blade.php](resources/views/absence.blade.php)

CSS - [absence.css](public/css/absence.css)

1. `cd larvaelAbsense` - Go to project folder
1. `php artisan serve` - Run to start server
1. [Frontend och design](http://localhost:8000) - Absence

#### API-Utveckling

Controller - [AbsenceController.php](app/Http/Controllers/AbsenceController.php)

Routes - [web.php](routes/web.php)

1. `cd larvaelAbsense` - Go to project folder
1. `php artisan l5-swagger:generate` - Run to generate swagger docs
1. `php artisan serve` - Run to start server
1. [Swager docs](http://localhost:8000/api/documentation#/Absence/f5da3fbd9aa69395da9010b0206fcb6d) - Swagger docs

#### Testing

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
