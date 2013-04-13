import os
import sys
import site
import django.core.handlers.wsgi

site.addsitedir('~/Sites/django/Environments/pubimage/local/lib/python2.7/site-packages')

# Add the app's directory to the PYTHONPATH
sys.path.append('/var/www/django.local/')
sys.path.append('/var/www/django.local/getblogging/')

print sys.path

os.environ['DJANGO_SETTINGS_MODULE'] = 'getblogging.settings'

application = django.core.handlers.wsgi.WSGIHandler()