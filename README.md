# 1. Environment Setup

1. Copy .env file: *cp example.env .env*
2. Open .env and fill in your database settings (host, root password, database name, user, password, allow empty password).

# 2. Start Docker
1. Build the images and start all containers: *docker compose up --build -d*

# 3. Install Composer Packages
1. Find your PHP container name: *docker ps*
2. Then run: *docker exec -it \<php container name\> composer install*

# 4. Run Migrations

1. Run database migrations inside the PHP container: *docker exec -it \<php container name\> vendor/bin/phinx migrate*
2. Run seeds: *docker exec -it \<php container name\> vendor/bin/phinx seed:run*
