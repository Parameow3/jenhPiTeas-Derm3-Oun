FROM debian:latest
RUN apt update
RUN apt install php8.2 -y
RUN apt install -y php8.2-fpm php8.2-ctype php8.2-curl php8.2-dom php8.2-Fileinfo
RUN apt install -y filter php8.2-Mbstring php8.2-pdo php8.2-Tokenizer php8.2-XML php8.2-mysql
RUN apt install -y nginx


COPY . /app
WORKDIR /app
RUN chown -R www-data:www-data /app
RUN chmod -R 775 /app

RUN cp /app/localhost.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled

CMD service php8.2-fpm start && service nginx start && tail -F /var/log/nginx/access.log
#CMD service php8.2-fpm start && nginx -g 'daemon off;'
EXPOSE 80
