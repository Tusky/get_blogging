from django.contrib import admin
from blog.models import Post, Tag


class PostAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("title",)}

    def formfield_for_foreignkey(self, db_field, request=None, **kwargs):
        field = super(PostAdmin, self).formfield_for_foreignkey(db_field, request, **kwargs)
        if unicode(field.label) == u"Added by" and request is not None:
            field.initial = request.user.pk
        return field


class TagAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("name",)}


admin.site.register(Tag, TagAdmin)
admin.site.register(Post, PostAdmin)

