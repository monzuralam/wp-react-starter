# WP React Starter
WP React Starter is a boilerplate for using React in WordPress. 🚀

A lightweight boilerplate for integrating **React** into **WordPress** plugin development, designed to accelerate building interactive WordPress interfaces with modern tooling.

## Features

– **React Integration**: Leverage React for building dynamic and responsive admin and front-end UIs.  
– **Build Tooling**: Configured with Webpack to bundle and transpile JS and CSS assets.  
– **WordPress Integration**: Includes core PHP files to enqueue assets, define hooks, and register shortcode functionality.  
– **Admin & Frontend Scaffolding**: Ready-to-use `App.js` structures for both admin and front-end modules.

## Project Structure

```
├── 📁 assets/
├── 📁 includes/
│   ├── 📁 Admin/
│   │   └── 🐘 Menu.php
│   ├── 📁 Frontend/
│   │   └── 🐘 Shortcode.php
│   ├── 🐘 Admin.php
│   ├── 🐘 Enqueue.php
│   └── 🐘 Hooks.php
├── 📁 src/
│   ├── 📁 Admin/
│   │   ├── 📁 Components/
│   │   └── 📄 App.js
│   ├── 📁 Frontend/
│   │   └── 📄 App.js
│   ├── 📄 admin.js
│   └── 📄 frontend.js
├── 📄 .gitattributes
├── 🚫 .gitignore
├── 📄 composer.json
├── 📄 package.json
├── 📄 webpack.config.js
└── 🐘 wp-react-starter.php
```

## Getting Started

### Prerequisites

- WordPress (local or remote)
- Node.js & npm
- Composer
- PHP (compatible with your WordPress version)

### Installation

1. Clone the repo into your WordPress `plugins/` directory:

   ```bash
   git clone https://github.com/monzuralam/wp-react-starter.git
   ```

2. Install dependencies:
    ```cd wp-react-starter
    npm install
    composer install
    ```

3. Development
    ```
    npm start
    ```

4. Build the assets:
    ```
    npm run build
    ```

5. Activate the plugin from the WordPress admin dashboard.

## Contributing
We welcome contributions! 🎉

### How to Contribute

1. Fork the repository on GitHub.

2. Clone your fork locally:

    ```
    git clone https://github.com/<your-username>/wp-react-starter.git
    cd wp-react-starter
    ```

3. Create a feature branch:
    ```
    git checkout -b feature/your-feature-name
    ```

4. Make your changes (update code, docs, or tests).

5. Commit with a clear message:
    ```
    git commit -m "Add: short description of changes"
    ```

6. Push to your fork:
    ```
    git push origin feature/your-feature-name
    ```

7. Open a Pull Request to the main repository.