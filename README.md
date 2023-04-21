# CA1

the Starter for the SW project CA
php: Windows sail:Mac

Steps for getting the project up and running:

1. cd SoftwareProject: If in the main project folder, will get you to the correct folder
2. npm run dev: Will get the bootstrap working.
   Depending on if you already have the migration:
3. php/sail artisan migrate: Will do the initial migration for the database.
4. php/sail artisan migrate:fresh --seed: Will refresh the migration and seed the database.
