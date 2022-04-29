<?php 
$config =[
	'add_user_form'=>[
		[
						'field'=>'email',
						'label'=>'Email',
						'rules'=>'required|valid_email'

					],
					[

						'field'=>'password',
						'label'=>'Password',
						'rules'=>'required'
					],
					[

						'field'=>'mobile',
						'label'=>'Mobile',
						'rules'=>'required|exact_length[10]|numeric'
					],
					[

						'field'=>'firstname',
						'label'=>'Firstname',
						'rules'=>'required|max_length[15]'

					],
					[
						'field'=>'lastname',
						'label'=>'Lastname',
						'rules'=>'required|min_length[5]|max_length[15]|alpha'

					],
					
					
	],

	// agency registration validation..
	'add_agency_form'=>[
		[
						'field'=>'email',
						'label'=>'Email',
						'rules'=>'required|valid_email'

					],
					[

						'field'=>'password',
						'label'=>'Password',
						'rules'=>'required'
					],
					[

						'field'=>'mobile',
						'label'=>'Mobile',
						'rules'=>'required|exact_length[10]|numeric'
					],
					[

						'field'=>'agency_name',
						'label'=>'Agency Name',
						'rules'=>'required|min_length[5]|max_length[50]'

					],
					[
						'field'=>'agency_address',
						'label'=>'Agency Address',
						'rules'=>'required|min_length[5]|max_length[100]'

					],
					
					
	],
	// add car form validation.
	'add_car_form'=>[
					[
						'field'=>'vehicle_model',
						'label'=>'Vehicle model',
						'rules'=>'required'

					],
					[

						'field'=>'vehicle_number',
						'label'=>'Vehicle number',
						'rules'=>'required'
					],
					[

						'field'=>'seating_capacity',
						'label'=>'seating Capacity',
						'rules'=>'required|numeric'
					],
					[

						'field'=>'rent_per_day',
						'label'=>'Rent Per Day',
						'rules'=>'required'

					],
					
					
					
	],

	'rent_car_form'=>[
					[
						'field'=>'vehicle_model',
						'label'=>'Vehicle model',
						'rules'=>'required'

					],
					[

						'field'=>'vehicle_number',
						'label'=>'Vehicle number',
						'rules'=>'required'
					],
					[

						'field'=>'seating_capacity',
						'label'=>'seating Capacity',
						'rules'=>'required|numeric'
					],
					[

						'field'=>'rent_per_day',
						'label'=>'Rent Per Day',
						'rules'=>'required'

					],
					
					
					
	],
				
]
 ?>