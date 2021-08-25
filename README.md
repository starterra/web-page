# Quick start

docker build -t web-page .
docker run -d -p 8080:8080 --name starterra-web-page -v "$PWD":/var/www/html web-page

## Deployement
1. Copy the ID of the commit which you would like to deploy from main branch
2. Open file .helm/values-prod.yaml
3. Replace the tag with the copied commit id
4. Commit the change to main branch