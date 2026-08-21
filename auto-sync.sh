#!/bin/bash
# Auto-update script for US-project repository on GitHub (kartikpawase/US-project)

# Ensure script stops on error
set -e

# Change to the repository root directory
cd "$(dirname "$0")"

echo "Checking for local changes..."
if [ -n "$(git status --porcelain)" ]; then
    echo "Changes detected. Staging and committing..."
    git add -A
    git commit -m "Auto-update: $(date '+%Y-%m-%d %H:%M:%S')"
    echo "Pushing changes to GitHub..."
    git push origin main
    echo "Successfully updated GitHub repository!"
else
    echo "No local changes to commit. Repository is up to date."
fi
