#!/bin/bash

if [[ "$1" != "" ]]
then
        TEST_PATH=$1
else
        TEST_PATH=./Drahak
fi

../../libs/bin/tester -p php -c php-unix.ini $TEST_PATH
