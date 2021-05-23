from django.db import models
from django.contrib.auth.models import User
from django.db.models.signals import post_save
from django.dispatch import receiver
# Create your models here.


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    image = models.ImageField(default='sample.jpg', upload_to='profile_pics')
    department = models.CharField(max_length=200, null=True, blank=True)
    allow_access = models.BooleanField(default=True)

    def __str__(self):
        return self.user.email

    @property
    def imageURL(self):
        try:
            url = self.image.url 
        except:
            url = ''
        return url


def profile_receiver(sender, instance, created, *args, **kwargs):
    if created:
        print('checK', instance.id)
        profile = Profile.objects.create(user=instance)

post_save.connect(profile_receiver, sender=User)



#Products 
class Product(models.Model):
    name =  models.CharField(max_length=200)

    def __str__(self):
        return self.name

    
       


























