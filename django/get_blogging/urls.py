from django.conf.urls import patterns, include, url
from django.contrib import admin
from django.contrib.staticfiles.urls import staticfiles_urlpatterns

admin.autodiscover()

urlpatterns = patterns('',
    url(r'^$', 'blog.views.index', name='home'),
    url(r'^post/(?P<post_slug>[a-zA-z0-9 \-]+)', 'blog.views.single_post', name='single_post'),
    url(r'^author/(?P<post_author>[a-zA-z0-9 \-]+)', 'blog.views.author_specific', name='author'),
    url(r'^tag/(?P<post_tag>[a-zA-z0-9 \-]+)', 'blog.views.tag_specific', name='tag'),
    url(r'^admin/', include(admin.site.urls)),
)

urlpatterns += staticfiles_urlpatterns()