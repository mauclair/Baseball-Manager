[Baseball Manager](http://www.codenexus.org/bm) - CodeNexus
==================================================

The Baseball Manager application is a MUST HAVE for any webmaster wanting a full featured website for managing their baseball league!

General Features
--------
- Ability to create leagues and divisions for managing multiple teams.
- Create/edit players, including options for individual player photo, home/away jersey number, position(s), height/weight and contact info.
- Create/edit teams, manager contact info, upload team logo & photo.
- Create/edit ballparks and fields.
- Create seasons.
- Create/edit schedules -> select season, game type, location, and status.
- Enter game results with optional line score entry, and individual batting, pitching, and fielding categories in a user-friendly interface. Ability to enter batting order.
- Create game types (exhibition, regular season, tournament, playoff) for use with Win/Loss module.
- Configurable stat categories (turn on/off Pitching Stats and Fielding Stats, also config options for using Steals/Caught Stealing, and Sacrifices).
- Ability to select registered users for FRONT-END admin access. Front-end admins can manage their rosters, schedules and enter game results without needing to login to the Joomla admin.
- Ability to easily create menu links for Roster, Schedule, Stats, League/Division standings, as well as an "All Teams" w/built-in navigation links.
- Component and modules compatible with Joomla SEF-friendly URLS.
- Configurable schedule pages. Show full league, specific division or specific teams.
- Printer-friendly and ICAL buttons added to schedule views. Import to calendar programs such as Google Calendar.
- Player "Clone" feature allows a player to be on more than one team roster at a time (for all-star teams and other uses).
- Boxscore plugin allows you to conveniently add boxscore information to an article.

Front-End Features
--------
- Ability to assign registered users access to specific teams for entering and maintaining team data, including rosters, schedules and results (see screen clip below).
- Several front-end pages are created dynamically by pulling the data entered by the Admin or selected users. Pages include Roster, Schedule (calendar, month, day, and full list views), Team Stats, Game Summary, and Individual Player pages.
- Stat tables are sortable by column.

Installation
------------
###Installing Files Using Git (Recommended)
- create a directory
- open a git bash there
- `$ git clone git://github.com/cringer/Baseball-Manager.git .`
- `$ git fetch`
- `$ git submodule update --init --recursive`  It's a good idea to watch for errors during this step. I've occasionally seen 'fatal: unable to connect a socket (Invalid Argument).  If you see something like that, I'd just blow away the directory and start over.

###Installing Files Without Git
- Download [Kohana v3.2](http://kohanaframework.org/download)
- Install [Kohana v3.2](http://kohanaframework.org/3.2/guide/kohana/install)
- Delete controller/welcome.php if so desired
- Copy the files in the application directory of this project into 'application'.
- Copy the files in the media directory of this project into 'media'.

###Configuration
- Make sure the application/cache and application/logs directories have write access.
- Rename the example.htaccess included with this application to .htaccess and edit the RewriteBase to match your installation directory.  For more information see [here](http://kohanaframework.org/3.2/guide/kohana/tutorials/clean-urls)
- Rename application/example.bootstrap.php to bootstrap.php and set base_url to match your installation directory.
- Check that the following modules are enabled in bootstrap.php: auth, orm, database
- Rename application/config/example.auth.php to auth.php and edit it, setting the hash_key to a random string of your choice.
- Create a mysql database
- Rename the application/config/example.database.php to database.php and edit the 'default' section to match the hostname, database and username for the mysql database you created
- Execute the schema in initial_schema.sql in your mysql datase.

You should be good to go.  The default admin login is:

- username: administrator
- password: admin12345

but you can add a new administrator and delete that one if you like.

Credits
-------

