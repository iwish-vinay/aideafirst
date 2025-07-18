# Use the official PHP 8.2 image with an Apache web server
FROM php:8.2-apache

# The default Apache document root is /var/www/html.
# Copy all your application files from the current directory into the container's web root.
COPY . /var/www/html/

# Change the owner of the web root to the Apache user.
RUN chown -R www-data:www-data /var/www/html

# Add the startup script and make it executable.
# This script configures Apache for Cloud Run's PORT environment variable.
COPY apache-cloud-run.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/apache-cloud-run.sh

# Set the container's command to our custom script.
CMD ["apache-cloud-run.sh"]