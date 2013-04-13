from django.contrib import admin
from django.contrib.auth.models import User
from django.db import models


class Tag(models.Model):
    name = models.CharField("Name of tag", max_length=255)
    slug = models.SlugField("Name of slug", unique=True)

    def __unicode__(self):
        return self.name


class Post(models.Model):
    title = models.CharField("Title", max_length=255)
    body = models.TextField("Body")
    tags = models.ManyToManyField(Tag)
    slug = models.SlugField(unique=True)
    added_by = models.ForeignKey(User)
    added_on = models.TimeField(auto_now_add=True)

    def __unicode__(self):
        return self.title
