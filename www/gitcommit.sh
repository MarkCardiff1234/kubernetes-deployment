#!/bin/bash

#ask user for commit description
read -p "Commit description: " desc
#add directory and pusg to git
git add . && \
git add -u && \
git commit -m "$desc" && \
git push origin master
