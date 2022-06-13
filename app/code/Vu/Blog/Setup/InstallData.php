<?php
namespace Vu\Blog\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
		
        $tableName = $setup->getTable('vu_blog_post');
		if ($setup->tableExists('vu_blog_post')) {
			$data = [
					[
						'name' => 'Hello World',
						'url_key' => 'hello-world',
						'post_content' => 'Speeding up your Magento 2 website is very important, it affects user experience. Customers will feel satisfied when your site responds quickly',
						'tags' => 'helloworld',
						'status' => 1,
						'featured_image' => 'google.com',
						'created_at' => '',
						'updated_at' => ''
					]
				];
			foreach ($data as $item) {
					//Insert data
					$setup->getConnection()->insertForce($tableName, $item);
				}
		}
		/*
		$setup->getConnection()->insertForce(
            $setup->getTable('mageplaza_helloworld_post'),
            ['name' => 0, 'url_key' => 'NOT LOGGED IN', 'post_content' => 3, 'tags' => '', 'status' => 1, 'featured_image' => '', 'created_at' => '', 'updated_at' => '']
        );
		*/
        $setup->endSetup();
    }
}