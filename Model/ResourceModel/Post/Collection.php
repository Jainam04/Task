<?php
namespace Js\CRUD\Model\ResourceModel\Post;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
        /**
         * Define resource model
         *
         * @return void
         */
        protected function _construct()
        {
                $this->_init('Js\CRUD\Model\Post', 'Js\CRUD\Model\ResourceModel\Post');
        }
}
?>