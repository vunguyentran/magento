<?php
namespace Vu\Blog\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
        protected $_eventPrefix = 'vu_blog_post_collection';
	protected $_eventObject = 'post_collection';
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Vu\Blog\Model\Post', 'Vu\Blog\Model\ResourceModel\Post');
	}
        
}
