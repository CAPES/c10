FROM seadufscar/c10:ciencia10
MAINTAINER Francisco Neto <francisco.neto@capes.gov.br>

COPY entrypoint /
COPY c10.sql.dumpall /
COPY config.php /var/www/html/c10/
COPY index.html /var/www/html/

ENTRYPOINT ["/entrypoint"]
