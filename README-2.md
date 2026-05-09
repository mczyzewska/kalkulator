# 🧮 Kalkulator Naukowy — Laravel

> **Projekt akademicki · Laravel 12 · PHP 8.2 · Tailwind CSS**  
> Webowy kalkulator naukowy z zapisem historii obliczeń w bazie danych.

---

## 📋 Opis projektu

Aplikacja webowa zbudowana w **Laravel**, realizująca funkcje kalkulatora naukowego. Każde obliczenie jest automatycznie zapisywane w bazie danych, a użytkownik może przeglądać historię ostatnich 10 wyników.

---

## ✨ Funkcjonalności

### 🔢 Obsługiwane operacje

| Kategoria | Operacje |
|-----------|---------|
| **Algebraiczne** | Silnia (`n!`), Ciąg Fibonacciego, Potęgowanie (`xⁿ`), Pierwiastek (`ⁿ√x`) |
| **Trygonometryczne** | sin, cos, tan, arcsin, arccos, arctan |
| **Inne** | Logarytm naturalny (`ln`), Funkcja wykładnicza (`eˣ`) |

### 📜 Historia obliczeń
- Zapis każdej operacji w bazie danych (operacja, dane wejściowe, wynik)
- Podgląd 10 ostatnich obliczeń

---

## 🗄️ Model danych

| Model | Pola | Opis |
|-------|------|------|
| `Calculation` | `operation`, `input`, `result` | Rekord pojedynczego obliczenia |

---

## 🔗 Endpointy

| Metoda | URL | Opis |
|--------|-----|------|
| GET | `/calculator` | Widok kalkulatora |
| POST | `/calculator` | Wykonanie obliczenia |
| GET | `/history` | Historia ostatnich 10 obliczeń |

---

## 🛠️ Stack technologiczny

| Technologia | Wersja | Zastosowanie |
|-------------|--------|-------------|
| **Laravel** | 12.x | Backend, routing, ORM |
| **PHP** | 8.2+ | Logika obliczeń |
| **Tailwind CSS** | 4.x | Stylowanie interfejsu |
| **Vite** | 7.x | Bundler zasobów |
| **SQLite / MySQL** | — | Przechowywanie historii obliczeń |

---

## 🚀 Instalacja

### Wymagania
- PHP >= 8.2
- Composer
- Node.js >= 18

### Kroki

```bash
# 1. Sklonuj repozytorium
git clone https://github.com/[twoj-login]/laravel-calculator.git
cd laravel-calculator

# 2. Zainstaluj zależności, skonfiguruj .env i uruchom migracje
composer run setup

# 3. Uruchom serwer deweloperski
composer run dev
```

Aplikacja będzie dostępna pod adresem `http://localhost:8000`.

---

## 🧪 Testy

```bash
composer run test
```

---

## 👤 Autor

**[Imię i Nazwisko]**  
[Opcjonalnie: link do profilu GitHub]  
[Rok]
