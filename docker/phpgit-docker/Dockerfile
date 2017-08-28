FROM ubuntu:latest
MAINTAINER Thomas Riechert <thomas.riechert@htwk-leipzig.de>

# Install PHP7-CLI to use as Server behind a firewall and Git
RUN apt-get update && apt-get -y upgrade && DEBIAN_FRONTEND=noninteractive apt-get -y install \
    php7.0-cli git && rm -rf /var/lib/apt/lists/*

# Expose apache.
EXPOSE 80

#GITREP contains basic Repository

RUN echo '#!/bin/bash \n\
if [ $GITREP ]; then \n\
    gitrep_without_suffix="${GITREP%.*}"; \n\
    gitrepname="$(basename "${gitrep_without_suffix}")" \n\
	if ! git clone $GITREP; then \n\
	   echo "$gitrepname exitiert"; \n\
	   cd $gitrepname \n\
	   git pull \n\
	else \n\
	   cd $gitrepname \n\
	fi \n\
	php -S $(hostname -i):80 -c php.ini\n\
fi' > start.sh && chmod u+x start.sh

CMD ./start.sh


