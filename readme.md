##Project Set-up
 
- Merge pull request from develop branch to master branch on github
- git pull origin master to get changes. If this fails run git fetch --all
- run php artisan migrate:refresh to make changes to database
- run php artisan db:seed to seed data for Roles, Users and Lands
- run php artisan key:generate to set application key

##Credentials:
Admin
   - admin@admin.com
   - password

Member
   - member@admin.com
   - password

Staff
   - staff@admin.com
   - password

LandAgent
   - agent@admin.com
   - password