<div class="mm scrollbar side-menu-bg" style="overflow: scroll; " >
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_page.dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_page.fadwa_toqan')}} </li>

        <!-- Grades-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                <div class="pull-left"><i class="fa fa-home"></i><span
                        class="right-nav-text">{{trans('main_page.grades')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('grad.index')}}">{{trans('main_page.grades_list')}}</a></li>

            </ul>
        </li>
        <!-- classes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                <div class="pull-left"><i class="fa fa-building"></i><span
                        class="right-nav-text">{{trans('main_page.class_room')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('class.index')}}">{{trans('main_page.class_room')}}</a></li>
            </ul>
        </li>

        <!-- sections-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fa fa-window-restore"></i></i><span
                        class="right-nav-text">{{trans('main_page.sections')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('section.index')}}">{{trans('main_page.sections')}}</a></li>
            </ul>
        </li>


        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fa fa-user"></i>
                {{trans('main_page.students')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Student_information">
                        {{trans('main_page.student_information')}}
                        <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Student_information" class="collapse">
                        <li> <a href="{{route('students.create')}}">{{__('students.add_student')}}</a></li>
                        <li> <a href="{{route('students.index')}}">{{__('main_page.list_students')}}</a></li>
                    </ul>
                </li>

             {{-- <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Students_upgrade">
                        {{trans('main_page.students_promotions')}}
                        <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Students_upgrade" class="collapse">
                        <li> <a href="{{route('promotion.index')}}">{{trans('main_page.list_promotions')}}</li>
                        <li> <a href="{{route('promotion.create')}}">{{trans('students.add_promotion')}}</a> </li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Graduate students">{{trans('main_page.graduate_students')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                    <ul id="Graduate students" class="collapse">
                        <li> <a href="{{route('graduated.create')}}">{{trans('main_page.add_graduate')}}</a> </li>
                        <li> <a href="{{route('graduated.index')}}">{{trans('main_page.list_graduate')}}</a> </li>
                    </ul>
                </li>
            </ul>
        </li>



        <!-- Teachers-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                <div class="pull-left"><i class="fa fa-window-maximize"></i></i><span
                        class="right-nav-text">{{trans('main_page.teachers')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('teacher.index')}}">{{trans('teachers.list_teachers')}}</a> </li>
            </ul>
        </li>


        <!-- Parents-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Parents-menu">
                <div class="pull-left"><i class="fa fa-user-tie"></i><span
                        class="right-nav-text">{{trans('main_page.parents')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Parents-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{url('add_parent')}}">{{trans('main_page.list_parents')}}</a> </li>
            </ul>
        </li>

        <!-- Accounts-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fa fa-money-bill-wave-alt"></i><span
                        class="right-nav-text">{{trans('main_page.accounts')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('fees.index')}}">الرسوم الدراسية</a> </li>
                <li> <a href="{{route('fee_invoice.index')}}">الفواتير</a> </li>
                <li> <a href="{{route('receipt_student.index')}}">سندات القبض</a> </li>
                <li> <a href="{{route('processing_fee.index')}}">استبعاد رسوم</a> </li>
                <li> <a href="{{route('payment.index')}}">سندت الصرف</a> </li>
            </ul>
        </li>

        <!-- Attendance-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                <div class="pull-left"><i class="fa fa-calendar-alt"></i><span class="right-nav-text">{{trans('main_page.attendance')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('attendance.index')}}">{{__('main_page.list_students')}} </a> </li>
            </ul>
        </li>
              <!-- Subjects-->
              <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                    <div class="pull-left"><i class="fa fa-book-open"></i><span class="right-nav-text">{{__('main_page.subjects')}}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{route('subject.index')}}">{{__('main_page.list_subjects')}}</a> </li>
                </ul>
            </li>
        <!-- Quizzes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Quizz-icon">
                <div class="pull-left"><i class="fa fa-book-open"></i><span class="right-nav-text">{{__('main_page.exams')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Quizz-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('quizz.index')}}">قائمة الاختبارات</a> </li>
                <li> <a href="{{route('question.index')}}">قائمة الاسئلة</a> </li>
            </ul>
        </li>
        <!-- library-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                <div class="pull-left"><i class="fa fa-book"></i><span class="right-nav-text">{{__('main_page.library')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('library.index')}}">قائمة الكتب</a> </li>
            </ul>
        </li>


        <!-- Onlinec lasses-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                <div class="pull-left"><i class="fa fa-video"></i><span class="right-nav-text">{{trans('main_page.online_classes')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="#">الاتصال مباشر مع زوم</a> </li>
                <li> <a href="#">الاتصال الغير مباشر مع زوم</a> </li>

            </ul>
        </li>


        <!-- Settings-->
        <li>
            <a href="{{route('setting.index')}}"><i class="fa fa-cogs"></i><span class="right-nav-text">{{trans('main_page.setings')}} </span></a>
        </li>


        <!-- Users-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                <div class="pull-left"><i class="fa fa-users"></i><span class="right-nav-text">{{trans('main_page.users')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                <li> <a href="themify-icons.html">Themify icons</a> </li>
                <li> <a href="weather-icon.html">Weather icons</a> </li>
            </ul>
        </li>

    </ul>
</div>
