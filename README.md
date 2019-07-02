# Faurefold Wordpress theme

This is a Wordpress theme for the Faurefold site. See it in action here:
<http://faurefold.co.uk/>

Based on [Underscores](https://underscores.me/) starter theme. See also
[underscore.md](underscore.md)

## Developing with VCCW

The last time I updated this I used [VCCW](http://vccw.cc/) to set up a local
development environment. It's a Vagrant configuration designed for developing
Wordpress stuff. Here's how to get it up and running:

1. If it's not installed, follow the instructions on <http://vccw.cc/> to
   install it. You probably won't need to do that though because you did it the
   last time.
2. Navigate into the folder where you installed VCCW. Unless it's changed it's
   `~/Documents/websites/faurefold-vccw`
3. Run `vagrant up` - that should bring the site up at <http://faurefold.test>. (The
   url is set in `site.yml` in the VCCW root folder.) If you've had to reinstall
   VCCW it'll be at <http://vccw.test>, or else you can re-provision it using
   the instructions on their website [here](http://vccw.cc/#h2-4). Don't
   change the `site.yml` while the Vagrant machine is running or it will get
   confused.
4. Login at `/wp-admin`. Username and password are both 'admin' by default.
5. Make sure the site is using the Faurefold theme (duh) by going to Appearance
   / Themes and making sure it's selected. If you've had to reinstall this all
   for some reason you may need to clone the theme again from this repo.
6. If you update the CSS you have to do it by updating the SASS and running
   something like `sass sass/style.scss style.css`.
7. Probably sensible to increment the version number in `sass/style.scss` so you can keep
   track of which is the latest version. Make sure you run `sass watch` so it
   updates the CSS. Might be a good idea to put the version number in the theme
   title too so you can see which one's which in the Wordpress admin.
8. Make sure you `git commit` and push to GitHub when you've finished (duh).

## Deploying

We can't SSH onto the production server, so we have to copy the theme over FTP.
Best thing is copy it into a folder with the version number in the name so you
can tell which one's which in the FTP client. Then after you've switched the
theme over in the Wordpress admin you can delete the old one.

