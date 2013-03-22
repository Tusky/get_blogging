from django.shortcuts import render
from blog.models import Post


def index(request):
    posts = Post.objects.all().order_by("added_on").reverse()
    return render(request, 'index.html', { "posts": posts })