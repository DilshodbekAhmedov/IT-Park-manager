from django.db import models


class CourseInfo(models.Model):
    savodxolik = models.TextField()
    frontend  = models.TextField()
    backend = models.TextField()
    full_stack = models.TextField()
    garfika = models.TextField()
    uchd_grafika = models.TextField()
    smm = models.TextField()
    english  = models.TextField()
    mobil_ilova = models.TextField()
    robot = models.TextField()

    def __str__(self):
        return "Course Info"