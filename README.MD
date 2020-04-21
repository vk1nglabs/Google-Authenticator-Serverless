# Google Authenticator 2-factor Rest API in PHP with Serverless

> PHPGansta Google Authenticator Library https://github.com/PHPGangsta/GoogleAuthenticator

## Usage

This project use Bref to run PHP applications on Serverless. [Please make sure you know about Bref.sh](https://bref.sh/docs/).

- [Install Nodejs](https://nodejs.org/en/download/)

- [Install Serverless Framework](https://serverless.com/framework/docs/getting-started/)

  ```
  npm install serverless -g
  ```

- [Install Composer](https://getcomposer.org/)

  ```
  composer install
  ```

- Deploy

  ```
  serverless deploy
  ```

- Deletion

  ```
  serverless remove
  ```

## Response

```
{
  "success": true,
  "data": {
    "code": "733024"
  },
  "message": "Done ;)."
}
```
