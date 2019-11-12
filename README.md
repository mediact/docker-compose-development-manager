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
