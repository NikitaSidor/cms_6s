<?php 
namespace Cms_6s\Model\MenuItem;

use Engine\Core\Database\ActiveRecord;

class MenuItem
{
    use ActiveRecord;
    protected $table = 'menu_item';
    protected int $id;
    protected string $name;
    protected string $link;
    protected string $parent;
    protected string $position;

	/**
	 * @return 
	 */
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

	/**
	 * @return 
	 */
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

	/**
	 * @return 
	 */
	public function getParent(): string {
		return $this->parent;
	}
	
	/**
	 * @param  $parent 
	 * @return self
	 */
	public function setParent(string $parent): self {
		$this->parent = $parent;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getLink(): string {
		return $this->link;
	}
	
	/**
	 * @param  $link 
	 * @return self
	 */
	public function setLink(string $link): self {
		$this->link = $link;
		return $this;
	}

	/**
	 * @return
	 */
	public function getPosition(): string {
		return $this->position;
	}
	
	/**
	 * @param  $position 
	 * @return self
	 */
	public function setPosition(string $position): self {
		$this->position = $position;
		return $this;
	}
}