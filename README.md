# Simple Portfolio - Dena Kamal D.

Portfolio sederhana menggunakan Laravel dengan tampilan modern dan glassmorphism design.

## 🚀 Features

- **Modern UI**: Glassmorphism design dengan animasi smooth
- **Responsive**: Tampilan optimal di semua device
- **CI/CD**: Automated testing dan deployment
- **Docker**: Containerized application
- **Testing**: Comprehensive unit dan feature tests

## 🛠️ Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, Font Awesome
- **Database**: SQLite (development), MySQL (production)
- **Containerization**: Docker
- **CI/CD**: GitHub Actions

## 📦 Installation

### Local Development

```bash
# Clone repository
git clone <repository-url>
cd simple-portfolio

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Build assets
npm run build

# Run development server
php artisan serve
```

### Docker

```bash
# Build image
docker build -t simple-portfolio .

# Run container
docker run -p 8000:8000 simple-portfolio
```

## 🧪 Testing

### Run All Tests
```bash
php artisan test
```

### Run with Coverage
```bash
php artisan test --coverage-text
```

### Windows Script
```bash
scripts\run-tests.bat
```

## 🚀 Deployment

### Manual Deployment
```bash
scripts\deploy.bat
```

### Automated Deployment
Push ke branch `main` akan otomatis trigger CI/CD pipeline yang akan:
1. Menjalankan semua tests
2. Build Docker image
3. Push ke Docker Hub

## 📊 CI/CD Pipeline

- **Tests**: Berjalan di PHP 8.1 & 8.2
- **Code Quality**: Laravel Pint untuk code styling
- **Security**: Automated security scanning
- **Deployment**: Otomatis ke Docker Hub

## 🎨 Design Features

- Glassmorphism effect dengan backdrop blur
- Animated background dengan floating elements
- Hover animations dan transitions
- Gradient text effects
- Social media icons dengan hover states

## 📱 Profile Information

- **Nama**: Dena Kamal D.
- **NIM**: 2206090
- **Jurusan**: Informatika
- **Institusi**: Institut Teknologi Garut
- **Passion**: Full Stack Developer

## 🔧 Scripts

- `scripts/run-tests.bat` - Menjalankan semua tests
- `scripts/deploy.bat` - Manual deployment

## 📄 License

MIT License