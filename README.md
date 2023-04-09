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

## Second Assignment

- [x] Create a new lumen project
- [x] Create a migration, model & controller for users, admins, instructors
- [x] Implement jwt-auth, with all the routes necessary
- [x] Create a table user_details where you put all extra details for a user that aren't in the users table
- [x] Use a relationship between user and user_details on model
- [x] Create a migration, model & controller for courses
- [x] Allow a Instructor to create a course
- [x] Allow a user to enroll in a course
- [x] Create a table for Threads(posts) that a instructor can post something for his/her students
- [ ] Threads of a course can only be viewed by its enrolled students.
- [ ] A student can reply on a thread
- [ ] A instructor can delete a student reply
- [ ] A student can delete his own reply(but not others replay)
- [ ] A admin should be able to delete a course

