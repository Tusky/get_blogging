from django.contrib.auth.models import User
from django.shortcuts import render, redirect
from blog.models import Post, Tag
from django.contrib.auth import logout

def index(request):
    posts = Post.objects.all().order_by("added_on").reverse()
    return render(request, 'multi-post.html', {"posts": posts, "index": True })


def single_post(request, post_slug):
    post = Post.objects.get(slug=post_slug)
    return render(request, 'single-post.html', { "post": post })


def author_specific(request, post_author):
    author = User.objects.get(username=post_author)
    posts = Post.objects.filter(added_by=author.pk)
    return render(request, 'multi-post.html', { "posts": posts })


def tag_specific(request, post_tag):
    tag_name = Tag.objects.get(slug=post_tag)
    posts = Post.objects.filter(tags=tag_name)
    return render(request, 'multi-post.html', { "posts": posts })
