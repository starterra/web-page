# Quick start

docker run -d -p 80:80 --name starterra-web-page -v "$PWD":/var/www/html php:7.2-apache

## Deployement
1. Copy the ID of the commit which you would like to deploy from main branch
2. Open file .helm/values-prod.yaml
3. Replace the tag with the copied commit id
4. Commit the change to main branch