# Deploy Bitbucket

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bnhashem/deploy-bitbucket.svg?style=flat-square)](https://packagist.org/packages/bnhashem/deploy-bitbucket)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bnhashem/deploy-bitbucket/run-tests?label=tests)](https://github.com/bnhashem/deploy-bitbucket/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bnhashem/deploy-bitbucket/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bnhashem/deploy-bitbucket/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bnhashem/deploy-bitbucket.svg?style=flat-square)](https://packagist.org/packages/bnhashem/deploy-bitbucket)


## Installation

You can install the package via composer:

```bash
composer require bnhashem/deploy-bitbucket
```

You can publish and run the bitbucket yml file with:

```bash
php artisan vendor:publish --provider="Bnhashem\DeployBitbucket\DeployBitbucketServiceProvider"
```
---

## Bitbucket Optimizations

##### 1. Go to Repository setting 
##### 2. Choose Deployments tab 
![App Screenshot](https://github.com/BNhashem16/deploy-bitbucket/blob/main/screenshots/1.PNG?raw=true)

##### 2. Choose which environment you want to deploy your code  
![App Screenshot](https://github.com/BNhashem16/deploy-bitbucket/blob/main/screenshots/2.PNG?raw=true)
Note: Adding this Variable name `DEPLOY_PATH` with the project path value `/home/username/public_html/project_name`

##### 3. Choose Repository variables tab  
![App Screenshot](https://github.com/BNhashem16/deploy-bitbucket/blob/main/screenshots/3.PNG?raw=true)
Note: Adding this Variable name 
**1.** `DEPLOY_HOST` Adding your host value `87.1833.487.980`
**2.** `DEPLOY_USER` Adding your username value `username_value`

##### 4. Choose Access Keys tab from General section  
![App Screenshot](https://github.com/BNhashem16/deploy-bitbucket/blob/main/screenshots/4.PNG?raw=true)
Note: Adding your server public key

##### 5. Choose SSH Keys tab from Pipeline section  
![App Screenshot](https://raw.githubusercontent.com/BNhashem16/deploy-bitbucket/main/screenshots/5.PNG)
Notes:
- Copy this public key to ~/.ssh/authorized_keys on the remote host.
- Adding Host address
- Click Fetch 
---

## Server Optimizations

##### 1. create your folder of your project
##### 2. Go to the project directory 

Using the Linux terminal, use the following commands to create the directory structure.

```bash
  cd /path/to/project_name
  mkdir -p storage/framework/{sessions,views,cache}
```
You also need to set permissions to allow Laravel to write data in this directory.

```bash
chmod -R 777 framework
chown -R username:username /path/to/your/project_name/storage

```

##### 3. copy .env file of your project and check variables values  

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/BNhashem16)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
