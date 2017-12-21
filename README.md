# Tutoria
Tutoria is a web-based, plug and play, single-page application to help manage students and mentors designed with universities in mind.

**Currently a WIP/unstable - not suited for production**

## How to run (dev)
1. Clone this repo
1. Copy the `.env.example` file and change its name to `.env`
1. Set the `.env` file with the necessary values
1. (Optional) Configure Homestead/Valet with the project if you want to
1. Run migrations and seeds: `php artisan migrate:fresh --seed`
1. Update dependencies: `composer update` and `npm install` (or `yarn install`)
1. Compile the Javascript/SCSS with `npm run dev` (or `yarn dev`)
1. Serve the app (e.g `php artisan serve` if you're not using Homestead/Valet)
