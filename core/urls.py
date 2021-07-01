from django.urls import path, include
from . import views

app_name = 'core'

# Admin
urlpatterns = [
    path("", views.indexPage, name="index"),
    path("cart/", views.cartPage, name="cart"),
    path("shop/", views.shopPage.as_view(), name="shop"),
    path('category/<slug>/', views.CategoryListView.as_view(), name='category'),
    path("detail/<slug>/", views.detailPage, name="detail"),

    path('form-add-to-cart/', views.form_add_to_cart, name='form-add-to-cart'),
    path('add-to-cart/<slug>/', views.add_to_cart, name='add-to-cart'),
    path('remove-from-cart/<slug>/', views.remove_from_cart, name='remove-from-cart'),
    path('remove-item-from-cart/<slug>/',views.remove_single_item_from_cart, name='remove-single-item-from-cart'),
    
]