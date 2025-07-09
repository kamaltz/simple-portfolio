@echo off
echo Running Laravel Tests...
echo.

echo Setting up environment...
copy .env.example .env
php artisan key:generate

echo.
echo Running Unit Tests...
php artisan test --testsuite=Unit

echo.
echo Running Feature Tests...
php artisan test --testsuite=Feature

echo.
echo Running All Tests with Coverage...
php artisan test --coverage-text

echo.
echo Running Code Style Check...
./vendor/bin/pint --test

echo.
echo Tests completed!
pause