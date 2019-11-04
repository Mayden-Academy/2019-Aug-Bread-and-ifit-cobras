# 2019-Aug-Bread-and-ifit-cobras

- Git clone the repo using the SSH key into the html folder/where you want the project to live

- In your terminal cmd line, run git clone then-the-copied-ssh-link

- CD into the newly created project directory, you should now be on master branch
- Ensuring you are in your project root folder (in terminal), run the following 4 commands:

- `npm install gulp --save-dev`
- `npm install gulp-sass --save-dev`
- `npm install gulp-sourcemaps --save-dev`
- `npm install typescript gulp-typescript --save-dev`
- `composer dump-autoload`
- `gulp watch`

For writing JS, only use the root/js/main.ts file (this will compile to the root/js/dist/main.js file)

For writing CSS, only use the root/scss/style.scss (this will compile to the root/css/style.css file)

Every file that needs autoloading will then need a `require('vendor/autoload.php');`