<?php
	PerchUI::set_subnav([
		[
			'page'=>[
					'perch_forms',
					'perch_forms/edit',
					'perch_forms/delete',
					'perch_forms/settings',
					'perch_forms/responses',
					'perch_forms/responses/detail',
					'perch_forms/responses/delete'
				], 
			'label'=>'Forms'
		]
	], $CurrentUser);