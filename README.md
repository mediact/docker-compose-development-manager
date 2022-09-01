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

# Running the console
The container `console` takes in a special place in this setup. When all containers are started with `dev up`, the `console` container actually exits immediately. This is ok. Instead, the `console` container is only started when needed - when you need a console. To access it, simply type `dev console`: This starts up the `console` container with a shell that has its working directory set to the current working directory where you were in. Thanks to this approach, you can have a shell open within the Docker network, instead of being on the host that is *outside* of that network. For instance, on the host a command like `ping mysql` would fail, because `mysql` is not a valid hostname. Within the `console` container, the command would work, because `mysql` is a valid hostname (configured by the Docker network).
