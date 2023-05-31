<?php 
namespace Admin\Model\User;
use Engine\Core\Database\ActiveRecord;

class User
{
	use ActiveRecord;
    protected $table = 'user';
    public $id;
    public $email;
    public $password;
    public $role;
    public $hash;
    public $date_reg;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * @param mixed $password 
	 * @return self
	 */
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRole() {
		return $this->role;
	}
	
	/**
	 * @param mixed $role 
	 * @return self
	 */
	public function setRole($role): self {
		$this->role = $role;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getHash() {
		return $this->hash;
	}
	
	/**
	 * @param mixed $hash 
	 * @return self
	 */
	public function setHash($hash): self {
		$this->hash = $hash;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDateReg() {
		return $this->date_reg;
	}
	
	/**
	 * @param mixed $date_reg 
	 * @return self
	 */
	public function setDateReg($date_reg): self {
		$this->date_reg = $date_reg;
		return $this;
	}
}
?>