# Generated by Django 3.2.3 on 2021-05-26 01:05

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0009_auto_20210525_2101'),
    ]

    operations = [
        migrations.RenameField(
            model_name='orderitem',
            old_name='orders',
            new_name='ordered',
        ),
    ]
