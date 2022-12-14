FROM php:8.1-cli

# Install xdebug
RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode=debug," >> /usr/local/etc/php/conf.d/xdebug.ini  \
    && echo "xdebug.discover_client_host=0" >> /usr/local/etc/php/conf.d/xdebug.ini  \
    && echo "xdebug.start_with_request =yes" >> /usr/local/etc/php/conf.d/xdebug.ini  \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini