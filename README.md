# Laravel HealthCheck Package

This package provides a simple health check functionality for your Laravel application.

## Installation

Follow the steps below to install and configure the `teggoin/healthcheck` package.

### Step 1: Install via Composer

Install the package using Composer by running the following command:

composer require teggoin/healthcheck

## Step 2: Register the Service Provider

After installing the package, you need to register the `HealthCheckServiceProvider` manually unless your Laravel version is 5.5 or higher (where auto-discovery is enabled).

To register the service provider:

1. Open the `config/app.php` or `config/providers.php` file in your Laravel project.
2. Locate the `providers` array.
3. Add the following entry to the array:

```php
'providers' => [
    // Other service providers...
    Teggoin\HealthCheck\HealthCheckServiceProvider::class,
],
```

## Step 4: Access the Health Check Route

Once the package is installed and configured, you can verify its functionality by accessing the health check route provided by the package.

To do this:

1. Open your web browser.
2. Navigate to the following URL (replace `your-app-url` with your actual application URL):

```url
http://your-app-url/health/hc
```
