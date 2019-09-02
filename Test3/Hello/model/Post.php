<?php
namespace Test3\Hello\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'test3_hello_post';

	protected $_cacheTag = 'test3_hello_post';

	protected $_eventPrefix = 'test3_hello_post';

	protected function _construct()
	{
		$this->_init('Test3\Hello\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}