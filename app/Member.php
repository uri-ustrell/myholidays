<?php 

namespace App;

class Member {
	//attributes

	//methods
	public function getMembers($session){
		//checking if fake db (session) have data
		if ( !$session->has('mems') ){
			//if NOT, lets put some dummie members
			$this->createDummyMems($session);
		}
		return $session->get('mems');
	}

	private function createDummyMems($session){
		$mems = [
			[
				'id'=>'1',
				'name'=>'Cloe Patra',
				'email'=>'Cloe@patra.com',
				'department'=> ['little Tyrans', 'Tyrans'],
				'hired'=>'15/05/1974',
				'vacations'=>'23'
			],
			[
				'id'=>'2',
				'name'=>'Carlo Magno',
				'email'=>'Carloe@magno.com',
				'department'=> ['little Tyrans', 'Tyrans'],
				'hired'=>'28/02/2015',
				'vacations'=>'23'
			],
			[
				'id'=>'3',
				'name'=>'Cesar Victus',
				'email'=>'Cesar@victus.com',
				'department'=> ['semi Tyrans', 'Tyrans'],
				'hired'=>'05/11/2003',
				'vacations'=>'23'
			]
		];

		$session->put('mems',$mems);
	}
}