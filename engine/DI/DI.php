<?php 
namespace Engine\DI;
class DI 
{
    
    private $container = array();

    
	public function get($key) {
		return $this->has($key);
	}
    
    /**
     * Summary of set
     * @param mixed $key
     * @param mixed $value
     * @return \engine\DI\DI
     */
	public function set($key, $value) :self {
		$this->container[$key] = $value;
        return $this;
	}
    public function has($key) {
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }
}
?>