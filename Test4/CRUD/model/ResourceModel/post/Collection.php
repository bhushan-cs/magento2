<?php
namespace Test4\CRUD\Model\ResourceModel\Post;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
        /**
         * Define resource model
         *
         * @return void
         */
        protected function _construct()
        {
                $this->_init('Test4\CRUD\Model\Post', 'Test4\CRUD\Model\ResourceModel\Post');
        }
}