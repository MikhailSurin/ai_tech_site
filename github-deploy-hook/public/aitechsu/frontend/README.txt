MANUAL EXECUTION (First Time)

1) add to /etc/sudoers

www-data ALL=(ALL:ALL) NOPASSWD:/opt/projects/ai_tech_site/github-deploy-hook/public/aitechsu/frontend/build.sh

2) run init-dir.sh

3) make git pull under www-data user
3.1) create /var/www/.ssh/* ssh keys configuration under www-data user
3.2) sudo -u www-data git pull
and press yes
