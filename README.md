<p align="center">
  <img src="https://github.com/bootgly/.github/raw/main/favicon-temp1-128.png" alt="bootgly-logo" width="120px" height="120px"/>
</p>
<h1 align="center">Bootgly.Web template</h1>
<p align="center">
  <i>Bootgly Web Workables template</i>
</p>
<p align="center">
  <a href="https://packagist.org/packages/bootgly/bootgly">
    <img alt="Bootgly License" src="https://img.shields.io/github/license/bootgly/bootgly"/>
  </a>
</p>

You should use this repository to start building your Web workables.

This repository serves as a template (starter kit) for creating Web apps/API using the Bootgly Web, which is a part of the [Bootgly PHP Framework][BOOTGLY_PHP_FRAMEWORK].

## 🧩 Templating

To get started with the Bootgly Web template repository on GitHub, follow the steps below:

1. Navigate to the main page of the Bootgly Web template repository on GitHub: Bootgly Web Template Repository.
2. Click on the "Use this template" button located near the top-right corner of the repository page:
![Click on the "Use this template"](https://github.com/bootgly/.github/raw/main/screenshots/bootgly-php-framework/Bootgly.Web-template.png)
3. On the "Create a new repository" page, provide a name for your new repository.
4. Optionally, add a description and choose the visibility and permissions for your repository.
5. Click on the "Create repository from template" button to create your new repository based on the Bootgly Web template.

### Using Composer

If you prefer using Composer to manage your PHP dependencies, follow the steps below to initialize the Bootgly Web template repository:

#### Option 1 - create-project command

To create a new project using the Bootgly Web template and Composer's create-project command, follow these steps:

1. Open your terminal or command prompt.
2. Run the following command to create a new project based on the Bootgly Web template:

```
composer create-project bootgly/bootgly.web my-bootgly-web-app
```

Replace `my-bootgly-web-app` with the desired name of your project directory.

**Composer will download the Bootgly Web template and its dependencies, and create the project structure for you.**

<!--
#### Option 2 - package init

1. Open your terminal or command prompt.
2. Create a new directory for your project and navigate to it:

```
mkdir my-bootgly-web-app
cd my-bootgly-web-app
```

3. Initialize a new Composer project within your directory:

```
composer init
```

4. When prompted, provide the necessary information for your project such as package name, description, author, etc.
5. After completing the initialization, open the composer.json file in a text editor.
6. Under the require section, add the following line to include the Bootgly Web template as a dependency:

```json
"require": {
   "bootgly/bootgly.web": "1.0.0"
}
```

7. Save the changes to the composer.json file.
8. Run the following command to install the Bootgly Web template and its dependencies:

```
composer install
```
-->
## 🔜 Next Steps

Once you have initialized your Bootgly Web template repository either using GitHub or Composer, you can start developing your Web app/API. Here are a few recommended steps to get started:

1. Review the [Bootgly documentation][BOOTGLY_DOCS] to understand the features and capabilities of the Bootgly Web.
2. Check `projects\*.constructor.php` files.
3. Test your Web application locally to ensure it functions as expected. You can use the provided testing tools and utilities included in the Bootgly Web.
4. Add any additional dependencies or libraries your application requires to the composer.json file and install them using Composer.
5. Document your Web app/API by updating the README file and providing instructions on how to use and configure your application.
6. Once you are ready, consider publishing your Web app/API to Packagist to make it available to others. Follow the Packagist documentation for guidelines on publishing your project.

That's it! You now have a solid foundation for building your Web application using the Bootgly Web. Happy coding!

## 📃 License

The Bootgly PHP Framework is open-sourced software licensed under the [MIT license][MIT_LICENSE].

<!-- Links -->
[BOOTGLY_DOCS]: https://docs.bootgly.com
[BOOTGLY_PHP_FRAMEWORK]: https://github.com/bootgly/bootgly
[MIT_LICENSE]: https://opensource.org/licenses/MIT
