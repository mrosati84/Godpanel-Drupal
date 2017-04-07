#!/usr/bin/env bash

drush si godpanel_profile --account-pass="admin" --site-name="Godpanel" -y
drush cset system.site uuid godpanel -y
drush cim -y
