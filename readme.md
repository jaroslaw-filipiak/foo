\_dev folder based on [Vite.js](https://vitejs.dev/) so if you want to write scss + es next look above

## Getting Started

Install dependencies and run watch mode

```bash
cd _dev
npm install
# and next
npm run build --watch
```

After changes in code assets folder are rebuilded

## Reply regarding task 1

- Always create a child theme, if WordPress team delivery update for TwentyTwenty theme you can lose all previuosly changes so most important think to do: Use child themes
- You have some options for creating custom css rules for you theme ,
  the fastest way is add custom styles for style.css file, second option and so fast too is install plugin for example “instant css” plugin but isnt good choice for tech company :)

im using scss and i am big fan of vite.js so usually i create own dev folder that handle scss files and create output of css(with minification + autoprefixer) so check pls /\_dev directory in child theme. My scss are located in style.scss
