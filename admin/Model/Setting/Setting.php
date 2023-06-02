<?php 
namespace Admin\Model\Setting;

use Engine\Core\Database\ActiveRecord;

class Setting
{
    use ActiveRecord;
    protected $table = 'setting';
    public int $id;
    public string $name;
    public string $key_field;
    public string $value;

	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param  $name 
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}
    public function getKeyField(): string {
		return $this->value;
	}
	
	/**
	 * @param  $value 
	 * @return self
	 */
	public function setKeyField(string $value): self {
		$this->value = $value;
		return $this;
	}
    public function getValue(): string {
		return $this->value;
	}
	
	/**
	 * @param  $value 
	 * @return self
	 */
	public function setValue(string $value): self {
		$this->value = $value;
		return $this;
	}
}