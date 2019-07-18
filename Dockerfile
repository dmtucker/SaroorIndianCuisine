FROM python:3.5-stretch AS test
RUN apt update && apt install -y openjdk-8-jre
RUN pip install 'html5validator == 0.2.5'
WORKDIR www.saroorindiancuisine.com
COPY . .
RUN html5validator --show-warnings --match index.html --root .

FROM httpd:2.4
COPY --from=test www.saroorindiancuisine.com/* /usr/local/apache2/htdocs/
