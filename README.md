# Introduction

This tool allows for loading of environment variables similar to 
`symfony/dotenv`, only then for Docker Compose environments. Loading 
environment variable this way should help with a more consistent development
process.

# Installation

Checkout the project and add `dev` to `$PATH`.

# Using .local domains for databases
This tool uses `avahi` and `nss-mdns` to assign database IP's to domain names,
so they can be easily accessed in a development environment. In order to use 
`.local` domains for databases, edit the following files:

Edit: `/etc/nsswitch.conf`
Edit the hosts line to match the following:
```
hosts:          files mdns4_minimal [NOTFOUND=return] dns mdns4
```

Create/edit: `/etc/mdns.allow`
Add the following line:
```
.local
```

# Usage

Ensure `docker-compose.yml`, `.env` and `.env.dev` are available and
configured. Then start the environment with `dev up`.

It's possible to install template environments from this project using `dev
init`, which will install useful files for a quick setup.
