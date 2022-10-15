# Generated by Django 4.1.2 on 2022-10-13 03:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ("db_users", "0002_listofstudents"),
    ]

    operations = [
        migrations.CreateModel(
            name="CourseInfo",
            fields=[
                (
                    "id",
                    models.BigAutoField(
                        auto_created=True,
                        primary_key=True,
                        serialize=False,
                        verbose_name="ID",
                    ),
                ),
                ("savodxolik", models.TextField()),
                ("frontend", models.TextField()),
                ("backend", models.TextField()),
                ("full_stack", models.TextField()),
                ("garfika", models.TextField()),
                ("uchd_grafika", models.TextField()),
                ("smm", models.TextField()),
                ("english", models.TextField()),
                ("mobil_ilova", models.TextField()),
                ("robot", models.TextField()),
            ],
        ),
    ]
