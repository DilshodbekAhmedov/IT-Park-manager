from django.contrib import admin
from .models.students import Students,ListOfStudents
from .models.courses import Savodxonlik,Backend,Frontend,GrafikDizayin,UchDdizayin,English,Robototexnika,FullStack,SMM,MobilIlova
from .models.course_info import CourseInfo
# Register your models here.

admin.site.register(CourseInfo)


@admin.register(Students)
class StudentsAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'username','user_id'
    # list_filter = 'full_name',
    search_fields = 'full_name',


@admin.register(Savodxonlik)
class SavodxonsAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language','date','time'
    search_fields = 'full_name','phone'

@admin.register(Backend)
class BackendsAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language','date','time'
    search_fields = 'full_name','phone'

@admin.register(English)
class EnglishsAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(Frontend)
class FrontendsAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(FullStack)
class FullStackAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(GrafikDizayin)
class GrafikDizayinAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(UchDdizayin)
class UchDAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(Robototexnika)
class RobotAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(SMM)
class SMMAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'

@admin.register(MobilIlova)
class MobilAdmin(admin.ModelAdmin):
    list_display = 'id','full_name', 'phone','date','time','language'
    list_filter = 'language', 'date', 'time'
    search_fields = 'full_name', 'phone'