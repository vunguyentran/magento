<?php
namespace Vu\Blog\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'vu_blog_post';

	protected $_cacheTag = 'vu_blog_post';

	protected $_eventPrefix = 'vu_blog_post';
        const NOROUTE_PAGE_ID = 'no-route';

        /**#@+
         * Page's Statuses
         */
        const STATUS_ENABLED = 1;
        const STATUS_DISABLED = 0;

	protected function _construct()
	{
		$this->_init('Vu\Blog\Model\ResourceModel\Post');
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
