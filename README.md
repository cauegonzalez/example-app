# example-app
App used as an example to use gzlayers structure

---

# How to start
## Cloning the project
```bash
git git@github.com:cauegonzalez/example-app.git
```

## Access the directory
```bash
cd example-app
```

# Installing dependencies
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

# Add alias on .bashrc (or equivalent)
```bash
alias sail='bash vendor/bin/sail'
```

## Prepare the environment file
```bash
cp .env.example .env
```

## Generate the application key
```bash
sail artisan key:generate
```

## Execute the migrations
```bash
sail artisan migrate
```

---

# How to use
```bash
sail artisan gzlayers:makebo          # Create business object class (BO) with a multilayer structure
sail artisan gzlayers:makecontroller  # Create controller with a multilayer structure
sail artisan gzlayers:makecrud        # Create entire CRUD skeleton with a multilayer structure
sail artisan gzlayers:makemodel       # Create model with a multilayer structure
sail artisan gzlayers:makerepository  # Create repository with a multilayer structure
sail artisan gzlayers:makerequest     # Create request with a multilayer structure
sail artisan gzlayers:makeresource    # Create resource controller with a multilayer structure
sail artisan gzlayers:maketrait       # Create prepare trait with a multilayer structure
```

# Available parameters
```bash
    { name=name : Class (singular) for example User } 
      # (mandatory for all commands)
    { --table=default : Table name (plural) for example users | Default is generated-plural } 
      # (use it when creating a Model with a non default table name)
    { --timestamps=false : Set default timestamps } 
      # (use it when the table doesn''t have timestamps columns)
    { --interactive=false : Interactive mode } 
      # (use it when you want answer some questions about your structure without send other parameters)
    { --all=false : Database based mode } 
      # (use it when you want generate all entities based on the database tables)
    { --overwrite=true : If file exists, determine if overwrite } 
      # (use it as FALSE to avoid override existing files, if not passed, the standard behavior is overwrite the previous files)
    { --businesslayer=bo : Determines which nomenclature to use for business layer | Default is BO and the other accepted is Service } 
      # (use it when you want to change the business layer structure to use Service instead of BO)
```

# Usage examples
```bash
sail artisan gzlayers:makecrud group --overwrite=false --businesslayer=service

sail artisan gzlayers:makecrud --all

sail artisan gzlayers:makemodel group --overwrite=false

sail artisan gzlayers:makeresource group
```
