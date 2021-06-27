import random
import string

from django.shortcuts import render, redirect, get_object_or_404
from django.conf import settings
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.views.generic import View, ListView
from django.core.exceptions import ObjectDoesNotExist
from django.utils import timezone
from django.db.models import Count, Q


from . import models


def indexPage(request):
    new_obj = models.Item.objects.filter(new=True)[:12]
    featured_obj = models.Item.objects.filter(featured=True)[:12]
    context = {
        'new_obj' : new_obj,
        'featured_obj': featured_obj,
    }
    return render(request, 'index.html', context)





def detailPage(request, slug):
    object = get_object_or_404(models.Item, slug=slug)
    # carimages = lists.carimages.order_by('-id')

    context = {
        'object': object,
    }

    return render(request, 'detail.html', context)

@login_required
def cartPage(request):
    try:
        order = models.Order.objects.get(user=request.user, ordered=False)
        context = {
            'object': order
        }
        return render(request, 'cart.html', context)
    except ObjectDoesNotExist:
        messages.warning(request, "You do not have an active order")
        return redirect("/")
    # return render(request, 'cart.html')






class shopPage(ListView):
    model = models.Item
    context_object_name = 'objects'
    template_name = 'shop.html'
    paginate_by = 30

    def get_context_data(self, **kwargs):
    #     kwargs['page_title'] = "All Cars"
        kwargs['categories'] = models.Category.objects.all().annotate(num_cate=Count('categories', distinct=True))
    #     kwargs['category_list'] = Category.objects.all()
    #     kwargs['brands_list'] = Brand.objects.order_by('-views')[:7]
    #     kwargs['driving_list'] = School.objects.order_by('-views')[:7]
    #     kwargs['hotels_list'] = Hotel.objects.order_by('-views')[:7]
    #     kwargs['realestates_list'] = RealEstate.objects.order_by('-views')[:7]

    #     kwargs['sidefilter'] = self.sidefilter
    #     kwargs['brands']  = Brand.objects.filter(featured=1).order_by('-id')[:12]
    #     kwargs['property_list']  = Property.objects.order_by('-id')[:3]
    #     kwargs['car_count'] = self.sidefilter.qs.count()

        return super().get_context_data(**kwargs)

    # def get_queryset(self): 
    #     self.sidefilter = CarSideFilter(self.request.GET, queryset= self.model.objects.order_by('-id'))
    #     return self.sidefilter.qs





class CategoryListView(ListView):
    model = models.Item
    context_object_name = 'objects'
    template_name = 'shop.html'
    paginate_by = 30

    def get_context_data(self, **kwargs):
        kwargs['categories'] = models.Category.objects.all().annotate(num_cate=Count('categories', distinct=True))

        return super().get_context_data(**kwargs)

    def get_queryset(self):
        category = get_object_or_404(models.Category,  slug=self.kwargs.get('slug'))
        print(category)
        self.categoryset = self.model.objects.filter(category=category)
        return self.categoryset.order_by('-id')
























@login_required
def add_to_cart(request, slug):
    item = get_object_or_404(models.Item, slug=slug)
    order_item, created = models.OrderItem.objects.get_or_create(
        item=item,
        user=request.user,
        ordered=False
    )
    order_qs = models.Order.objects.filter(user=request.user, ordered=False)
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item.quantity += 1
            order_item.save()
            messages.info(request, "This item quantity was updated.")
            return redirect("core:cart")
        else:
            order.items.add(order_item)
            messages.info(request, "This item was added to your cart.")
            return redirect("core:cart")
    else:
        ordered_date = timezone.now()
        order = models.Order.objects.create(user=request.user, ordered_date=ordered_date)
        order.items.add(order_item)
        messages.info(request, "This item was added to your cart.")
        return redirect("core:cart")


@login_required
def remove_from_cart(request, slug):
    item = get_object_or_404(models.Item, slug=slug)
    order_qs = models.Order.objects.filter(
        user=request.user,
        ordered=False
    )
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item = models.OrderItem.objects.filter(
                item=item,
                user=request.user,
                ordered=False
            )[0]
            order.items.remove(order_item)
            order_item.delete()
            messages.info(request, "This item was removed from your cart.")
            return redirect("core:cart")
        else:
            messages.info(request, "This item was not in your cart")
            return redirect("core:product", slug=slug)
    else:
        messages.info(request, "You do not have an active order")
        return redirect("core:product", slug=slug)


@login_required
def remove_single_item_from_cart(request, slug):
    item = get_object_or_404(models.Item, slug=slug)
    order_qs = models.Order.objects.filter(
        user=request.user,
        ordered=False
    )
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item = models.OrderItem.objects.filter(
                item=item,
                user=request.user,
                ordered=False
            )[0]
            if order_item.quantity > 1:
                order_item.quantity -= 1
                order_item.save()
            else:
                order.items.remove(order_item)
            messages.info(request, "This item quantity was updated.")
            return redirect("core:cart")
        else:
            messages.info(request, "This item was not in your cart")
            return redirect("core:product", slug=slug)
    else:
        messages.info(request, "You do not have an active order")
        return redirect("core:product", slug=slug)





