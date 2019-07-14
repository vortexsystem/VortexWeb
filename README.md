#  VortexWeb
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/495004e58090472a83e70d0302f1936e)](https://www.codacy.com/app/orbital-group/myaccount-new?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=neverworldgrid/myaccount&amp;utm_campaign=Badge_Grade)
![Discord](https://img.shields.io/discord/541036640076955658.svg)
[![Maintainability](https://api.codeclimate.com/v1/badges/13fe0b10251db9dd0a71/maintainability)](https://codeclimate.com/github/neverworldgrid/VortexWeb/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/13fe0b10251db9dd0a71/test_coverage)](https://codeclimate.com/github/neverworldgrid/VortexWeb/test_coverage)

Vortex is a Collection of Services and Systems that is used for the Web Services of OpenSimulator


VortexWeb is the Codeigniter based Web Account Panel that is used by the end users

# Installation 
* Install Files
 * git clone https://github.com/vortexsystem/VortexWeb.git
 * cd VortexWeb
* Install Composer Dependencies
 * composer install --no-dev   (if you are running a production installation)
 * composer install            (if you are running a developement installation)
* Set Configuration 
  * See Below
	
# Require Databases and Access
VortexWeb Expects Access to a few databases of your OpenSimulator Servers, It is currently made for Grid Setups only, until we get all the features worked out. 
* In application/config/database.php
 * Default is a new database for storing stuff that the System makes, like password reset links, etc
 * Robust should be a read and write user for the Robust Database of your Grid
 * Estates should be for the Centralized Estates Database for your Grid Hosted Simulators(don't allow non grid administrators access to this for their Simulators)
