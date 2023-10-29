## command

# make image

- docker build -t {image name} {dockerfile path}

# make container

- docker run -dp 8080:80 -v $(pwd)/src/basic.php:/var/www/html/index.php -name {container name} {image name}
