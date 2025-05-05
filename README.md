# 🎓 Laravel Project met Socialite, Stripe & AI-integratie

Welkom bij ons groepswerk in Laravel!  
In dit project combineren we krachtige features zoals:

- 🔐 **Laravel Socialite** – sociale login (zoals Google)
- 💳 **Laravel Cashier / Stripe** – betalingen en abonnementen
- 🤖 **AI-integratie** – slimme functies zoals gegenereerde content of assistentie

---

## 👨‍💻 Teamleden

- Amine Ben Slimene  
- Didier Vanassche  
- Robin Caulier  

---

## ⚙️ Installatie-instructies

Volg deze stappen om het project lokaal op te zetten:

### 1. Repository clonen

```bash
git clone https://github.com/jouwgebruikersnaam/jouw-repository.git
cd jouw-repository

2. Composer dependencies installeren
composer install

3. Node dependencies installeren
npm install && npm run dev

4. .env bestand instellen
cp .env.example .env

Vul vervolgens je .env bestand aan met:
Database credentials
Google OAuth (Socialite)
Stripe API keys
OpenAI API key (optioneel)

5. Applicatiesleutel genereren
php artisan key:generate

6. Database migreren
php artisan migrate

7. Server starten
php artisan serve

🔑 Benodigde API Keys
Zorg ervoor dat je deze API-sleutels aanmaakt en in je .env bestand zet:

Google OAuth (Laravel Socialite)
Registreer een project via Google Developers Console

Genereer een OAuth 2.0 client ID & secret

Voeg toe aan .env:
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/callback/google

Stripe (Laravel Cashier)
Maak een Stripe account aan via stripe.com

Voeg toe aan .env:
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
OpenAI (AI integratie)
Maak een account aan op OpenAI

Voeg toe aan .env:
OPENAI_API_KEY=your_openai_api_key

📚 Tutorial
Wil je alles werkend krijgen? Volg de tutorial die bij dit project hoort (of maak zelf de keys aan zoals hierboven uitgelegd).
🛑 Let op: API-sleutels kunnen niet gedeeld worden in de repository. Elke gebruiker moet deze zelf genereren en invullen.

✅ Functionaliteiten
✅ Inloggen met Google via Laravel Socialite
✅ Abonnementen en betalingen via Stripe + Cashier
✅ Slimme AI-functionaliteit via een externe API (zoals OpenAI)

Bij vragen, neem gerust contact op met één van de teamleden. Veel codeerplezier! 🚀
