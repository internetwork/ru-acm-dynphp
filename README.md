The website
-----------
https://php.radford.edu/~acm

#### CSS #
CSS is generated from a modified version of the 'Yeti' Bootswatch theme,
forked here: https://github.com/RadfordACM/bootswatch

To modify the CSS, see instructions for customizing Bootswatch themes here:
http://bootswatch.com/help/#customization
It is very easy to change [these Bootstrap settings](http://getbootstrap.com/customize/#less-variables) by editing the `variables.less` file.

After generating a new bootstrap.min.css file, replace the one in 'res/css/' and re-deploy.

#### Deployment #
`ssh` to the club's RUCS account, `cd` into dynamic_php, `git pull origin master` to fetch
and merge the latest changes, and `php-perms.sh` to set web permissions in the dynamic_php folder.
acm@rucs is already setup with an SSH key to pull from this repo.

#### Collaboration #
From this point forward, it's generally advised to work from forks of this repository and use pull
requests and feature branches to keep things more organized.  But above all _avoid_ pushing changes
from the RUCS account!  It is possible, but there isn't currently a 'machine account' set up for
acm@rucs, and even when there is we lose attribution if you do fixes and push changes from RUCS.
Test as much as possible locally!
