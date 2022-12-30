<?php

const REMOTE_REPOSITORY = "git@github_mikhail_surin:MikhailSurin/ai_tech_site.git"; // The SSH URL to your repository
const TOKEN = 'hb823rtidwvicdd2y12r68rdgxkafvf$ww';                                 // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
const DIR = "/opt/projects/ai_tech_site";                                          // The path to your repository; this must begin with a forward slash (/)
const BRANCH = "refs/heads/main";                                               // The branch route
const LOGFILE = "/var/log/deploy/ai-tech-su.log";                        // The name of the file you want to log to.
const GIT = "/usr/bin/git";                                                     // The path to the git executable
const MAX_EXECUTION_TIME = 180;                                                 // Override for PHP's max_execution_time (may need set in php.ini)
const BEFORE_PULL = "";                                                         // A command to execute before pulling
const AFTER_PULL = "/bin/bash /opt/projects/ai_tech_site/github-deploy-hook/public/aitechsu/frontend/sudo-build.sh";                                                          // A command to execute after successfully pulling

require_once("../../../app/core.php");
