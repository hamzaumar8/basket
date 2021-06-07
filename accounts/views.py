from django.shortcuts import render

# Create your views here.

def profilePage(request):
    return render(request, 'user/profile.html')