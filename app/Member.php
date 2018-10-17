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

	public function getMem($session,$name){
		if ( !$session->has('mems') ){
			$this->createDummyMems($session);
		}
		$mems = $session->get('mems');
		//return $mems;
		foreach ($mems as $mem) {
			if (strtolower(str_replace('-',' ',$mem['name'])) == $name) {
				return $mem;
			}
		}

		return array('id'=>'not found','name'=>'unknown member');
	}

	public function addMemAdmin($session, $newMem = []){
		if ( !$session->has('mems') ){
			$this->createDummyMems($session);
		}

		$mems = $session->get('mems');
		array_push($mems, $newMem);
		$session->put('mems',$mems);
	}

	public function editMem($session, $changeMem = []) {
		$mems = $session->get('mems');
		foreach ($mems as $key => $mem) {
			if ($mem[$key]['id'] == $changeMem['id']) { 
				$mem[$key]['name'] = $changeMem['name'];
				$mem[$key]['email'] = $changeMem['email'];
				if ( isset($mem[$key]['department']) ) $mem[$key]['department'] = $changeMem['department'];
				if ( isset($mem[$key]['hired']) )  $mem[$key]['hired'] = $changeMem['hired'];
				if ( isset($mem[$key]['vacations']) )  $mem[$key]['vacations'] = $changeMem['vacations'];
			}
		}
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