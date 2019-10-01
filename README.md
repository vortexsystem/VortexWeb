#  VortexWeb
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/80b9476a61a94ac8be360c4e5a3ad9fa)](https://www.codacy.com/manual/hollowomnicron/VortexWeb?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=vortexsystem/VortexWeb&amp;utm_campaign=Badge_Grade)

![Discord](https://img.shields.io/discord/541036640076955658.svg)
[![Maintainability](https://api.codeclimate.com/v1/badges/fa7cf9385a9907db1e4f/maintainability)](https://codeclimate.com/github/vortexsystem/VortexWeb/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/fa7cf9385a9907db1e4f/test_coverage)](https://codeclimate.com/github/vortexsystem/VortexWeb/test_coverage)

VortexWeb is a Web Interface for [OpenSimulator](https://opensimulator.org)



VortexWeb is the Account Application for End Users.

# Installation 
See Docs
	
# Require Databases and Access
VortexWeb Expects Access to a few databases of your OpenSimulator Servers, It is currently made for Grid Setups only, until we get all the features worked out. 
* In application/config/database.php
 * Default is a new database for storing stuff that the System makes, like password reset links, etc
 * Robust should be a read and write user for the Robust Database of your Grid
 * Estates should be for the Centralized Estates Database for your Grid Hosted Simulators(don't allow non grid administrators access to this for their Simulators)
