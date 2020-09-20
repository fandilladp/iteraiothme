<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'email' => [
			'rules' => 'required|min_length[11]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'email' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Email tidak valid',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];
	//--------------------------------------------------------------------
	public $lampu = [
		'namaprojek' => [
			'rules' => 'required|min_length[3]',
		],
		'deskripsi' => [
			'rules' => 'required|max_length[250]',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
			'max_size' => '2000',
			'ext_in' => 'png,jpg,jpeg',
		]
	];

	public $lampu_errors = [
		'namaprojek' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} deskripsi terlalu banyak',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
			'max_size' => 'size gambar terlalu besar, maksimum 2 mb',
			'ext_in' => 'file yang kamu pilih bukan gambar',
		]
	];

	public $lampuupdate = [
		'namaprojek' => [
			'rules' => 'required|min_length[3]',
		],
		'deskripsi' => [
			'rules' => 'required|max_length[250]',
		]
	];

	public $lampuupdate_errors = [
		'namaprojek' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} deskripsi terlalu banyak',
		]
	];
	public $monitoring = [
		'namaprojek' => [
			'rules' => 'required|min_length[3]',
		],
		'deskripsi' => [
			'rules' => 'required|max_length[250]',
		],

		'gambar' => [
			'rules' => 'uploaded[gambar]',
			'max_size' => '2000',
			'ext_in' => 'png,jpg,jpeg',
		]
	];
	public $monitoring_errors = [
		'namaprojek' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} deskripsi terlalu banyak',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
			'max_size' => 'size gambar terlalu besar, maksimum 2 mb',
			'ext_in' => 'file yang kamu pilih bukan gambar',
		]
	];
	public $monitoringupdate = [
		'namaprojek' => [
			'rules' => 'required|min_length[3]',
		],
		'deskripsi' => [
			'rules' => 'required|max_length[250]',
		]
	];

	public $monitoringupdate_errors = [
		'namaprojek' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} deskripsi terlalu banyak',
		]
	];
}
