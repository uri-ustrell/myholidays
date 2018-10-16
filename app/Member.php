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

	public function getMem($session,$id){
		if ( !$session->has('mems') ){
			$this->createDummyMems($session);
		}

		foreach ($session->get('mems') as $key => $mem) {
			if ($mem[$key]['id'] == $id) { return $mem[$key]; }
		}

		return array('id'=>'not found','name'=>'unknown member');
	}

	public function addMem($session, $newMem = []){
		if ( !$session->has('mems') ){
			$this->createDummyMems($session);
		}

		$mems = $session->get('mems');
		array_push($mems, $newMem);
		$session->put('mems',$mems);
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