from django.urls import path, include
from . import views

app_name = 'core'

# Admin
urlpatterns = [
    # path("dashboard/admin/entity/email/<int:id>/resend/", admin.ResendInviteEmail, name="resend-entity-email"),
    path("", views.indexPage, name="index"),
    
]