<?php

	function language($word, $lang) {
		$dictionary = [
			// Login
			"username" => ["Username", "اسم المستخدم"],
			"password" => ["Password", "كلمة المرور"],
			"login" => ["Login", "تسجيل الدخول"],
			"forgot_password" => ["Forgot Password?", "نسيت الباسورد؟"],
			"remember_me" => ["Remember me", ".......تذكرنى"],
			"admin_login" => ["Admin Login", "دخول المدير"],
			"login_field_required" => ["Username and Password are required fields", "يرجى إدخال اسم المستخدم وكلمة المرور"],
			"login_error" => ["Username or Password is incorrect", "اسم المستخدم او كلمة المرور غير صحيحة"],
			"unauthorized_login" => ["Unauthorized Login", "دخول غير مصرح به"],

			// Navbar
			"brand" => ["Hospital", "المستشفى"],
			"dashboard" => ["Dashboard", "لوحة التحكم"],
			"dropdown" => ["Manage", "الادارة"],
			"logout" => ["Logout", "تسجيل الخروج"],
			"genders" => ["Manage Genders", "إدارة النوع"],
			"nationalities" => ["Manage Nationalities", "إدارة الجنسيات"],
			"natTypes" => ["Manage Nationality Types", "إدارة انواع الجنسيات"],
			"departments" => ["Manage Departments", "إدارة الاقسام"],
			"users" => ["Manage Users", "إدارة المستخدمين"],
			"cities" => ["Manage Cities", "إدارة المدن"],
			"areas" => ["Manage Areas", "إدراة المناطق"],
			"machine-types" => ["Manage Machine Types", "إدارة انواع الأجهزة"],
			"machines" => ["Manage Machines", "إدارة الأجهزة"],
			"transfers" => ["Patient's Transfers", "تحويلات المرضى"],
			"phoneNumbers" => ["Phone Numbers", "ارقام التليفونات"],
			"positionRoles" => ["Employee's Position Role", "الوضع الوظيفى للموظف"],
			"employees" => ["Manage Employees", "إدارة الموظفين"],
			"patients" => ["Manage Patients", "إدارة المرضى"],
			"articles" => ["Manage Patient Cases", "إدارة صحف الحالة"],
			"disabilities" => ["Manage Disability Cards", "إدارة بطاقات الإعانة"],
			"financials" => ["Manage Financial Aids", "إدارة المساعدات المالية"],
			"receipts" => ["Manage Receipts", "إدارة استلام الاجهزة"],

			// General
			"id" => ["Id", "الرقم المعرف"],

			// Genders
			"genders-heading" => ["Manage Genders", "إدارة النوع"],
			"genders-add" => ["Add New Gender", "إضافة نوع جديد"],
			"genders-gender" => ["Gender", "النوع"],
			"genders-manage" => ["Manage Gender", "إدارة النوع"],
			"genders-check-error" => ["ERROR: GENDER MUST BE Male OR Female", "خطأ: النوع يجب ان يكون ذكر او انثى"],
			"genders-add-success" => ["GENDER HAS BEEN ADDED SUCCESSFULLY", "تم إضافة النوع بنجاح"],
			"genders-edit" => ["Edit Gender", "تعديل النوع"],
			"genders-required" => ["ERROR: GENDER IS REQUIRED", "خطأ: يجب إدخال النوع"],
			"genders-update-success" => ["GENDER HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل النوع بنجاح"],
			"genders-delete-success" => ['GENDER HAS BEEN DELETED SUCCESSFULLY', "تم حذف النوع بنجاح"],
			
			// Nationalities
			"nationalities-heading" => ["Manage Nationalities", "إدارة الجنسيات"],
			"nationalities-nat" => ["Nationality", "الجنسية"],
			"nationalities-manage" => ["Manage Nationality", "إدارة الجنسية"],
			"nationalities-edit" => ["Edit Nationality", "تعديل الجنسية"],
			"nationalities-add" => ["Add New Nationality", "إضافة جنسية جديدة"],
			"nationalities-add-success" => ["NATIONALITY HAS BEEN ADDED SUCCESSFULLY", "تم إضافة الجنسية بنجاح"],
			"nationalities-update-success" => ["NATIONALITY HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل الجنسية بنجاح"],
			"nationalities-required" => ["ERROR: NATIONALITY IS REQUIRED", "خطأ: يجب إدخال الجنسية"],
			"nationalities-delete-success" => ["NATIONALITY HAS BEEN DELETED SUCCESSFULLY", "تم حذف الجنسية بنجاح"],
			"nat-check-error" => ["ERROR: NATIONALITY MUST BE FROM 1 TO 50 CHARACTERS LONG", "خطأ: الجنسية يجب ان تكون من 1 ل 50 حرف"],
			
			// Nationality Types
			"nationalityTypes-heading" => ["Manage Nationality Types", "إدارة انواع الجنسيات"],
			"natType-type" => ["Nationality Type", "نوع الجنسية"],
			"natType-manage" => ["Manage Nationality Type", "إدارة نوع الجنسية"],
			"natType-edit" => ["Edit Nationality Types", "تعديل نوع الجنسية"],
			"natType-add" => ["Add New Nationality Type", "إضافة نوع جنسية جديد"],
			"natType-add-success" => ["NATIONALITY TYPE HAS BEEN ADDED SUCCESSFULLY", "تم إضافة نوع الجنسية بنجاح"],
			"nationalityTypes-check-error" => ["ERROR: NATIONALITY TYPE MUST BE kuwaiti or Not kuwaiti", "خطأ: نوع الجنسية يجب ان يكون كويتى او غير كويتى"],
			"nationalityTypes-required" => ["ERROR: NATIONALITY TYPE IS REQUIRED", "خطأ: يجب إدخال نوع الجنسية"],
			"nationalityTypes-update-success" => ["NATIONALITY TYPE HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل نوع الجنسية بنجاح"],
			"nationalityTypes-required" => ["ERROR: NATIONALITY TYPE IS REQUIRED", "خطأ: يجب إدخال نوع الجنسية"],
			"nationalityTypes-delete-success" => ["NATIONALITY TYPE HAS BEEN DELETED SUCCESSFULLY", "تم حذف نوع الجنسية بنجاح"],

			// Departments
			"departments-heading" => ["Manage Departments", "إدارة الاقسام"],
			"departments-dept" => ["Department", "القسم"],
			"departments-manage" => ["Manage Department", "إدارة القسم"],
			"departments-edit" => ["Edit Department", "تعديل القسم"],
			"departments-add" => ["Add New Department", "إضافة قسم جديد"],
			"departments-check-error" => ["ERROR: DEPARTMENT MUST BE FROM 1 TO 100 CHARACTERS LONG", "خطأ: القسم يجب ان يكون من حرف إلى 100 حرف"],
			"departments-add-success" => ["DEPARTMENT HAS BEEN ADDED SUCCESSFULLY", "تم إضافة القسم بنجاح"],
			"departments-required" => ["ERROR: DEPARTMENT IS REQUIRED", "خطأ: يجب إدخال اسم القسم"],
			"departments-update-success" => ["DEPARTMENT HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل القسم بنجاح"],
			"departments-delete-success" => ["DEPARTMENT HAS BEEN DELETED SUCCESSFULLY", "تم حذف القسم بنجاح"],

			// Users
			"users-heading" => ["Manage Users", "إدارة المستخدمين"],
			"users-username" => ["Username", "إسم المستخدم"],
			"users-manage" => ["Manage User", "إدارة المستخدم"],
			"users-edit" => ["Edit User", "تعديل المستخدم"],
			"users-add" => ["Add New User", "إضافة مستخدم جديد"],
			"users-password" => ["New Password", "كلمة المرور الجديدة"],
			"username-check-error" => ["ERROR: USERNAME MUST BE FROM 4 TO 50 CHARACTERS LONG", "خطأ: اسم المستخدم يجب ان يكون من اربعة احرف إلى 50 حرف"],
			"password-check-error" => ["ERROR: PASSWORD MUST BE FROM 6 TO 100 CHARACTERS LONG", "خطأ: كلمة المرور يجب ان تكون من ستة احرف إلى 100 حرف"],
			"users-add-success" => ["USER HAS BEEN ADDED SUCCESSFULLY", "تم إضافة المستخدم بنجاح"],
			"users-required" => ["ERROR: USERNAME AND PASSWORD ARE REQUIRED FIELDS", "خطأ: يجب إدخال اسم المستخدم وكلمة المرور"],
			"users-update-success" => ["USER HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل المستخدم بنجاح"],
			"users-delete-success" => ["USER HAS BEEN DELETED SUCCESSFULLY", "تم حذف المستخدم بنجاح"],

			// Cities
			"cities-heading" => ["Manage Cities", "إدارة المدن"],
			"cities-city" => ["City", "المدينة"],
			"cities-manage" => ["Manage City", "إدارة المدينة"],
			"cities-edit" => ["Edit City", "تعديل المدينة"],
			"cities-add" => ["Add New City", "إضافة مدينة جديدة"],
			"cities-check-error" => ["ERROR: CITY NAME MUST BE FROM 1 TO 50 CHARACTER LONG", "حطأ: اسم المدينة يجب ان يكون من حرف إلى 50 حرف"],
			"cities-add-success" => ["CITY HAS BEEN ADDED SUCCESSFULLY", "تم إضافة المدينة بنجاح"],
			"cities-required" => ["ERROR: YOU MUST PROVIDE A CITY NAME", "خطأ: يجب إدخال اسم المدينة"],
			"cities-update-success" => ["CITY HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل المدينة بنجاح"],
			"cities-delete-success" => ["CITY HAS BEEN DELETED SUCCESSFULLY", "تم حذف المدينة بنجاح"],

			// Areas
			"areas-heading" => ["Manage Areas", "إدارة المناطق"],
			"areas-area" => ["Area", "المنطقة"],
			"areas-city" => ["City", "المدينة"],
			"areas-manage" => ["Manage Area", "إدارة المنطقة"],
			"areas-edit" => ["Edit Area", "تعديل المنطقة"],
			"areas-add" => ["Add New Area", "إضافة منطقة جديدة"],
			"no-cities-error" => ["ERROR: THERE MUST BE AT LEAST ONE CITY IN ORDER TO ADD AN AREA", "خطأ: يجب إدخال مدينة واحدة على الاقل من اجل إضافة منطقة جديدة"],
			"choose-city-error" => ["ERROR: YOU MUST CHOOSE A CITY FROM THE Cities LIST", "خطأ: يجب إختيار مدينة من قائمة المدن"],
			"areas-check-error" => ["ERROR: AREA NAME MUST BE FROM 1 TO 50 CHARACTERS LONG", "خطأ: اسم المنطقة يجب ان يكون من حرف إلى 50 حرف"],
			"areas-add-success" => ["AREA HAS BEEN ADDED SUCCESSFULLY", "تم إضافة المنطقة بنجاح"],
			"areas-required" => ["ERROR: YOU MUST PROVIDE AN AREA NAME", "خطأ: يجب إدخال اسم المنطقة"],
			"areas-update-success" => ["AREA HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل المنطقة بنجاح"],
			"areas-delete-success" => ["AREA HAS BEEN DELETED SUCCESSFULLY", "تم حذف المنطقة بنجاح"],
			"add-area-warning" => ["NOTICE: YOU CANNOT ADD AREAS BEFORE ADDING CITIES FIRST", "ملحوظة: لا يمكنك إضافة مناطق إلا بعد إضافة مدن اولا"],

			// Machine Types
			"machine-types-heading" => ["Manage Machine Types", "إدارة انواع الأجهزة"],
			"machine-types-type" => ["Machine Type", "نوع الجهاز"],
			"machine-types-manage" => ["Manage Machine Type", "إدارة نوع الجهاز"],
			"machine-types-edit" => ["Edit Machine Type", "تعديل نوع الجهاز"],
			"machine-types-add" => ["Add New Machine Type", "إضافة نوع جهاز جديد"],
			"machine-types-add-success" => ["MACHINE TYPE HAS BEEN ADDED SUCCESSFULLY", "تم إضافة نوع الجهاز بنجاح"],
			"machine-types-required" => ["ERROR: YOU MUST PROVIDE A MACHINE TYPE", "خطأ: يجب إدخال نوع جهاز"],
			"machine-types-update-success" => ["MACHINE TYPE HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل نوع الجهاز بنجاح"],
			"machine-type-check-error" => ["ERROR: MACHINE TYPE MUST BE FROM 1 TO 100 CHARACTERS LONG", "خطأ: نوع الجهاز يجب ان يكون من حرف إلى 100 حرف"],
			"machine-types-delete-success" => ["MACHINE TYPE HAS BEEN DELETED SUCCESSFULLY", "تم حذف نوع الجهاز بنجاح"],

			// Machines
			"machines-heading" => ["Manage Machines", "إدارة الأجهزة"],
			"machines-arName" => ["Machine Arabic Name", "اسم الجهاز بالعربية"],
			"machines-enName" => ["Machine English Name", "اسم الجهاز بالإنجليزية"],
			"machines-description" => ["Machine Description", "وصف الجهاز"],
			"machines-type" => ["Machine Type", "نوع الجهاز"],
			"machines-manage" => ["Manage Machine", "إدارة الجهاز"],
			"machines-edit" => ["Edit Machine", "تعديل الجهاز"],
			"machines-add" => ["Add New Machine", "إضافة جهاز جديد"],
			"add-machine-warning" => ["NOTICE: YOU CANNOT ADD MACHINES BEFORE ADDING MACHINE TYPES FIRST", "ملحوظة: لا يمكنك إضافة اجهزة إلا بعد إضافة انواع الاجهزة اولا"],
			"no-machineTypes-error" => ["ERROR: THERE MUST BE AT LEAST ONE MACHINE TYPE IN ORDER TO ADD A MACHINE", "خطأ: يجب إدخال نوع جهاز واحد على الاقل من اجل إضافة جهاز جديد"],
			"choose-type-error" => ["ERROR: YOU MUST CHOOSE A TYPE FROM THE Types LIST", "خطأ: يجب إختيار نوع الجهاز من قائمة النوع"],
			"machines-check-error" => ["ERROR: ARABIC NAME AND ENGLISH NAME MUST BE FROM 1 TO 50 CHARACTERS LONG", "خطأ: الاسم العربى والاسم الانجليزى يجب ان يكونوا من حرف إلى 50 حرف"],
			"machines-add-success" => ["MACHINE HAS BEEN ADDED SUCCESSFULLY", "تم إضافة الجهاز بنجاح"],
			"machines-required" => ["ERROR: ARABIC NAME, ENGLISH NAME AND TYPE ARE REQUIRED FIELDS", "خطأ: يجب إدخال الاسم العربى والاسم الانجليزى والنوع"],
			"machines-description-check-error" => ["ERROR: DESCRIPTION MUST BE 255 AT MOST", "خطأ: الوصف يجب ان يكون 255 حرف على الاكثر"],
			"machines-update-success" => ["MACHINE HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل الجهاز بنجاح"],
			"machines-delete-success" => ["MACHINE HAS BEEN DELETED SUCCESSFULLY", "تم حذف الجهاز بنجاح"],
			"desc-not-found" => ["No Description", "لا يوجد وصف"],

			// Transfers
			"transfers-heading" => ["Manage Patient's Transfers", "إدارة تحويلات المرضى"],
			"transfers-name" => ["Transfered From", "محول من"],
			"transfers-manage" => ["Manage Transfer", "إدارة التحويل"],
			"transfers-edit" => ["Edit Transfer", "تعديل التحويل"],
			"transfers-add" => ["Add New Transfer", "إضافة تحويل جديد"],
			"transfers-check-error" => ["ERROR: TRANSFER NAME MUST BE FROM 1 TO 100 CHARACTERS LONG", "خطأ: اسم التحويل يجب ان يكون من حرف إلى 100 حرف"],
			"transfers-add-success" => ["TRANSFER HAS BEEN ADDED SUCCESSFULLY", "تم إضافة التحويل بنجاح"],
			"transfers-update-success" => ["TRANSFER HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل التحويل بنجاح"],
			"transfers-required" => ["ERROR: YOU MUST PROVIDE THE NAME OF THE TRANSFER", "خطأ: يجب إدخال اسم التحويل"],
			"transfers-delete-success" => ["TRANSFER HAS BEEN DELETED SUCCESSFULLY", "تم حذف التحويل بنجاح"],

			// Position Rules
			"positionRoles-heading" => ["Manage Position Roles", "إدارة الوضع الوظيفى"],
			"positionRoles-role" => ["Position Role", "الوضع الوظيفى"],
			"positionRoles-manage" => ["Manage Position Role", "إدارة الوضع الوظيفى"],
			"positionRoles-edit" => ["Edit Position Role", "تعديل الوضع الوظيفى"],
			"positionRoles-add" => ["Add New Position Role", "إضافة وضع وظيفى جديد"],
			"positionRoles-add-success" => ["POSITION ROLE HAS BEEN ADDED SUCCESSFULLY", "تم إضافة الوضع الوظيفى الجديد بنجاح"],
			"positionRoles-check-error" => ["ERROR: POSITION ROLE MUST BE FROM 1 TO 100 CHARACTERS LONG", "خطأ: الوضع الوظيفى يجب ان يكون من حرف إلى 100 حرف"],
			"positionRoles-required" => ["ERROR: YOU MUST PROVIDE THE POSITION ROLE", "خطأ: يجب إدخال الوضع الوظيفى"],
			"positionRoles-update-success" => ["POSITION ROLE HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل الوضع الوظيفى بنجاح"],
			"positionRoles-delete-success" => ["POSITION ROLE HAS BEEN DELETED SUCCESSFULLY", "تم حذف الوضع الوظيفى بنجاح"],

			// Employees
			"employes-heading" => ["Manage Employees", "إدارة الموظفين"],
			"employees-firstName" => ["First Name", "الاسم الاول"],
			"employees-middleName" => ["Middle Name", "الاسم الاوسط"],
			"employees-lastName" => ["Last Name", "الاسم الاخير"],
			"employees-civil_id" => ["Civil Id", "الرقم المدنى"],
			"employees-dob" => ["Date of Birth", "تاريخ الميلاد"],
			"employees-hireDate" => ["Hire Date", "تاريخ التعيين"],
			"employees-department" => ["Department", "القسم"],
			"employees-positionRole" => ["Position Role", "الوظيفة"],
			"employees-manage" => ["Manage Employee", "إدارة الموظف"],
			"employees-edit" => ["Edit Employee", "تعديل بيانات الموظف"],
			"employees-add" => ["Add New Employee", "إضافة موظف جديد"],
			"employees-fill-in-alert" => ["Please make sure to add data in the following first:", "من فضلك تأكد من إضافة البيانات فى الجداول الاتية اولا:"],
			"department-fill-in-msg" => ["Add in the department that the employee belongs to", "اضف القسم التابع له الموظف لجدول الاقسام"],
			"gender-fill-in-msg" => ["Add the gender of the employee in the genders table if not exists", "اضف النوع فى جدول الانواع"],
			"nationality-fill-in-msg" => ["Add the nationality of the employee in the nationalities table if not exists", "اضف الجنسية للموظف فى جدول الجنسيات لو لم تكن موجودة"],
			"natioinality-type-fill-in-msg" => ["Add the type of the nationality in the nationality types table if not eixsts", "اضف نوع الجنسية فى جدول انواع الجنسيات لو لم يكن موجود"],
			"position-role-fill-in-msg" => ["Add the position role in the position roles table if not exists", "اضف نوع الوظيفة فى جدول الوظائف لو لم تكن موجودة"],
			"employees-passport_number" => ["Passport Number", "رقم جواز السفر"],
			"employees-image" => ["Personal Image", "الصورة الشخصية"],
			"employees-gender" => ["Gender", "الجنس"],
			"employees-nationality" => ["Nationality", "الجنسية"],
			"employees-nationalityType" => ["Nationality Type", "نوع الجنسية"],
			"employees-firstName-error" => ["ERROR: THE FIRST NAME MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ: الاسم الاول يجب ان يكون من حرف إلى 30 حرف"],
			"employees-middleName-error" => ["ERROR: THE MIDDLE NAME MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ: الاسم الاوسط يجب ان يكون من حرف إلى 30 حرف"],
			"employees-lastName-error" => ["ERROR: THE LAST NAME MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ: الاسم الاخير يجب ان يكون من حرف إلى 30 حرف"],
			"employees-add-success" => ["EMPLOYEES HAS BEEN ADDED SUCCESSFULLY", "تم إضافة الموظف بنجاح"],
			"employees-required-fields" => ["ERROR: PLEASE FILL IN THE REQUIRED FIELDS IDENTIFIED BY *", "خطأ: من فضلك إملأ الخانات المطلوبة المعرفة بعلامة *"],
			"employee-edit" => ["Edit Employee", "تعديل بيانات الموظف"],
			"employees-delete-success" => ["EMPLOYEE HAS BEEN DELETED SUCCESSFULLY", "تم حذف الموظف بنجاح"],
			"employees-updated-success" => ["EMPLOYEE HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل بيانات الموظف بنجاح"],

			// Employee Show
			"employee-not-found" => ["ERROR: EMPLOYEE NOT FOUND", "خطأ: الموظف غير موجود"],
			"employee-profile" => ["information", "معلومات"],
			"employee-not-updated-yet" => ["This employee is not updated yet", "هذا الموظف لم يتم تحديث بياناته من قبل"],

			// Patients
			"patient-heading" => ["Manage Patients", "إدارة المرضى"],
			"patients-firstName" => ["First Name", "الاسم الاول"],
			"patients-middleName" => ["Middle Name", "الاسم الاوسط"],
			"patients-lastName" => ["Last Name", "الاسم الاخير"],
			"patients-civil_id" => ["Civil Id", "الرقم المدنى"],
			"patients-passport_number" => ["Passport Number", "رقم جواز السفر"],
			"patients-dob" => ["Date of Birth", "تاريخ الميلاد"],
			"patients-creationTime" => ["Creation Time", "تاريخ التسجيل"],
			"patients-gender" => ["Gender", "الجنس"],
			"patients-nationality" => ["Nationality", "الجنسية"],
			"patients-nationalityType" => ["Nationality Type", "نوع الجنسية"],
			"patients-manage" => ["Manage Patient", "إدارة المريض"],
			"patient-edit" => ["Patient Edit", "تعديل بيانات المريض"],
			"patients-add" => ["Add New Patient", "إضافة مريض جديد"],
			"patients-fill-in-alert" => ["Please make sure to add data in the following first:", "من فضلك تأكد من إضافة البيانات فى الجداول الاتية اولا:"],
			"patient-gender-fill-in-msg" => ["Add the gender of the patient in the genders table if not exists", "اضف النوع فى جدول الانواع"],
			"patient-nationality-fill-in-msg" => ["Add the nationality of the patient in the nationalitites table if not exists", "اضف الجنسية للمريض فى جدول الجنسيات لو لم تكن موجودة"],
			"patient-natioinality-type-fill-in-msg" => ["Add the type of the nationality in the nationality types table if not exists", "اضف نوع الجنسية فى جدول انواع الجنسيات لو لم تكن موجودة"],
			"patients-notes" => ["Other Notes", "ملاحظات اخرى"],
			"patients-firstName-error" => ["ERROR: THE FIRST NAME OF THE PATIENT MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ اسم المريض يجب ان يتكون من حرف إلى 30 حرف"],
			"patients-middleName-error" => ["ERROR: THE MIDDLE NAME OF THE PATIENT MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ الاسم الأوسط يجب ان يتكون من حرف إلى 30 حرف"],
			"patients-lastName-error" => ["ERROR: THE LAST NAME OF THE PATIENT MUST BE FROM 1 TO 30 CHARACTERS LONG", "خطأ الاسم الأخير للموظف يجب ان يتكون من حرف إلى 30 حرف"],
			"patients-add-success" => ["PATIENT HAS BEEN ADDED SUCCESSFULLY", "تم إضافة المريض بنجاح"],
			"patients-required-fields" => ["ERROR: PLEASE FILL IN THE REQUIRED FIELDS IDENTIFIED BY *", "خطأ: من فضلك إملاء الحقول الإجبارية المعرفة بعلامة *"],
			"patients-image" => ["Personal Image", "الصورة الشخصية"],
			"patients-updated-success" => ["PATIENT DATA HAS BEEN UPDATED SUCCESSFULLY", "تم تعديل بيانات المريض بنجاح"],
			"patients-delete-success" => ["PATIENT HAS BEEN DELETED SUCCESSFULLY", "تم حذف المريض بنجاح"],
			"no-articles-to-show" => ["No articles to show", "لا يوجد صحف حالة لعرضها"],

			// Patient Show
			"patient-not-found" => ["ERROR: PATIENT NOT FOUND", "خطأ: المريض غير موجود"],
			"patient-profile" => ["information", "معلومات"],
			"patient-not-updated-yet" => ["This patient is not updated yet", "هذا المريض لم يتم تحديث بياناته من قبل"],

			// Employees and Patients Errors
			"civil_id-must-be-a-number-error" => ["ERROR: THE CIVIL ID MUST BE A NUMBER", "خطأ: الرقم القومى يجب ان يتكون من ارقام فقط"],
			"civil_id-must-be-12-digits-long-error" => ["ERROR: THE CIVIL ID MUST BE 12 DIGITS LONG", "خطأ: الرقم القومى يجب ان يتكون من 12 رقم"],
			"passport_number-must-be-a-number-error" => ["ERROR: THE PASSPORT NUMBER MUST BE A NUMBER", "خطأ: رقم جواز السفر يجب ان يتكون من ارقام فقط"],
			"passport_number-must-be-from-8-to-9-digits" => ["ERROR: PASSPORT NUMBER MUST BE FROM 8 TO 9 DIGIST", "خطأ: رقم جواز السفر يجب ان يكون 8 او 9 ارقام فقط"],
			"image-extension-error" => ["ERROR: INVALID EXTENSION, ALLOWED EXTENSIONS ARE (jpeg, jpg, png)", "خطأ: الامتدادات المدعومة هى jpeg, jpg, png فقط"],
			"image-size-error" => ["ERROR: IMAGE MUST NOT EXCEED 4 MBs", "خطأ: يجب أن لا يتعدى حجم الصورة 4 ميجا بايت"],
			"dob-wrong-format-error" => ["ERROR: DATE OF BIRTH FORMAT IS WRONG", "خطأ: صيغة تاريخ الميلاد خاطئة"],
			"hireDate-worng-format-error" => ["ERROR: HIRE DATE FORMAT IS WRONG", "خطأ: صيغة تاريخ التعيين خاطئة"],

			// Phone Numbers
			"phoneNumbers-heading" => ["Manage Phone Numbers", "إدارة ارقام التليفونات"],
			"phoneNumbers-number" => ["Phone Number", "رقم التليفون"],
			"phoneNumbers-typeDiscriminator" => ["Type of Owner", "نوع مالك التليفون"],
			"phoneNumbers-phoneOf" => ["Owner of Phone Number", "مالك التليفون"],
			"phoneNumbers-edit" => ["Edit Phone Number", "تعديل رقم التليفون"],
			"phoneNumbers-add" => ["Add Phone Number", "إضافة رقم تليفون"],
			"phoneNumber-required" => ["ERROR: PLEASE INSERT A PHONE NUMBER", "خطأ: من فضلك إدخل رقم تليفون"],
			"phoneNumber-check-error" => ["ERROR: PHONE NUMBER MUST BE A NUMBER OF 11 DIGITS", "خطأ: رقم التليفون يجب ان يكون رقم مكون من 11 خانة"],
			"phoneNumber-add-success" => ["The phone number has been added successfully", "تم إضافة رقم التليفون بنجاح"],
			"phoneNumbers-update-success" => ["The phone number has been updated successfully", "تم تعديل رقم التليفون بنجاح"],
			"phoneNumbers-delete-success" => ["The phone number has been deleted successfully", "تم حذف رقم التليفون بنجاح"],
			"phoneNumbers" => ["Phone Numbers", "ارقام التليفونات"],
			"noPhoneNumbersFound" => ["No Phone Numbers To Show", "لا يوجد أرقام تليفون لعرضها"],
			"phoneNumbers-manage" => ["Manage Phone Number", "إدارة رقم التليفون"],
			"emp-typeDiscriminator" => ["Employee", "موظف"],
			"pat-typeDiscriminator" => ["Patient", "مريض"],
			"phoneNumber-add-error" => ["ERROR: THE PHONE NUMBER IS EXISTS ALREADY OR SOME OTHER ERROR HAPPENED", "خطأ: رقم التليفون موجود بالفعل او خطأ اخر حدث"],

			// Articles
			"articles-heading" => ["Patient Cases", "صحف الحالة"],
			"articles-price" => ["Amount Paid", "المبلغ المدفوع"],
			"articles-date" => ["Case Date", "تاريخ صحيفة الحالة"],
			"articles-patient" => ["Patient Name", "اسم المريض"],
			"articles-transfer" => ["Transfered From", "جهة التحويل"],
			"articles-machine" => ["Machine", "الجهاز"],
			"articles-department" => ["Department", "القسم"],
			"articles-manage" => ["Manage Patient Case", "إدارة صحيفة الحالة"],
			"not-transfered" => ["Not Transferred", "غير محول"],
			"articles-edit" => ["Edit Case", "تعديل صحيفة الحالة"],
			"articles-add" => ["Add New Case", "أضف صحيفة حالة جديدة"],
			"articles-required" => ["ERROR: PLEASE FILL IN THE REQUIRED DATA", "خطأ: من فضلك إملا الخانات المطلوبة"],
			"articles-add-error" => ["ERROR: THERE IS AN ERROR WHILE ADDING THIS CASE, PLEASE TRY TO ADD IT AGAIN", "خطأ: هناك خطا فى إضافة صحيفة الحالة هذه من فضلك حاول مرة اخرى"],
			"articles-add-success" => ["The patient case has been added successfully", "تم إضافة صحيفة الحالة بنجاح"],
			"articles-update-success" => ["The patient case has been updated successfully", "تم تعديل صحيفة الحالة بنجاح"],
			"articles-delete-success" => ["The patient case has been deleted successfully", "تم حذف صحيفة الحالة بنجاح"],
			"patient-not-found-error" => ["ERROR: PATIENT NOT FOUND", "خطأ: المريض غير موجود"],
			"article-not-found" => ["ERROR: ARTICLE NOT FOUND", "خطأ: صحيفة الحالة غير موجودة"],
			"article-heading" => ["Patient Case", "صحيفة الحالة"],
			"no-transfer" => ["Not transfered", "غير محول"],

			// Disability Cards
			"disabilities-heading" => ["Disability Cards", "بطاقات الإعانة"],
			"disabilities-id" => ["Identification Number", "الرقم المعرف"],
			"disabilities-description" => ["Description", "الوصف"],
			"disabilities-amount" => ["Amound of Money", "المبلغ"],
			"disabilities-article" => ["Case", "صحيفة الحالة"],
			"disabilities-date" => ["Card Date", "تاريخ البطاقة"],
			"disabilities-manage" => ["Manage Disability Card", "إدارة بطاقة الإعانة"],
			"disabilities-edit" => ["Edit Disability Card", "تعديل بطاقة الإعانة"],
			"disabilities-add" => ["Add New Disability Card", "أضف بطاقة إعانة جديدة"],
			"disability-card-no-articles-error" => ["ERROR: YOU CAN NOT ADD A DISABILITY CARD BEFORE ADDING A PATIENT CASE", "خطأ: لا يمكتك إضافة بطاقة إعانة بدون صحيفة حالة لمريض"],
			"disabilities-desc-length-error" => ["ERROR: THE DESCRIPTION MUST BE AT MOST 255 CHARACTERS", "خطأ: الوصف يجب أن يكون على الأكثر 255 حرف"],
			"disabilities-required" => ["ERROR: PLEASE FILL IN ALL THE REQUIRED FIELDS IDENTIFIED BY *", "خطأ: من فضلك إملأ كل الخانات الإجبارية الموجود امامها علامة *"],
			"disabilities-add-error" => ["ERROR: SOME ERROR OCCURED WHILE ADDING THE DISABILITY CARD", "خطأ: حذث خطأ اثناء إضافة بطاقة الإعانة"],
			"disabilities-add-success" => ["Disability card has been added successfully", "تم إضافة بطاقة الإعانة بنجاح"],
			"disabilities-delete-success" => ["Disability card has been deleted successfully", "تم حذف بطاقة الإعانة بنجاح"],
			"noDisabilityCards" => ["No disability cards to show", "لا يوجد بطاقات إعانة لعرضها"],

			// Financial Aids
			"financials-heading" => ["Financial Aids", "المساعدات المالية"],
			"financials-id" => ["Identification Number", "الرقم المعرف"],
			"financials-description" => ["Description", "الوصف"],
			"financials-amount" => ["Amount of Money", "المبلغ"],
			"financials-article" => ["Case", "صحيفة الحالة"],
			"financials-date" => ["Financial Aid Date", "تاريخ المساعدة المالية"],
			"financials-manage" => ["Manage Financial Aid", "إدارة المساعدة المالية"],
			"financials-edit" => ["Edit Financial Aid", "تعديل المساعدة المالية"],
			"financials-add" => ["Add New Financial Aid", "أضف مساعدة مالية جديدة"],
			"financials-card-no-articles-error" => ["ERROR: YOU CAN NOT ADD A FINANCIAL AID BEFORE ADDING A PATIENT CASE", "خطأ: لا يمكتك إضافة مساعدة مالية بدون صحيفة حالة لمريض"],
			"financials-desc-length-error" => ["ERROR: THE DESCRIPTION MUST BE AT MOST 255 CHARACTERS", "خطأ: الوصف يجب أن يكون على الأكثر 255 حرف"],
			"financials-required" => ["ERROR: PLEASE FILL IN ALL THE REQUIRED FIELDS IDENTIFIED BY *", "خطأ: من فضلك إملأ كل الخانات الإجبارية الموجود امامها علامة *"],
			"financials-add-error" => ["ERROR: SOME ERROR OCCURED WHILE ADDING THE FINANCIAL AID", "خطأ: حذث خطأ اثناء إضافة المساعدة المالية"],
			"financials-add-success" => ["Financial aid has been added successfully", "تم إضافة المساعدة المالية بنجاح"],
			"financials-delete-success" => ["Financial aid has been deleted successfully", "تم حذف المساعدة المالية بنجاح"],
			"noFinancialAid" => ["No financial aids to show", "لا يوجد مساعدات مالية لعرضها"],

			// Receipts
			"receipts-heading" => ["Machines Delivery", "إستلام الاجهزة"],
			"receipts-receiptDate" => ["Request Date", "تاريخ الطلب"],
			"receipts-deliveryDate" => ["Delivery Date", "تاريخ التسليم"],
			"receipts-article" => ["Patient Article", "صحيفة الحالة"],
			"receipts-machine" => ["Machine", "الجهاز"],
			"receipts-technician" => ["Technician", "التقنى"],
			"receipts-manage" => ["Machines Delivery Manage", "إدارة إستلام الاجهزة"],
			"receipts-edit" => ["Edit Machine Delivery", "تعديل إيصال استلام الجهاز"],
			"receipts-add" => ["Add Machine Delivery", "إضافة إيصال استلام لجهاز"],
			"receipts-add-error" => ["ERROR: THERE IS AN ERROR WHILE ADDING THIS MACHINE DELIVERY PLEASE TRY AGAIN", "خطأ: هناك خطأ عند إضافة هذا الإيصال من فضلك حاول مرة اخرى"],
			"receipts-add-success" => ["Machine delivery has been added successfully", "تم إضافة إيصال الإستلام بنجاح"],
			"receipts-required" => ["ERROR: PLEASE FILL IN THE REQUIRED FIELDS", "خطأ: من فضلك إملأ الخانات المطلوبة"],
			"receipts-update-success" => ["Machine delivery has been updated successfully", "تم تحديث إيصال الإستلام بنجاح"],
			"receipts-delete-success" => ["Machine delivery has been deleted successfully", "تم حذف إيصال الإستلام بنجاح"],
			"machine-delivery" => ["Machines delivery", "إيصالات إستلام الاجهزة"],
			"noReceipts" => ["No machine delivery to show", "لا يوجد إيصالات إستلام اجهزة لعرضها"],

			// Form
			"add" => ["Add", "إضافة"],
			"edit" => ["Edit", "تعديل"],
			"delete" => ["Delete", "حذف"],

			// Errors
			"method_not_allowed_error" => ["ERROR: METHOD NOT ALLOWED", "خطأ: الطلب غير مسموح به"],
			"id-required" => ["ERROR: YOU MUST PROVIDE AN ID", "خطأ: يجب تحديد الرقم المعرف فى الطلب"],
			"id-not-found" => ["ERROR: ID NOT FOUND", "خطأ: الرقم المعرف غير موجود"],
			"page-not-found" => ["ERROR: PAGE NOT FOUND", "خطأ: الصفحة غير موجودة"],
			"created_at" => ["Created At", "تاريخ إنشاء السجل"],
			"updated_at" => ["Last Update", "تاريخ اخر تحديث"],
			"date-wrong-format-error" => ["ERROR: WRONG DATE FORMAT", "خطأ: صيغة التاريخ غير صحيحة"],

			// General
			"id" => ["Identification Number", "الرقم المعرف"],
		];
		return $dictionary[$word][$lang];
	}
