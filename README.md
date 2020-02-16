# bref-http-example
This is a sample http app using Bref leveraging Serverless to deploy to AWS Lambda

## Steps to repeat

### Composer install

```bash
composer install
```

### Deploy to AWS

```bash
serverless deploy
```

### Test

POST request to the URL given by Serverless after deploy with the following body

```json
{ "name":  "Beachcasts" }
```

### Results

Should result in "Hello Beachcasts".
