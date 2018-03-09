#!/bin/bash

export PROJECT_NAME="thaidirectory"
export DATABASE_PASSWORD=postgres
export DATABASE_USER=postgres
export NETWORK_NAME="thaidirectory"

function debug {
    if [ -z true]; then
        return;
    fi

    log info "Debug: $1";
}

# restart and rebuild containers
docker-compose down

# create network
docker network create thaidirectory

# docker-compose build
docker-compose up -d --build

# wait for postgresdb to start
i=60; while true; do
    #create db on first run and set deafult password for postgres user
    (docker exec thaidirectory-postgresdb psql -U postgres -c 'SELECT 1') &>/dev/null \
    && ( (docker exec thaidirectory-postgresdb psql -U postgres -tc \
        "SELECT 1 FROM pg_database WHERE datname = 'thaidirectory'" | grep -q 1) \
        || ( (docker exec thaidirectory-postgresdb psql -U postgres -tc "CREATE DATABASE thaidirectory;") \
            && (docker exec thaidirectory-postgresdb psql -U postgres -tc "ALTER USER postgres WITH PASSWORD 'postgres';") ) ) \
    && break;

    i=$[$i-1];

    [ $i -lt 1 ] && echo "DONE" && exit -1;

    echo -ne "Waiting $is for container thaidirectory-postgresdb to finish start sequence\r";

    sleep 1;
done;

# run migrations
#docker-compose run liquibase /scripts/liquibase_commands.sh update

# install dependencies
#ls services | xargs -n 1 sh -c 'cd/services/$0/code; docker run --rm -v $(pwd):/var/www/ -w /var/www make install'

