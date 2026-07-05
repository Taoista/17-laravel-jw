# 🔐 Tutorial JWT con Laravel 13 | Autenticación de APIs

<p align="center">
  <img src="https://i.ibb.co/Ps2tL41F/17-JWT-laravel-13.png" width="750" />
</p>

🚀 En este tutorial explico cómo implementar autenticación con **JWT (JSON Web Token)** en **Laravel 13**, desde cero, entendiendo tanto la teoría como la práctica.

Aprenderás a proteger APIs, generar tokens, manejar login/logout y cómo JWT encaja en arquitecturas de microservicios.

---

## 📺 Video del tutorial

👉 https://youtu.be/Jk9TP9GOKdI

---

## 📌 Repositorio del proyecto

👉 https://github.com/Taoista/17-laravel-jwt

---

## 🌐 Mi sitio web

👉 https://alberto-olave.cl

---

## 💻 GitHub

👉 https://github.com/Taoista

---

## 🧠 Temas del tutorial

- ¿Qué es JWT y cómo funciona?
- Instalación de JWT en Laravel 13
- Configuración del guard API
- Login y generación del token
- Protección de rutas con middleware
- Uso de Bearer Token en headers
- Refresh e invalidación del token
- JWT en arquitectura de microservicios

---

## ⚙️ Comandos utilizados

```bash
composer create-project laravel/laravel .

composer require tymon/jwt-auth

php artisan vendor:publish --provider="Tymon\\JWTAuth\\Providers\\LaravelServiceProvider"

php artisan jwt:secret

php artisan migrate

User::create([
    'name' => 'Alberto',
    'email' => 'alberto@email.com',
    'password' => Hash::make('123456')
]);

php artisan make:controller Api\AuthController
