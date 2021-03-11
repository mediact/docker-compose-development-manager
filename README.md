# Introduction

This tool allows for loading of environment variables similar to 
`symfony/dotenv`, only then for Docker Compose environments. Loading 
environment variable this way should help with a more consistent development
process.

# Installation

Checkout the project and add `dev` to `$PATH`.

# Usage

Ensure `docker-compose.yml`, `.env` and `.env.dev` are available and
configured. Then start the environment with `dev up`.

It's possible to install template environments from this project using `dev
init`, which will install useful files for a quick setup.

# Updating Templates

Whenever you update a file for a certain template like magento-2.
You should also update the `version` of the `docker-compose.yml`. You can find it here:
```yaml
x-custom:
  version: 1.x.x
  type: magento-2
```
Whenever you update a template in a project make sure you revert the custom changes.

You know when you have to update the templates when you see the message:
```yaml
The current docker template is outdated, 
please run "dev init TEMPLATE_NAME -f" to update it.
```

