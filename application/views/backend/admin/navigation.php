    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro">

                    <?php
                    $key = $this->session->userdata('login_type') . '_id';
                    $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                    if (!file_exists($face_file)) {
                        $face_file = 'uploads/default.jpg';
                    }
                    ?>

                    <a href="#" class="waves-effect"><img src="<?php echo base_url() . $face_file; ?>" alt="user-img" class="img-circle"> <span class="hide-menu">

                            <?php
                            $account_type   =   $this->session->userdata('login_type');
                            $account_id     =   $account_type . '_id';
                            $name           =   get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');

                            echo $name;
                            ?>


                            <span class="fa arrow"></span></span>

                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li> <a href="<?php echo base_url(); ?>admin/dashboard" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Dashboard'); ?></span></a> </li>
                <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-mortar-board" data-icon="7"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Academics'); ?> <span class="fa arrow"></span></span></a>
                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'enquiry_category' ||
                                                        $page_name == 'list_enquiry' ||
                                                        $page_name == 'club' ||
                                                        $page_name == 'circular' ||
                                                        $page_name == 'help_link' ||
                                                        $page_name == 'help_desk' ||
                                                        $page_name == 'holiday' ||
                                                        $page_name == 'formcode' ||
                                                        $page_name == 'marketPlace' ||
                                                        $page_name == 'admissionFormPage' ||
                                                        $page_name == 'todays_thought' ||
                                                        $page_name == 'academic_syllabus'
                                                    ) echo 'opened active';
                                                    ?> ">

                        <li class="<?php if ($page_name == 'enquiry_category') echo 'active'; ?>">

                            <a href="<?php echo base_url(); ?>admin/enquiry_category">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Equiry Category'); ?></span>

                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'list_enquiry') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/list_enquiry">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('view_enquiries'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'club') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/club">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('school_clubs'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'circular') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/circular">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('manage_circular'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'holiday') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/holiday">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_holiday'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'todays_thought') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/todays_thought">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_moraltalk'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'academic_syllabus') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/academic_syllabus">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('syllabus'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'help_link') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/help_link">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_helplink'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'help_desk') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/help_desk">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_helpdesk'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'formcode') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/formcode">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Registration Code'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'admissionFormPage') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/admissionFormPage">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('approve_student'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'checker') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/checker">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Student Result PIN'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'marketPlace') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/marketPlace">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Market Place'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="task_manager"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="icon-menu p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('task_manager'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php if (
                                                        $page_name == 'team_task'   ||
                                                        $page_name == 'team_task_archived' ||
                                                        $page_name == 'team_task_view'
                                                    ) echo 'in'; ?>">



                        <li class="<?php if ($page_name == 'team_task') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/team_task">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <?php echo get_phrase('running_tasks'); ?>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'team_task_archived') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/team_task_archived">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <?php echo get_phrase('archived_tasks'); ?>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="staff"> <a href="javascript:void(0);" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-angle-double-right p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage Employees'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'teacher' ||
                                                        $page_name == 'librarian' || $page_name == 'hrm' ||
                                                        $page_name == 'accountant' ||
                                                        $page_name == 'hostel'
                                                    )
                                                        echo 'opened active';
                                                    ?> ">




                        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/teacher">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('teachers'); ?></span>
                            </a>
                        </li>




                        <li class="<?php if ($page_name == 'librarian') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/librarian">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('librarians'); ?></span>
                            </a>
                        </li>





                        <li class="<?php if ($page_name == 'accountant') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/accountant">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('accountants'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'hostel') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/hostel">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('hostel_manager'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'hrm') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/hrm">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('human_resources'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="student"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-users p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_students'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'new_student' ||
                                                        $page_name == 'student_class' ||
                                                        $page_name == 'student_information' ||
                                                        $page_name == 'view_student' ||
                                                        $page_name == 'searchStudent' ||
                                                        $page_name == 'student_promotion'
                                                    )
                                                        echo 'opened active has-sub';
                                                    ?> ">



                        <li class="<?php if ($page_name == 'new_student') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/new_student">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('admission_form'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_information' || $page_name == 'view_student') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/student_information">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_students'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'student_promotion') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/student_promotion">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('promote_students'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'studentCategory') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>studentcategory/studentCategory">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Student Categories'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'studentHouse') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>studenthouse/studentHouse">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Student House'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'clubActivity') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>activity/clubActivity">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Student Activity'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'socialCategory') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>socialcategory/socialCategory">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Social Category'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'searchStudent') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/searchStudent">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('search_students'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'studentResetPassword') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>resetpassword/studentResetPassword">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Reset Password'); ?></span>
                            </a>
                        </li>



                    </ul>
                </li>



                <li class="attendance"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-hospital-o p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_attendance'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'manage_attendance' || $page_name == 'staff_attendance' ||
                                                        $page_name == 'attendance_report'
                                                    )
                                                        echo 'opened active';
                                                    ?>">


                        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('mark_attendance'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'attendance_report') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/attendance_report">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('view_attendance'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'staff_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/staff_attendance">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('staff_attendance'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="ticket"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-envelope p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('support_ticket'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'support_ticket_create' || $page_name == 'support_ticket' ||
                                                        $page_name == 'support_ticket_view'
                                                    )
                                                        echo 'opened active';
                                                    ?>">


                        <li class="<?php if ($page_name == 'support_ticket') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/support_ticket">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_tickets'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'support_ticket_create') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/support_ticket_create">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('new_ticket'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>





                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-download p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('download_page'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'assignment' ||
                                                        $page_name == 'study_material'
                                                    )
                                                        echo 'opened active';
                                                    ?> ">


                        <li class="<?php if ($page_name == 'assignment') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>assignment/assignment">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('assignments'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>studymaterial/study_material">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('study_materials'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class=" <?php if ($page_name == 'parent') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>admin/parent">
                        <i class="fa fa-users p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('manage_parents'); ?></span>
                    </a>
                </li>


                <li class="<?php if ($page_name == 'alumni') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>admin/alumni">
                        <i class="fa fa-users p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('manage_alumni'); ?></span>
                    </a>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-paypal p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_loan'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'loan_applicant' ||
                                                        $page_name == 'loan_approval'
                                                    )
                                                        echo 'opened active';
                                                    ?>">


                        <li class="<?php if ($page_name == 'loan_applicant') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/loan_applicant">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('loan_applicant'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'loan_approval') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/loan_approval">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('loan_approval'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>



                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-university p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('class_information'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'class' ||
                                                        $page_name == 'section' ||
                                                        $page_name == 'class_routine'
                                                    )
                                                        echo 'opened active';
                                                    ?>">



                        <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/classes">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_classes'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/section">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_sections'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'class_routine_view') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/class_routine_view/">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Add Timetable'); ?> </span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'class_routine_view') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin/listStudentTimetable/">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('List Timetable'); ?> </span>
                            </a>
                        </li>


                    </ul>
                </li>





                <li class="<?php if ($page_name == 'subject') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>subject/subject/">
                        <i class="fa fa-book p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('manage_subjects'); ?></span>
                    </a>
                </li>




                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-edit p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Computer Based Test'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'exam_list' ||
                                                        $page_name == 'exam_add' ||
                                                        $page_name == 'exam_view' ||
                                                        $page_name == 'exam_result_list'
                                                    )
                                                        echo 'opened active';
                                                    ?> ">


                        <li class="<?php if ($page_name == 'exam_add') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/exam_add">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('add_questions'); ?></span>
                            </a>
                        </li>




                        <li class="<?php if ($page_name == 'exam_list' || $page_name == 'exam_view') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/exam_list">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_questions'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'exam_result_list') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/exam_result_list">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('view_result'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'add_online_exam') echo 'active'; ?> ">
                            <a href="<?php echo site_url($account_type . '/create_online_exam'); ?>">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('add_exams'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'manage_online_exam' || $page_name == 'edit_online_exam' || $page_name == 'manage_online_exam_question' || $page_name == 'view_online_exam_results') echo 'active'; ?> ">
                            <a href="<?php echo site_url($account_type . '/manage_online_exam'); ?>">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_exams'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-medkit p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_exams'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'submit_exam' ||
                                                        $page_name == 'grade' ||
                                                        $page_name == 'examquestion'
                                                    )
                                                        echo 'opened active';
                                                    ?>">


                        <li class="<?php if ($page_name == 'examquestion') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/examquestion">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('question_paper'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'submit_exam') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/submit_exam">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_questions'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/grade">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('exam_grades'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-bar-chart-o p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('report_cards'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'marks' ||
                                                        $page_name == 'exam_marks_sms' ||
                                                        $page_name == 'tabulation_sheet'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/marks">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('class_teacher'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'student_marksheet_subject') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/student_marksheet_subject">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('subject_teacher'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/exam_marks_sms">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('scores_by_sms'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'tabulation_sheet') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/tabulation_sheet">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('generate_report'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="collect_fee"> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-paypal p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('fee_collection'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'income' ||
                                                        $page_name == 'student_payment' ||
                                                        $page_name == 'view_invoice_details' ||
                                                        $page_name == 'invoice_add' ||
                                                        $page_name == 'list_invoice' ||
                                                        $page_name == 'studentSpecificPaymentQuery' ||
                                                        $page_name == 'invoice'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'student_payment') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/student_payment">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('collect_fees'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/income">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('fees_payments'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'invoice') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/invoice">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_invoice'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'invoice_add') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/invoice_add">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('student_ledger'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'list_invoice' || $page_name == 'view_invoice_details') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/list_invoice">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('list_ledger'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'studentSpecificPaymentQuery') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/studentSpecificPaymentQuery">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('Specific Payment'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-credit-card p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('human_resources'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'department' ||
                                                        $page_name == 'vacancy' || $page_name == 'award' ||
                                                        $page_name == 'application' ||
                                                        $page_name == 'leave' ||
                                                        $page_name == 'create_payslip' ||
                                                        $page_name == 'payroll_list'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'department') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>department/department">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('department'); ?></span>
                            </a>
                        </li>


                        <li> <a href="#" class="waves-effect" <i data-icon="&#xe006;"></i> <span class="hide-menu"><i class="fa fa-university p-r-10"></i><?php echo get_phrase('recruitment'); ?><span class="fa arrow"></span></span></a>
                            <ul class=" nav nav-second-level">

                                <li class="<?php if ($page_name == 'vacancy') echo 'active'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/vacancy">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('vacancies'); ?></span>
                                    </a>
                                </li>

                                <li class="<?php if ($page_name == 'application') echo 'active'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/application">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('applications'); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="<?php if ($page_name == 'leave') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/leave">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('leave'); ?></span>
                            </a>
                        </li>


                        <li> <a href="#" class="waves-effect" <i data-icon="&#xe006;"></i> <span class="hide-menu"><i class="fa fa-university p-r-10"></i><?php echo get_phrase('payroll'); ?><span class="fa arrow"></span></span></a>
                            <ul class=" nav nav-second-level">

                                <li class="<?php if ($page_name == 'create_payslip') echo 'active'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/payroll">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('add_payslip'); ?></span>
                                    </a>
                                </li>

                                <li class="<?php if ($page_name == 'payroll_list') echo 'active'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/payroll_list">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('list_payroll'); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="<?php if ($page_name == 'award') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/award">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_award'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-fax p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('expenses'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'expense' ||
                                                        $page_name == 'expense_category'
                                                    )
                                                        echo 'opened active';
                                                    ?> ">

                        <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>expense/expense">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('expense'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>expense/expense_category">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('expense_category'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-fax p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('Manage Inventories'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php if ($page_name == 'supplier' || $page_name == 'item' ||  $page_name == 'sales') echo 'opened active'; ?> ">


                        <li class="<?php if ($page_name == 'supplier') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>inventory/supplier">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Supplier'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'item') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>inventory/item">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Items'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'sales') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>inventory/sales">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Sales'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-book p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('manage_library'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'book' ||
                                                        $page_name == 'publisher' ||
                                                        $page_name == 'search_student' ||
                                                        $page_name == 'book_category' || $page_name == 'request_book' ||
                                                        $page_name == 'author'
                                                    )
                                                        echo 'opened active';
                                                    ?>">



                        <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/book">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('master_data'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'publisher') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/publisher">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('book_publisher'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'book_category') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/book_category">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('book_category'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'author') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/author">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('book_author'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'search_student') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/search_student">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('register_student'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'request_book') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/request_book">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('request_book'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-university p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('hostel_information'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'dormitory' ||
                                                        $page_name == 'hostel_category' ||
                                                        $page_name == 'room_type' ||
                                                        $page_name == 'hostel_room'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'dormitory') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/dormitory">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_hostel'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'hostel_category') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/hostel_category">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('hostel_category'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'room_type') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/room_type">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('room_type'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'hostel_room') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/hostel_room">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('hostel_room'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-envelope p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('communications'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'noticeboard' ||
                                                        $page_name == 'message'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/noticeboard">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_events'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/message">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('private_messages'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'sendEmailMessage') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>emailmessage/sendEmailMessage">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Send Email Message'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'sendSMSMessage') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>smsmessage/sendSMSMessage">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Send SMS Message'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-car p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('transportation'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'transport' ||
                                                        $page_name == 'transport_route' ||
                                                        $page_name == 'vehicle'
                                                    )
                                                        echo 'opened active';
                                                    ?>">



                        <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>transportation/transport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('transports'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'transport_route') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>transportation/transport_route">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('transport_route'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'vehicle') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>transportation/vehicle">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_vehicle'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-gears p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('system_settings'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'system_settings' ||
                                                        $page_name == 'email_settings' ||
                                                        $page_name == 'backup_restore' ||
                                                        $page_name == 'smtpemailsettings' ||
                                                        $page_name == 'manage_language' ||
                                                        $page_name == 'sms_settings'
                                                    )
                                                        echo 'opened active';
                                                    ?>">


                        <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>systemsetting/system_settings">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('general_settings'); ?></span>
                            </a>
                        </li>



                        <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>smssetting/sms_settings">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_sms_api'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'backup_restore') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>systembackup/backup_restore">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_database'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'email_settings') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>emailsetting/email_settings">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('email_settings'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/manage_language">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_language'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'smtpemailsettings') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>emailsetting/smtpemailsettings">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('SMTP_settings'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'paymentSetting') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>payment/paymentSetting">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Payment Settings'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-bar-chart-o p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('generate_reports'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level">

                        <li class="<?php if (isset($report_type) && $report_type == 'studentReport') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>report/report/studentReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('student_payments'); ?></span>
                            </a>
                        </li>




                        <li class="<?php if (isset($report_type) && $report_type == 'expenseReport') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>report/report/expenseReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('expense_reports'); ?></span>
                            </a>
                        </li>




                        <li class="<?php if (isset($report_type) && $report_type == 'incomeExpense') echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>report/report/incomeExpense">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('income_expense'); ?></span>
                            </a>
                        </li>





                        <li class="<?php if ($page_name == 'searchAllstudentReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/searchAllstudentReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Search Student'); ?></span>
                            </a>
                        </li>


                        <li class="<?php if ($page_name == 'payrollReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/payrollReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Staff Salary Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'staffAttendanceReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/staffAttendanceReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Staff Attendance'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'classAttendanceReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/classAttendanceReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Attendance Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'examMarkReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/examMarkReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Exam Mark Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'iventoryReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/iventoryReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Inventory Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'marketPlaceReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/marketPlaceReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Marketplace Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'awardReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/awardReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Staff Award Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'bookReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/bookReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Student Book Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'hosteroomReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/hosteroomReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Hoste Room Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'transportationReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/transportationReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Transportation Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'supportTicketReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/supportTicketReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Support Ticket Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'taskManagerReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/taskManagerReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Task Manager Report'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'specificPayment') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/specificPayment">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('Specific Payment'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'circularReport') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>report/circularReport">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"> <?php echo get_phrase('Circular Report'); ?></span>
                            </a>
                        </li>




                        <li class="<?php if ($page_name == 'documentation') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/documentation">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('View Documentation'); ?></span>
                            </a>
                        </li>



                    </ul>
                </li>


                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-gears p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('front_end_settings'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'banar' ||
                                                        $page_name == 'front_end' ||
                                                        $page_name == 'testimony' ||
                                                        $page_name == 'gallery' ||
                                                        $page_name == 'news'
                                                    )
                                                        echo 'opened active';
                                                    ?>">

                        <li class="<?php if ($page_name == 'banar') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/banar">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_banners'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'front_end') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/front_end">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-plus"><?php echo get_phrase('website_info'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'gallery') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/gallery">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('manage_gallery'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'news') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/news">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('news_settings'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'testimony') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/testimony">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-plus"><?php echo get_phrase('testimonies'); ?></span>
                            </a>
                        </li>


                    </ul>
                </li>



                <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="fa fa-cubes p-r-10"></i> <span class="hide-menu"><?php echo get_phrase('role_managements'); ?><span class="fa arrow"></span></span></a>

                    <ul class=" nav nav-second-level<?php
                                                    if (
                                                        $page_name == 'admin_list' || $page_name == 'studentErrPermission' || $page_name == 'studentList'
                                                        || $page_name == 'errPermissionteacher' || $page_name == 'Permissionteacher' || $page_name == 'admin_add'
                                                    ) echo 'opened active'; ?>">

                        <li class="<?php if ($page_name == 'admin_list') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/admin_list">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('admin_list'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'admin_add') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/admin_add">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('new_admin'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'studentList' || $page_name == 'studentErrPermission') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/studentList">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_students'); ?></span>
                            </a>
                        </li>

                        <li class="<?php if ($page_name == 'permissionTeacher' || $page_name == 'errPermissionteacher') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/permissionTeacher">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('list_teachers'); ?></span>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->