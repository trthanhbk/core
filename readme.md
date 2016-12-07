## Package

- tymon/jwt-auth
- trthanhbk/Laracogs
- thephpleague/fractal

## Introduction

This is starter kit to include some functions out of the box:  
- Admin dashboard with AdminLTE theme  
- User / Roles / Permission  
- Team CRUD
- Login / Register / Forgot password ...

## Stater Steps

- `composer create-project laraviet/laravel-starter {project-name} --prefer-dist`
- Create new db and update .env file
- `php artisan migrate`
- `php artisan db:seed`
- `npm install`
- `gulp`
- default admin login: `admin@admin.com / admin`

## CRUD

- `php artisan crudmaker:new Tag --api --ui=bootstrap --migration --schema="id:increments,name:string" `
- Edit `routes/web.php` -> Default is bottom position -> Move block of routing for new resource for applying middleware if needed
- Edit `app/Models/Tag.php` —> add validation rule
- Edit `app/Transfomers/TagTransformer.php` —> update transformer layer for API
- Edit `resources/views/dashboard/panel.blade.php` —> add tag to side menu
- `php artisan migrate`
- Test script will be made at `tests` folder, make sure to pass all test scripts to verify the functions

## Theme

- Support **AdminLTE** theme out of the box
- Edit .env file to apply theme

## To do

[ ] Try relationship  
[x] Fix test case generated  
[x] Add fractal  
[x] Add adminlte theme

## Reference

- Folk from <https://laracogs.com/>
