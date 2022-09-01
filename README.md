# Introduction

This tool allows for loading of environment variables similar to 
`symfony/dotenv`, only then for Docker Compose environments. Loading 
environment variable this way should help with a more consistent development
process.

# Installation

Checkout the project and add `dev` to `$PATH`.

# Usage

Ensure `docker-compose.yml`, `.env` and `.env.dev` are available and configured. For instance, you could set the right `PHP_VERSION` for the application that you are running. Also, set the `DNS_NAME` to your preference. Note that `<SUBDOMAIN>.dev.mediacthq.nl` is not a valid domain, so you need to change this in any case. You could use `example.dev.mediacthq.nl` (which automatically resolves to 127.0.0.1). But you could also `magento.local`, in which case you will need to make sure yourself this hostname is resolvable. For instance, by adding a line with `127.0.0.1 magento.local` to your `/etc/hosts` file. 

Then start the environment with `dev up`. Confirm that everything has started with `dev ps`.

It's possible to install template environments from this project using `dev init`, which will install useful files for a quick setup. If you don't have a `docker-compose.yml` file yet, this is the recommended way.

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

