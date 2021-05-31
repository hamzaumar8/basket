from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from allauth.account.forms import SignupForm


from phonenumber_field.formfields import PhoneNumberField
from phonenumber_field.widgets import PhoneNumberPrefixWidget

from django_countries.fields import CountryField
from django_countries.widgets import CountrySelectWidget


class CustomSignupForm(SignupForm):
    
    full_name = forms.CharField(
        min_length=7,
        widget=forms.TextInput(attrs={
            'placeholder': 'Full Name',
            'required': True,
        }),
    )

    country = CountryField(
        blank_label='(select country)').formfield(
            required=False,
            widget=CountrySelectWidget(
                attrs={
                    'class': 'custom-select d-block w-100',
                }
            )
        )




    phone_number = PhoneNumberField(
        widget=PhoneNumberPrefixWidget(
            initial='GH',
            attrs={
                'class': 'form-control w-50'
            }
        )
    )

    def save(self, request):
        user = super(CustomSignupForm, self).save(request)
        cleaned_data = super(CustomSignupForm, self).clean()
        full_name = cleaned_data["full_name"]
        if ' ' in full_name:
            user.first_name = full_name.split(' ')[0]
            user.last_name = full_name.split(' ')[1]
        else:
            user.first_name = full_name

        user_profile = user.profile
        # user_profile.phone_number = cleaned_data['phone_number']
        user.save() 
        user_profile.save()
        return user

