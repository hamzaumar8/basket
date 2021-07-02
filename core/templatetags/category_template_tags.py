from django import template
from core.models import Category
from django.db.models import Count
register = template.Library()


@register.filter
def categories(user):
    categories = Category.objects.all().annotate(num_cate=Count('categories', distinct=True))
    return categories


@register.filter
def category_list(user):
    categories = Category.objects.all()
    return categories
