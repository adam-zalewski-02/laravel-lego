# lego-front-end

## Important!
- Use https:// for the front end, when using http we could not get the authentication cookie to work outside of firefox, your browser will say it is not secure. Advanced -> continue to site.

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur) + [TypeScript Vue Plugin (Volar)](https://marketplace.visualstudio.com/items?itemName=Vue.vscode-typescript-vue-plugin).

## Customize configuration

See [Vite Configuration Reference](https://vitejs.dev/config/).

Change the BASE_URL inside the config.js file.

## Project Setup

```sh
npm install
```

### Compile and Hot-Reload for Development

```sh
npm run dev
```

### Compile and Minify for Production

```sh
npm run build
```

## Features
### front-office
- Login
- Register
- View sets in a list
- Switch between languages
- Pagination
### back-office
- Add set
- Delete set
- Update set
- get sets by theme
- get set by set-number

## Known bugs
- There is no user feedback when you press a button. If the form resets, it's safe to assume that it worked. If it didn't, the request failed. In the console, there will most likely be a 404 or 500 error.
    - 404 -> Not found
    - 500 -> CORS problem or not authenticated
- You can keep clicking on "Previous" and "Next". If you click 5 times on "Previous", you will need to click 6 times on "Next" to see the following page.
- You can see the back-office while not logged in, but you can't send any requests.
- When you fetch sets by theme, after fetching a theme that has no sets, it will say "No sets for this theme" until you press fetch sets again.
