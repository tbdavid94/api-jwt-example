## First Assignment
- [x] Create a new lumen project
- use laravel
- use laravel build + sail
- use latest version laravel from official
- [x] Create a migration, model & controller for user and admins
- php artisan make:model UserDetail --all
- php artisan make:controller UserController
- modify migration user_detail
- [x] Implement jwt-auth, with all the routes necessary
- implement jwt-auth
- modify model User, AuthController, api router, RouteServiceProvider config
- [x] Create a table user_details where you put all extra details for a user that aren't in the users table
- [x] Use a relationship between user and user_details on model
- User hasOne UserDetail
- modify model User add relation func
- [x] Create a posts table which allows the user to post content online.
- make migration posts
- modify migration and migrate
- [x] Use a relationship between user and posts on model
- post belongTo user
- user hasMany posts
- [x] Allow the user him self only(not the other users) to update his posts.
- result => screenshot
- [x] Allow the user him self only(not the other users) to delete his posts.
- result => screenshot
- [x] Allow the admins to delete any posts that they want.
- result => screenshot
- [x] Create a replies table, which allows the users to comment/reply on a existing post.
