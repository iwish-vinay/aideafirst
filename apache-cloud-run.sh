#!/bin/sh

# This script is designed to run within the php:apache Docker container on Cloud Run.
# It modifies the Apache configuration to listen on the port specified by
# the PORT environment variable, which is automatically provided by Cloud Run.

# Replace the default "Listen 80" with the port from the environment variable.
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf

# Start Apache in the foreground. This keeps the container running.
apache2-foreground