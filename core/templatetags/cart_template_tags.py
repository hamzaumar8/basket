from django import template
from core.models import Order

register = template.Library()


@register.filter
def cart_item_count(user):
    if user.is_authenticated:
        qs = Order.objects.filter(user=user, ordered=False)
        if qs.exists():
            total = 0
            for order_item in qs[0].items.all():
                total += order_item.quantity
            return total
        return 0
            # return qs[0].items.count()
    return 0
