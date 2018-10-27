# Docker compose for codeception-chromedriver tests run

## Structure

1. Browser (chrome headless) with chromedriver
2. php-cli executor

## How

1. Browser docker starts and "waits" for connections
2. php executor starts
  2.1. installing composer
  2.2. installing app dependencies
  2.3. building codeception helpers
  2.4. via composer.json script runs codeception tests
  2.5. dies

Tests generating report (tests/_output/report.html)  
To see what's going on in tests, could be used up without '-d'  

## Run
```
docker-compose build
docker-compose up -d
```
Rerun tests
```
docker-compose up executor
```

