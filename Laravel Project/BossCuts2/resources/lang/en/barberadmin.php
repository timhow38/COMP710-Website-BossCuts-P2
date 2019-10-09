<?php

return [
	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
		],
	],
	
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],
	
	'clients' => [
		'title' => 'Clients',
		'created_at' => 'Time',
		'fields' => [
			'first-name' => 'First name',
			'last-name' => 'Last name',
			'phone' => 'Phone',
			'email' => 'Email',
		],
	],

	'employees' => [
		'title' => 'Barbers',
		'created_at' => 'Time',
		'fields' => [
			'first-name' => 'First name',
			'last-name' => 'Last name',
			'phone' => 'Phone',
			'email' => 'Email',
			'services' => 'Services',
		],
	],
	
	'services' => [
		'title' => 'Hair Styles',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'price' => 'Price',
		],
	],	
	
	'working-hours' => [
		'title' => 'Working hours',
		'created_at' => 'Time',
		'fields' => [
			'employee' => 'Employee',
			'date' => 'Date',
			'start-time' => 'Start time',
			'finish-time' => 'Finish time',
		],
	],
	
	'appointments' => [
		'title' => 'Appointments',
		'created_at' => 'Time',
		'fields' => [
			'client' => 'Client',
			'employee' => 'Employee',
			'start-time' => 'Start time',
			'finish-time' => 'Finish time',
			'comments' => 'Comments',
		],
	],
	'qa_create' => 'Create',
	'qa_save' => 'Save',
	'qa_edit' => 'Edit',
	'qa_view' => 'View',
	'qa_update' => 'Update',
	'qa_list' => 'List',
	'qa_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Logout',
	'qa_add_new' => 'Add new',
	'qa_are_you_sure' => 'Are you sure?',
	'qa_back_to_list' => 'Back to list',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Delete',
	'barberadmin_title' => 'Appointments',
];