#!/bin/bash

NOW=$(date +"%Y-%m-%d-%H%M")

DB_USER=""
DB_PASS=""
DB_NAME=""
DB_HOST=""

ROOTDIRECTORY="/var/www/blconlinecourses.com"

TREE_FILE="$NOW.tar.gz"

if [ -n "$1" ]
    then DB_FILE="$DB_NAME.$NOW.sql.tar.gz"
    else DB_FILE="$DB_NAME.$NOW.$1.sql.tar.gz"
fi

BACKUP_DIR="$ROOTDIRECTORY/backups/$NOW"
WWW_DIR="$ROOTDIRECTORY/current/"

mkdir -p $BACKUP_DIR

mysqldump -u$DB_USER -p$DB_PASS $DB_NAME > /tmp/$DB_NAME
tar -czvf $BACKUP_DIR/$DB_FILE -P /tmp/$DB_NAME
rm /tmp/$DB_NAME
