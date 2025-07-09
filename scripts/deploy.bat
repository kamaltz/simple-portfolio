@echo off
echo Starting deployment process...
echo.

echo Building Docker image...
docker build -t kamaltz/nadhif-porto:latest .

echo.
echo Running tests in container...
docker run --rm kamaltz/nadhif-porto:latest php artisan test

echo.
echo Pushing to Docker Hub...
docker push kamaltz/nadhif-porto:latest

echo.
echo Deployment completed!
pause