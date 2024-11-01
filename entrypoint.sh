#!/bin/bash

# Check if running in CLI
if [[ $1 == "php" && $2 == "artisan" ]]; then
    export XDEBUG_MODE=off
fi

exec "$@"
