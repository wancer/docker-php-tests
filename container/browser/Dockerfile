FROM zenika/alpine-chrome

USER root
RUN apk add --no-cache curl zip unzip chromium-chromedriver

EXPOSE 9515
USER chrome
ENTRYPOINT ["chromedriver", "--url-base=wd/hub", "--whitelisted-ips"]
