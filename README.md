Web Skeleton
============

Installations
-------------


### Laravel 


```shell

laravel new my_app 
cd my_app 
php artisan serve
```

#### React

1. Install

```shell
cd new_app/resources/js

npx create-react-app app --template typescript
npm install ts-loader --save-dev --legacy-peer-deps

rm -R vendor 

```

2. Change tsconfig.json 

set `noEmit: false`


3. Copy all dependency of cd new_app/resources/js/app/package.json to 
`new_app/package.json` in the devDependency section

```shell
cd new_app
npm install 
npm install ts-loader --save-dev --legacy-peer-deps
```

4. Change `welcome.blade.php`

Comment all html inside body and add 

```html 
 <div id="root"></div>
  <script type="text/javascript" src="{{ mix('js/index.js') }}"></script>
```


--------------------------


TODO
-----


* Remove unnecessary file
* Create proper structure (that a hosting provider will accept)
* Create build shell scripts
* Add react UI Framework 
* 
