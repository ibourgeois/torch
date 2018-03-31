# Laravel Torch

Laravel Docker/CI CLI

## Installation

```bash
composer require ibourgeois/torch
```

## ToDo

- [ ] `torch:init`          Initialize Torch
- [ ] `torch:server`        Add/Remove servers
- [ ] `torch:fuel`          Manage Docker services
- [ ] `torch:ignite`        Initialize servers
- [ ] `torch:up`            Deploy application
- [ ] `torch:down`          Rollback Deployment
- [ ] `torch:ci`            Run CI commands
- [ ] `torch:config`        Configure Torch
- [ ] `torch:start`         Start environment
- [ ] `torch:stop`          Stop environment
- [ ] `torch:console`       Open environment console

## Initialize Torch

`torch:init` will publish a torch directory into the root of the application. It will publish a config file as well as make the other torch commands available.

Initialize Torch without default presets

```bash
php artisan torch:init
```

Initialize torch with default presets

```bash
php artisan torch:init --default
```
