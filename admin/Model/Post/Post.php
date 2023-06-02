<?php 
namespace Admin\Model\Post;

use Engine\Core\Database\ActiveRecord;

class Post
{
    use ActiveRecord;
    protected $table = 'post';
    public int $id;
    public string $title;
    public string $content;
    public $date_create;

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

	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param  $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}
    public function getContent(): string {
		return $this->content;
	}
	
	/**
	 * @param  $content 
	 * @return self
	 */
	public function setContent(string $content): self {
		$this->content = $content;
		return $this;
	}
    public function getDataCreate() {
		return $this->date_create;
	}
	
	/**
	 * @param  $date_create 
	 * @return self
	 */
	public function setDataCreate(int $date_create): self {
		$this->date_create = $date_create;
		return $this;
	}
}