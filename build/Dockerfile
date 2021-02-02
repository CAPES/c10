FROM capes/c10:rc2
MAINTAINER Francisco Neto <francisco.neto@capes.gov.br>

COPY entrypoint /
COPY c10.sql.dumpall /
COPY index.html /var/www/html/
COPY uabdatagatherer.zip /

ENTRYPOINT ["/entrypoint"]
