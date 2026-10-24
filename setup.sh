#!/bin/bash
# Salon Management — Quick Setup Script
# Run this once after installing PHP & Composer

set -e

PROJECT="/Users/cameosky/Documents/Salon_Management_Final"
cd "$PROJECT"

echo "=== Salon Management Final — Setup ==="

# 1. Copy .env
if [ ! -f .env ]; then
  cp .env.example .env
  echo "✓ .env created"
fi

# 2. Generate app key
php artisan key:generate
echo "✓ App key generated"

# 3. Run migrations
php artisan migrate --force
echo "✓ Database migrated"

# 4. Seed (optional test user)
php artisan db:seed --force
echo "✓ Database seeded"

# 5. Start server
echo ""
echo "=== Starting server at http://localhost:8000 ==="
echo "  Homepage:    http://localhost:8000"
echo "  Appointment: http://localhost:8000/appointment"
echo "  Admin Panel: http://localhost:8000/admin"
echo ""
php artisan serve
