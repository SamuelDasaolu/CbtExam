<?php

use App\Utilities\Router\Router;
//Authentication Routes
Router::get('/project/account/register', 'Authentication@registerPage', [], 'register');
Router::post('/project/account/login', 'Authentication@loginPage', [], 'login');
Router::get('/project/account/password_reset', 'Authentication@passwordResetPage', ['auth'], 'password_reset');
Router::get('/project/account/logout', 'Authentication@logoutPage', [], 'logout');


//Admin Routes
Router::get('/project/index', 'Views@indexPage', ['auth','staff'], 'home');
Router::get('/project/account/profile','Authentication@profilePage', ['auth', 'staff'], 'profile');
Router::get('/project/account/profile/:id/edit', 'Authentication@editProfilePage', ['auth', 'staff'], 'profile_edit');

//Student Routes
Router::get('', 'Views@studentIndexPage', ['auth', 'student'], 'student_home');
Router::get('/project/student/index', 'Views@studentIndexPage', ['auth', 'student'], 'student_home');
Router::get('/project/student/account/profile','Student@studentProfilePage', ['auth', 'student'], 'student_profile');
Router::get('/project/student/account/profile/:id/edit', 'Student@editStudentProfilePage', ['auth', 'student'], 'student_profile_edit');
Router::get('/project/student/account/password_reset', 'Authentication@passwordResetPage', ['auth', 'student']);

//Courses Routes
Router::get('/project/courses/add', 'Courses@addCoursePage', ['auth','staff'], 'add_course');
Router::get('/project/courses/:id/examspage', 'Courses@examsPage', ['auth','staff'], 'exams_page');
Router::post('/project/courses/exams/addexam', 'Courses@addExamPage', ['auth','staff'], 'add_exam');
Router::post('/project/courses/exams/add_exam_record', 'Courses@addExam', ['auth','staff'], 'add_exam_record');
Router::post('/project/courses/exams/:id/questions_page', 'Courses@questionsPage', ['auth','staff'], 'questions_page');
Router::post('/project/courses/exams/:id/add_question', 'Courses@addQuestion', ['auth','staff'], 'add_question');

//Exams Routes
Router::get('/project/courses/:exam_code/get_exam_details', 'Exams@getExamDetails', ['auth','student'], 'get_exam_details');
Router::get('/project/courses/take_exam', 'Exams@takeExamPage', ['auth','student'], 'take_exam');
Router::get('/project/courses/mark_exam', 'Exams@markExam', ['auth','student'], 'mark_exam');

//Payment Routes
Router::get('/project/pay_me', 'Payment@payMe', ['auth', 'staff'], 'pay_me');
Router::post('/project/:price/pay', 'Payment@Pay', ['auth', 'staff'], 'pay');
Router::get('project/pay/:price/success', 'Payment@paymentSuccess', [], 'callback_url');

?>