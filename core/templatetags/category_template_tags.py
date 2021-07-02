from django import template
from core.models import Category
register = template.Library()


@register.filter
def category_list(user):
    categories = Category.objects.all()
    return categories
